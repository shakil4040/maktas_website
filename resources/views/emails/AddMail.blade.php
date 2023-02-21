@component('mail::message')
# Addition Request
{{$request->parent_id}} <br>
{{$request->qaida}} <br>
{{$request->title}} <br>
{{$request->taleem}} <br>
{{$request->rahe_adal}} <br>
{{$request->detail}} <br>
{{$request->amli_mashq}} <br>
{{$request->hukam}} <br>
{{$request->hawala}} <br>
{{$request->yad_dehani}} <br>
{{$request->mukhatab}} <br>
{{$request->easy}} <br>
{{$request->kitni_takrar}} <br>
{{$request->jins}} <br>
{{$request->rafe_ishkal}} <br>
{{$request->revision}} <br>
{{$request->hasiat}} <br>
{{$request->husool}} <br>
{{$request->shaz}} <br>
{{$request->shoba}} <br>
{{$request->tamheed_khas}}  <br>
{{$request->age_sr}} <br>
{{$request->age}} <br>
{{$request->area}} <br>
{{$request->course_no}} <br>
{{$request->class}} <br>
{{$request->muharik}} <br>
{{$request->sr}} <br>
{{$request->ahwal}} <br>
{{$request->sunana}} <br>
{{$request->kehalwana}} <br>
{{$request->dekhana}} <br>
{{$request->abrar_id}} <br>
{{$request->zamana}} <br>
{{$request->mashq}} <br>
{{$request->sikhana}} <br>
{{$request->asif_id}} <br>
{{$request->taluq}} <br>
{{$request->adat}} <br>
{{$request->samjhana}} <br>
{{$request->parhana}} <br>
{{$request->status}} <br>


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

جزاک اللہ,<br>
{{$request->member_name}} <br>
{{ 'ID:' . $request->member_id }}
@endcomponent
