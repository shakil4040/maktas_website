<!DOCTYPE html>
<html>

<head>
    <title>اسلام</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <link href="/css/treeview.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
</head>

<body>
    <div id="loader" style="display:none;width:100%;height:100%;position:absolute;z-index:9999999;background:#4548485c;position:fixed;" class="row justify-content-center align-items-center" role="status">
    <img  src="/assets/images/spinner.gif" width="5%" alt="loading">
    </div>
    <div class="preloader"></div>
    <div id="confirmation"></div>
    <div class="container">
        <div class="card card-primary">
            <div class="card-body">
                <div class="row">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="close" data-dismiss="alert">×</button>
                    </div>
                    @endif
                    <div class="alert alert-danger print-delete-msg" style="display:none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul></ul>
                    </div>
                    <div class="alert alert-success print-edit-msg" style="display:none">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <ul></ul>
                    </div>
                    
                    
                    
                    <div id="comment2">

                    </div>
                    <div id="edit2">

                    </div>
                    <div id="div1">

                    </div>

                    <div class="col-md-12 nav-col">
                        <div class="row scroll-topics navigation_bar">
                            <div id="ctab1" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics" id="ct1_title"></div>
                            </div>
                            <div id="ctab2" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics" id="ct2_title"></div>
                            </div>
                            <div id="ctab3" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics" id="ct3_title"></div>
                            </div>
                            <div id="ctab4" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics" id="ct4_title"></div>
                            </div>
                            <div id="ctab5" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics" id="ct5_title"></div>
                            </div>
                            <div id="ctab6" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics" id="ct6_title"></div>
                            </div>
                            <div id="ctab7" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics" id="ct7_title"></div>
                            </div>
                            <div id="ctab8" class="mx-2 scroll-topics">
                                <div class="nav-title py-1 scroll-topics" id="ct8_title"></div>
                            </div>
                        </div>
                        <button data-toggle="modal" data-target="#exampleModal" style="position: fixed;left: 0px;z-index: 999999999;" class="btn btn-success">اپنا نصاب بنائیں</button>
                        <div class="title islam1">
                            <h1 style="font-size:35px;margin-bottom:1.5rem;">اسلام</h1>
                        </div>
                        <div class="d-flex navw">
                            <input id="searcht" style="padding: 0px 10px;" placeholder="نظر آنے والے عنوانات میں  تلاش کرنے کے لیے یہاں لکھیں" type="search">
                            <button class="btn ml-1 btn-primary"><i class="fa fa-search"></i></button>
                            <button id="searchb" title="مکطس کے تمام عنوانات  میں تلاش کرنے کے لیے یہ بٹن دبائیں" class="btn btn-success"><i class="fa fa-search"></i></button>
                        </div>
                        <div id="sframe" class="col-md-6" style="position: absolute;left:5px;top:53px;z-index: 99999;height:55%">
                            <i id="frclose" style="position: absolute;left: 34px;top: 15px;" class="fa fa-close"></i>
                            <iframe  src="/allSearch" height="100%" width="100%" title="Iframe Example"></iframe>
                        </div>
                        <ul id="tree1">
                            @php
                            $counter =0;
                            @endphp
                            @foreach($categories as $category)
                            <div class="row">
                                <div class="col-md-12">
                                    <li title="{{ $category->title }}" class="list_color level-1">
                                        <span class="detail1">
                                            <div class="d-flex align-items-center">
                                                @php
                                                $counter++;
                                                @endphp
                                                <div class="dot2 d-flex align-items-center" onclick="getchilds2({{ $category->id }},1, '{{ "1#". $category->title }}')">
                                                    @if(count($category->childs))
                                                    <i class="fa fa-plus detail1 iicon " id="{{ $category->id }}" aria-hidden="true"></i>
                                                    @endif
                                                </div>
                                                <div id="{{ $category->title }}" onclick="setParentTitle('{{ $category->title }}')" class="ctitle list d-flex justify-content-between align-items-center">
                                                    {{ $category->title }}
                                                    @if($category->mahol && $category->mahol->status == 'Pending')
                                                    <span style="background: #ffc107;padding: 0px 11px;color: #ffffff;font-weight: 500;font-size: 19px;border-radius: 23px;">
                                                        {{'...Pending'}}
                                                    </span>
                                                    @endif
                                                    @auth('admin')
                                                    @if(count($category->childs) == null)
                                                    <div class="d-flex">
                                                        <i class="fa fa-edit mx-2 tedit" style="color:orange;"></i>
                                                        <i class="fa fa-edit mx-2 sedit"></i>
                                                        <i class="fa fa-times-circle mx-2 delete"></i>
                                                    </div>
                                                    @endif
                                                    <div class="d-flex">
                                                        <i class="fa fa-edit mx-2 tedit" style="color:orange;"></i>
                                                    </div>
                                                    @endauth
                                                    @auth('member')
                                                    @if(count($category->childs) == null)
                                                    <div class="d-flex">
                                                        <i class="fa fa-edit mx-2 sedit"></i>
                                                        <i class="fa fa-times-circle mx-2 delete"></i>
                                                    </div>
                                                    @endif
                                                    @endauth
                                                </div>
                                                <div class="cid d-none">{{ $category->id }}</div>
                                                <div class="navigation d-none">{{"1#". $category->title }}</div>
                                                <div class="sr d-none">{{ $category->sr }}</div>
                                                <div class="parentId d-none">{{ $category->parent_id }}</div>
                                                <div class="shoba d-none">{{ $shoba }}</div>
                                                <div class="age d-none">{{ $age }}</div>
                                                <div class="admin d-none">{{ auth('admin')->user() }}</div>
                                                <div class="user d-none">{{ auth()->user() }}</div>
                                                @auth()
                                                <div class="userId d-none">{{ auth()->user()->id }}</div>
                                                @endauth
                                                @auth('member')
                                                <div class="memberId d-none">{{ auth('member')->user()->id }}</div>
                                                @endauth
                                            </div>
                                        </span>
                                        @if(count($category->childs))
                                        <div class="child-div" id="child-{{ $category->id }}">
                                        </div>
                                        @endif
                                    </li>
                                </div>
                            </div>
                            @endforeach
                        </ul>
                    </div>


                </div>


            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" style="direction: rtl;font-family:'Noto Nastaliq Urdu', serif;" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <h5 class="modal-title" id="exampleModalLabel">براہِ مہربانی مندرجہ ذیل معلومات فراہم کریں</h5>
        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button> -->
      </div>
      <form action="/api/course"  enctype="multipart/form-data" method="post">
          <div class="modal-body">
            <input style="padding: 7px 7px;margin: 11px 0px;line-height: 0;" type="text" placeholder="آپ کا نام" name="name">
            <input style="padding: 7px 7px;margin: 11px 0px;line-height: 0;" min="0" type="number" placeholder="آپ کی عمر" name="age">
            <input style="padding: 7px 7px;margin: 11px 0px;line-height: 0;" type="text" placeholder="آپ کا شعبہ" name="occupation" >
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">بند کریں</button>
            <button type="submit" class="btn btn-primary">درج کریں</button>
          </div>
      </form>
    </div>
  </div>
</div>
    <script src="/js/treeview.js"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ajaxSend(function(event, request, settings) {
            $('#loader').show();
        });
        $(document).ajaxComplete(function(event, request, settings) {
            $('#loader').hide();
        });
    </script>
    <script type="application/javascript">
        function setParentTitle(title) {
            $(".nav-title").html("");
            $("#ct1_title").html('<a href="#' + title + '">' + title + '</a>');
            $("#ct2_title").html("");
            $("#ct3_title").html("");
            $("#ct4_title").html("");
            $("#ct5_title").html("");
            $("#ct6_title").html("");
            $("#ct7_title").html("");
            $("#ct8_title").html("");
        }
        $(".nav-title").click(function() {
            $('.detail2').addClass('shrink').removeClass('detail2');
            $('.btitle').addClass('shtitle');
        });
        $('#sframe').hide();
        $('#searchb').click(function(){
            $('#sframe').show();
        });
        $('#frclose').click(function(){
            $('#sframe').hide();
        });
    </script>
    <script>
        var header = document.getElementById("tree1");
var btns = header.getElementsByClassName("list");
for (var i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {
        var current = document.getElementsByClassName("active");
        if (current.length > 0) {
            current[0].className = current[0].className.replace(" active", "");
        }
        this.className += " active";
    });
}
    </script>
</body>

</html>