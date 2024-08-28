<ul>
    @foreach ($mapping as $key => $node)
        <li title="{{ $node->title }}" class="list_color level-1">
            <span class="detail1">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex align-items-center">
                            <div id="{{ $node->title}}" class="ctitle child list" onclick="setTitle(this, {{$node}})"  style="color: {{ ['rgb(61, 151, 230)', 'rgb(230, 122, 51)', 'rgb(255, 181, 20)', 'rgb(221, 39, 42)', 'rgb(68, 173, 26)', '#6f42c1', 'rgb(108, 110, 121)', 'rgb(255, 0, 255)'][$node->level] ?? '' }}">
                                {!! str_repeat('&mdash;&nbsp;', $node->level) !!} {{ $node->title }}
                                @auth('admin')
                                    @if(count($node->childs) == null)
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
                                    @if(count($node->childs) == null)
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
<div id="treePagination" class="my-2 mr-4">
    {{ $treeLastChildrenRecords->links('vendor.pagination.bootstrap-4') }}
</div>
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