
<div class="col py-3">
<blockquote class="blockquote text-right">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
<form action="index.php?action=listbill" method="post">
                    <input type="text" class="btn btn-dark" name="kyw">
                    <input type="submit" class="btn btn-danger" value="Tất cả" name="allsearch">
                    <input type="submit" class="btn btn-warning" name="search" value="Go">
                </form>
              <table class="table">
  <thead>
    <tr>
      <th scope="col">Mã đơn hàng </th>
      <th scope="col">Khách Hàng</th>
      <th scope="col">Số lượng hàng </th>
      <th scope="col">Giá trị đơn hàng</th>
      <th scope="col">Tình Trạng đơn hàng</th>
      <th scope="col">Thao Tác</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($listbill as $bill) {
      extract($bill);
      $suabill="index.php?action=suabill&id_bill=$id_bill";
      $sl_hh=get_sl_mh($id_bill);
      $ttdh=get_ttdh($status);
      $kh=$bill['ho_ten'].
      '<br>'.$bill['email'].
      '<br>'.$bill['dia_chi'].
      '<br>'.$bill['sdt'];
      echo '
      <tr>
        <td>TWC' .$id_bill. '</td>
        <td>' .$kh. '</td>
        <td>' .$sl_hh['sum(so_luong)']. '</td>
        <td>'.$total. '</td>
        <td>' .$ttdh. '</td>
        <td>
          <a href="' . $suabill . '"><button type="button" class="btn btn-primary">Sửa Đơn Hàng</button></a>

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