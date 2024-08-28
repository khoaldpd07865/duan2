<?php
                                if(isset($_SESSION['user'])){
                                    extract($_SESSION['user']);
                               ?>
                               "";
          
          <?php
          
          }else{
            echo '  <li class="nav-item dropdown">
            <a class="nav-link" href="index.php?action=login">
            <i class="fa fa-user"></i>
            Login
          </a>
        </li>'
          ;
          } ?>