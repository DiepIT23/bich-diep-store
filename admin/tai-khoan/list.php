<div class="row2">
  <div class="card-header text-black text-uppercase font-weight-bold text-center">
    <h1>DANH SÁCH TÀI KHOẢN</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php/?act=list-tk" method="POST">
      <div class="table-responsive">
        <table class="table table-bordered table-striped">
          <thead class="thead-dark">
            <tr>
              <th></th>
              <th>ID</th>
              <th>TÊN ĐĂNG NHẬP</th>
              <th>EMAIL</th>
              <th>SĐT</th>
              <th>VAI TRÒ</th>
            </tr>
          </thead>
          <tbody>
            <?php
              foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                // Chuyển đổi vai trò thành "admin" hoặc "khách hàng"
                $r = ($vai_tro == 1) ? 'admin' : 'khách hàng';
                echo '<tr>
                        <td><input type="checkbox" name="user_ids[]" value="'.$id_user.'" /></td>
                        <td>'.$id_user.'</td>
                        <td>'.$ten_user.'</td>
                        <td>'.$email.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$r.'</td>
                    </tr>';
              }
            ?>
          </tbody>
        </table>
      </div>

      <!-- Thêm nút Xóa các tài khoản đã chọn -->
      <div class="card-footer text-center">
      <button type="button" class="btn btn-primary btn-sm mr-2" id="select-all">Chọn tất cả</button>
       <button type="button" class="btn btn-secondary btn-sm mr-2" id="deselect-all">Bỏ chọn tất cả</button>
            
        </div>
    </form>
  </div>
</div>

<script>
    // JavaScript cho nút chọn tất cả và bỏ chọn
    document.getElementById('select-all').addEventListener('click', function() {
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = true);
    });

    document.getElementById('deselect-all').addEventListener('click', function() {
        document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => checkbox.checked = false);
    });
</script>