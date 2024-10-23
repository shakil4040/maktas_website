<?php

namespace App\Http\Controllers;

use App\Models\Easy;
use App\Models\Tree;
use App\Models\Yaad;
use App\Mail\AddMail;
use App\Models\Mahol;
use App\Models\Detail;
use App\Models\Comment;
use App\Models\Course;
use App\Models\Tafseer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Manage categories based on the user type (temporary member, permanent member, or admin).
     * - Temporary members can view only their approved categories.
     * - Permanent members can view all their categories.
     * - Admins can view all categories.
     * 
     * Includes authentication checks and error handling via try-catch to manage any unexpected issues.
     * 
     * @return \Illuminate\Http\Response|\Illuminate\View\View
     */
    public function manageCategory()
    {
        try {
            // Initialize $allCategories to avoid undefined variable error
            $allCategories = [];
            $categories = [];

            // Get authenticated user
            $user = Auth::user();
            // Ensure the user is authenticated
            if (!$user) {
                return redirect('login');
            }
            // Check if the user is a member
            if ($user->isMember()) {
                // Check if the member is approved (permanent) or not approved (temporary)
                if ($user->userable->is_approve == 0) {
                    $temporaryMember = $user->userable->name;
                    $categories = Tree::where([
                        ['parent_id', '=', 0],
                        ['added_by', '=', $temporaryMember],
                        ['status', '=', 'Approved'],
                    ])->orderBy('id', 'asc')->get();
                } elseif ($user->userable->is_approve == 1) {
                    $permanentMember = $user->userable->name;
                    $categories = Tree::where([
                        ['parent_id', '=', 0],
                        ['added_by', '=', $permanentMember]
                    ])->orderBy('id', 'asc')->get();
                }
            } 
            // If the user is an admin
            else if ($user->isAdmin()) {
                $categories = Tree::whereNull('parent_id')->orderBy('id', 'asc')->get();
                $allCategories = Tree::pluck('title', 'id')->all();
            }
            // Return the view with the categories and allCategories (admin case)
            return view('categoryTreeview', compact('categories', 'allCategories'));
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function educationist()
    {
        $categories = Tree::where('parent_id', '=', 0)->orderBy('id', 'asc')->get();
        $allCategories = Tree::pluck('title', 'id')->all();
        return view('educationist', compact('categories', 'allCategories'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request, Comment $comment)
    {
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        } else {
            $input = $request->all();
            $comment->create([
                'comment' => $input['comment'],
                'user_id' => $input['userId'],
                'tree_id' => $input['treeId'],
            ]);
            return response()->json(['success' => 'رائے  کا اندراج ہو گیا ہے']);
        }
    }
    /**
     * Add a new topic to the tree and associated details.
     *
     * This function validates the incoming request, creates a new entry in the 
     * Tree model, and also creates related entries in the Detail, Easy, Yaad, 
     * and Mahol models.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tree $tree
     * @return \Illuminate\Http\JsonResponse
     */
    public function addTopic(Request $request, Tree $tree)
    {
        try {
            // Ensure the user is authenticated
            $user = Auth::user();
            if (!$user) {
                return redirect('login');
            }

            // Validate the request
            $validatedData = $request->validate([
                'title' => 'required',
                'detail' => 'required',
                'hawala' => 'required',
                'easy' => 'required',
                'sunana' => 'nullable',
            ]);

            // Check if the user is a member
            if ($user->isMember()) {
                // Check if the member is approved (permanent) or not approved (temporary)
                if ($user->userable->is_approve == 0) {
                    $status = 'Pending';
                } elseif ($user->userable->is_approve == 1) {
                    $status = '';
                }
                // Determine the serial number
                $serialNumber = $tree->max('id') + 1;

                // Create the new Tree entry
                $treeEntry = $tree->create([
                    'title' => $request->title,
                    'id' => $serialNumber,
                    'parent_id' => 0, // Default parent_id to 0 if not provided
                    'status' => $status,
                    'added_by' => $user->userable->name,
                ]);

                // Create related entries for detail, easy, yaad, and mahol
                $treeEntry->detail()->create(['detail' => $validatedData['detail']]);
                $treeEntry->easy()->create(['easy' => $validatedData['easy']]);
                $treeEntry->yaad()->create();
                $treeEntry->mahol()->create(['sunana' => $validatedData['sunana'] ?? null]);

                return response()->json(['success' => 'نئے عنوان کا اندراج ہو گیا ہے']);
            } else {
                return response()->json(['error' => 'Unauthorized access'], 401);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'An error occurred: ' . $e->getMessage()], 500);
        }
    }

    public function addCategory(Request $request, Tree $tree)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'id' => 'unique:trees'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        } else {
            $input = $request->all();
            $input['id'] = empty($input['id']) ? 0 : $input['id'];
            $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
            $tree->create([
                'id' => $input['id'],
                'title' => $input['title'],
                'parent_id' => $input['parent_id'],
            ]);

            $detail = new Detail([
                'id' => $input['id'],
                'abrar_id' => $input['abrar_id'],
                'asif_id' => $input['asif_id'],
                'age' => $input['age'],
                'age_sr' => $input['age_sr'],
                'course_no' => $input['course_no'],
                'detail' => $input['detail'],
            ]);
            $detail->save();

            $easy = new Easy([
                'id' => $input['id'],
                'easy' => $input['easy'],
                'mukhatab' => $input['mukhatab'],
                'rafe_ishkal' => $input['rafe_ishkal'],
                'qaida' => $input['qaida'],
                'rahe_adal' => $input['rahe_adal'],
                'husool' => $input['husool'],
                'tamheed_khas' => $input['tamheed_khas'],
                'area' => $input['area'],
                'hukam' => $input['hukam'],
                'hasiat' => $input['hasiat'],
                'shoba' => $input['shoba'],
                'class' => $input['class'],
                'jins' => $input['jins'],
                'zamana' => $input['zamana'],
                'taleem' => $input['taleem'],
                'amli_mashq' => $input['amli_mashq'],
                'taluq' => $input['taluq'],
                'muharik' => $input['muharik'],
            ]);
            $easy->save();

            $yaad = new Yaad([
                'id' => $input['id'],
                'yad_dehani' => $input['yad_dehani'],
                'kitni_takrar' => $input['kitni_takrar'],
                'revision' => $input['revision'],
                'ahwal' => $input['ahwal'],
                'shaz' => $input['shaz'],
                'hawala' => $input['hawala'],
                'government_ref' => null,
                //  $input['government_ref'],
            ]);
            $yaad->save();
            $mahol = new Mahol([
                'sunana' => $input['sunana'],
                'kehalwana' => $input['kehalwana'],
                'dekhana' => $input['dekhana'],
                'mashq' => $input['mashq'],
                'batana' => $input['batana'],
                'sikhana' => $input['sikhana'],
                'adat' => $input['adat'],
                'samjhana' => $input['samjhana'],
                'parhana' => $input['parhana'],
                // 'status'=> $input['status'],
            ]);
            $mahol->save();
            return response()->json(['success' => 'نئے عنوان کا اندراج ہو گیا ہے']);
        }
    }

    public function update(Request $request, $id)
    {
        $tree = Tree::find($id);
        $detail = Detail::find($id);
        $easy = Easy::find($id);
        $yaad = Yaad::find($id);
        $mahol = Mahol::find($id);
        $validator = Validator::make($request->all(), [
            'title' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        } else {
            $input = $request->all();
            // $input['id'] = empty($input['id']) ? 0 : $input['id'];
            $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
            $tree->update($input);

            $detail->update($input);


            $easy->update($input);

            $yaad->update($input);
            $mahol->update($input);
            return response()->json(['success' => ' عنوان تبدیل ہو گیا ہے']);
        }
    }

    public function destroy($id)
    {
        $tree = Tree::find($id);
        $detail = Detail::find($id);
        $easy = Easy::find($id);
        $yaad = Yaad::find($id);
        $mahol = Mahol::find($id);

        $tree->delete();
        $detail->delete();
        $easy->delete();
        $yaad->delete();
        if ($mahol != null) {
            $mahol->delete();
        }

        return response()->json(['deletemsg' => ' عنوان ختم ہو گیا ہے']);
    }

    public function test(Request $request, $id)
    {
        $tree = Tree::find($id);
        $detail = Detail::find($id);
        $easy = Easy::find($id);
        $yaad = Yaad::find($id);
        $mahol = Mahol::find($id);
        $tafseer = Tafseer::find($id);
        $admin = $request->admin;
        $user = $request->user;
        $userId = $request->userId;
        $memberId = $request->memberId;
        if ($admin != null || $memberId != null) {
            return view('treeviewPart', compact('tree', 'tafseer', 'detail', 'easy', 'yaad', 'admin', 'user', 'userId', 'memberId', 'mahol'));
        } else {
            return view('treeviewUser', compact('tree', 'tafseer', 'detail', 'easy', 'yaad', 'admin', 'user', 'userId', 'memberId', 'mahol'));
        }
    }

    public function edit($id)
    {
        $tree = Tree::find($id);
        $detail = Detail::find($id);
        $easy = Easy::find($id);
        $yaad = Yaad::find($id);
        $mahol = Mahol::find($id);
        $allCategories = Tree::pluck('title', 'id')->all();
        return view('edit', compact('tree', 'detail', 'easy', 'yaad', 'allCategories', 'mahol'));
    }
    public function comment(Request $request)
    {
        $treeTitle = $request->treeTitle;
        $treeId = $request->treeId;
        $comments = Comment::where('tree_id', '=', $treeId)->get();
        return view('comment', compact('comments', 'treeId', 'treeTitle'));
    }
    public function delete(Request $request, $id)
    {
        $token = $request->token;
        $memberName = $request->memberName;
        $memberId = $request->memberId;
        $title = $request->title;
        return view('confirmation', compact('id', 'token', 'memberId', 'memberName', 'title'));
    }
    public function editing(Request $request, $id)
    {
        $memberName = $request->memberName;
        $memberId = $request->memberId;
        $title = $request->title;
        return view('Editing', compact('id', 'memberId', 'memberName', 'title'));
    }
    public function AddMail(Request $request)
    {
        Mail::to('example@example.com')->send(new AddMail($request));
        return;
    }

    public function child($cid)
    {
        $childs = Tree::where('parent_id', '=', $cid)->get();
        return view('manageChild', compact('childs', 'cid'));
    }
    public function nav($id)
    {
        $tab = Tree::find($id);
        $id = $tab['id'];
        $parenId = $tab['parent_id'];
        $parentTitle = Tree::where('id', '=', $parenId)->pluck('title')->toArray();
        $parentPid = Tree::where('id', '=', $parenId)->get()->toArray();
        $parent2Title = null;
        $parent3Title = null;
        $parent4Title = null;
        $parent5Title = null;
        $parent6Title = null;
        $parent7Title = null;
        $parent8Title = null;
        if ($parentTitle != []) {
            $parentPid = Tree::where('id', '=', $parenId)->get()->toArray();
            $one = $parentPid[0]['parent_id'];
            $parent2Title = Tree::where('id', '=', $one)->pluck('title')->toArray();
            if ($parent2Title != []) {
                $parentPid2 = Tree::where('id', '=', $one)->get()->toArray();
                $two = $parentPid2[0]['parent_id'];
                $parent3Title = Tree::where('id', '=', $two)->pluck('title')->toArray();
                if ($parent3Title != []) {
                    $parentPid3 = Tree::where('id', '=', $two)->get()->toArray();
                    $three = $parentPid3[0]['parent_id'];
                    $parent4Title = Tree::where('id', '=', $three)->pluck('title')->toArray();
                    if ($parent4Title != []) {
                        $parentPid4 = Tree::where('id', '=', $three)->get()->toArray();
                        $four = $parentPid4[0]['parent_id'];
                        $parent5Title = Tree::where('id', '=', $four)->pluck('title')->toArray();
                        if ($parent5Title != []) {
                            $parentPid5 = Tree::where('id', '=', $four)->get()->toArray();
                            $five = $parentPid5[0]['parent_id'];
                            $parent6Title = Tree::where('id', '=', $five)->pluck('title')->toArray();
                            if ($parent6Title != []) {
                                $parentPid6 = Tree::where('id', '=', $five)->get()->toArray();
                                $six = $parentPid6[0]['parent_id'];
                                $parent7Title = Tree::where('id', '=', $six)->pluck('title');
                            }
                        }
                    }
                }
            }
        }
        $data = [
            'id' => $id,
            'parentTitle' => $parentTitle,
            'parent2Title' => $parent2Title,
            'parent3Title' => $parent3Title,
            'parent4Title' => $parent4Title,
            'parent5Title' => $parent5Title,
            'parent6Title' => $parent6Title,
            'parent7Title' => $parent7Title,
            'parent8Title' => $parent8Title,
        ];
        return $data;
    }
    public function getChild($id, $level, $title)
    {
        $tree = Tree::find($id);
        $childs = $tree->childs;
        $navigation = urldecode(base64_decode($title));
        $level += 1;
        return view(
            'manageChild',
            compact('childs', 'level', 'navigation')
        );
    }
    public function getChild2($id, $level, $title)
    {
        $tree = Course::find($id);
        $childs = $tree->childs;
        $navigation = urldecode(base64_decode($title));
        $level += 1;
        return view(
            'manageChild2',
            compact('childs', 'level', 'navigation')
        );
    }

    /**
     * Search for categories based on the provided search parameters.
     *
     * This function retrieves all records from the `Tree` model that match the
     * specified title search criteria.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\View\View
     */
    public function searchCategory(Request $request): \Illuminate\View\View
    {
        $searchParams = trim($request->input('searchParams', ''));
        $mapping = [];
        $treeLastChildrenRecords = null;
        if(!empty($searchParams)) {
            $filteredRecords = Tree::where('title','like','%'.$searchParams.'%');
            $treeLastChildrenRecords = $filteredRecords->with('parent')->whereNotIn('parent_id',$filteredRecords->pluck('id'))->paginate(10);
            if($treeLastChildrenRecords->count() > 0) {
                $this->getParentRecord($treeLastChildrenRecords, $mapping);
            }
        }
        return view('showCategory', compact('mapping', "treeLastChildrenRecords"));
    }

    /**
     * @param $tree
     * @param $mapping
     * @return void
     */
    private function getParentRecord($tree, &$mapping): void
    {
        foreach($tree as $node) {
            if(!is_null($node)) {
                $node->level = $node->ancestors()->count();
//                if($node->ancestors()->count() > 0) {
//                    $parents = [];
//                    foreach($node->ancestors() as $key => $ancestor) {
//                        $ancestor->level = $node->ancestors()->count() - ($key +1);
//                        $parents[] = $ancestor;
//                    }
//                    $mapping = array_merge($mapping, array_reverse($parents));
//                }
                    $mapping[] = $node;
            }

        }
    }
}
