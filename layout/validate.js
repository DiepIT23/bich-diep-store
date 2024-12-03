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


}
function validateForm() {
    const tenUser = document.getElementById('username').value.trim();
    const tenDangNhap = document.getElementById('firstname').value.trim();
    const password = document.getElementById('password').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const diaChi = document.getElementById('address').value.trim();
    const hinhAnh = document.getElementById('uploadImage').value;

    // Kiểm tra tên đầy đủ
    if (tenUser.length < 3) {
        alert('Vui lòng nhập họ và tên (tối thiểu 3 ký tự)!');
        return false;
    }

    // Kiểm tra tên đăng nhập
    if (tenDangNhap.length < 3) {
        alert('Vui lòng nhập tên đăng nhập (tối thiểu 3 ký tự)!');
        return false;
    }

    // Kiểm tra mật khẩu
    if (password.length < 6) {
        alert('Mật khẩu phải có ít nhất 6 ký tự!');
        return false;
    }

    // Kiểm tra email
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!email || !emailRegex.test(email)) {
        alert('Vui lòng nhập email hợp lệ!');
        return false;
    }

    // Kiểm tra số điện thoại
    const phoneRegex = /^[0-9]{10,15}$/;
    if (!phone || !phoneRegex.test(phone)) {
        alert('Vui lòng nhập số điện thoại hợp lệ (10-15 chữ số)!');
        return false;
    }

    // Kiểm tra địa chỉ
    if (diaChi.length < 5) {
        alert('Vui lòng nhập địa chỉ đầy đủ (tối thiểu 5 ký tự)!');
        return false;
    }

    // Kiểm tra tệp hình ảnh (không bắt buộc)
    if (hinhAnh && !/\.(jpg|jpeg|png|gif)$/i.test(hinhAnh)) {
        alert('Chỉ chấp nhận tệp hình ảnh với định dạng JPG, JPEG, PNG, hoặc GIF!');
        return false;
    }

    return true;
}

// validate trang thanh toán
document.getElementById("checkoutForm").addEventListener("submit", function (e) {
    e.preventDefault(); // Ngăn chặn form gửi đi

    // Lấy giá trị từ các trường
    let fullname = document.getElementById("fullname").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let email = document.getElementById("email").value.trim();
    let diachi = document.getElementById("diachi").value.trim();
    // let district = document.getElementById("district").value.trim();
    // let ward = document.getElementById("ward").value.trim();

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
    if (diachi === "") {
        isValid = false;
        document.getElementById("error-diachi").innerText = "Vui lòng nhập Địa Chỉ";
    } else {
        document.getElementById("error-diachi").innerText = "";
    }

    // // Kiểm tra Quận/Huyện
    // if (district === "") {
    //     isValid = false;
    //     document.getElementById("error-district").innerText = "Vui lòng nhập Quận/Huyện";
    // } else {
    //     document.getElementById("error-district").innerText = "";
    // }

    // // Kiểm tra Xã/Phường
    // if (ward === "") {
    //     isValid = false;
    //     document.getElementById("error-ward").innerText = "Vui lòng nhập Xã/Phường";
    // } else {
    //     document.getElementById("error-ward").innerText = "";
    // }

    // Nếu không có lỗi, gửi form
    if (isValid) {
        alert("Thông tin hợp lệ. Đơn hàng của bạn đã được gửi!");
        this.submit();
    }
});