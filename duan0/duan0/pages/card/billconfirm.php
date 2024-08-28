
            
            <div class="card" >
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
     
        <form action="index.php?action=billconfirm" method="post">

        <div class="row">
          <div class="col-xl-8">
       
            <ul class="list-unstyled">
              <li class="text-muted"><span  style="color:#5d9fc5 ;" ><i class="fa-solid fa-user"></i>
              <input type="text" class="btn btn-warning"  id="" value="<?php if(isset($ho_ten)){ echo $ho_ten;}?>" ></span></li> <br>
              <li class="text-muted">
              <i class="fa-solid fa-envelope"></i>
              <input type="text"class="btn btn-secondary" id="" value="<?php if(isset($email)){ echo $email;}?>">
            </li><br>
              <li class="text-muted" ><i class="fa-solid fa-phone"></i>
              <input type="text"  class="btn btn-success"  id="" value="<?php if(isset($sdt)){ echo $sdt;}?>" >      </li> <br> 
              <li class="text-muted"><i class="fa-solid fa-address-book"></i>
            <input type="text" class="btn btn-light"  id="" value="<?php if(isset($dia_chi)){ echo $dia_chi;}?>"></li>
            </ul>
          </div>
          <div class="col-xl-4">
            <p class="text-muted">Invoice</p>
            <ul class="list-unstyled">
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Mã Đơn Hàng:</span><?=$id_bill?></li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="fw-bold">Ngày đặt hàng: </span><?=$ngay_dat_hang?></li>
              <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="me-1 fw-bold">Tổng đơn hàng:</span><span class="badge bg-warning text-black fw-bold">
                  <?=$total?></span></li>
                  <li class="text-muted"><i class="fas fa-circle" style="color:#84B0CA ;"></i> <span
                  class="me-1 fw-bold">Phương thức thanh toán:</span><span class="badge bg-warning text-black fw-bold">
                  <?=$pttt?></span></li>
            </ul>
          </div>
        </div>
          
        <?php
                                    if(isset($listcart)){
                                        view_bill($listcart); 
                                    } 
                               ?>
                        </div>

        </form>                       

        <hr>
        <div class="row">
          <div class="col-xl-10">
            <p>Thank you for your purchase</p>
          </div>
          <div class="col-xl-2">
            <button type="button" class="btn btn-primary text-capitalize"
              style="background-color:#60bdf3 ;">Thanh Toán Ngay</button>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>