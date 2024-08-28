<?php
                if(isset($_SESSION['user'])){
                    $ho_ten=$_SESSION['user']['user'];
                    $dia_chi=$_SESSION['user']['dia_chi'];
                    $email=$_SESSION['user']['email'];
                    $sdt=$_SESSION['user']['sdt'];
                }else{
                    $ho_ten=""; 
                    $dia_chi="";
                    $email="";
                    $sdt="";
                }
            ?>
                                <form action="index.php?action=billconfirm" method="post">

            <div class="card">
  <div class="card-body">
    <div class="container mb-5 mt-3">
      <div class="row d-flex align-items-baseline">
        <div class="col-xl-9">
          <p style="color: #7e8d9f;font-size: 20px;">Invoice >> <strong>ID: #123-123</strong></p>
        </div>
        <div class="col-xl-3 float-end">
          <a class="btn btn-light text-capitalize border-0" data-mdb-ripple-color="dark"><i
              class="fas fa-print text-primary"></i> Print</a>
          <a class="btn btn-light text-capitalize" data-mdb-ripple-color="dark"><i
              class="far fa-file-pdf text-danger"></i> Export</a>
        </div>
        <hr>
      </div>

      <div class="container">
        <div class="col-md-12">
          <div class="text-center">
            <i class="fab fa-mdb fa-4x ms-0" style="color:#5d9fc5 ;"></i>
            <p class="pt-0">MDBootstrap.com</p>
          </div>

        </div>


        <div class="row">
          <div class="col-xl-8">
          
       
            <ul class="list-unstyled">
              <li class="text-muted"><span  style="color:#5d9fc5 ;" ><i class="fa-solid fa-user"></i>
              <input type="text" class="btn btn-warning" name="ho_ten" id="" value="<?php if(isset($ho_ten)){ echo $ho_ten;}?>" ></span></li> <br>
              <li class="text-muted">
              <i class="fa-solid fa-envelope"></i>
              <input type="text"class="btn btn-secondary" name="email" id="" value="<?php if(isset($email)){ echo $email;}?>">
            </li><br>
              <li class="text-muted" ><i class="fa-solid fa-phone"></i>
              <input type="text"  class="btn btn-success" name="sdt" id="" value="<?php if(isset($sdt)){ echo $sdt;}?>" >      </li> <br> 
              <li class="text-muted"><i class="fa-solid fa-address-book"></i>
            <input type="text" class="btn btn-light" name="dia_chi" id="" value="<?php if(isset($dia_chi)){ echo $dia_chi;}?>"></li>
            </ul>
          </div>
          <div class="col-xl-4">
            <p class="text-muted">Invoice</p>
            <ul class="list-unstyled">
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">ID:</span>#123-456</li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Creation Date: </span>Jun 23,2021</li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="me-1 fw-bold">Status:</span><span class="badge bg-warning text-black fw-bold">
                  Unpaid</span></li>
            </ul>
          </div>
        </div>

  
   
    <?php viewcart(0);?>
  <div class="row">
                            <div class="frmtitle">
                                <h1>Phương thức thanh toán</h1>
                            </div>
                            <div class="row">
                                <table>
                                        <tr>
                                            <td><input type="radio" name="pttt" value="Thanh toán khi nhận hàng" checked>Thanh toán khi nhận hàng</td>
                                            <td><input type="radio" name="pttt" value="Chuyển khoản ngân hàng" id="">Chuyển khoản ngân hàng</td>
                                            <td><input type="radio" name="pttt" value="Thanh toán online" id="">Thanh toán online</td>
                                            
                                        </tr>
                                </table>
                            </div>
                        </div>

       
        <hr>
        <div class="row">
          <div class="col-xl-10">
            <p>Thank you for your purchase</p>
          </div>
          <div class="col-xl-2">
              <input type="submit" class='btn btn-light' name="submit" value="Tiếp tục đặt hàng"></a>
          </div>
        </div>
        </form>

      </div>
    </div>
  </div>
</div>










