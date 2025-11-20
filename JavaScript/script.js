const fadeInMenu = document.querySelector(".fadeInMenu");
const items = document.querySelectorAll(".item");
const hamburger = document.querySelector(".hamburger");
const closeIcon = document.querySelector(".closeIcon");
const menuIcon = document.querySelector(".menuIcon");

function menuFadeIn() {
  if (fadeInMenu.classList.contains("showMenu")) {
    fadeInMenu.classList.remove("showMenu");
    closeIcon.style.display = "none";
    menuIcon.style.display = "block";
  } else {
    fadeInMenu.classList.add("showMenu");
    closeIcon.style.display = "block";
    menuIcon.style.display = "none";
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
