<div class="card">
    <h5 class="card-header">Featured</h5>
    <div class="card-body">
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Order number</th>
                <th scope="col">Order date</th>
                <th scope="col">Status</th>
                <th scope="col">Customer Name</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($orders as $key=> $order): ?>
            <tr>
                <th scope="row"><?php echo ++$key ?></th>
                <td><a href="index.php?page=orderDetail.php&orderId=<?php echo $order->getId() ?>">DH-<?php echo $order->getId()  ?></a></td>
                <td><?php echo $order->getOrderDate() ?></td>
                <td><?php echo $order->getStatus() ?></td>
                <td><?php echo $order->getCustomerName() ?></td>

            </tr>
            <?php endforeach;  ?>
            </tbody>
        </table>
    </div>
</div>
