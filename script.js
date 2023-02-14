let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header");

menu.onclick = () => {
  navbar.classList.toggle("active");
  if (menu.classList.contains("fa-bars")) {
    menu.classList.remove("fa-bars");
    menu.classList.add("fa-times");
  } else {
    menu.classList.remove("fa-times");
    menu.classList.add("fa-bars");
  }

  document.querySelectorAll("section").forEach((sec) => {
    let top = window.scrollY;
    let offset = sec.offsetTop - 150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute("id");

    if (to >= offset && top < offset + height) {
      document.querySelectorAll("header .navbar a").forEach((links) => {
        links.classList.remove("active");
        document
          .querySelector("header .navbar a[href*=" + id + "]")
          .classList.add("active");
      });
    }
  });
};
