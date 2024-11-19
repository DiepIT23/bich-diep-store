function validateLoginForm(event) {
    event.preventDefault(); // Ngăn hành động submit mặc định

    const email = document.getElementById("login-email").value;
    const password = document.getElementById("login-password").value;

    // Regex kiểm tra email hợp lệ
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!email.match(emailRegex)) {
      alert("Email không hợp lệ. Vui lòng nhập đúng định dạng email.");
      return false;
    }

    if (password.length < 6) {
      alert("Mật khẩu phải có ít nhất 6 ký tự.");
      return false;
    }

    alert("Đăng nhập thành công!");
    // Tiến hành submit form hoặc các xử lý khác
    return true;
  }
  function validateRegisterForm(event) {
    event.preventDefault(); // Ngăn hành động submit mặc định

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    const email = document.getElementById("email").value;
    const phone = document.getElementById("phone").value;
    const dob = document.getElementById("dob").value;

    const usernameRegex = /^[a-zA-Z0-9_]{5,20}$/; // Tên đăng nhập từ 5-20 ký tự, không dấu, không ký tự đặc biệt
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    const phoneRegex = /^\d{10,12}$/; // Số điện thoại từ 10-12 số

    if (!username.match(usernameRegex)) {
      alert("Tên đăng nhập không hợp lệ. Tên phải từ 5-20 ký tự, không chứa ký tự đặc biệt.");
      return false;
    }

    if (password.length < 6) {
      alert("Mật khẩu phải có ít nhất 6 ký tự.");
      return false;
    }

    if (!email.match(emailRegex)) {
      alert("Email không hợp lệ. Vui lòng nhập đúng định dạng email.");
      return false;
    }

    if (!phone.match(phoneRegex)) {
      alert("Số điện thoại phải từ 10-12 số.");
      return false;
    }

    if (!dob) {
      alert("Vui lòng chọn ngày tháng năm sinh.");
      return false;
    }

    alert("Đăng ký thành công!");
    // Tiến hành submit form hoặc các xử lý khác
    return true;
  }