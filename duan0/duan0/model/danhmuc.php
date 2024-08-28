<?php
   function insert_danhmuc($ten_loai){
   $sql=("insert into creatory(ten_loai) values('$ten_loai')");
   pdo_execute($sql);
   }
  
   function delete_danhmuc($ma_loai){
      $sql= "delete from creatory where ma_loai='$ma_loai'";
      $listdanhmuc=pdo_query($sql);
      return $listdanhmuc;
      

      }
      function loadall_danhmuc_home(){
         $sql="select * from creatory where 1 order by ma_loai desc limit 0,10";
         $listdanhmuc=pdo_query($sql);
         return $listdanhmuc;
     }
      function loadall_danhmuc(){
         $sql= "select * from creatory   order by ma_loai desc ";
                $listdanhmuc=pdo_query($sql);  
                return $listdanhmuc;
      }
      function update_danhmuc($ten_loai,$ma_loai){
         $sql="update creatory set ten_loai='$ten_loai' where ma_loai='$ma_loai'";
         pdo_execute($sql);
      }
      function loadone($ma_loai){
         $sql="select * from creatory where ma_loai=".$ma_loai;
         $dn=pdo_query_one($sql);
         return $dn;
     }
?>