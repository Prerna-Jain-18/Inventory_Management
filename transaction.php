<?php
include 'header.php';
$from_ledgers = $db->select("ledger", "*", ["ledger_type" => ["Cash", "bank"]]);
$ledgers = $db->select("ledger", "*", ["ledger_type" => ["Customer", "Supplier"]]);
$id = $user_data['user_id'];
if (isset($_REQUEST['type']) && in_array($_REQUEST['type'], ['payment', 'receipt', 'contra'])) {
    $transaction_type = $_REQUEST['type'];
} else {
    echo "<script>alert('Please select proper transaction type'); window.location='transaction-select.php';</script>";
}
?>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header"><?php echo ucfirst($transaction_type); ?></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="transaction-save.php" enctype="multipart/form-data">
                            <input type="text" hidden name="type" value="<?php echo $transaction_type; ?>">
                            <input type="text" hidden  name="id" value="<?php echo $id; ?>">

                            <!-- Row start -->
                            <div class="row gutters">

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="date-formatting" name="date" required="" />
                                        <div class="field-placeholder">Date</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="account_from" required="">
                                                <option value="">Select</option>
                                                <?php
                                                foreach ($transaction_type == "contra" ? $from_ledgers : $ledgers as $l) {
                                                    ?>
                                                    <option value="<?php echo $l['ledger_id']; ?>"><?php echo $l['ledger_name']; ?></option>
                                                    <?php
                                                }
                                                ?>

                                            </select>
                                            <div class="field-placeholder">Account From</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="mode" required="">
                                                <option value="">Select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="NEFT">NEFT</option>
                                                <option value="RTGS">RTGS</option>
                                                <option value="UPI">UPI</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                            <div class="field-placeholder">Mode of transaction</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="account_to" required="">
                                                <option value="">Select</option>
                                                <?php
                                                foreach ($from_ledgers as $l) {
                                                    echo "<option value='" . $l['ledger_id'] . "'>" . $l['ledger_name'] . "</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="field-placeholder">Account To</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" id="input-numeral-lakh" name="amount" required=""/>
                                        <div class="field-placeholder">Amount</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="details">
                                        <div class="field-placeholder">Details of transaction</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                                    <button type="submit" name="submit" class="btn btn btn-primary">Save</button>
                                    <button type="reset" name="reset" class="btn btn btn-danger">Cancel</button>

                                </div>


                            </div>


                        </form>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
            <!-- Card end -->
        </div>
        <?php
        $data1 = $db->select($transaction_type, "*");
//        if ($l['ledger_id'] == $data1['account_from']) {
//            echo $l['leadger_name'];
//        }
        ?>


        <div class = "row gutters">
            <div class = "col-xl-12">
                <!--Card start -->
                <div class = "card">
                    <div class = "card-header">

                    </div>
                    <div class = "card-body">
                        <form method = "POST" action = "#" enctype = "multipart/form-data">
                            <!--Place your content here -->

                            <div class = "table-responsive">
                                <table id = "copy-print-csv" class = "table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Account From</th>
                                            <th>Account To</th>
                                            <th>Mode</th>
                                            <th>Amount</th>
                                            <th>Details</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data1 as $item) {
                                            ?>
                                            <tr>
                                                <td><?php echo date("d-m-Y", strtotime($item['date'])) ?> </td>
                                                <td><?php echo get_ledger_name($item['account_from']); ?> </td>
                                                <td><?php echo get_ledger_name($item['account_to']); ?> </td>
                                                <td><?php echo $item['mode']; ?> </td>
                                                <td><?php echo $item['amount']; ?> </td>
                                                <td><?php echo $item['details']; ?> </td>

                                                <td>
                                                    <div class="actions">
                                                        <a href="transaction-update.php?type=<?php echo $transaction_type; ?>&id=<?php echo $item['id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="icon-edit1 text-info"></i>
                                                        </a>
                                                        <a href="transaction-delete.php?type=<?php echo $transaction_type; ?>&id=<?php echo $item['id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
                        </form>
                    </div>

                </div>
            </div>
            <!-- Card end -->
        </div>
    </div>
    <!-- Row end -->
</div>

<?php
include 'footer.php';
?>