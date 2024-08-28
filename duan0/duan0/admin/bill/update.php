

<div class="col py-3">
            <form action="index.php?action=suabill&id_bill=<?=$id_bill?>" method="post">
               
                 
                <div class="form-group">
                    <label for="exampleFormControlInput1">Mã Bill: <?=$id_bill?></label>
                    
                  </div> <br>
                    <select name="ttdh"  class="btn btn-light"id="">
                        <?php
                                                    $i=0;

                        $option=array("Đơn hàng mới","Đang xử lí","Đã giao","Đã bị boom");
                         foreach($option as $op){
                            if($i==$status){
                                echo'<option  selected  value="'.$i.'">'.$op.'</option> ';

                            } else{
                                echo '<option  value="'.$i.'"> '.$op.'</option>';
                            }
                            $i++;
                         }
                        ?>
                    </select>  
                    
                        <div class="mb10"> <br>
                   <!--     <input type="hidden" value="<?=$id_bill?>" name="id">-->
                        <input type="submit"  class="btn btn-warning" name="thaydoi" value="Thay đổi">
                        <a href="index.php?action=listbill"><input type="button"  class="btn btn-warning" value="Danh sách"></a>
                    </div>
              </form>
              <?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>
        </div>
    