function validateLogin() {
  const username = document.getElementById('username').value.trim();
  const password = document.getElementById('password').value.trim();

  if (!username) {
      alert('Vui lòng nhập tên đăng nhập!');
      return;
  }
  if (!password) {
      alert('Vui lòng nhập mật khẩu!');
      return;
  }

  alert('Đăng nhập thành công!');
}
  function validateForm() {
    const username = document.getElementById('username').value.trim();
    const password = document.getElementById('password').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const firstname = document.getElementById('firstname').value.trim();
    const lastname = document.getElementById('lastname').value.trim();
    const birthdate = document.getElementById('birthdate').value;

    if (!username) {
        alert('Vui lòng nhập tên đăng nhập!');
        return;
    }
    if (!password) {
        alert('Vui lòng nhập mật khẩu!');
        return;
    }
    if (!email || !email.includes('@')) {
        alert('Vui lòng nhập email hợp lệ!');
        return;
    }
    if (!phone || isNaN(phone)) {
        alert('Vui lòng nhập số điện thoại hợp lệ!');
        return;
    }
    if (!firstname) {
        alert('Vui lòng nhập tên!');
        return;
    }
    if (!lastname) {
        alert('Vui lòng nhập họ!');
        return;
    }
    if (!birthdate) {
        alert('Vui lòng nhập ngày sinh!');
        return;
    }

    alert('Đăng ký thành công!');
}
// validate trang thanh toán
document.getElementById("checkoutForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Ngăn chặn form gửi đi

    // Lấy giá trị từ các trường
    let fullname = document.getElementById("fullname").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let email = document.getElementById("email").value.trim();
    let city = document.getElementById("city").value.trim();
    let district = document.getElementById("district").value.trim();
    let ward = document.getElementById("ward").value.trim();

    // Biến kiểm tra lỗi
    let isValid = true;

    // Kiểm tra Họ và Tên
    if (fullname === "") {
        isValid = false;
        document.getElementById("error-fullname").innerText = "Vui lòng nhập Họ và Tên";
    } else {
        document.getElementById("error-fullname").innerText = "";
    }

    // Kiểm tra Số Điện Thoại
    if (phone === "" || !/^\d{10}$/.test(phone)) {
        isValid = false;
        document.getElementById("error-phone").innerText = "Vui lòng nhập số điện thoại hợp lệ (10 số)";
    } else {
        document.getElementById("error-phone").innerText = "";
    }

    // Kiểm tra Email
    if (email === "" || !/^\S+@\S+\.\S+$/.test(email)) {
        isValid = false;
        document.getElementById("error-email").innerText = "Vui lòng nhập email hợp lệ";
    } else {
        document.getElementById("error-email").innerText = "";
    }

    // Kiểm tra Tỉnh/Thành Phố
    if (city === "") {
        isValid = false;
        document.getElementById("error-city").innerText = "Vui lòng nhập Tỉnh/Thành Phố";
    } else {
        document.getElementById("error-city").innerText = "";
    }

    // Kiểm tra Quận/Huyện
    if (district === "") {
        isValid = false;
        document.getElementById("error-district").innerText = "Vui lòng nhập Quận/Huyện";
    } else {
        document.getElementById("error-district").innerText = "";
    }

    // Kiểm tra Xã/Phường
    if (ward === "") {
        isValid = false;
        document.getElementById("error-ward").innerText = "Vui lòng nhập Xã/Phường";
    } else {
        document.getElementById("error-ward").innerText = "";
    }

    // Nếu không có lỗi, gửi form
    if (isValid) {
        alert("Thông tin hợp lệ. Đơn hàng của bạn đã được gửi!");
        this.submit();
    }
});