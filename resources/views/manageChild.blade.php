<ul>
    @foreach($childs as $child)
    <li title="{{ $child->title }}">
        <span class="detail1">
            <div class="d-flex align-items-center">
                <div class="dot2 d-flex align-items-center">
                    @if(count($child->childs))
                    <i class="fa fa-plus detail1 iicon" aria-hidden="true"></i>
                    @endif
                </div>
                <div class="ctitle list d-flex justify-content-between align-items-center">
                    {{ $child->title }}
                    <div class="d-flex">
                        <i class="fa fa-edit mx-2 sedit"></i>
                        <i class="fa fa-times-circle mx-2 delete"></i>
                    </div>
                </div>
                <div class="cid d-none">{{ $child->id }}</div>
            </div>
        </span>

        @if(count($child->childs))
        @include('manageChild',['childs' => $child->childs])
        @endif
    </li>
    @endforeach
</ul>