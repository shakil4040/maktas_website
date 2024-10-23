@if(count($mapping) > 0)
<ul>
    @foreach ($mapping as $key => $node)
        <li title="{{ $node->title }}" class="list_color level-1">
            <span class="detail1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <div id="{{ $node->title}}" class="ctitle child list d-flex justify-content-between align-items-center" onclick="setTitleCategory(this, {{$node}})"  style="color: {{ ['rgb(61, 151, 230)', 'rgb(230, 122, 51)', 'rgb(255, 181, 20)', 'rgb(221, 39, 42)', 'rgb(68, 173, 26)', '#6f42c1', 'rgb(108, 110, 121)', 'rgb(255, 0, 255)'][$node->level] ?? '' }}">
                                {!! str_repeat('&mdash;&nbsp;', $node->level) !!} {{ $node->title }}
                                @if(auth()->user()->isAdmin())
                                    @if(count($node->childs) == null)
                                        <div class="d-flex">
                                            <i class="fa fa-edit mx-2 sedit"></i>
                                            <i class="fa fa-times-circle mx-2 delete"></i>
                                        </div>
                                    @endif
                                    <div class="d-flex">
                                        <i class="fa fa-edit mx-2 tedit" style="color:orange;"></i>
                                    </div>
                                @endif
                                @if(auth()->user()->isMember())
                                    @if(count($node->childs) == null)
                                        <div class="d-flex">
                                            <i class="fa fa-edit mx-2 sedit"></i>
                                            <i class="fa fa-times-circle mx-2 delete"></i>
                                        </div>
                                    @endif
                                @endif
                            </div>
                            <div class="cid d-none">{{ $node->id }}</div>
                            <div class="navigation d-none">{{$node->title }}</div>
                            <div class="sr d-none">{{ $node->sr }}</div>
                            <div class="parentId d-none">{{ $node->parent_id }}</div>
                            <div class="admin d-none">{{ auth()->user()->isAdmin() }}</div>
                            <div class="admin d-none">{{ auth()->user()->isAdmin() }}</div>
                            <div class="user d-none">{{ auth()->user() }}</div>
                            @auth()
                                <div class="userId d-none">{{ auth()->user()->userable->id }}</div>
                            @endauth
                        </div>
                    </div>
                </div>
            </span>
        </li>
    @endforeach
</ul>
<div id="treePagination" class="my-2 mr-4">
    {{ $treeLastChildrenRecords->links('vendor.pagination.bootstrap-4') }}
</div>
@else
    <p class="text-danger p-5">{{__("tree.no record found!")}}</p>
    <script>
        $("#ct1_title").html("");
        $("#ct2_title").html("");
        $("#ct3_title").html("");
        $("#ct4_title").html("");
        $("#ct5_title").html("");
        $("#ct6_title").html("");
        $("#ct7_title").html("");
        $("#ct8_title").html("");
        $("#ct9_title").html("");
        $("#div1").html("");
    </script>
@endif
<script>
    document.querySelectorAll('.pagination a.page-link').forEach(function(link) {
        link.addEventListener('click', function(event) {
            event.preventDefault(); // Prevent the default link behavior
            console.log(this.getAttribute('href'));
            var url = this.getAttribute('href'); // Get the URL from the link
            fetchData(url); // Call your AJAX function
        });
    });
</script>