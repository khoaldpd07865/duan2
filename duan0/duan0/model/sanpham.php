<?php
function insert_sanpham($ten_hanghoa,$don_gia,$hinh,$ngay_khoihang,$mo_ta,$dia_diem,$iddm){
    $sql="insert into product(ten_hanghoa,don_gia,hinh,ngay_khoihang,mo_ta,dia_diem,iddm) values('$ten_hanghoa','$don_gia','$hinh','$ngay_khoihang','$mo_ta','$dia_diem','$iddm')";
    pdo_execute($sql);
}
function loadall_sanpham($kyw="",$iddm=0){
    $sql="select * from product where 1";
    if($kyw!=""){
        $sql.=" and ten_hanghoa like '%".$kyw."%'";
    }
    if($iddm>0){
        $sql.=" and iddm ='".$iddm."'";
    }
    $sql.=" order by ma_hanghoa desc";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function delete_sanpham($ma_hanghoa){
    $sql="delete from product where ma_hanghoa=".$ma_hanghoa;
    pdo_execute($sql);
}
function loadall_sanpham_home(){
    $sql="select * from product where 1 order by ma_hanghoa  ";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($ma_hanghoa){
    $sql="select * from product where ma_hanghoa=".$ma_hanghoa;
    $sp=pdo_query_one($sql);
    return $sp;
}
function update_sanpham($ten_hanghoa,$ma_hanghoa,$hinh,$mo_ta,$don_gia,$ngay_khoihang,$dia_diem,$iddm){
    if($hinh!=""){
        $sql="update product set iddm='$iddm',ten_hanghoa='$ten_hanghoa',don_gia='$don_gia',hinh='$hinh',ngay_khoihang='$ngay_khoihang',mo_ta='$mo_ta',dia_diem='$dia_diem' where ma_hanghoa='$ma_hanghoa'";
    }else{
        $sql="update product set iddm='$iddm',ten_hanghoa='$ten_hanghoa',don_gia='$don_gia',ngay_khoihang='$ngay_khoihang',mo_ta='$mo_ta',dia_diem='$dia_diem' where ma_hanghoa='$ma_hanghoa'";
    }
    pdo_execute($sql);
}
function load_ten_dm($iddm){
    if ($iddm>0) {
        
    
    $sql = "select * from creatory where ma_loai=" . $iddm;
    $dm=pdo_query_one($sql);
    extract($dm); // Change $dm to $sp
    return $ten_loai;}
    else{
        return "";
    }
 }
 
function loadall_sanpham_cungloai($iddm,$ma_hanghoa){
    $sql="select * from product where iddm=$iddm and ma_hanghoa!=$ma_hanghoa";
    $sql.=" order by ma_hanghoa desc";
    $listspcungloai=pdo_query($sql);
    return $listspcungloai;
}
function loadall_sanpham_top10(){
    $sql="select * from product where 1 order by so_luot_xem desc  limit 0,9";
    $listop10=pdo_query($sql);
    return $listop10;
}
?>