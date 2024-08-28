<?php
    if(is_array($sp)){
        extract($sp);
    }
    $imgpath="../img/".$hinh;
    if(is_file($imgpath)){
        $img="<img src='".$imgpath."' height='80px' width='100px' style='margin: -50px 30%' alt='không có hình'>";
    }else{
        $img="không có hình";
    }
?>
<div class="col py-3">


<form action="index.php?action=updatesp&ma_hanghoa='<?php echo $ma_hanghoa;?>'"   enctype="multipart/form-data" method="post">
    <?php
    ?>
                <select name="iddm" id="">
                        <?php
                            foreach($dm as $muc){
                                extract($muc);
                                if($iddm==$ma_loai)
                                    echo '<option selected value="'.$ma_loai.'">'.$ten_loai.'</option>';
                                else
                                    echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                            }
                        ?>
                </select>
                <?php 
                ?>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Mã Hàng Hóa </label>
                    <input type="text"  
                   name="ma_hanghoa" id="" value="<?php if(isset($ma_hanghoa)){echo $ma_hanghoa;} ?>"  class="form-control" id="exampleFormControlInput1" disabled id="" placeholder="name@example.com" >
                  </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name Danh Muc</label>
                    <input type="text"  
                   name="ten_hanghoa" id="" value="<?php if(isset($ten_hanghoa)){echo $ten_hanghoa;} ?>"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" >
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Đơn Giá</label>
                    <input type="number" value="<?php if(isset($don_gia)){echo $don_gia;} ?>"  name="don_gia" id=""  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Hình</label>
                    <input type="file" name="hinh" id=""  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    <?=$img?>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Ngày Khởi Hành</label>
                    <input type="date" name="ngay_khoihang" id=""  value="<?php if(isset($ngay_khoihang)){echo $ngay_khoihang;} ?>"  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Mô Tả</label>
                    <textarea name="mo_ta" id="" style="width: 100%" ><?php if(isset($mo_ta)){echo $mo_ta;} ?></textarea>

                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlInput1">Địa Điểm</label>
                    <input type="text" value="<?php if(isset($dia_diem)){echo $dia_diem;} ?>"  name="dia_diem" id=""  class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                  </div>

                        <input type="hidden" name="ma_hanghoa" value="<?=$ma_hanghoa?>">
                        <input type="submit" class="btn btn-warning" name="thaydoi" value="Thay đổi">
                        <?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>

                        <input type="reset" name="" class="btn btn-warning"  value="Nhập Lại">
                        <input type="submit" name="" class="btn btn-warning"  value="Danh sách">


              </form>
             
        </div>
