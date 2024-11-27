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
