<?php
include 'header.php';
$from_ledgers = $db->select("ledger", "*");
?>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                   
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="card-body">
                            <form method="POST" action="#" enctype="multipart/form-data">
                                <input type="text"hidden name="type" value="contra">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="field-wrapper">
                                                <select class="form-select" id="formSelect" name="id">

                                                    <?php
                                                    foreach ($from_ledgers as $l) {
                                                        echo "<option value='" . $l['ledger_id'] . "'>" . $l['ledger_name'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <div class="field-placeholder">To</div>
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <button type="submit" name="submit" class="btn btn-info"> Show</button>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>
        <!-- Row end -->
        <?php
        $db = new Database();
        if (isset($_POST['submit'])) {
            $id = $_REQUEST['id'];

            $records = $db->select("transactions", "*", ['ledger_id' => $id]);
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
                                            <th>Date</th>
                                            <th>Particular</th>
                                            <th>Vch_type</th>                                           
                                            <th>Vch_no</th>
                                            <th>Credit</th>
                                            <th>Debit</th>
                                            <th>Balance</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $total_credit = $total_debit = $balance = 0;

                                        foreach ($records as $item) {
                                            $total_credit+=$item['credit'];
                                            $total_debit+=$item['debit'];
                                            $balance = $total_credit - $total_debit;
                                            ?>

                                            <tr>
                                                <td><?php echo date('d-m-Y', strtotime($item['date'])); ?></td>

                                                <td><?php echo $item['particular']; ?></td>
                                                <td><?php echo $item['vch_type']; ?></td>
                                                <td><?php echo $item['vch_id']; ?></td>
                                                <td><?php echo $item['credit']; ?></td>
                                                <td><?php echo $item['debit']; ?></td>
                                                <td><?php echo $balance; ?></td>
                                            </tr>

                                            <?php
                                        }
                                        ?>


                                    </tbody>
                                    <tr>
                                        <td></td>

                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td><?php echo $total_credit; ?></td>
                                        <td><?php echo $total_debit; ?></td>
                                        <td><?php echo $balance; ?></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Row end -->


            <?php
        }
        ?>
    </div>
    <!-- Content wrapper end -->
</div>
<?php
include 'footer.php';
?>
