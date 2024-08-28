
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">Edit Profile</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <?php 
                if(isset($_SESSION['user']) && is_array($_SESSION['user'])){
                    extract($_SESSION['user']);
                }
            ?>
        </div>
        
        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert"></a> 
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            <h3>Personal info</h3>
            
            <form class="form-horizontal" action="index.php?action=doimkc" method="post">
            <div class="form-group">
                    <label class="col-lg-3 control-label">Mật Khẩu Cũ</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="password" name="mat_khau" >
                    </div>
                </div>
               
                <div class="form-group">
                    <label class="col-lg-3 control-label">Mật Khẩu Mới </label>
                    <div class="col-lg-8">
                        <input class="form-control" type="password" name="new-pass" >
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nhập Lại Mật Khẩu Mới</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="password" name="new-pass-again">
                    </div>
                </div>
                <input type="hidden"  name="id" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-primary" name="submit">Cập nhật</button>
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
