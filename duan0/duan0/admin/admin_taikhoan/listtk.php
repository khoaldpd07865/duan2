
<div class="col py-3">
<blockquote class="blockquote text-right">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã Tài Khoản</th>
      <th scope="col">Tên Đăng Nhập</th>
      <th scope="col">Mật Khẩu </th>
      <th scope="col">Hình </th>
      <th scope="col">Email</th>
      <th scope="col">Địa Chỉ</th>
      <th scope="col">Điện Thoại</th>
      <th scope="col">Vai Trò</th>
      <th scope="col">Kích Hoạt</th>
      <th scope="col">Thao Tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($listtaikhoan as $taikhoan) {
      extract($taikhoan);
      $xoatk = "index.php?action=xoatk&id=$id";
      $suatk = "index.php?action=updatetk&id=$id";
     
      echo '
      <tr>
        <td>' . $id . '</td>
        <td>' . $user. '</td>
        <td>' . $mat_khau . '</td>
        <td ><img src="./../img/'.$hinh.'" style="height:80px;" alt="Lỗi"></td>
        <td>' . $email . '</td>
        <td>' . $dia_chi . '</td>
        <td>' . $sdt . '</td>
        <td>' . $vai_tro . '</td>
        <td>' . $kich_hoat. '</td>
        <td>
          <a href="' . $xoatk . '"><button type="button" class="btn btn-primary">Xóa</button></a>
          <a href="' . $suatk . '"><button type="button" class="btn btn-secondary">Sửa</button></a>
        </td>
      </tr>
      ';
    }
  
 
    ?>

  </tbody>
</table>
<?php   if(isset($thongbao)){
        echo $thongbao;
    }

?>

</div>