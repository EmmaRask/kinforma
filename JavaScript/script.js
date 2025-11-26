const fadeInMenu = document.querySelector(".fade-in-menu");
const items = document.querySelectorAll(".item");
const hamburger = document.querySelector(".hamburger");
const closeIcon = document.querySelector(".close-icon");
const menuIcon = document.querySelector(".menu-icon");
const header = document.querySelector("header");

function menuFadeIn() {
  if (fadeInMenu.classList.contains("showMenu")) {
    fadeInMenu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
    header.classList.remove("menu-open");
  } else {
    fadeInMenu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
    header.classList.add("menu-open");
  }
}

hamburger.addEventListener("click", menuFadeIn);

items.forEach((menuItem) => {
  menuItem.addEventListener("click", menuFadeIn);
});

const products = document.querySelectorAll(".js-product-image");

products.forEach((productImage) => {
  const folder = productImage.dataset.folder;
  const name = productImage.dataset.name;
  let currentColor = productImage.dataset.color;

  const parent = productImage.closest(".pair");
  const colorButtons = parent.querySelectorAll(".color-circle");

  colorButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const color = btn.dataset.color;

      if (color === currentColor) return;
      currentColor = color;

      productImage.classList.add("fade");

      const nextSrc = `images/${folder}/${name}-${color}.jpg`;

      const img = new Image();
      img.onload = () => {
        productImage.src = nextSrc;
        productImage.dataset.color = color;
        productImage.classList.remove("fade");
      };
      img.src = nextSrc;

      colorButtons.forEach((b) => b.classList.remove("active"));
      btn.classList.add("active");
    });
  });
});

const isDesktop = window.matchMedia("(min-width: 900px)").matches;

document.querySelectorAll(".pair").forEach((pair) => {
  // hoppa över allt i desktop-läge
  if (isDesktop) return;

  const video = pair.querySelector(".media-video");
  const img = pair.querySelector(".product-image");
  const playBtn = pair.querySelector(".play-btn");

  // Skip if something is missing
  if (!video || !img || !playBtn) return;

  // Start video on click
  playBtn.addEventListener("click", () => {
    img.style.display = "none";
    playBtn.style.display = "none";
    video.style.display = "block";
    video.play();
  });

  // Reset on click on video
  video.addEventListener("click", reset);

  // Reset when video ends
  video.addEventListener("ended", reset);

  function reset() {
    video.pause();
    video.currentTime = 0;
    video.style.display = "none";
    img.style.display = "block";
    playBtn.style.display = "block";
  }
});

/*/document.querySelectorAll(".pair").forEach((pair) => {
  const video = pair.querySelector(".media-video");
  const img = pair.querySelector(".product-image");
  const playBtn = pair.querySelector(".play-btn");

  // Skip if something is missing
  if (!video || !img || !playBtn) return;

  // Start video on click
  playBtn.addEventListener("click", () => {
    img.style.display = "none";
    playBtn.style.display = "none";
    video.style.display = "block";
    video.play();
  });

  // Reset on click on video
  video.addEventListener("click", reset);

  // Reset when video ends
  video.addEventListener("ended", reset);

  function reset() {
    video.pause();
    video.currentTime = 0;
    video.style.display = "none";
    img.style.display = "block";
    playBtn.style.display = "block";
  }
});/*/
