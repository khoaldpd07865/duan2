<div class="dropdown pb-4">
  <?php
                                if(isset($_SESSION['user'])){
                                    extract($_SESSION['user']);
                               ?>
                    <a href="#"  class="d-flex align-items-center text-white text-decoration-none dropdown-toggle " id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="<?php echo $hinh ?>"  alt="hugenerd" width="30" height="30" class="rounded-circle">
                        <span class="d-none d-sm-inline mx-1"> <?php echo $user ?></span>
                      
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                        <li><a class="dropdown-item" href="index.php?action=edit_user">Cập Nhật Tài Khoản</a></li>
                        <li><a class="dropdown-item" href="index.php?action=dangky">Đăng Nhập Admin</a></li>
                        <li><a class="dropdown-item" href="index.php?action=quenmk">quên mật khẩu</a></li>
                        <li><a class="dropdown-item" href="index.php?action=doimkc">Đổi Mật Khẩu</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="index.php?action=thoat">Sign out</a></li>
                    </ul>
                </div>

        <?php
         }  else{
            "";
         }
        ?>