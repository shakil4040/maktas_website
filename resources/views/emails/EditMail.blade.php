@component('mail::message')
# Edit Request

{{$request->title}} <br>
{{$request->reason}}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

جزاک اللہ,<br>
{{$request->memberName}} <br>
{{ 'ID:' . $request->memberId }}
@endcomponent
