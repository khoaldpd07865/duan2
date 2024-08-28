
<?php
   ob_start();
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/cart.php";
    include "model/sanpham.php";
    include "model/taikhoan.php";
    include "./global.php";
    if(!isset($_SESSION['mycart'])){
        $_SESSION['mycart']=[];
    }

$listsp = loadall_sanpham_home();
$listdanhmuc = loadall_danhmuc();
$listsanphamtop10=loadall_sanpham_top10();

include "layouts/header.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case "chitietsp":
            if(isset($_GET['ma_hanghoa'])&&($_GET['ma_hanghoa'])>0){
                $ma_hanghoa=$_GET['ma_hanghoa'];
                $spct=loadone_sanpham($ma_hanghoa);
                $iddm=$_GET['iddm'];
                $spcungloai=loadall_sanpham_cungloai($iddm,$ma_hanghoa);
            }
            include "./pages/sanphamct.php";
                break;
                case "sanpham":
                    if(isset($_POST['kyw'])&&($_POST['kyw'])!=""){
                         $kyw=$_POST['kyw'];

                    }else{
                        $kyw="";
                    }
                    if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                        $iddm=$_GET['iddm'];
                    
                    }
                    else{
                      $iddm=0;
                    }
                    $dssp=loadall_sanpham($kyw,$iddm);
                    $tendm=load_ten_dm($iddm);
                    include "./pages/sanpham.php";
                    break;
                    case "dangki":
                        if(isset($_POST['submit'])&&($_POST['email'])!=""&&($_POST['user'])!=""&&($_POST['mat_khau'])!=""){
                            $mat_khau=$_POST['mat_khau'];
                            $user=$_POST['user'];
                            $email=$_POST['email'];
                            $confirm=$_POST['confirm-pass'];
                            $tb=insert_user($user,$email,$mat_khau,$confirm);
                            $messageFromPHP="Đăng Ký thành công";
                        }

                        include "./pages/users/login.php";
                        break;

                        case "dangnhap":
                            if(isset($_POST['submit']) && ($_POST['user'])!="" && ($_POST['mat_khau'])!="") {
                                $mat_khau = $_POST['mat_khau'];
                                $user = $_POST['user'];
                                $arrcheckuser = check_user($user, $mat_khau);
                                if(is_array($arrcheckuser)) {
                                    $kich_hoat = $arrcheckuser['kich_hoat'];
                                    if($kich_hoat != 0) {
                                        $messageFromPHP = "Tài khoản đang bị vô hiệu Vui lòng liên hệ với admin để được hỗ trợ!";
                                        include "./pages/home.php";
                                    } else {

                                        $_SESSION['user'] = $arrcheckuser;

                                        header("Location:index.php");
                                    }
                                } else {
                                    $messageFromPHP = "Đăng nhập thất bại";
                                    include "./pages/home.php";
                                }  
                            }
                            break;  
                            case "edit_user":
                                $id=$_SESSION['user']['id'];
                                $hinhphaixoa=loadtt_user($id);
                                $xoahinh=$hinhphaixoa['hinh'];
                                if(isset($_POST['submit'])&&(($_POST['email'])!=""&&($_POST['ho_ten'])!="")){
                                    $id=$_POST['id'];
                                    $email=$_POST['email'];
                                    $ho_ten=$_POST['ho_ten'];
                                    $hinh=$_FILES['hinh']['name'];
                                    $dia_chi=$_POST['dia_chi'];
                                    $sdt=$_POST['sdt'];
                                    if($hinh!=""){
                                        unlink('./img/'.$xoahinh);
                                    }     
                                    update_user($id,$ho_ten,$email,$hinh,$dia_chi,$sdt);
                                    if(is_dir("./img")){
                                        move_uploaded_file($_FILES['hinh']['tmp_name'],"./img/".$_FILES['hinh']['name']);
                                    }else{
                                        mkdir("./img");
                                        move_uploaded_file($_FILES['hinh']['tmp_name'],"./img/".$_FILES['hinh']['name']);
                                    }
                                    $_SESSION['user']=loadtt_user($id);
                                    $messageFromPHP = "Sửa Thành Công!";

          
                                }
                                include "./pages/users/edit_user.php";
                                break;
                                case "thoat":
                                    session_unset();
                                    $thoat = "Thoát Thành Công!";

                                    header("Location: index.php");
                                    break;
                                  
                                case "doimkc":
                                        if(isset($_POST['submit'])){
                                            $id=$_POST['id'];
                                            $mat_khau=$_POST['mat_khau'];
                                            $mat_khau_moi=$_POST['new-pass'];
                                            $xacnhan_mk=$_POST['new-pass-again'];
                                            if(($mat_khau=="")){
                                                $messageFromPHP="Không để trống mật khẩu cũ";
                                            }else if($mat_khau_moi==""){
                                                $tb="Không để trống mật khẩu mới";
                                            }else if($xacnhan_mk==""){
                                                $messageFromPHP="Không để trống xác nhận mật khẩu mới";
                                            }else if($mat_khau_moi==$xacnhan_mk){
                                                $sl=check_doimk($id,$mat_khau);
                                                if($sl==1){
                                                    update_mk($id,$mat_khau_moi);
                                                    $messageFromPHP="Cập nhật thành công";
                                                }else{
                                                    $messageFromPHP="Mật khẩu cũ không chính xác";
                                                }
                                            }else{
                    
                                                $messageFromPHP="Mật khẩu mới và xác nhận ko khớp";
                                            }
                                        }else{
                                        }
                                        include "./pages/users/doimk.php";
                                        break;   
                                        case "quenmk":
                                            if(isset($_POST['submit'])&&($_POST['email'])!=""){
                                                    $email=htmlspecialchars($_POST['email']);
                                                    $check=check_email_guive($email);
                                                    if(is_array($check)){
                                                        $Pass=$check['mat_khau'];
                                                        goimail($email,$Pass);
                                                        $messageFromPHP="Gửi về thành công";
                                                    }else{
                                                        $messageFromPHP="Mail này chưa được đăng kí";
                                                    }     
                                            }
                                            include "./pages/users/quenmk.php";
                                            break;
                                            case "addcart":
                                                if(isset($_REQUEST['submit'])){
                                                    $hinh=$_POST['image'];
                                                    $ten_hanghoa=$_POST['ten_hanghoa'];
                                                    $don_gia=$_POST['gia_hanghoa'];
                                                    $ma_hanghoa=$_POST['ma_hanghoa'];
                                                    $ngay_khoihang=$_POST['ngay_khoihang'];
                                                    $dia_diem=$_POST['dia_diem'];
                                                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                    $sl=1;
                                                    $thanhtien=$sl*$don_gia;
                                                    $arrsp=array($hinh,$ten_hanghoa,$don_gia,$sl,$thanhtien,$ma_hanghoa,$ngay_khoihang,$dia_diem);
                                                    array_push($_SESSION['mycart'],$arrsp);
                                                    include "./pages/card/viewcart.php";
                                                    break; 
                                                    
                                                } 
                                               
                                                case "xoacart":
                                                    if(isset($_GET['ma_cart'])){
                                                        
                                                        array_splice($_SESSION['mycart'],$_GET['ma_cart'],1);
                                                        $messageFromPHP = "Xóa Thành Công!";
                                                    }else{
                                                        $_SESSION['mycart']=[];
                                                    }
                                                    include "./pages/card/viewcart.php";
                                                    break; 
                                                    case "bill":

                                                        include "./pages/card/bill.php";
                                                        break;
                                                        case "billconfirm":
                                                            if(isset($_POST['submit'])){
                                                                if($_SESSION['user']){
                                                                    $id=$_SESSION['user']['id'];
                                                                }else{
                                                                    $id=0;
                                                                }
                                                                $ho_ten=$_POST['ho_ten'];
                                                                $email=$_POST['email'];
                                                                $dia_chi=$_POST['dia_chi'];
                                                                $pttt=$_POST['pttt'];
                                                                $sdt=$_POST['sdt'];
                                                                date_default_timezone_set('Asia/Ho_Chi_Minh');
                                                                $ngay_dat_hang=date("Y-m-d H:i:s A");
                                                                $total=tongdonhang();
                                                                $id_bill=insert_bill($ho_ten,$email,$dia_chi,$sdt,$pttt,$total,$ngay_dat_hang,$id);
                                                                foreach($_SESSION['mycart'] as $cart){
                                                                    insert_cart($_SESSION['user']['id'],$cart[5],$cart[0],$cart[1],$cart[2],$cart[3],$cart[4],$cart[6],$cart[7],$id_bill);                            
                                                                     //5 ma hang hoa/0 hinh/ 1 TEN HANG HOA/2 don gia/3 so luong/4 thanh tien
                                                                }
                                                                $_SESSION['mycart']=[];
                                                            }
                                                        $bill=loadone_bill($id_bill);
                                                        $listcart=loadall_cart($id_bill);
                                                        include "./pages/card/billconfirm.php";
                                                        break;
                                                        case "mybill":
                                                            $listbill=loadall_bill($_SESSION['user']['id']);
                                                            include "./pages/card/mybill.php";
                                                            break;
                                                           
        case 'contact':
            include './pages/contact.php';
            break;
        case 'about':
            include './pages/about.php';
            break;
        case 'login':
            include './pages/users/login.php';
            break;
        case 'contract':
            include './pages/contact.php';
            break;
        case 'signup':
            include './pages/users/signup.php';
            break;

        default:
            include './pages/home.php';
            break;
    }
} else {
    include './pages/home.php';
}
?>
<script type="text/javascript">
    // JavaScript để hiển thị alert dựa trên giá trị PHP
    var messageFromPHP = "<?php echo $messageFromPHP; ?>";
    
    // Kiểm tra nếu giá trị không rỗng thì hiển thị alert
    if (messageFromPHP !== "") {
        alert(messageFromPHP);
    }
</script>
<?php include './layouts/footer.php' ?>