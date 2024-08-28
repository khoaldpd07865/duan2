<div class="col py-3">
<blockquote class="blockquote text-right">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>
<table class="table">
    
  <thead>
  <tr>
      <th scope="col">Mã Loại</th>
      <th scope="col">Tên Loại</th>
      <th scope="col">Hành Động</th>
    </tr>
    <?php  foreach($listdanhmuc as $danhmuc){
      extract($danhmuc);
      $xoadanhmuc="index.php?action=xoadm&ma_loai=$ma_loai";
      $suadanhmuc="index.php?action=suadm&ma_loai=$ma_loai";

    echo' 
    <tr>
      <td>'.$ma_loai.'</td>
      <td>'.$ten_loai.'</td>
      <td><a href="'.$xoadanhmuc.'"><button type="button" class="btn btn-primary">Xóa </button></a>
      <a href="'.$suadanhmuc.'"> <button type="button" class="btn btn-secondary">Sửa</button></td></a>
      <?php
     
  ?>
    </tr>
    
';}
    ?>

  </thead>
  <?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>
</table>

</div>