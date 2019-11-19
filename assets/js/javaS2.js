var nomcampus = localStorage.getItem("campus");

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

function cacherComment() {
    var x = document.getElementById("monCommentaire");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }

// $(document).ready(function() {
//     setInterval(function() {
//         $('.affichercommentaires').load('afficherCommentaire.php')
//     }, 100);

// });     je dois mettre le post en auto refresh !    <div class="affichercommentaires"></div>