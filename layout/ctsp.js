// Slide show - ctsp
const listImage_sm = document.querySelector(".list-images-sm");
const imgs_sm = document.querySelectorAll(".img-sm");
const btnLeft_sm = document.querySelector(".btn-left-sm");
const btnRight_sm = document.querySelector(".btn-right-sm");
const slidewidth = imgs_sm[0].clientWidth;
let now = 0;

const change_slide = () => {
  if (now == imgs_sm.length - 1) {
    now = 0;
    listImage_sm.style.transform = `translateX(0px)`;
  } else {
    now++;
    listImage_sm.style.transform = `translateX(${slidewidth * -1 * now}px)`;
  }
};

let i = setInterval(change_slide, 3000);

btnRight_sm.addEventListener("click", () => {
  clearInterval(interval);
  change_slide();
  interval = setInterval(change_slide, 3000);
});

btnLeft_sm.addEventListener("click", () => {
  clearInterval(interval);
  if (now == 0) {
    now = imgs_sm.length - 1;
    listImage_sm.style.transform = `translateX(${slidewidth * -1 * now}px)`;
  } else {
    now--;
    listImage_sm.style.transform = `translateX(${slidewidth * -1 * now}px)`;
  }
  interval = setInterval(change_slide, 3000);
});
