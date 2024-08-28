<?php
session_start();
include "../../model/pdo.php";
include "../../model/binhluan.php";
include "../../model/taikhoan.php";

$idpro = $_REQUEST['idpro'];
     $list_bl= loadall_bl($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../MDB5-STANDARD-UI-KIT-Free-6.4.2/css/mdb.min.css" /> 
  <link rel="stylesheet" href="../fontawesome/fontawesome-free-6.4.2-web/css/all.css" /> 
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="../bootstrap/css/css.css">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
<body>
<div class="container mt-5">

<div class="row  d-flex justify-content-center">

    <div class="col-md-8">

        <div class="headings d-flex justify-content-between align-items-center mb-3">
            <h5>Unread comments(6)</h5>

            <div class="buttons">

                <span class="badge bg-white d-flex flex-row align-items-center">
                    <span class="text-primary">Comments "ON"</span>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
                      
                    </div>
                </span>
                
            </div>
            
        </div>



        <div class="card p-3">
        <?php foreach($list_bl as $bl){
                    
                    extract($bl);
                    $user=loadtt_user($id);

                    echo ' <div class="d-flex justify-content-between align-items-center">
          
                    <div class="user d-flex flex-row align-items-center">
          
          
          
                      <img src="https://i.imgur.com/hczKIze.jpg" width="30" class="user-img rounded-circle mr-2">
                      <span><small class="font-weight-bold text-primary">'.$user['user'].'</small> <small class="font-weight-bold">'.$noi_dung.'</small></span>
                        
                    </div>
          
          
                    <small>'.$ngay_bl.'</small>
          
                    </div>';
                 };

             
            ?>
           


           <div class="form-comment">
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

</div>

</body>

</html>


