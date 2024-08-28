<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
include "../../model/taikhoan.php";

$idpro = $_REQUEST['idpro'];
     $list_bl= loadall_bl($idpro);
?>

<section style="background-color: #ad655f;">
  <div class="container my-5 py-5">
    <div class="row d-flex justify-content-center">
      <div class="col-md-12 col-lg-10">
        <div class="card text-dark">
          <div class="card-body p-4">
            <h4 class="mb-0">Recent comments</h4>
            <p class="fw-light mb-4 pb-2">Latest Comments section by users</p>

            <div class="d-flex flex-start">
            <?php foreach($list_bl as $bl){
                    
                    extract($bl);
                    $user=loadtt_user($id);
                echo ' <img class="rounded-circle shadow-1-strong me-3"
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(23).webp" alt="avatar" width="60"
                height="60" />
              <div>
                <h6 class="fw-bold mb-1">'.$user['user'].'</h6>
                <div class="d-flex align-items-center mb-3">
                  <p class="mb-0">
                  '.$ngay_bl.'
                    <span class="badge bg-primary">Pending</span>
                  </p>
                  <a href="#!" class="link-muted"><i class="fas fa-pencil-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-redo-alt ms-2"></i></a>
                  <a href="#!" class="link-muted"><i class="fas fa-heart ms-2"></i></a>
                </div>
                <p class="mb-0">
                '.$noi_dung.'
                </p>
              </div> ';
             };
     ?>
     <?php
     if(isset($_SESSION['user'])){

 ?>    
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
         <input type="hidden" name="idpro"  value="<?php echo $idpro;?>">
         <input type="text" name="comment" id="">
         <input type="submit" value="Gửi" name="gui">
     </form>
 <?php
     }else{
        echo '<div class="notification-dn"><h2> Bạn cần đăng nhập để bình luận</h2></div>';        
     }
 ?>
            </div>
         
         
          </div>

          <hr class="my-0" />

         

          <hr class="my-0" style="height: 1px;" />

         
          <hr class="my-0" />

        
        </div>
      </div>
    </div>
  </div>
  <?php
    if(isset($_REQUEST['gui'])&&($_POST['comment'])!=""){
        $noi_dung=$_POST['comment'];
        $id=$_SESSION['user']['id'];
        $ma_hh=$_POST['idpro'];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $ngay_bl=date("Y:m:d H:i:s A");

        insert_bl($noi_dung,$ma_hh,$id,$ngay_bl);
        header("Location: ".$_SERVER['HTTP_REFERER']);
    }

?>
</section>