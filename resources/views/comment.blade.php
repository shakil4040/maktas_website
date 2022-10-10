<span class="card card-success detail3" id="araa">
    <div class="d-flex justify-content-center my-1 ftitle">
        <div class="title unwan py-1 px-5" title="{{ $treeTitle }}">{{ $treeTitle }}</div>
    </div>
    <div class="">
        <table class="table text-center">
            <thead class="thead-light">
                <tr>
                    <th scope="col">صارف کا نمبر شمار</th>
                    <th scope="col">نام</th>
                    <th scope="col">ای میل</th>
                    <th scope="col">رائے</th>
                </tr>
            </thead>
            <tbody>
            @foreach($comments as $comment)
                <tr>
                    <th scope="row">{{$comment->user->id}}</th>
                    <td>{{$comment->user->name}}</td>
                    <td>{{$comment->user->email}}</td>
                    <td>{{$comment->comment}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <button class="bbuttons cbutton my-1 ml-3" type="button" id="coclose">بند کریں</button>
</span>
<script src="/js/treeviewPart.js"></script>