
<div class="col py-3">
<blockquote class="blockquote text-right">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>

              <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã Bình Luận </th>
      <th scope="col">Nội Dung</th>
      <th scope="col">Mã Hàng Hóa </th>
      <th scope="col">Mã Khách Hàng</th>
      <th scope="col">Ngày Bình Luận</th>
      <th scope="col">Thao Tác</th>
 
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($list_bl as $bl) {
      extract($bl);
      $xoabl="index.php?action=xoabl&ma_bl=$ma_bl";
      echo '
      <tr>
        <td>' .$ma_bl. '</td>
        <td>' .$noi_dung. '</td>
        <td>' .$id. '</td>
        <td>'.$ma_hh. '</td>
        <td>' .$ngay_bl. '</td>
        <td>
          <a href="' . $xoabl . '"><button type="button" class="btn btn-primary">Xóa</button></a>
        </td>
      </tr>
      ';
    }
  
 
    ?>

  </tbody>
</table>
<input type="submit" name="thaydoi" class="btn btn-warning" value="Thêm mới">
<?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>

</div>