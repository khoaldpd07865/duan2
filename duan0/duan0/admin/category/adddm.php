
<div class="col py-3">
            <form action="index.php?action=adddanhmuc" method="post">
                <div class="form-group">
                  <label for="exampleFormControlInput1">ID</label>
                  <input type="text" name="ma_loai" disabled id="" class="form-control" id="exampleFormControlInput1" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name Danh Muc</label>
                    <input type="text" name="ten_loai" class="form-control" id="exampleFormControlInput1" ><br>
                  </div>

                        <input type="submit" name="themmoi" class="btn btn-warning"  value="Thêm mới">
                        <a href="index.php?action=listdanhmuc">                           <input type="button"  class="btn btn-warning"  value="List danh muc">
</a>

              </form>
              <?php   if(isset($messageFromPHP)){
        echo $messageFromPHP;
    }

?>
        </div>
    