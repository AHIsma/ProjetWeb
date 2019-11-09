$(".dropdown-menu .dropdown-item").click(function () {
  $(".btn:first-child").html($(this).text())
  $campus = $(".btn").text();
  localStorage.setItem("campus", $campus);
  window.location = "bdecesicampus.php";
});