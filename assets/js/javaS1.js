$(".dropdown-menu .dropdown-item").click(function () {
  $(".btn:first-child").html($(this).text())
  $campus = $(".btn").text();
  localStorage.setItem("campus", $campus);
  var ville = $campus.split(' ');
  window.location = "bdecesicampus.php?campus=" + ville[3];
});