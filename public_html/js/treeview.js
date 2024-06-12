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
    $(document).on("click" ,".ctitle", function () {
        $(this).find('.tedit').click(function() {
            var id = $(this).parent().parent().siblings('.cid').text();

            $.ajax({
                url: "/api/edit/" + id,
                success: function(data) {
                    $("#edit2").html(data);

                }
            });
        });
    });
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
function getchilds2(id, level, title){
    console.log("#child-" + id);
    let childlen = $("#child-" + id + " ul").length;

    if (childlen == 0) {
        $.ajax({
            url: "/get-child2/" + id + '/' + level + '/' + btoa(encodeURIComponent(title)),
            success: function (data) {
                $("#child-" + id).html(data);
            }
        });
    } else {
        $("#child-" + id+ " ul").remove();
    }
}

//getting data from cotnroller
//==================================================

//comparison navigation bar

$(".list_color1").children().children().children(".list").each(function() {
    var title = $(this).siblings('.title').text();
    var id = $(this).siblings('.cid').text();
    $(this).click(function() {
        $('#ct1_title').html("");
        $('#ct2_title').html("");
        $('#ct3_title').html("");
        $('#ct4_title').html("");
        $('#ct5_title').html("");
        $('#ct6_title').html("");
        $('#ct7_title').html("");
        $('#ct8_title').html("");
        $("#ctab7").children('#ct7_title').html('<a href="#'+title+'">'+title+'</a>');
        $.ajax({
            url: "/api/nav/" + id,
            success: function(data) {
                if (data.parent2Title == null) {
                    $("#ctab7").children('#ct7_title').css("color", "rgb(61, 151, 230)");
                }
                if (data.parent3Title == null && data.parent2Title != null) {
                    $("#ctab6").children('#ct6_title').html(data.parentTitle + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab5").children('#ct5_title').html(data.parent2Title);
                    $("#ctab6").children('#ct6_title').css("color", "rgb(61, 151, 230)");
                    $("#ctab7").children('#ct7_title').css("color", "rgb(230, 122, 51)");
                }
                if (data.parent4Title == null && data.parent3Title != null) {
                    $("#ctab6").children('#ct6_title').html(data.parentTitle + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab5").children('#ct5_title').html(data.parent2Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab4").children('#ct4_title').html(data.parent3Title);
                    $("#ctab5").children('#ct5_title').css("color", "rgb(61, 151, 230)");
                    $("#ctab6").children('#ct6_title').css("color", "rgb(230, 122, 51)");
                    $("#ctab7").children('#ct7_title').css("color", "rgb(255, 181, 20)");
                }
                if (data.parent5Title == null && data.parent4Title != null) {
                    $("#ctab6").children('#ct6_title').html(data.parentTitle + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab5").children('#ct5_title').html(data.parent2Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab4").children('#ct4_title').html(data.parent3Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab3").children('#ct3_title').html(data.parent4Title);
                    $("#ctab4").children('#ct4_title').css("color", "rgb(61, 151, 230)");
                    $("#ctab5").children('#ct5_title').css("color", "rgb(230, 122, 51)");
                    $("#ctab6").children('#ct6_title').css("color", "rgb(255, 181, 20)");
                    $("#ctab7").children('#ct7_title').css("color", "rgb(221, 39, 42)");
                }
                if (data.parent6Title == null && data.parent5Title != null) {
                    $("#ctab6").children('#ct6_title').html(data.parentTitle + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab5").children('#ct5_title').html(data.parent2Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab4").children('#ct4_title').html(data.parent3Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab3").children('#ct3_title').html(data.parent4Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab2").children('#ct2_title').html(data.parent5Title);
                    $("#ctab3").children('#ct3_title').css("color", "rgb(61, 151, 230)");
                    $("#ctab4").children('#ct4_title').css("color", "rgb(230, 122, 51)");
                    $("#ctab5").children('#ct5_title').css("color", "rgb(255, 181, 20)");
                    $("#ctab6").children('#ct6_title').css("color", "rgb(221, 39, 42)");
                    $("#ctab7").children('#ct7_title').css("color", "rgb(68, 173, 26)");
                }
                if (data.parent7Title == null && data.parent6Title != null) {
                    $("#ctab6").children('#ct6_title').html(data.parentTitle + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab5").children('#ct5_title').html(data.parent2Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab4").children('#ct4_title').html(data.parent3Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab3").children('#ct3_title').html(data.parent4Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab2").children('#ct2_title').html(data.parent5Title + '<span style="color:#f1f1f1;">d</span>' + '&#62;');
                    $("#ctab1").children('#ct1_title').html(data.parent6Title);
                    $("#ctab2").children('#ct2_title').css("color", "rgb(61, 151, 230)");
                    $("#ctab3").children('#ct3_title').css("color", "rgb(230, 122, 51)");
                    $("#ctab4").children('#ct4_title').css("color", "rgb(255, 181, 20)");
                    $("#ctab5").children('#ct5_title').css("color", "rgb(221, 39, 42)");
                    $("#ctab6").children('#ct6_title').css("color", "rgb(68, 173, 26)");
                    $("#ctab7").children('#ct7_title').css("color", "rgb(127, 0, 255)");
                }
                if (data.parent8Title == null && data.parent7Title != null) {
                    $("#ctab1").children('#ct1_title').css("color", "rgb(61, 151, 230)");
                    $("#ctab2").children('#ct2_title').css("color", "rgb(230, 122, 51)");
                    $("#ctab3").children('#ct3_title').css("color", "rgb(255, 181, 20)");
                    $("#ctab4").children('#ct4_title').css("color", "rgb(221, 39, 42)");
                    $("#ctab5").children('#ct5_title').css("color", "rgb(68, 173, 26)");
                    $("#ctab6").children('#ct6_title').css("color", "rgb(127, 0, 255)");
                    $("#ctab7").children('#ct7_title').css("color", "rgb(108, 110, 121)");
                }
            }
        });
    });
});






