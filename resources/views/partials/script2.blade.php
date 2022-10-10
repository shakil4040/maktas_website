<script>
$(document).ready(function() {
    $(".menu-icon").on("click", function() {
        $("nav ul").toggleClass("showing");
    });
});
</script>
<script>
// Scrolling Effect
var bar = document.getElementById('bar');
$(window).on("scroll", function() {
    if ($(window).scrollTop() > 300) {
    //    $(".sidenav").hide();
    myFunction2(bar);
    closeNav();
    } 
  
})
</script>
<script>
var nav = false;
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
    nav = true;
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    nav = false;
}

function toggleNav() {
    nav ? closeNav() : openNav();
}

function myFunction(x) {
    x.classList.toggle("change");
}
function myFunction2(x) {
    x.classList.remove("change");
}
</script>
<!-- carousel start -->

<script>
$('#myCarousel').carousel({
    interval: 1500
})

$('.carousel .carousel-item').each(function() {
    var minPerSlide = 7;
    var next = $(this).next();
    if (!next.length) {
        next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));

    for (var i = 0; i < minPerSlide; i++) {
        next = next.next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }

        next.children(':first-child').clone().appendTo($(this));
    }
});
</script>

<script>
AOS.init();
</script>


