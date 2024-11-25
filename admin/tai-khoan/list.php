<div class="row2">
  <div class="row2 font_title">
    <h1>DANH SÁCH TÀI KHOẢN</h1>
  </div>
  <div class="row2 form_content">
    <form action="index.php/?act=list-tk" class="d-flex justify-content-center mb-4" method="POST">
      <div class="row2 mb10 formds_loai">
        <table>
          <tr>
            <th></th>
            <th>ID</th>
            <th>TÊN ĐĂNG NHẬP</th>
            <th>MẬT KHẨU</th>
            <th>EMAIL</th>
            <th>SĐT</th>
            <th>VAI TRÒ</th>
          </tr>
          <?php
            foreach($listtaikhoan as $taikhoan){
              extract($taikhoan);
            //   $suatk="index.php?act=sua_tk&id=".$id;
              $xoatk="index.php?act=xoa_tk&id_tk=".$id_tk;
              if($vai_tro==1){
                $r = 'admin';
              }
              if($vai_tro==0){
                $r = 'ten_user';
              }
              echo '<tr>
                <td><input type="checkbox" name="" id="" /></td>
                    <td>'.$id_user.'</td>
                    <td>'.$ten_user.'</td>
                    <td>'.$mat_khau.'</td>
                    <td>'.$email.'</td>
                    <td>'.$sdt.'</td>
                    <td>'.$vai_tro.'</td>
                <td>                    
                </td>
            </tr>';
            }
          ?>
        </table>
      </div>
      <div class="row mb10">
        <input class="mr20" type="button" id="selectAllBtn" value="CHỌN TẤT CẢ" />
        <input class="mr20" type="button" id="selectAllBtn" value="BỎ CHỌN TẤT CẢ" />
      </div>
    </form>
  </div>
</div>