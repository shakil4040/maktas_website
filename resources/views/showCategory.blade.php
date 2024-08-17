<ul>
    @foreach($matchingMenus as $child)
        <li title="{{ $child->title }}" class="list_color level-1">
            <span class="detail1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <div class="dot2 d-flex align-items-center">
                                @if(count($child->childs))
                                    <i class="fa fa-plus detail1 iicon " id="{{ $child->id }}"
                                    aria-hidden="true" onclick="getchilds()"></i>
                                @endif
                            </div>
                            <div id="{{ $child->title}}" class="scroll-topics ctitle child list d-flex justify-content-between align-items-center" onclick="setTitle
                                (this)">
                                {{ $child->title }}
                                @auth('admin')
                                    @if(count($child->childs) == null)
                                        <div class="d-flex">
                                            <i class="fa fa-edit mx-2 sedit"></i>
                                            <i class="fa fa-times-circle mx-2 delete"></i>
                                        </div>
                                        @endif
                                        <div class="d-flex">
                                        <i class="fa fa-edit mx-2 tedit" style="color:orange;"></i>
                                    </div>
                                @endauth
                                @auth('member')
                                    @if(count($child->childs) == null)
                                        <div class="d-flex">
                                    <i class="fa fa-edit mx-2 sedit"></i>
                                    <i class="fa fa-times-circle mx-2 delete"></i>
                                </div>
                                    @endif
                                @endauth
                            </div>
                            <div class="cid d-none">{{ $child->id }}</div>
                            <div class="navigation d-none">{{$child->title }}</div>
                            <div class="sr d-none">{{ $child->sr }}</div>
                            <div class="parentId d-none">{{ $child->parent_id }}</div>
                            <div class="admin d-none">{{ auth('admin')->user() }}</div>
                            <div class="admin d-none">{{ auth('admin')->user() }}</div>
                            <div class="user d-none">{{ auth()->user() }}</div>
                            @auth()
                                <div class="userId d-none">{{ auth()->user()->id }}</div>
                            @endauth
                        </div>
                    </div>
                </div>
            </span>
            @if(count($child->childs))
                <div class="child-div" id="child-{{ $child->id }}">
                </div>
            @endif
        </li>     
    @endforeach
</ul>
