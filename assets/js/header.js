function showMenu() {
  let x = document.getElementById("menu-overlay");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function showReviewInput() {
  let r = document.getElementById("review-overlay");
  if (r.style.display === "none") {
    r.style.display = "block";
  } else {
    r.style.display = "none";
  }
}

function handleResize() {
  let x = document.getElementById("menu-overlay");
  if (window.innerWidth > 440) {
    x.style.display = "none";
  }
}

window.addEventListener("resize", handleResize);