<!-- fontawesome -->
<script src="https://kit.fontawesome.com/e42cab711e.js" crossorigin="anonymous"></script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>
</body>

<script>
    function delCF(dellUrl) {
        if (confirm("Bạn chắc chắn xóa không?")) {
            document.location = dellUrl;
        }
    }
    document
        .getElementById("myTextarea")
        .addEventListener("keydown", function(event) {
            if (event.key === "Enter" && !event.shiftKey) {
                event.preventDefault();
            }
        });

    const giam_gia = document.getElementById("giam-gia");
    const dac_biet = document.getElementById("dac-biet");

    dac_biet.addEventListener("change", function() {
        if (dac_biet.checked) {
            giam_gia.disabled = false; // Loại bỏ trạng thái disabled
        } else {
            giam_gia.disabled = true; // Đặt lại trạng thái disabled
        }
    });
</script>

</html>