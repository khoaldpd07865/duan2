<?php
                                if(isset($_SESSION['user'])){
                                    extract($_SESSION['user']);
                               ?>
                               "";
          
          <?php
          
          }else{
            echo '    <a class="nav-link" href="index.php?action=signup">
            <i class="fa fa-user"></i>
            Signup
          </a>
        </li>
       '
          ;
          } ?>