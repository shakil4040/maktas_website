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

    $(".ctitle").each(function() {
        $(this).click(function() {
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
    });
    // Delete function    
    $(".ctitle").each(function() {
        $(this).find('.delete').click(function(e) {
            var id = $(this).parent().parent().siblings().text();
            $.ajax({
                url: "/api/confirmation/" + id,
                success: function(data) {
                    $("#confirmation").html(data);
                }
            });
        });
    });



    //Edit function
    $(".ctitle").each(function() {
        $(this).find('.sedit').click(function() {
            var id = $(this).parent().parent().siblings().text();

            $.ajax({
                url: "/api/edit/" + id,
                success: function(data) {
                    $("#edit2").html(data);
                    // printEditMsg(data.editmsg);

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
    $(".list_color").children().children().children(".list").each(function() {
        var title = $(this).text();
        var id = $(this).siblings('.cid').text();
        $(this).click(function() {
            $("#ctab7").children('#ct7_title').html(title);
            $.ajax({
                url: "/api/nav/" + id,
                success: function(data) {
                    $("#ctab6").children('#ct6_title').html(data.parentTitle);
                    $("#ctab5").children('#ct5_title').html(data.parent2Title);
                    $("#ctab4").children('#ct4_title').html(data.parent3Title);
                    $("#ctab3").children('#ct3_title').html(data.parent4Title);
                    $("#ctab2").children('#ct2_title').html(data.parent5Title);
                    $("#ctab1").children('#ct1_title').html(data.parent6Title);
                }
            });
        });
    });

    $(".list_color").children().children().children().children().children(".list").each(function() {
        var title = $(this).text();
        var id = $(this).siblings('.cid').text();
        $(this).click(function() {
            $("#ctab7").children('#ct7_title').html(title);
            $.ajax({
                url: "/api/nav/" + id,
                success: function(data) {
                    $("#ctab6").children('#ct6_title').html(data.parentTitle);
                    $("#ctab5").children('#ct5_title').html(data.parent2Title);
                    $("#ctab4").children('#ct4_title').html(data.parent3Title);
                    $("#ctab3").children('#ct3_title').html(data.parent4Title);
                    $("#ctab2").children('#ct2_title').html(data.parent5Title);
                    $("#ctab1").children('#ct1_title').html(data.parent6Title);
                }
            });
        });

    });
    $(".list_color").children().children().children().children()
        .children().children().children(".list").each(function() {
            var title = $(this).text();
            var id = $(this).siblings('.cid').text();
            $(this).click(function() {
                $("#ctab7").children('#ct7_title').html(title);
                $.ajax({
                    url: "/api/nav/" + id,
                    success: function(data) {
                        $("#ctab6").children('#ct6_title').html(data.parentTitle);
                        $("#ctab5").children('#ct5_title').html(data.parent2Title);
                        $("#ctab4").children('#ct4_title').html(data.parent3Title);
                        $("#ctab3").children('#ct3_title').html(data.parent4Title);
                        $("#ctab2").children('#ct2_title').html(data.parent5Title);
                        $("#ctab1").children('#ct1_title').html(data.parent6Title);
                    }
                });
            });
        });
    $(".list_color").children().children().children().children()
        .children().children().children().children().children(".list").each(function() {
            var title = $(this).text();
            var id = $(this).siblings('.cid').text();
            $(this).click(function() {
                $("#ctab7").children('#ct7_title').html(title);
                $.ajax({
                    url: "/api/nav/" + id,
                    success: function(data) {
                        $("#ctab6").children('#ct6_title').html(data.parentTitle);
                        $("#ctab5").children('#ct5_title').html(data.parent2Title);
                        $("#ctab4").children('#ct4_title').html(data.parent3Title);
                        $("#ctab3").children('#ct3_title').html(data.parent4Title);
                        $("#ctab2").children('#ct2_title').html(data.parent5Title);
                        $("#ctab1").children('#ct1_title').html(data.parent6Title);
                    }
                });
            });
        });
    $(".list_color").children().children().children().children().children().children()
        .children().children().children().children().children(".list").each(function() {
            var title = $(this).text();
            var id = $(this).siblings('.cid').text();
            $(this).click(function() {
                $("#ctab7").children('#ct7_title').html(title);
                $.ajax({
                    url: "/api/nav/" + id,
                    success: function(data) {
                        $("#ctab6").children('#ct6_title').html(data.parentTitle);
                        $("#ctab5").children('#ct5_title').html(data.parent2Title);
                        $("#ctab4").children('#ct4_title').html(data.parent3Title);
                        $("#ctab3").children('#ct3_title').html(data.parent4Title);
                        $("#ctab2").children('#ct2_title').html(data.parent5Title);
                        $("#ctab1").children('#ct1_title').html(data.parent6Title);
                    }
                });
            });
        });
    $(".list_color").children().children().children().children().children().children().children().children()
        .children().children().children().children().children(".list").each(function() {
            var title = $(this).text();
            var id = $(this).siblings('.cid').text();
            $(this).click(function() {
                $("#ctab7").children('#ct7_title').html(title);
                $.ajax({
                    url: "/api/nav/" + id,
                    success: function(data) {
                        $("#ctab6").children('#ct6_title').html(data.parentTitle);
                        $("#ctab5").children('#ct5_title').html(data.parent2Title);
                        $("#ctab4").children('#ct4_title').html(data.parent3Title);
                        $("#ctab3").children('#ct3_title').html(data.parent4Title);
                        $("#ctab2").children('#ct2_title').html(data.parent5Title);
                        $("#ctab1").children('#ct1_title').html(data.parent6Title);
                    }
                });
            });
        });
    $(".list_color").children().children().children().children().children().children().children().children()
        .children().children().children().children().children().children().children(".list").each(function() {
            var title = $(this).text();
            var id = $(this).siblings('.cid').text();
            $(this).click(function() {
                $("#ctab7").children('#ct7_title').html(title);
                $.ajax({
                    url: "/api/nav/" + id,
                    success: function(data) {
                        $("#ctab6").children('#ct6_title').html(data.parentTitle);
                        $("#ctab5").children('#ct5_title').html(data.parent2Title);
                        $("#ctab4").children('#ct4_title').html(data.parent3Title);
                        $("#ctab3").children('#ct3_title').html(data.parent4Title);
                        $("#ctab2").children('#ct2_title').html(data.parent5Title);
                        $("#ctab1").children('#ct1_title').html(data.parent6Title);
                    }
                });
            });
        });

    //==================================================

    //comparison navigation bar

    $(".list_color").children().children().children(".list").each(function() {
        var title = $(this).text();
        var id = $(this).siblings('.cid').text();
        $(this).click(function() {
            $("#ctab7").children('#ct7_title').html(title);
            $.ajax({
                url: "/api/nav/" + id,
                success: function(data) {
                    $("#ctab6").children('#ct6_title').html(data.parentTitle);
                    $("#ctab5").children('#ct5_title').html(data.parent2Title);
                    $("#ctab4").children('#ct4_title').html(data.parent3Title);
                    $("#ctab3").children('#ct3_title').html(data.parent4Title);
                    $("#ctab2").children('#ct2_title').html(data.parent5Title);
                    $("#ctab1").children('#ct1_title').html(data.parent6Title);
                }
            });
        });
    });




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

    // different colors  for parents and children
    // $(".detail3").hide();
    $(".list_color").children().children().children(".list").css("color", "hsl(208deg 77% 57%)");
    $(".list_color").children().children().children(".dot2").css("background-color", "hsl(208deg 77% 57%)");
    $(".list_color").find("ul").children().children().children().children(".list").css("color", "hsl(24deg 78% 55%)");
    $(".list_color").find("ul").children().children().children().children(".dot2").css("background-color", "hsl(24deg 78% 55%)");
    $(".list_color").find("ul").find("li").children().children().children().children().children(".list").css("color", "hsl(41deg 100% 54%)");
    $(".list_color").find("ul").find("li").children().children().children().children().children(".dot2").css("background-color", "hsl(41deg 100% 54%)");
    $(".list_color").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".list").css("color", "hsl(359deg 73% 51%)");
    $(".list_color").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".dot2").css("background-color", "hsl(359deg 73% 51%)");
    $(".list_color").find("ul").find("li").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".list").css("color", "hsl(103deg 74% 39%)");
    $(".list_color").find("ul").find("li").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".dot2").css("background-color", "hsl(103deg 74% 39%)");
    $(".list_color").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".list").css("color", "rgb(127, 0, 255)");
    $(".list_color").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".dot2").css("background-color", "rgb(127, 0, 255)");
    $(".list_color").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".list").css("color", "rgb(108, 110, 121)");
    $(".list_color").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".dot2").css("background-color", "rgb(108, 110, 121)");
    $(".list_color").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".list").css("color", "rgb(255, 0, 255)");
    $(".list_color").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").find("ul").find("li").children().children().children().children().children(".dot2").css("background-color", "rgb(255, 0, 255)");
    // ==============================================

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