<div class="card">
    <div class="card-header">
        Information Customer
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <tr>
                        <th scope="col">Name :</th>
                        <td scope="col"><?php echo $order[0]['customerName'] ?></td>
                    </tr>
                    <tr>
                        <th scope="col">Phone :</th>
                        <td scope="col"><?php echo $order[0]['phone'] ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="order-status mt-4">
    <div class="col-12">
        <div class="row">
            <div class="col-4">Status</div>
            <form class="form" method="post">
                <div class="col-6">
                    <div class="form-group">
                        <select class="form-control" id="exampleFormControlSelect1">
                            <?php foreach ($status as $value):?>

                                <option  <?php if($order[0]['status'] == $value ): ?>
                                    selected
                                <?php endif; ?>
                                    value="<?php echo $value ?>"><?php echo $value ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </form>
            <div class="col-2">
                <button type="submit" class="btn btn-outline-success">Update</button>
            </div>
        </div>
    </div>

</div>
