

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
<section class="py-5">
    <div class="container">
      <div class="row gx-5">
        <aside class="col-lg-6">
          <div class="border rounded-4 mb-3 d-flex justify-content-center">



            <a data-fslightbox="mygalley" class="rounded-4" target="_blank" data-type="image" href="">
            <?php 
                extract($spct);
                $img_spct=$img_path.$hinh;
                echo    '
                        <img style="max-width: 100%; max-height: 100vh; margin: auto;" class="rounded-4 fit" src="'.$img_spct.'" />
        
                      '
             ?>
            </a>
          </div>

      
          <!-- thumbs-wrap.// -->
          <!-- gallery-wrap .end// -->
        </aside>
        <main class="col-lg-6">
          <div class="ps-lg-3">
            <?php 
                extract($spct);
                $img_spct=$img_path.$hinh;
                echo    '
                <h4 class="title text-dark">
                
                '.$ten_hanghoa.'
              </h4>
                          
                            
                        '
             ?>
      
            <div class="d-flex flex-row my-3">
              <div class="text-warning mb-1 me-2">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
                <span class="ms-1">
                  4.5
                </span>
              </div>
              <span class="text-muted"><i class="fas fa-shopping-basket fa-sm mx-1"></i>154 orders</span>
              <span class="text-success ms-2">In stock</span>
            </div>
  
            <div class="mb-3">
            <?php 
                extract($spct);
                $img_spct=$img_path.$hinh;
                echo    '
                <span class="h5">'.$don_gia.'</span>
                <span class="text-muted">/per box</span>
        
                      '
             ?>
           
            </div>
  
            <p>
              Modern look and quality demo item is a streetwear-inspired collection that continues to break away from the conventions of mainstream fashion. Made in Italy, these black and brown clothing low-top shirts for
              men.
            </p>
  
            <div class="row">
            <?php 
                extract($spct);
                $img_spct=$img_path.$hinh;
                echo    '
                <dt class="col-3">Mã Tour</dt>
                <dd class="col-9">TWC '.$ma_hanghoa.'</dd>
    
                <dt class="col-3">Ngày Khởi Hàng</dt>
                <dd class="col-9">'.$ngay_khoihang.'</dd>
    
                <dt class="col-3">Địa Điểm</dt>
                <dd class="col-9">'.$dia_diem.' </dd>
    
                <dt class="col-3">Brand</dt>
                <dd class="col-9">Reebook</dd>
        
                      '
             ?>
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
  
            <hr />
  
        
          
          </div>
        </main>
      </div>
    </div>
  </section>
  <!-- content -->
  <section class="bg-light border-top py-4">
    <div class="container">
      <div class="row gx-4">
        <div class="col-lg-8 mb-4">
          <div class="border rounded-2 px-3 py-2 bg-white">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
              <li class="nav-item d-flex" role="presentation">
                <a class="nav-link d-flex align-items-center justify-content-center w-100 active" id="ex1-tab-1" data-mdb-toggle="pill" href="#ex1-pills-1" role="tab" aria-controls="ex1-pills-1" aria-selected="true">Mô Tả</a>
              </li>
            
            </ul>
            <!-- Pills navs -->
  
            <!-- Pills content -->
            <div class="tab-content" id="ex1-content">
              <div class="tab-pane fade show active" id="ex1-pills-1" role="tabpanel" aria-labelledby="ex1-tab-1">
              <?php 
                extract($spct);
                $img_spct=$img_path.$hinh;
                echo    '
                <p>
               '.$mo_ta.'
              </p>
        
                      '
             ?>
               
              
              </div>
          
            </div>
            <!-- Pills content -->
         
          </div>
        </div>

        <div class="col-lg-4">
    <div class="px-0 border rounded-2 shadow-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Similar items</h5>
              
                <?php
$counter = 0;
foreach ($spcungloai as $spcl) {
    extract($spcl);
    $img_spct = $img_path . $hinh;
    echo "
    <div class='d-flex mb-3'> 
       
        <img style='height: 80px;' src='$img_spct'> 

        <a href='index.php?action=chitietsp&ma_hanghoa=$ma_hanghoa&iddm=$iddm'> 
        $ten_hanghoa </br>
        <strong class='text-dark'>  $don_gia</strong>


</a>
       
    </div>";

    $counter++;
    // Check if it's the second iteration to add a line break
    if ($counter % 2 == 0) {
        echo "<br>";
    }
}
?>
            </div>
        </div>
    </div>
</div>
      </div>
    </div>

    <div >
    <?php include "./pages/binhluan/binhluanfake"; ?>
             </div>


  </section>
  </body>

</html>
