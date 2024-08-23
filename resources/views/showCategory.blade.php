<ul >
    @foreach ($mapping as $node)
        <li title="{{ $node->title }}" class="list_color level-1">
            <span class="detail1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <div id="{{ $node->title}}" class="ctitle child list" onclick="setTitle(this)"  style="color: {{ ['rgb(61, 151, 230)', 'rgb(230, 122, 51)', 'rgb(255, 181, 20)', 'rgb(221, 39, 42)', 'rgb(68, 173, 26)', '#6f42c1'][$node->level] }}">
                                {!! str_repeat('&mdash;&nbsp;', $node->level) !!} {{ $node->title }}
                                @auth('admin')
                                    @if($node->level > 0))
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
                                    @if($node->level > 0))
                                        <div class="d-flex">
                                    <i class="fa fa-edit mx-2 sedit"></i>
                                    <i class="fa fa-times-circle mx-2 delete"></i>
                                </div>
                                    @endif
                                @endauth
                            </div>
                            <div class="cid d-none">{{ $node->id }}</div>
                            <div class="navigation d-none">{{$node->title }}</div>
                            <div class="sr d-none">{{ $node->sr }}</div>
                            <div class="parentId d-none">{{ $node->parent_id }}</div>
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
        </li>
    @endforeach
</ul>

<script>
    function setTitle(item){
        $(".nav-title").html("");
        var navigation = $(item).siblings('.navigation').text();
        var strArray = navigation.split(",");
        // Display array values on page
        for (var i = 0; i < strArray.length; i++) {
            var splited = strArray[i].split("#");
            if (i > 0) {
                let index = i;
                let data = $("#ct" + index + "_title").html();
                $("#ct" + index + "_title").html('<a href="#'+data+'">'+data+'</a>' + "&nbsp;&nbsp;&nbsp; >&nbsp;&nbsp");
            }
            $("#ct" + splited[0] + "_title").html(splited[1]);
        }
    }
</script>
