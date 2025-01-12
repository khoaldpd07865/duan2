
<div class="blockcode">
  
    <footer class="page-footer shadow">
      <div class="d-flex flex-column mx-auto py-5" style="width: 80%">
        <div class="d-flex flex-wrap justify-content-between">
          <div>
            <a href="/" class="d-flex align-items-center p-0 text-dark">
              <img alt="logo" src="../img/logo.png" width="30px" />
              <span class="ms-3 h5 font-weight-bold">Devwares</span>
            </a>
            <p class="my-3" style="width: 250px">
              We are creating High Quality Resources and tools to Aid developers during the
              developement of their projects
            </p>
            <span class="mt-4">
              <button class="btn btn-dark btn-flat p-2">
              <i class="fa-brands fa-facebook"></i>              </button>
              <button class="btn btn-dark btn-flat p-2">
              <i class="fa-brands fa-square-x-twitter"></i>
                          </button>
              <button class="btn btn-dark btn-flat p-2">
              <i class="fa-brands fa-instagram"></i>
              </button>
            </span>
          </div>
          <div>
            <p class="h5 mb-4" style="font-weight: 600">Các Tour du lịch</p>
            <ul class="p-0" style="list-style: none; cursor: pointer">

            <?php
foreach($listdanhmuc as $danhmuc){
    extract($danhmuc);
    $linkdm = "index.php?action=sanpham&iddm=".$ma_loai; // Added the equal sign and corrected the variable name
?>
    <li><a class="dropdown-item" href="<?php echo $linkdm; ?>"><?php echo $ten_loai; ?></a></li>
<?php } ?>
             
            </ul>
          </div>
          <div>
            <p class="h5 mb-4" style="font-weight: 600">Liên Hệ</p>
            <ul class="p-0" style="list-style: none; cursor: pointer">
              <li class="my-2">
                <a class="text-dark" href="/">Giới Thiệu</a>
              </li>
              <li class="my-2">
                <a class="text-dark" href="/">Sign Up</a>
              </li>
              <li class="my-2">
                <a class="text-dark" href="/">Sign In</a>
              </li>
            </ul>
          </div>
          <div>
            <p class="h5 mb-4" style="font-weight: 600">Help</p>
            <ul class="p-0" style="list-style: none; cursor: pointer">
              <li class="my-2">
                <a class="text-dark" href="/">Support</a>
              </li>
              <li class="my-2">
                <a class="text-dark" href="/">Sign Up</a>
              </li>
              <li class="my-2">
                <a class="text-dark" href="/">Sign In</a>
              </li>
            </ul>
          </div>
        </div>
        <small class="text-center mt-5">&copy; Devwares, 2020. All rights reserved.</small>
      </div>
      
    </footer>
    
  </div>
<!-- Footer -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>