<?php
include 'header.php';

$from_ledgers = $db->select("ledger", "*", ["ledger_type" => ["Cash", "bank"]]);
$ledgers = $db->select("ledger", "*", ["ledger_type" => ["Customer", "Supplier"]]);
$type = $_REQUEST['type'];

$id = $_REQUEST['id'];

$item = $db->select($type, "*", ['id' => $id])[0];
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
                            <div class="form-section-header"><?php echo ucfirst($type); ?></div>

                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="transaction-update-save.php" enctype="multipart/form-data">
                            <input type="text" hidden name="type" value="<?php echo $type; ?>">
                            <input type ="text" name="id" hidden value="<?php echo $id; ?>"><br>
                            <!-- Row start -->
                            <div class="row gutters">

                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="date-formatting" name="date" value="<?php echo $item['date']; ?>" />
                                        <div class="field-placeholder">Date</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="account_from" value="<?php echo $item['account_from']; ?>">
                                                <option value="">Select</option>
                                                <?php
                                                foreach ($ledgers as $l) {
                                                    ?>
                                                    <option value="<?php echo $l['ledger_id']; ?>" <?php echo $item['account_from'] == $l['ledger_id'] ? "selected" : ""; ?>><?php echo $l['ledger_name']; ?></option>
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
                                            <select class="form-select" id="formSelect" name="mode" value="<?php echo $item['mode']; ?>">
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
                                            <select class="form-select" id="formSelect" name="account_to" value="<?php echo $item['account_to']; ?>">
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
                                        <input type="text" class="form-control" id="input-numeral-lakh" name="amount"  value="<?php echo $item['amount']; ?>"/>
                                        <div class="field-placeholder">Amount</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="details" value="<?php echo $item['details']; ?>">
                                        <div class="field-placeholder">Details of transaction</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">
                                    <button type="submit" name="submit" class="btn btn btn-primary">Save</button>

                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12">

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