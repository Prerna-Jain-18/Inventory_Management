<?php
include 'header.php';
$db = new Database();
$purchase_data = $db->select("purchase", "*");
?>
<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <div class="card">
                    <div class="card-header">
                        Purchase Details
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table id="copy-print-csv" class="table v-middle">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Payment Mode</th>
                                        <th>Customer Name</th>
                                        <th>Mobile</th>	
                                        <th>Roundoff</th>
                                        <th>Total</th>
                                        <th>Grand Total</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($purchase_data as $item) {
                                        ?>
                                        <tr>
                                            <?php
                                            $date = str_replace("/", "-", $item['date']);
                                            $date = date("d-m-Y", strtotime($date));
                                            ?>
                                            <td><?php echo $date; ?> </td>
                                            <td><?php echo $item['payment_mode']; ?> </td>
                                            <td><?php echo $item['customer_name']; ?> </td>
                                            <td><?php echo $item['mobile_no']; ?> </td>
                                            <td><?php echo $item['round_off']; ?> </td>
                                            <td><?php echo $item['total']; ?> </td>
                                            <td><?php echo $item['grand_total']; ?> </td>


                                            <td>
                                                <div class="actions">
                                                    <a href="purchase-update.php?id=<?php echo $item['purchase_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="icon-edit1 text-info"></i>
                                                    </a>
                                                    <a href="purchase-delete.php?id=<?php echo $item['purchase_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                        <i class="icon-x-circle text-danger"></i>
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
    <?php
    include 'footer.php';
    ?>

