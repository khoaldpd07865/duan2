

<div class="col py-3">
            <form action="index.php?action=updatedanhmuc" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">ID</label>
                  <input type="text" name="ma_loai" value="<?php if (isset($ma_loai)) echo $ma_loai;
                   ?>    " disabled id=""  class="form-control" id="exampleFormControlInput1" > 
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name Danh Muc</label> 
                    <input type="text" <?php if (isset($ten_loai)) {
                        echo $ten_loai;
                    } ?>  name="ten_loai" id=""  class="form-control" id="exampleFormControlInput1" ><br>
                  </div>
                        <input type="hidden" name="ma_loai" value="<?php  echo $ma_loai ?>">
                            <input type="submit" name="thaydoi" class="btn btn-warning"  value="Thay đổi"> 
                        <input type="reset" name="" class="btn btn-warning"  value="Nhập Lại">
                        <input type="submit" name="" class="btn btn-warning"  value="Danh sách">


              </form>
              <?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>
        </div>
    