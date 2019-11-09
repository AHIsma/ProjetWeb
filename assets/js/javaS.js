$(".dropdown-menu .dropdown-item").click(function () {
  $(".btn:first-child").html($(this).text())
    window.location = "bdecesicampus.php";
});