<!DOCTYPE html>
<html>

<head>
    <meta name="_token" content="{{ csrf_token() }}">
    <title>مکطس</title>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu&display=swap" rel="stylesheet">
</head>

<body style="font-family:'Noto Nastaliq Urdu', serif;font-size:14px;direction:rtl;">
<div id="loader" style="display:none;width:100%;height:100%;position:absolute;z-index:9999999;background:#4548485c;position:fixed;" class="row justify-content-center align-items-center" role="status">
    <img style="position: fixed;top: 50%;right: 40%;"  src="{{asset('/assets/images/spinner.gif')}}" width="10%" alt="loading">
    </div>
    <div id="all" style="line-height: 40px;display:none;width: 100%;height:100%;z-index:999;background-color:#00000078;position:fixed;">
        <div id="detail"  class="row align-items" style="box-shadow:2px 3px 9px 12px #504747;z-index:99999;display:none;position: fixed;padding: 29px;text-align: center;top: 195px;border-radius: 23px;width: 70%;right: 18%;height: 200px;background: whitesmoke;overflow-y: auto;">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3>تمام موضاعاتِ مکطس</h3>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                        <input style="line-height: 0px;" type="text" class="form-controller" id="search" name="search"></input>
                    </div>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="text-center">نمبر شمار</th>
                                <th class="text-center">موضوع</th>
                                <th class="text-center">بنیادی عنوان</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        $('#search').on('keyup', function() {
            $value = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{URL::to('mySearch')}}',
                data: {
                    'search': $value
                },
                success: function(data) {
                    $('tbody').html(data);
                }
            });
        })
    </script>
    <script>
        function detail(detail,title) {
            $('#detail').show();
            $('#all').show();
            $('#detail').html('<p><b>'+title+'</b></p>'+detail);
        }
        $('#all').click(function(){
            $(this).hide();
            $('#detail').hide();
        })
    </script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'csrftoken': '{{ csrf_token() }}'
            }
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ajaxSend(function(event, request, settings) {
            $('#loader').show();
        });
        $(document).ajaxComplete(function(event, request, settings) {
            $('#loader').hide();
        });
    </script>
</body>
</html>