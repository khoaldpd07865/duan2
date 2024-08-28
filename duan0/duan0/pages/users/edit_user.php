<?php

    $imgpath="../img/".$hinh;
    if(is_file($imgpath)){
        $img="<img src='".$imgpath."' height='80px' width='100px' style='margin: -50px 30%' alt='không có hình'>";
    }else{
        $img="không có hình";
    }
?>
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">Edit Profile</h1>
      <hr>
	<div class="row">
      <!-- left column -->
      <div class="col-md-3">
        
      <?php 
                            if(isset($_SESSION['user'])&&is_array($_SESSION['user'])){
                                extract($_SESSION['user']);
                            }
                        ?>
        
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3>Personal info</h3>
        
        <form class="form-horizontal"  action="index.php?action=edit_user" enctype="multipart/form-data"  method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">Tên Đăng Nhập</label>
            <div class="col-lg-8">
              <input class="form-control" name="user" value="<?php if(isset($user)){echo $user;} ?>" type="text" disabled value="dey-dey">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="email" value="<?php if(isset($email)){echo $email;} ?>" value="bootdey">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Họ Và Tên</label>
            <div class="col-lg-8">
              <input class="form-control" name="ho_ten" type="text" value="<?php if(isset($ho_ten)){echo $ho_ten;} ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Số điện thoại</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php if(isset($sdt)){echo $sdt;} ?>" name="sdt" value="janesemail@gmail.com">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Địa Chỉ</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="dia_chi" value="<?php if(isset($dia_chi)){echo $dia_chi;} ?>">
            </div>
          </div>
          <div class="form-group">
          <h6>Upload a different photo...</h6>
          
          <input type="file" name="hinh" class="form-control">
          <?=$img?>
          
        </div>
          <input type="hidden" name="id" value="<?php echo $id ?>">
          <button type="submit" class="btn btn-primary" name="submit" >Cập nhật</button>
         
        </form>
    
        <?php 
                            if(isset($messageFromPHP)){
                                echo $messageFromPHP;
                            }
                        ?>
      </div>
  </div>
</div>
<hr>