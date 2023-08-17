<ul>
    @foreach($childs as $child)
        <li class="title={{ $child->title }}  level-{{$level}}">
        <span class="detail1">
            <div class="d-flex align-items-center">
                <div class="dot2 d-flex align-items-center">
                    @if(count($child->childs))
                        <i class="fa fa-plus detail1 iicon " id="{{ $child->id }}"
                           aria-hidden="true" onclick="getchilds({{ $child->id }}, {{$level}}, '{{ $navigation .",".
                           $level ."#".  $child->title }}')"></i>
                    @endif
                </div>
                <div class="scroll-topics ctitle child list d-flex justify-content-between align-items-center" onclick="setTitle
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
                <div class="navigation d-none">{{$navigation .",". $level ."#".  $child->title }}</div>
                <div class="sr d-none">{{ $child->sr }}</div>
                <div class="parentId d-none">{{ $child->parent_id }}</div>
                <div class="admin d-none">{{ auth('admin')->user() }}</div>
                <div class="admin d-none">{{ auth('admin')->user() }}</div>
                <div class="user d-none">{{ auth()->user() }}</div>
                @auth()
                    <div class="userId d-none">{{ auth()->user()->id }}</div>
                @endauth
            </div>
        </span>
            @if(count($child->childs))
                <div class="child-div" id="child-{{ $child->id }}">
                </div>
            @endif

        </li>
    @endforeach
</ul>
<script>
    function setTitle(item){
        // $(".nav-title").html("");
        var navigation = $(item).siblings('.navigation').text();
        var strArray = navigation.split(",");
        // Display array values on page
        for (var i = 0; i < strArray.length; i++) {
            var splited = strArray[i].split("#");
            if (i > 0) {
                let index = i;
                let data = $("#ct" + index + "_title").html();
                $("#ct" + index + "_title").html(data + "&nbsp;&nbsp;&nbsp; >&nbsp;&nbsp");
            }
            $("#ct" + splited[0] + "_title").html(splited[1]);
        }
    }
</script>
