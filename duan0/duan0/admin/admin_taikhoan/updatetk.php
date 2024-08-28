

<div class="col py-3">
            <form action="index.php?action=updatetk" method="post">
               
                 
                <div class="form-group">
                    <label for="exampleFormControlInput1">Vai Trò <?$vai_tro?></label>
                  </div>
                    <select name="vai_tro" class="btn btn-light" id="">
                        <?php
                        $option=array("Người dùng","Quản trị viên");
                         foreach($option as $op){
                            if($i==$vai_tro){
                                echo'<option  selected value="'.$i.'">'.$op.'</option>';

                            } else{
                                echo '<option value="'.$i.'"> '.$op.'</option>';
                            }
                            $i++;
                         }
                        ?>
                    </select>  
                    <div class="form-group">
                    <label for="exampleFormControlInput1">Kích Hoạt <?$kich_hoat?></label>
                  </div>
                  <select name="kich_hoat" class="btn btn-light" id="" >
                            <?php
                            $i=0;
                                $option_kh=array("Đang hiện hành","Vô hiệu hoá");
                                foreach($option_kh as $op){
                                    if($i==$kich_hoat){
                                        echo '<option  selected value="'.$i.'">'.$op.'</option > '; 
                                    }else{
                                        echo '<option value="'.$i.'">'.$op.'</option>';
                                    }
                                    $i++;
                                }
                            ?>
                            
                        </select>  
                        <div class="mb10"> <br>
                        <input type="hidden" value="<?=$id?>" name="id">
                        <input type="submit" name="thaydoi" class="btn btn-warning" value="Thay đổi">
                        <a href="index.php?act=dskh"><input type="button" class="btn btn-warning" value="Danh sách"></a>
                    </div>
              </form>
              <?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>
        </div>
    