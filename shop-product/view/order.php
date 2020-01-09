<div class="card">
    <div class="card-header">
        Thông tin khách hàng
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <th>Tên khách hàng:</th>
                    <td><?php echo $order[0]->getCustomerName() ?></td>
                    </tr>
                    <tr>
                        <th>Số điện thoại:</th>
                        <td><?php echo $order[0]->getPhone() ?></td>
                    </tr>
                    <tr>
                        <th>Trạng thái:</th>
                        <td><form class="input-group" method="POST">
                        <select class="form-control mr-sm-2" name="status">
                                <?php 
                                $status = ["Disputed", "Shipped", "In Process", "Cancelled"];
                                foreach ($status as $value): ?>
                                <option <?php if ($order[0]->getStatus() == $value): ?> selected <?php endif; ?>
                                    value="<?php echo $value ?>"><?php echo $value ?></option>
                                <?php endforeach; ?>
                            </select>
                            <button class="btn btn-danger my-2 my-sm-0" type="submit">Cập nhật</button></td>
                    </form></tr>
                </table>
            </div>
        </div>
    </div>
</div>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">STT</th>
            <th scope="col">Mã sản phẩm</th>
            <th scope="col">Tên sản phẩm</th>
            <th scope="col">Số lượng</th>
            <th scope="col">Trạng thái</th>
            <th scope="col">Giá mua</th>
        </tr>
    </thead>
    <tbody>
        <?php 
    foreach($order as $value):?>
        <tr>
            <td scope="row"><?php echo ++$key ?></td>
            <td><?php echo $value->getProductCode() ?></td>
            <td><?php echo $value->getProductName() ?></td>
            <td><?php echo $value->getQuantityOrdered() ?></td>
            <td><?php echo $value->getStatus() ?></td>
            <td><?php echo $value->getBuyPrice() ?></td>
        </tr>
        <?php endforeach; ?>

    </tbody>
</table>