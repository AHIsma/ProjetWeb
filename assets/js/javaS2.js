var nomcampus = localStorage.getItem("campus");
$changementcampus = $(".navbar-brand");


$(this).next().hide();
$(document).ready(function () {
    $(".bbb_deals_image").hover(function () {
        $(this).children(".image_article").css("opacity", "0.33");
        $(this).children(".panier").show();
        // $("p").hide();
    }, function () {
        $(this).children(".image_article").css("opacity", "1");
        $(this).children(".panier").hide();
    });
});

// function bigImg(x) {
//     x.style.height = "120%";
//     x.style.width = "120%";
// }

// function normalImg(x) {
//     x.style.height = "100%";
//     x.style.width = "100%";
// }*/