
<div class="col py-3">
<blockquote class="blockquote text-right">
  <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
  <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
</blockquote>

              <table class="table">
  <thead>
    <tr>
      <th scope="col">STT </th>
      <th scope="col">Loại Hàng</th>
      <th scope="col">Số lượng </th>
      <th scope="col">Giá Thấp Nhất</th>
      <th scope="col">Giá cao nhất</th>
      <th scope="col">Giá trung bình</th>
    </tr>
  </thead>
  <tbody>
    <?php
       $i=1;
       foreach($thongke as $ke){
           // extract($ke);
           // $suabill="index.php?act=suabill&id_bill=$id_bill";
           // $xoabill="index.php?act=xoabill&id_bill=$id_bill";
           if($ke[3]!=""){  
               $ke[3].=" VNĐ";
           }
           if($ke[2]!=""){  
               $ke[2].=" VNĐ";
           }
           $ke[4]=round($ke[4]);
           if($ke[4]!=0){  
               $ke[4].=" VNĐ";
           }else{
               $ke[4]="";
           }
      
           echo '<tr>
                                <td>'.$i.'</td>
                                <td>'.$ke[0].'</td>
                                <td>'.$ke[1].'</td>
                                <td>'.$ke[2].'</td>
                                <td>'.$ke[3].'</td>
                                <td>'.$ke[4].'</td>
                                </tr>';
                            $i++;
        }?>
  </tbody>
</table>
<a href="index.php?action=bieudotk"><input type="button" class="btn btn-light" value="Biểu đồ"></a>  

<?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>

</div>