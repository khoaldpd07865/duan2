<?php include "../model/pdo.php";
 include '../model/danhmuc.php';
 include '../model/sanpham.php';
 include '../model/taikhoan.php';
 include '../model/binhluan.php';
 include '../model/cart.php';

include './layouts/header.php';

?>

<?php if (isset($_GET['action'])) {
    
    $action = $_GET['action'];
    switch ($action) {
        case 'products':
            include './pages/products/index.php';
            break;
        case 'addbl':
            include '../admin/category/update.php';
            break;
        case "adddanhmuc":
            if (isset($_POST['themmoi']) && empty($_POST['ten_loai']) == false) {
                $ten_loai = $_POST['ten_loai'];
                $messageFromPHP = "Thêm Danh Mục  Thành Công!";

                insert_danhmuc($ten_loai);
            }

            include '../admin/category/adddm.php';
            break;

           
        case "listdanhmuc":
            $listdanhmuc = loadall_danhmuc();
            include '../admin/category/listdm.php';
            break;
        case "suadm":
            if (isset($_GET['ma_loai']) && $_GET['ma_loai'] > 0) {
                $ma_loai = $_GET['ma_loai'];
                $dn = loadone($ma_loai);

            }
            include "../admin/category/update.php";
            break;
        case "xoadm":
            if (isset($_GET['ma_loai']) && $_GET['ma_loai'] > 0) {
                $ma_loai = $_GET['ma_loai'];
                delete_danhmuc($ma_loai);
                $messageFromPHP = "Xóa Danh Mục Thành Công!";

                # code...
            }
            
            $listdanhmuc = loadall_danhmuc();
            include "../admin/category/listdm.php";
            break;
        case "updatedanhmuc":
            if (isset($_POST['thaydoi']) && empty($_POST['ten_loai']) == false) {
                $ten_loai = $_POST['ten_loai'];
                $ma_loai = $_POST['ma_loai'];
                update_danhmuc($ten_loai, $ma_loai);
                $messageFromPHP = "Sửa Danh Mục  Thành Công!";


            }
            $listdanhmuc = loadall_danhmuc();
            include '../admin/category/listdm.php';
            break;
             
        case "addsanpham":       
             $listdanhmuc=loadall_danhmuc();
            include "../admin/products/addsp.php";
            break;
        case "listsanpham":
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $kyw=$_POST['kyw'];
                $iddm=$_POST['iddm'];
            }else{
                $kyw="";
                $iddm=0;
            }
            $listdanhmuc=loadall_danhmuc();
            $listsanpham=loadall_sanpham($kyw,$iddm);           
            include '../admin/products/listsp.php';
            break;
        case "xoasp":
            if (isset($_GET['ma_hanghoa']) && $_GET['ma_hanghoa'] > 0) {
                $ma_hanghoa = $_GET['ma_hanghoa'];
                $messageFromPHP = "Xóa Danh Mục  Thành Công!";
                delete_sanpham($ma_hanghoa);

                # code...
            }
            $listsanpham=loadall_sanpham();
            include '../admin/products/listsp.php';
            break;
        case "suasp": 
                $ma_hanghoa=$_GET['ma_hanghoa'];
                $sp=loadone_sanpham($ma_hanghoa);
                $dm=loadall_danhmuc();
            include "./products/update.php";
            break;
            case "updatesp":
                $ma_hanghoa=$_GET['ma_hanghoa'];
                $spcu=loadone_sanpham($ma_hanghoa);
                $xoahinh=$spcu['hinh'];
                if(isset($_POST['thaydoi'])){
                    $ten_hanghoa=$_POST['ten_hanghoa'];
                    $don_gia=$_POST['don_gia'];
                    $hinh=$_FILES['hinh']['name'];
                    $mo_ta=$_POST['mo_ta'];
                    $ma_hanghoa=$_POST['ma_hanghoa'];
                    $dia_diem=$_POST['dia_diem'];
                    $ngay_khoihang=$_POST['ngay_khoihang'];
                    $iddm=$_POST['iddm'];
                    move_uploaded_file($_FILES['hinh']['tmp_name'],"../img/".$hinh);
                    update_sanpham($ten_hanghoa,$ma_hanghoa,$hinh,$mo_ta,$don_gia,$ngay_khoihang,$dia_diem,$iddm);
                    $messageFromPHP = "Sửa Danh Mục  Thành Công!";

                    if($hinh!=""){
                        unlink("../img/".$xoahinh);
                    }
                }
                $listdanhmuc=loadall_danhmuc();
                $listsanpham=loadall_sanpham();
                include "../admin/products/listsp.php";
                break;
            case "dskhanhhang":
                $listtaikhoan=loadall_taikhoan();           
               include "../admin/admin_taikhoan/listtk.php";
               break;
               case "updatetk";
                if (isset($_GET['id'])) {
                $id=$_GET['id'];
                $tttk=loadtt_user($id);
                $vai_tro=$tttk['vai_tro'];
                $kich_hoat=$tttk['kich_hoat'];

                }
                if (isset($_POST['thaydoi'])) {
                    $id=$_POST['id'];
                    $vai_tro=$_POST['vai_tro'];
                    $kich_hoat=$_POST['kich_hoat'];
                    update_vaitro($id,$vai_tro,$kich_hoat);
                }
                include "./admin_taikhoan/updatetk.php";
                break;
               case "dsbl":
                $list_bl=loadall_bl();
                include "./comment/listcmt.php";
                break;
            case "xoabl":
                if(isset($_GET['ma_bl'])){
                    $ma_bl=$_GET['ma_bl'];
                    delete_one_bl($ma_bl);
                    $messageFromPHP = "Xóa Bình Luận  Thành Công!";
                }
                $list_bl=loadall_bl();
                include "./comment/listcmt.php";
                break;
                case "listbill":
                    if(isset($_POST['search'])){
                        $kyw=$_POST['kyw'];
                    }else{
                        $kyw="";
                    }
                    $listbill=loadall_bill(0,$kyw);
                    include "./bill/list.php";
                    break;
                case 'suabill':
                    $id_bill=$_GET['id_bill'];
                    $bill=loadone_bill($id_bill);
                    $status=$bill['status'];
                    if(isset($_POST['thaydoi'])){
                        $status=$_POST['ttdh'];
                        update_ttdh($status,$id_bill);
                    }
                    include "./bill/update.php";
                    break;
                case 'xoabill':
                    if(isset($_GET['id_bill'])){
                        $id_bill=$_GET['id_bill'];
                        deleteone_bill($id_bill);
                    }
                    $listbill=loadall_bill(0);
                    include "./bill/list.php";
                    break;
                    case "thongke":
                        $thongke=loadall_thongke();
                        include "./thongke/listthongke.php";
                        break;    
                        case "bieudotk":
                            $listbieudo=loadall_thongke();
                            include "./thongke/bieudo.php";
                            break;
        default:
            include './pages/dasboard.php';
            break;

    }
} else {
    include './pages/dasboard.php';
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
