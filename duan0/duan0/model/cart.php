<?php
function viewcart($option){
$tong=0;
$i=0;
if($option==1){
    $xoacart_th="<th>Hành động</th>";
    $xoacart_td="<td><a    href='index.php?action=xoacart&ma_cart=".$i."'><input class='btn btn-light'  type='button'  value='Xoá' name='xoá'></a></td> ";

}else{
    $xoacart_th="";
    $xoacart_td="";
}

echo '          <table class="table table-striped table-borderless">
<thead>
  <tr>
    <th scope="col">Mã Hàng Hóa</th>
    <th scope="col">Hình</th>
    <th scope="col">Tour Du Lịch</th>
    <th scope="col">Ngày Khởi Hành</th>
    <th scope="col">Địa Điểm</th>
    <th scope="col">Đơn Giá </th>
    <th scope="col">Số Lượng</th>
    <th scope="col">Thành Tiền</th>

    <th scope="col">'.$xoacart_th.'</th>
  </tr>
</thead>';
 foreach($_SESSION['mycart'] as $cart){
          $ttien=$cart[3]*$cart[4];
          $tong+=$ttien;
          $tylethue=0.01;
          $tienthue=$tong*($tylethue/100);
          $tongtiensauthue=$tong+$tienthue;      
          echo'
          <tr>  
          <td > TWC' .$cart[5].'</td>
          <td><img src="'.$cart[0].'" height="60px"  alt="Lỗi" ></td>
          <td>'.$cart[1].'</td>
          <td>'.$cart[6].'</td>
          <td>'.$cart[7].'</td>
          <td>'.$cart[2].'</td>
          <td>'.$cart[3].'</td>
          <td>'.$cart[4].'</td>
          <td>'.$xoacart_td.'</td>
          </tr>';
          $i+=1;

}

echo '          </table>
';
echo '
<div class="row">
<div class="col-xl-8">
  <p class="ms-3">Add additional notes and payment information</p>

</div>
<div class="col-xl-3">
  <ul class="list-unstyled">
    <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>'.$tong.'</li>
    <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(1%)</span>  '.$tienthue.'</li>
  </ul>
  <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
      style="font-size: 25px;">'  .$tongtiensauthue.'</span></p>
</div>
</div>

';
}


function tongdonhang(){
        
    $i=0; 
    $tong=0;
    $tienthue=0;
    $tylethue=0;
    $tongtiensauthue=0;
    foreach($_SESSION['mycart'] as $cart){
        $ttien=$cart[3]*$cart[4];
        $tong+=$ttien;
        $i+=1;
        $tylethue=0.01;
        $tienthue=$tong*($tylethue/100);
        $tongtiensauthue=$tong+$tienthue;      
          
    }
    return $tongtiensauthue;
}
function view_bill($listcart){
    $i=0; 
    $tong=0;
    $tienthue=0;
    $tongtiensauthue=0;
    $tylethue=0;
    echo '<table class="table table-striped table-borderless">
    <thead>    
    <tr>
        <th>Mã HH</th>
        <th>Hình</th>
        <th>Sản phẩm</th>
        <th scope="col">Ngày Khởi Hành</th>
        <th scope="col">Địa Điểm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        </thead></tr>';

   
    foreach($listcart as $cart){
        $ttien=$cart['don_gia']*$cart['so_luong'];
        $tong+=$ttien;
        $tylethue=0.01;
        $tienthue=$tong*($tylethue/100);
        $tongtiensauthue=$tong+$tienthue;        

        echo '<tr>
            <td> TWC'.$cart['ma_hanghoa'].'</td>
            <td><img  height="60px" src="'.$cart['hinh'].'"alt="Lỗi"></td>
            <td>'.$cart['ten_hanghoa'].'</td>
            <td>'.$cart['ngay_khoihang'].'</td>
            <td>'.$cart['dia_diem'].'</td>
            <td>'.$cart['don_gia'].'</td>
            <td>'.$cart['so_luong'].'</td>
            <td>'.$cart['thanh_tien'].'</td>
            </tr>';
        $i+=1;
    }
    echo '          </table>
    ';
    echo '
    <div class="row">
    <div class="col-xl-8">
      <p class="ms-3">Add additional notes and payment information</p>
    
    </div>
    <div class="col-xl-3">
      <ul class="list-unstyled">
        <li class="text-muted ms-3"><span class="text-black me-4">SubTotal</span>'.$tong.'</li>
        <li class="text-muted ms-3 mt-2"><span class="text-black me-4">Tax(15%)</span>  '.$tienthue.'</li>
      </ul>
      <p class="text-black float-start"><span class="text-black me-3"> Total Amount</span><span
          style="font-size: 25px;">'  .$tongtiensauthue.'</span></p>
    </div>
    </div>
    
    ';
}
function insert_bill($ho_ten,$email,$dia_chi,$sdt,$pttt,$total,$ngay_dat_hang,$id){
    $sql="insert into bill(ho_ten,email,dia_chi,sdt,pttt,total,ngay_dat_hang,id) values('$ho_ten','$email','$dia_chi','$sdt','$pttt','$total','$ngay_dat_hang','$id')";
    return pdo_execute_return_lastInsertID($sql);
}
function deleteone_bill($id_bill){
    $sql="delete from bill where id_bill='$id_bill'";
    pdo_execute($sql);
}

function insert_cart($id,$ma_hanghoa,$hinh,$ten_hanghoa,$don_gia,$so_luong,$thanh_tien,$ngay_khoihang,$dia_diem,$id_bill){
    $sql="insert into cart(id,ma_hanghoa,hinh,ten_hanghoa,don_gia,so_luong,thanh_tien,ngay_khoihang,dia_diem,id_bill) values('$id','$ma_hanghoa','$hinh','$ten_hanghoa','$don_gia','$so_luong','$thanh_tien','$ngay_khoihang','$dia_diem','$id_bill')";
    pdo_execute($sql);
}
function loadone_bill($id_bill){
    $sql="select * from bill where id_bill ='$id_bill'";
    $arr=pdo_query_one($sql);
    return $arr;
}
function loadall_cart($id_bill){
    $sql="select * from cart where id_bill='$id_bill'";
    $arr=pdo_query($sql);
    return $arr;
}
function loadall_bill($id,$kyw=""){
    if($id>0){
        $sql="select * from bill where id='$id'";
    }else{
        $sql="select * from bill where 1";
    }
    if($kyw!=""){
        $sql.=" and id_bill like '%".$kyw."%'";
    }
    $sql.=" order by id_bill desc";
    // $sql.=" order by id_bill desc";
    $arr=pdo_query($sql);
    return $arr;
}
function loadall_thongke(){
    $sql="select 	creatory.ten_loai as tenloai, count(product.ma_hanghoa) as countsp, min(product.don_gia) as minprice, max(product.don_gia) as maxprice, avg(	product.don_gia)";
    $sql.=" from creatory left join 	product on 	creatory.ma_loai=	product.iddm ";
    $sql.=" group by creatory.ma_loai order by 	creatory.ma_loai";
    $arr=pdo_query($sql);
    return $arr;
}
function get_ttdh($status){
    switch($status){
        case 0:
            $tt= "Đơn hàng mới";
            break;
        case 1:
            $tt="Đang xử lí";
            break;
        case 2:
            $tt= "Đã giao";
            break;
        case 3:
            $tt="Đã bị boom";
            break;
        default:
            $tt="Đơn hàng mới";
            break;
    }
    return $tt;
}
function get_sl_mh($id_bill){
    $sql="select sum(so_luong) from cart where id_bill='$id_bill'";
    $sl=pdo_query_one($sql);
    return $sl;
}
function update_ttdh($status,$id_bill){
    $sql="update bill set status='$status' where id_bill='$id_bill'";
    pdo_execute($sql);
}
function update_ngaykhoihanh($id_cart,$ngay_khoihang){
    $sql="update cart set ngay_khoihang='$ngay_khoihang' where id_cart='$id_cart'";
    pdo_execute($sql);
}
?>

