<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Easy;
use App\Models\Tree;
use App\Models\Yaad;
use App\Models\Detail;
use App\Models\Mahol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function manageCategory()
    {
        $categories = Tree::where('parent_id', '=', 0)->orderBy('sr','asc')->get();
        $allCategories = Tree::pluck('title','sr')->all();
        return view('categoryTreeview',compact('categories','allCategories'));
    }
    public function educationist()
    {
        $categories = Tree::where('parent_id', '=', 0)->orderBy('sr','asc')->get();
        $allCategories = Tree::pluck('title','sr')->all();
        return view('educationist',compact('categories','allCategories'));
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function addComment(Request $request,Comment $comment){
        $validator = Validator::make($request->all(), [
            'comment' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else {
            $input = $request->all();
            $comment->create([
                'comment'=> $input['comment'],
                'user_id'=> $input['userId'],
                'tree_id'=> $input['treeId'],
            ]);
            return response()->json(['success'=>'رائے  کا اندراج ہو گیا ہے']);
        }
    }

    public function addCategory(Request $request,Tree $tree)
    {
        $validator = Validator::make($request->all(), [
        		'title' => 'required',
                'sr' => 'unique:trees'
        	]);
        
        if ($validator->fails()) {
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else {
        $input = $request->all();
        $input['id'] = empty($input['id']) ? 0 : $input['id'];
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $tree->create([
            'id'=> $input['id'],
            'sr'=> $input['sr'],
            'title'=> $input['title'],
            'parent_id'=> $input['parent_id'],
        ]);

        $detail = new Detail([
            'id'=> $input['id'],
            'abrar_id'=> $input['abrar_id'],
            'asif_id'=> $input['asif_id'],
            'age'=> $input['age'],
            'age_sr'=> $input['age_sr'],
            'course_no'=> $input['course_no'],
            'detail'=> $input['detail'],
        ]);
        $detail->save();

        $easy = new Easy([
            'id'=> $input['id'],
            'easy'=>$input['easy'],
            'mukhatab'=> $input['mukhatab'],
            'rafe_ishkal'=> $input['rafe_ishkal'],
            'qaida'=> $input['qaida'],
            'rahe_adal'=> $input['rahe_adal'],
            'husool'=> $input['husool'],
            'tamheed_khas'=> $input['tamheed_khas'],
            'area'=> $input['area'],
            'hukam'=> $input['hukam'],
            'hasiat'=> $input['hasiat'],
            'shoba'=> $input['shoba'],
            'class'=> $input['class'],
            'jins'=> $input['jins'],
            'zamana'=> $input['zamana'],
            'taleem'=> $input['taleem'],
            'amli_mashq'=> $input['amli_mashq'],
            'taluq'=> $input['taluq'],
            'muharik'=> $input['muharik'],
        ]);
        $easy->save();

        $yaad = new Yaad([
            'id'=> $input['id'],
            'yad_dehani'=>$input['yad_dehani'],
            'kitni_takrar'=> $input['kitni_takrar'],
            'revision'=> $input['revision'],
            'ahwal'=> $input['ahwal'],
            'shaz'=> $input['shaz'],
            'hawala'=> $input['hawala'],
            'government_ref'=> $input['government_ref'],
        ]);
        $yaad->save();
        $mahol = new Mahol([
            'sunana'=> $input['sunana'],
            'kehalwana'=>$input['kehalwana'],
            'dekhana'=> $input['dekhana'],
            'mashq'=> $input['mashq'],
            'batana'=> $input['batana'],
            'sikhana'=> $input['sikhana'],
            'adat'=> $input['adat'],
            'samjhana'=> $input['samjhana'],
            'parhana'=> $input['parhana'],
        ]);
        $mahol->save();
        return response()->json(['success'=>'نئے عنوان کا اندراج ہو گیا ہے']);
    }
     
    }

    public function update(Request $request,$id)
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
            return response()->json(['error'=>$validator->errors()->all()]);
        }
        else {
        $input = $request->all();
        // $input['id'] = empty($input['id']) ? 0 : $input['id'];
        $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];
        $tree->update($input);

       $detail->update($input);
       

        $easy->update($input);

        $yaad->update($input);
        $mahol->update($input);
        return response()->json(['success'=>' عنوان تبدیل ہو گیا ہے']);
    }
     
    }

    public function destroy($id) {
        $tree = Tree::find($id);
        $detail = Detail::find($id);
        $easy = Easy::find($id);
        $yaad = Yaad::find($id);
        $mahol = Mahol::find($id);

        $tree->delete();
        $detail->delete();
        $easy->delete();
        $yaad->delete();
        $mahol->delete();

        return response()->json(['deletemsg'=>' عنوان ختم ہو گیا ہے']);
    }

    public function test(Request $request,$id){
        $tree = Tree::find($id);
        $detail = Detail::find($id);
        $easy = Easy::find($id);
        $yaad = Yaad::find($id);
        $mahol = Mahol::find($id);
        $admin = $request->admin;
        $user = $request->user;
        $userId = $request->userId;
        $memberId = $request->memberId;
        if($admin == null)
        {
            return view('treeviewUser',compact('tree','detail','easy','yaad','admin','user','userId','memberId','mahol')); 
        }
        else {
        return view('treeviewPart',compact('tree','detail','easy','yaad','admin','user','userId','memberId','mahol'));
        }
    }

    public function edit($id){
        $tree = Tree::find($id);
        $detail = Detail::find($id);
        $easy = Easy::find($id);
        $yaad = Yaad::find($id);
        $mahol = Mahol::find($id);
        $allCategories = Tree::pluck('title','sr')->all();
        return view('edit',compact('tree','detail','easy','yaad','allCategories','mahol'));
    }
    public function comment(Request $request){
        $treeTitle = $request->treeTitle;
        $treeId = $request->treeId;
        $comments = Comment::where('tree_id','=',$treeId)->get();
        return view('comment',compact('comments','treeId','treeTitle'));
    }
    public function delete($id){
        return view('confirmation',compact('id'));
    }

    public function child($cid) 
    {
        $childs = Tree::where('parent_id','=', $cid)->get();
        return view('manageChild',compact('childs','cid'));
    }
    public function nav($id) 
    {
        $tab = Tree::find($id);
        $sr = $tab['sr'];
        $parenId = $tab['parent_id'];
        $parentTitle = Tree::where('sr','=',$parenId)->pluck('title')->toArray();
        $parentPid = Tree::where('sr','=',$parenId)->get()->toArray();
        $parent2Title = null;
        $parent3Title = null;
        $parent4Title = null;
        $parent5Title = null;
        $parent6Title = null;
        if($parentTitle != []){
            $parentPid = Tree::where('sr','=',$parenId)->get()->toArray();
            $one = $parentPid[0]['parent_id'];
            $parent2Title = Tree::where('sr','=',$one)->pluck('title')->toArray();
        if($parent2Title != []){
            $parentPid2 = Tree::where('sr','=',$one)->get()->toArray();
            $two = $parentPid2[0]['parent_id'];
            $parent3Title = Tree::where('sr','=',$two)->pluck('title')->toArray();
            if($parent3Title != []){
            $parentPid3 = Tree::where('sr','=',$two)->get()->toArray();
                $three = $parentPid3[0]['parent_id'];
                $parent4Title = Tree::where('sr','=',$three)->pluck('title')->toArray();
                if($parent4Title != []){
                    $parentPid4 = Tree::where('sr','=',$three)->get()->toArray();
                        $four = $parentPid4[0]['parent_id'];
                        $parent5Title = Tree::where('sr','=',$four)->pluck('title')->toArray();
                        if($parent5Title != []){
                            $parentPid5 = Tree::where('sr','=',$four)->get()->toArray();
                                $five = $parentPid5[0]['parent_id'];
                                $parent6Title = Tree::where('sr','=',$five)->pluck('title');
                            }
                    }
            }
        }
    }
            $data = [
                'parentTitle' => $parentTitle,
                'parent2Title' => $parent2Title,
                'parent3Title' => $parent3Title,
                'parent4Title' => $parent4Title,
                'parent5Title' => $parent5Title,
                'parent6Title' => $parent6Title,
            ];
            return $data;
    }
}