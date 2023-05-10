$.fn.extend({
    treed: function(o) {

        var openedClass = 'fa fa-minus';
        var closedClass = 'fa fa-plus';
        if (typeof o != 'undefined') {
            if (typeof o.openedClass != 'undefined') {
                openedClass = o.openedClass;
            }
            if (typeof o.closedClass != 'undefined') {
                closedClass = o.closedClass;
            }
        };
        /* initialize each of the top levels */
        var tree = $(this);
        tree.addClass("tree");
        tree.find('li').has("ul").each(function() {
            var branch = $(this);
            branch.prepend("");
            branch.addClass('branch');
            branch.on('click', function(e) {
                if (this == e.target) {
                    var icon = $(this).children().children().children().children('i:first');
                    icon.toggleClass(openedClass + " " + closedClass);
                    $(this).children().children().toggle();
                }
            })
            branch.children().children().toggle();
        });
        /* fire event from the dynamically added icon */
        tree.find('.branch .indicator').each(function() {
            $(this).on('click', function() {
                $(this).closest('li').click();
            });
        });
        /* fire event to open branch if the li contains an anchor instead of text */
        tree.find('.branch>a').each(function() {
            $(this).on('click', function(e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        /* fire event to open branch if the li contains an icon instead of text */
        tree.find('.branch>i').each(function() {
            $(this).on('click', function(e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });
        tree.find('.branch>span').each(function() {
            $(this).on('click', function(e) {
                $(this).closest('li').click();
                e.preventDefault();
            });
        });

        /* fire event to open branch if the li contains a button instead of text */
        // tree.find('.branch>button').each(function() {
        //     $(this).on('click', function(e) {
        //         $(this).closest('li').click();
        //         e.preventDefault();
        //     });
        // });
    }
});
/* Initialization of treeviews */
$('#tree1').treed();



$(document).ready(function() {
    //Add Details block
    $('.preloader').fadeOut('slow');
    //search for comparison
    $('#search').keyup(function() {
        $('.ctitle').each(function() {
            $(this).parent().parent('.detail1').show();
        });
        value = $('#search').val();
        $('.ctitle').each(function() {
            var title =    $(this).text();
            if(!title.includes(value)){
                $(this).parent().parent('.detail1').hide();
            }
        });
    })
    //search for tree
    $('#searcht').keyup(function() {
        $('.ctitle').each(function() {
            $(this).parent().parent('.detail1').hide();
        });
        value = $('#searcht').val();
        $('.ctitle').each(function() {
            var title =    $(this).text();
            if(title.includes(value)){
                $(this).parent().parent('.detail1').show();
                $(this).parent().parent('.detail1').parent().show();
            }
        });
    })


    // $(document).on("click" ,".ctitle", function () {
        $(document).on("click" ,".ctitle", function () {
            var id = $(this).siblings('.cid').text();
            var admin = $(this).siblings('.admin').text();
            var user = $(this).siblings('.user').text();
            var userId = $(this).siblings('.userId').text();
            var memberId = $(this).siblings('.memberId').text();
            $.ajax({
                url: "/api/test/" + id,
                data: {
                    admin: admin,
                    user: user,
                    userId: userId,
                    memberId: memberId
                },
                success: function(data) {
                    $("#div1").html(data);

                }
            });
        });
    // });
    // Delete function
    $(document).on("click" ,".ctitle", function () {
        $(this).find('.delete').click(function(e) {
            var id = $(this).parent().parent().siblings('.cid').text();
            var memberName = $(this).parent().parent().siblings('.memberName').text();
            var memberId = $(this).parent().parent().siblings('.memberId').text();
            var title = $(this).parent().parent().siblings('.title').text();
            var token = $('#token :input').val();
            console.log(memberName);
            $.ajax({
                url: "/api/confirmation/" + id,
                data: {
                    token: token,
                    memberName: memberName,
                    memberId: memberId,
                    title: title
                },
                success: function(data) {
                    $("#confirmation").html(data);
                }
            });
        });
    });

    //Editing Function

    $(document).on("click" ,".ctitle", function () {
        $(this).find('.sedit').click(function(e) {
            var id = $(this).parent().parent().siblings('.cid').text();
            var memberName = $(this).parent().parent().siblings('.memberName').text();
            var memberId = $(this).parent().parent().siblings('.memberId').text();
            var title = $(this).parent().parent().siblings('.title').text();
            var token = $('#token :input').val();
            console.log(memberName);
            $.ajax({
                url: "/api/editing/" + id,
                data: {
                    token: token,
                    memberName: memberName,
                    memberId: memberId,
                    title: title
                },
                success: function(data) {
                    $("#confirmation").html(data);
                }
            });
        });
    });

    //Addition Function

    $("#treeForm").on('submit', function(e) {
        e.preventDefault();
        // $(this).click(function(e) {
            // var id = $(this).parent().parent().siblings('.cid').text();
            // var memberName = $(this).parent().parent().siblings('.memberName').text();
            // var memberId = $(this).parent().parent().siblings('.memberId').text();
            // var title = $(this).parent().parent().siblings('.title').text();
            // var token = $('#token :input').val();
            // console.log(memberName);
            $.ajax({
                url: "/api/addition",
                type: "POST",
                data: $(this).serialize(),
                // data: {
                //     token: token,
                //     memberName: memberName,
                //     memberId: memberId,
                //     title: title
                // },
                success: function(data) {
                    $("#confirmation").html(data);
                }
            });
        // });
    });



    //Edit function
    // $(document).on("click" ,".ctitle", function () {
    //     $(this).find('.sedit').click(function() {
    //         var id = $(this).parent().parent().siblings().text();

    //         $.ajax({
    //             url: "/api/edit/" + id,
    //             success: function(data) {
    //                 $("#edit2").html(data);

    //             }
    //         });
    //     });
    // });
    //tree navigation bar
    // $(".list_color").children().children().children(".list").each(function() {
    //     var title = $(this).text();
    //     $(this).click(function() {
    //         $("#tab1").children('#t1_title').html(title);
    //         $("#tab2").hide();
    //         $("#tab3").hide();
    //         $("#tab4").hide();
    //         $("#tab5").hide();
    //         $("#tab6").hide();
    //         $("#tab7").hide();
    //         $("#tab8").hide();
    //     });
    // });



    //Add child block

    // $(".cidd").each(function() {
    //     var cid = $(this).text();
    //     console.log(cid);
    //     $.ajax({
    //         url: "api/child/" + cid,
    //         success: function(data) {
    //             $(".div2").html(data);

    //         }
    //     });
    // });

    //=================

    $("#add").hide();
    $("#araa").hide();
    $("#fclose").click(function() {
        $(".detail3").hide();
    });


    $(".sedit").click(function() {
        $("#edit").show();
    });
    $(".detail2").hide();
    $(".detail1").click(function() {
        $(this).siblings('.detail2').show();
        $(".detail2").not($(this).siblings('.detail2')).hide();
    });

    //form submission
    $('#treeForm').on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: '/api/add-category',
            data: $(this).serialize(),
            success: function(data) {
                if ($.isEmptyObject(data.error)) {
                    printSuccessMsg(data.success);
                } else {
                    printErrorMsg(data.error);
                }
            }
        });

        function printErrorMsg(msg) {
            $(".print-error-msg").find("ul").html('');
            $(".print-error-msg").css('display', 'block');
            $.each(msg, function(key, value) {
                $(".print-error-msg").find("ul").append('<li>' + value + '</li>');

            });
        }

        function printSuccessMsg(msg) {
            $(".print-success-msg").find("ul").html(msg);
            $(".print-success-msg").css('display', 'block');
            // $.each(msg, function(key, value) {
            //     $(".print-success-msg").find("ul").append('<li>' + value + '</li>');

            // });
        }
    });





    // if (data == null) {
    //     $('.alert').hide();
    // }

});
function getchilds(id, level, title){
    console.log("#child-" + id);
    let childlen = $("#child-" + id + " ul").length;

    if (childlen == 0) {
        $.ajax({
            url: "/get-child/" + id + '/' + level + '/' + btoa(encodeURIComponent(title)),
            success: function (data) {
                $("#child-" + id).html(data);
            }
        });
    } else {
        $("#child-" + id+ " ul").remove();
    }
}
//getting data from cotnroller





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
