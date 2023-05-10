<ul>
    @foreach($childs as $child)
        <li class="title={{ $child->title }}  level-{{$level}}">
        <span class="detail1">
            <div class="d-flex align-items-center">
                <div class="dot2 d-flex align-items-center" onclick="getchilds({{ $child->id }}, {{$level}}, '{{ $child->title }}')">
                    @if(count($child->childs))
                        <i class="fa fa-plus detail1 iicon " id="{{ $child->id }}"
                           aria-hidden="true"></i>
                    @endif
                </div>
                <div class="ctitle child list d-flex justify-content-between align-items-center" onclick="setTitle
                    ('{{ $child->title }}', {{ $level }})">
                    {{ $child->title }}
                    @auth('admin')
                        @if(count($child->childs) == null)
                            <div class="d-flex">
                        <i class="fa fa-edit mx-2 sedit"></i>
                        <i class="fa fa-times-circle mx-2 delete"></i>
                    </div>
                        @endif
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
    function setTitle(currentTitle, currentLevel){
        var navigation = {!! isset($navigation) ? json_encode($navigation) : null !!};
        var lastLevel = 0;
        let showNav = true;
        $("#ct1_title,#ct2_title,#ct3_title,#ct4_title,#ct5_title,#ct6_title,#ct7_title,#ct8_title").html("");
        for (var level in navigation) {
            if (navigation.hasOwnProperty(level)) {
                var items = navigation[level];
                for (var index in items) {
                    if (items.hasOwnProperty(index)) {
                        var title = items[index];
                        let levelCount = parseInt(level);
                        let previousCount = parseInt(level) - 1;
                        currentLevel = parseInt(currentLevel);
                        if (
                            (
                                currentLevel == level && (title != currentTitle)
                            ) ||
                            (
                                title == currentTitle || title === currentTitle)
                        ) {
                            showNav = false;
                            $("#ct" + levelCount + "_title").html(currentTitle);
                        } else {
                            $("#ct" + levelCount + "_title").html(title);
                        }
                        if(previousCount >= 0){
                            $("#ct" + previousCount + "_title").html($("#ct" + previousCount + "_title").html() + ' >');
                        }
                    }
                }
            }
            lastLevel =  parseInt(level) + 1;
        }
        if(showNav){
            $("#ct" + lastLevel + "_title").html(currentTitle);
            previousLevel = lastLevel - 1;
            $("#ct" + previousLevel + "_title").html($("#ct" + previousLevel + "_title").html() + ' >');
        }
    }
</script>
