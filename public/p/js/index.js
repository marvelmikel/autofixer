window.addEventListener("scroll", function () {
  let navBar = document.getElementById("header");
  if (window.scrollY > 0) {
    navBar.classList.add("fixed-top");
    navBar.classList.add("header");

    document.getElementById("top_bar").style.display = "none";
  } else {
    navBar.classList.remove("fixed-top");
    navBar.classList.remove("header");

    document.getElementById("top_bar").style.display = "block";
    document.getElementById("header").style.top = "-50";
  }
});
