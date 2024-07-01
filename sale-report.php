<?php
include 'header.php';
$from_sale = $db->select("sale", "*");
$records = $db->select("sale", "*");
?>

<div class="row gutters">
    <div class="col-xl-12">
        <!-- Card start -->
        <div class="card">
            <div class="card-header"></div>
            <div class="card-body">
                <!-- Place your content here -->
                <div class="table-responsive">
                    <table id="copy-print-csv" class="table v-middle">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>Invoice Number</th>
                                <th>Payment Type</th>                                           
                                <th>Customer Name</th>
                                <th>Grand Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($records as $item) {
                                ?>
                                <tr>
                                    <td><?php echo date('d-m-Y', strtotime($item['date'])); ?></td>
                                    <td><?php echo $item['sale_id']; ?></td>
                                    <td><?php echo $item['payment_mode']; ?></td>
                                    <td><?php echo $item['customer_name']; ?></td>
                                    <td><?php echo ' Rs' . ' ' . $item['grand_total']; ?></td>
                                    <td>
                                        <div class="actions">
                                            <a href="sale-update.php?id=<?php echo $item['sale_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="icon-edit1 text-info"></i>
                                            </a>
                                           
                                        </div>
                                    </td>
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row end -->
</div>
<!-- Content wrapper end -->
</div>
<?php
include 'footer.php';
?>
