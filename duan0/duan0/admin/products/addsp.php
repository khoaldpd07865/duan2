<div class="col py-3">
                        
             
    <form action="index.php?action=addsanpham" enctype="multipart/form-data" method="post">

    <select  class="btn btn-light" name="iddm" id="">
                        <?php
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$ma_loai.'">'.$ten_loai.'</option>';
                            }
                        ?>
                        
                        </select>
    <div class="form-group">
            <label for="exampleFormControlInput1">ID</label>
            <input type="text" name="ma_hanghoa" disabled id="" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="form-group">
            <label for="exampleFormControlInput1">Name Sản Phẩm</label>
            <input type="text" name="ten_hanghoa" class="form-control" id="exampleFormControlInput1" >
        </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">   Đơn Giá</label> <br>
                <input type="number"  name="don_gia" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Ngày Khởi Hành</label><br>
                <input type="date"  name="ngay_khoihang" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Hình ảnh</label><br>
                <input type="file"  name="hinh" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Mô Tả</label><br>
                <textarea name="mo_ta"  name="mo_ta" id="" ></textarea>

            </div>
            <div class="form-group">
            <label for="exampleFormControlInput1">Địa Điểm</label><br>
            <input type="text" name="dia_diem"  name="dia_diem" class="form-control" id="exampleFormControlInput1" ><br>
        </div>
        <input type="hidden" name="ma_hanghoa" value="<?php echo $ma_hanghoa ?>">
        <input type="submit" name="themmoi" class="btn btn-warning" value="Thêm mới">

        <input type="submit" name="thaydoi" class="btn btn-warning" value="Thêm mới">
        <a href="index.php?action=listsanpham"> <input type="button" class="btn btn-warning" value="List danh muc">
        </a>

    </form>
 
</div>
<?php

if(isset($_POST['themmoi'])) {
    $ten_hanghoa = $_POST['ten_hanghoa'];
    $mo_ta = $_POST['mo_ta'];
    $dia_diem = $_POST['dia_diem'];
    $don_gia = $_POST['don_gia'];
    date_default_timezone_set("Asia/Ho_Chi_Minh");
    $ngay_khoihang = date("Y:m:d H:i:s A");
    $iddm = $_POST['iddm'];
    $hinh=$_FILES['hinh']['name'];
    $target_dir ="../upload/";
    $target_file=$target_dir . basename($_FILES["hinh"]["name"]);
    if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
       // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
       // echo "Sorry, there was an error uploading your file.";
      }
      insert_sanpham($ten_hanghoa,$don_gia,$hinh,$ngay_khoihang,$mo_ta,$dia_diem,$iddm);
  
    $listdanhmuc=loadall_danhmuc(); 
if(is_dir(__DIR__."/../../img")){
    move_uploaded_file($_FILES['hinh']['tmp_name'],__DIR__.'/../../img/'.$_FILES['hinh']['name']);
}else{
    mkdir(__DIR__."/../../img");
    move_uploaded_file($_FILES['hinh']['tmp_name'],__DIR__."/../../img/".$hinh);
    
}
}


?>
    