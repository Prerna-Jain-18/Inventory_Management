<?php
include ("header.php");
?>

<?php
include './inc/database.php';
$id = $_REQUEST['id'];
$db = new Database();
$payment_data = $db->select('payment', "*", ['payment_id' => $id])[0];
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
                            <div class="form-section-header">Update Payment</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="payment-update-save.php" enctype="multipart/form-data">
                            <input type ="text" name="pid" hidden value="<?php echo $id; ?>"><br>
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date-formatting" name="date" value="<?php echo $payment_data['date']; ?>" />
                                        <div class="field-placeholder">Date</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="amount_from" value="<?php echo $payment_data['amount_from']; ?>">
                                                <option value="">Select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Bank">Bank</option>
                                            </select>
                                            <div class="field-placeholder">Payment From</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="amount_to" value="<?php echo $payment_data['amount_to']; ?>">
                                                <option value="">Select</option>
                                                <option value="Supplier">Supplier</option>
                                                <option value="Customer">Customer</option>
                                            </select>
                                            <div class="field-placeholder">Payment To</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="amount_by" value="<?php echo $payment_data['amount_by']; ?>">
                                                <option value="">Select</option>
                                                <option value="">Cash</option>
                                                <option value="">Bank</option>
                                            </select>
                                            <div class="field-placeholder">Payment By</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="amount" value="<?php echo $payment_data['amount']; ?>">
                                        <div class="field-placeholder">Amount</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="details" value="<?php echo $payment_data['details']; ?>">
                                        <div class="field-placeholder">Details</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                            </div>

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <center>  <button class="btn btn-primary" type="submit" name="submit">Save</button></center>
                            </div>
                        </form>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
            <!-- Card end -->
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

