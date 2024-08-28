
<div  class="container text-center ">
    <figure class="text-center">
      <blockquote class="blockquote">
        <h2>Chúng tôi giới thiệu đến bạn
        </h2>
      </blockquote>
      <figcaption class="blockquote-footer">
<h3>TOUR ĐANG HOT
</h3>      </figcaption>
    </figure>
    <div class="row" style="margin-bottom: 10px;" >
    <?php
    $i=0;
                            foreach($listsp as $sp){
                                extract($sp);
                                $hinh=$img_path.$hinh;
                                $linkchitiet="index.php?action=chitietsp&ma_hanghoa=".$ma_hanghoa."&iddm=".$iddm; 
                                if ($i % 3 == 0 && $i != count($listsp)) {
                                  echo '</div><div class="row" style="margin-bottom: 10px;">';
                              }
                         
                                $i++;       ?>            
                                  <div class="col"  >
                                <div class="card" style="width: 100%;">
                                  <img src="<?php echo $hinh ?>" class="card-img-top" alt="...">
                                  <div class="card-body">
                                  <a  href="<?php echo $linkchitiet ?>"> <h5 class="card-title"><?php echo $ten_hanghoa ?></h5></a>
                                    <p class="card-text"> <i class="fa-solid fa-flag"><?php echo $dia_diem ?></i>  <br>
                                    <i class="fa-solid fa-clock"><?php echo $ngay_khoihang ?></i></p>
                                    <p class="card-price"> <i class="fa-solid fa-money-bill"><?php echo $don_gia ?></i> </p>

                                    <form action="index.php?action=addcart" method="post">
                                        <input type="hidden" name="ten_hanghoa" value="<?=$ten_hanghoa?>" >
                                        <input type="hidden" name="gia_hanghoa" value="<?=$don_gia ?>"  >
                                        <input type="hidden" name="ma_hanghoa" value="<?=$ma_hanghoa?>" >
                                        <input type="hidden" name="image" value="<?=$hinh?>" >
                                        <input type="hidden" name="ngay_khoihang" value="<?=$ngay_khoihang?>" >
                                        <input type="hidden" name="dia_diem" value="<?=$dia_diem?>">
                                        <input type="submit" name="submit" class="btn btn-primary" value="Thêm vào giỏ hàng">
                                        </form>

                                 
                                  </div>
                                </div>
                              </div>
                              
                        
                        <?php } 
                        ?>
  





  </div>
  



  
</div>




<div  class="container text-center ">
    <figure class="text-center">
      <blockquote class="blockquote">
        <h2>Chúng tôi giới thiệu đến bạn
        </h2>
      </blockquote>
      <figcaption class="blockquote-footer">
<h3>Top 10 Tour Yeu Thich Nhat
</h3>      </figcaption>
    </figure>
    <div class="row" style="margin-bottom: 10px;" >
   
    <?php
    foreach($listsanphamtop10 as $sptop10){
        extract($sptop10);
        $linksp="index.php?act=chitietsp&ma_hanghoa=".$ma_hanghoa."&iddm=".$iddm;
        $image_top10=$img_path.$hinh;
        if ($i % 3 == 0 && $i != count($listsp)) {
          echo '</div><div class="row" style="margin-bottom: 10px;">';
      }
 
        $i++; 
?>
                         
                                      
                                  <div class="col"  >
                                <div class="card" style="width: 100%;">
                                  <img src="<?php echo $image_top10 ?>" class="card-img-top" alt="...">
                                  <div class="card-body">
                                  <a href="<?php echo $linkchitiet ?>"> <h5 class="card-title"><?php echo $ten_hanghoa ?></h5></a>
                                    <p class="card-text"> <i class="fa-solid fa-flag"><?php echo $dia_diem ?></i>  <br>
                                    <i class="fa-solid fa-clock"><?php echo $ngay_khoihang ?></i></p>
                                    <p class="card-price"> <i class="fa-solid fa-money-bill"><?php echo $don_gia ?></i> </p>
                                    <form action="index.php?act=addcart" method="post">
                                    <input type="hidden" name="ten_hanghoa" value="<?=$ten_hanghoa?>" >
                                        <input type="hidden" name="gia_hanghoa" value="<?=$don_gia ?>"  >
                                        <input type="hidden" name="ma_hanghoa" value="<?=$ma_hanghoa?>" >
                                        <input type="hidden" name="dia_diem" value="<?=$dia_diem?>" >
                                        <input type="hidden" name="ngay_khoihang" value="<?=$ngay_khoihang?>" >
                                        <input type="hidden" name="image" value="<?=$hinh?>" >
                                        <input type="submit" name="submit" class="btn btn-primary" value="Thêm vào giỏ hàng">
                                        </form>

                                 
                                  </div>
                                </div>
                              </div>

                        <?php } 
                        ?>
  





  </div>
  



  
</div>



