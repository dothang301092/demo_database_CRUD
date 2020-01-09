<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Mã đơn hàng</th>
      <th scope="col">Trạng thái</th>
      <th scope="col">Ngày đặt hàng</th>
      <th scope="col">Tên khách hàng</th>
      <th scope="col">Thành phố</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    foreach($list as $value):?>
    <tr>
    <td scope="row"><?php echo $start++ ?></td>
    <td><a href="index.php?page=order.php&id=<?php echo $value->getId() ?>">DH-<?php echo $value->getId() ?></a></td>
    <td><?php echo $value->getStatus() ?></td>
    <td><?php echo $value->getOrderDate() ?></td>
    <td><?php echo $value->getCustomerName() ?></td>
    <td><?php echo $value->getCity()?></td>
    </tr>
    <?php endforeach; ?>
    
  </tbody>
</table>