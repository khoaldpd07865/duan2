
<div class="col py-3">
<blockquote class="blockquote text-right">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
<form action="index.php?action=listsanpham" method="post">
    <input type="text" class="btn btn-dark" name="kyw" id="" >
    <select name="iddm" class="btn btn-info" id="">
      <option value="0" selected>Tat Ca</option>
            <?php
              foreach($listdanhmuc as $danhmuc){
                  extract($danhmuc);
                  echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
              }
          ?>
                        
    </select>
    <input type="submit" name="listok" class="btn btn-warning" value="GO">

</form>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mã Hàng hóa</th>
      <th scope="col">Tên Hàng Hóa</th>
      <th scope="col">Đơn Giá </th>
      <th scope="col">Hình</th>
      <th scope="col">Ngày Khởi Hàng</th>
      <th scope="col">Mô Tả</th>
      <th scope="col">Địa Điểm</th>
      <th scope="col">iddm</th>
      <th scope="col">Thao tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($listsanpham as $sanpham) {
      extract($sanpham);
      $xoasp = "index.php?action=xoasp&ma_hanghoa=".$ma_hanghoa;
      $suasp = "index.php?action=suasp&ma_hanghoa=".$ma_hanghoa;
      echo '
      <tr>
        <td>' . $ma_hanghoa . '</td>
        <td>' . $ten_hanghoa . '</td>
        <td>' . $don_gia . '</td>
        <td><img src="../img/'.$hinh.'" style="height:80px;" alt="Lỗi"></td>
        <td>' . $ngay_khoihang . '</td>
        <td>' . $mo_ta . '</td>
        <td>' . $dia_diem . '</td>
        <td>' . $iddm . '</td>
        <td>
          <a href="' . $xoasp . '"><button type="button" class="btn btn-primary">Xóa</button></a>
          <a href="' . $suasp . '"><button type="button" class="btn btn-secondary">Sửa</button></a>
          
        </td>
      </tr>
      ';
    }
  
 
    ?>

  </tbody>
</table>
<a href="index.php?action=addsanpham" class="btn btn-warning">Thêm Mới</a>
<?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>

</div>