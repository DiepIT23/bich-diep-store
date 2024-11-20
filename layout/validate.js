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