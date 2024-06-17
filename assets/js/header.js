function showMenu() {
  let x = document.getElementById("menu-overlay");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function handleResize() {
  let x = document.getElementById("menu-overlay");
  if (window.innerWidth > 440) {
    x.style.display = "none";
  }
}

window.addEventListener("resize", handleResize);