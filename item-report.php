<?php
include 'header.php';
$records = $db->select("items", "*");
?>

<div class="row gutters">
    <div class="col-xl-12">
        <!-- Card start -->
        <div class="card">
            <div class="card-header">

            </div>
            <div class="card-body">
                <!-- Place your content here -->

                <div class="table-responsive">
                    <table id="copy-print-csv" class="table v-middle">
                        <thead>
                            <tr>
                                <th>Item Name</th>
                                <th>Unit</th>
                                <th>Amount</th> 
                                <th>Opening Stock</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($records as $item) {
                                ?>
                                <tr>
                                    <td><?php echo $item['item_name']; ?></td>
                                    <td><?php echo $item['unit']; ?></td>
                                    <td><?php echo $item['selling_price']; ?></td>
                                    <td><?php echo $item['opening_stock']; ?></td>
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

<?php
include 'footer.php';
?>
