function delCF(dellUrl) {
  if (confirm("Bạn chắc chứ?")) {
    document.location = dellUrl;
  }
}
document
  .getElementById("myTextarea")
  .addEventListener("keydown", function (event) {
    if (event.key === "Enter" && !event.shiftKey) {
      event.preventDefault();
    }
  });

const giam_gia = document.getElementById("giam-gia");
const dac_biet = document.getElementById("dac-biet");

dac_biet.addEventListener("change", function () {
  if (dac_biet.checked) {
    giam_gia.disabled = false; // Loại bỏ trạng thái disabled
  } else {
    giam_gia.disabled = true; // Đặt lại trạng thái disabled
  }
});
