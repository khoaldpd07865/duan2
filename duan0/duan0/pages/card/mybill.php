<table class="table table-striped table-borderless">
    <thead style="background-color:#84B0CA ;" class="text-white">
        <tr>
            <th scope="col">Mã Đơn Hàng</th>
            <th scope="col">Ngày Đặt Hàng</th>
            <th scope="col">Số Lượng Mặt Hàng</th>
            <th scope="col">Tổng Giá Trị</th>
            <th scope="col">Tình Trạng Đơn Hàng</th>
        </tr>
    </thead>
    <tbody>
        <?php

        foreach ($listbill as $bill) {
            extract($bill);
            $sl_mh = get_sl_mh($id_bill);
            $tinh_trang = get_ttdh($status);
            echo '<tr>
                                                  <td>TWC' . $id_bill . '</td>
                                                  <td>' . $ngay_dat_hang . '</td>
                                                  <td>' . $sl_mh['sum(so_luong)'] . '</td>
                                                  <td>' . $total . '</td>
                                                  <td>' . $tinh_trang . '</td>
                                              </tr>';
        }
        ?>
            
    </tbody>

</table>
