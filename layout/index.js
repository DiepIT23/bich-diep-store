// Slide show
const listImage = document.querySelector(".list-images");
const imgs = document.querySelectorAll(".img");
const btnLeft = document.querySelector(".btn-left");
const btnRight = document.querySelector(".btn-right");
const slideWidth = imgs[0].clientWidth;
let current = 0;

const changeSlide = () => {
  if (current == imgs.length - 1) {
    current = 0;
    listImage.style.transform = `translateX(0px)`;
  } else {
    current++;
    listImage.style.transform = `translateX(${slideWidth * -1 * current}px)`;
  }
};

let interval = setInterval(changeSlide, 3000);

btnRight.addEventListener("click", () => {
  clearInterval(interval);
  changeSlide();
  interval = setInterval(changeSlide, 3000);
});

btnLeft.addEventListener("click", () => {
  clearInterval(interval);
  if (current == 0) {
    current = imgs.length - 1;
    listImage.style.transform = `translateX(${slideWidth * -1 * current}px)`;
  } else {
    current--;
    listImage.style.transform = `translateX(${slideWidth * -1 * current}px)`;
  }
  interval = setInterval(changeSlide, 3000);
});
