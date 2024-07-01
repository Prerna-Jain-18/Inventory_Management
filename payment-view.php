<?php
include 'header.php';
include './inc/database.php';
$db = new Database();
$payment_data = $db->select('payment', "*");
?>
<!-- Content wrapper scroll start 
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">All Payment</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="table-responsive">
                            <table id="basicExample" class="table custom-table">
                                <thead>
                                    <tr>
                                        <th>Sr. No.</th>
                                        <th>Date</th>
                                        <th>Amount From</th>
                                        <th>Amount To</th>
                                        <th>Amount By</th>
                                        <th>Amount</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($payment_data as $item) {
                                        ?>
                                        <tr>
                                            <td><?php echo $item['payment_id']; ?></td>
                                            <td><?php echo $item['date']; ?></td>
                                            <td><?php echo $item['amount_from']; ?></td>
                                            <td><?php echo $item['amount_to']; ?></td>
                                            <td><?php echo $item['amount_by']; ?></td>
                                            <td><?php echo $item['amount']; ?></td>
                                            <td><?php echo $item['details']; ?></td>
                                            <td><a href="payment-update.php?id=<?php echo $item['payment_id']; ?>" class="icon-edit1"></a>
                                                <a href="payment-delete.php?id=<?php echo $item['payment_id']; ?>" class="icon-trash-2"></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                            </table>
                            <!-- Content wrapper start -->
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- Content wrapper end -->
</div>
<!-- Content wrapper scroll end -->

<?php
include 'footer.php';
?>