<!DOCTYPE html> 
<html lang="en">

<head>
 <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./MDB5-STANDARD-UI-KIT-Free-6.4.2/css/mdb.min.css" /> 
  <link rel="stylesheet" href="./fontawesome/fontawesome-free-6.4.2-web/css/all.css" /> 
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="bootstrap/css/css.css">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <title>Bến Thành Tourist</title> 
</head> 

<body> 

  <!-- Navbar -->

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
 
  <a class="navbar-brand" href="./index.php">Trang Chủ</a>
       <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="fas fa-feather"></i>
             Giới Thiệu
            </a>
          </li>
          <li class="nav-item dropdown">
            
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tour du lịch Trong Nước 
            </a>
            
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Du Lịch Pháp</a></li>
              <li><a class="dropdown-item" href="#">Du Lịch Canada</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Du Lịch Thái Lan</a></li>
              <li><a class="dropdown-item" href="#">Du Lịch CamPuChia</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Tour du lịch Nước Ngoài
            </a>
            <ul class="dropdown-menu">
           
            <?php
foreach($listdanhmuc as $danhmuc){
    extract($danhmuc);
    $linkdm = "index.php?action=sanpham&iddm=".$ma_loai; // Added the equal sign and corrected the variable name
?>
    <li><a class="dropdown-item" href="<?php echo $linkdm; ?>"><?php echo $ten_loai; ?></a></li>
<?php } ?>


            </ul>
          </li>
          
          <a class="nav-link" href="index.php?action=contract">
              <i class="fa fa-dollar"></i>
              Liên Hệ
            </a>
          </li>
          
        </ul>
        
        <ul class="navbar-nav">
          <form action="index.php?action=sanpham" method="post">
        <div class="input-group">
  <input type="text" name="kyw" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
  <button type="submit" name="timkiem" class="btn btn-primary">
    <i class="fas fa-search"></i>
    </form>
    
  </button>
  
</div>
     



<?php include "./pages/dangnhap2.php"; ?>

<li class="nav-item dropdown">

<?php include "./pages/dangnhap3.php"; ?>

     
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-globe"></i>
              EN
            </a>
          </li>


        </ul>
      </div>
  <?php include "./pages/seloc.php"; ?>
    </nav>

<!-- Navbar -->
  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="./img/anh1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>First slide label</h5>
          <p>Some representative placeholder content for the first slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/anh2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Some representative placeholder content for the second slide.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="./img/anh3.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Some representative placeholder content for the third slide.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
 

      
    </div>


  


