<?php
  include ("header.php");
?>
      
<?php
include './inc/database.php';
$id = $_REQUEST['id'];
$db = new Database();
$contra_data = $db->select('contra', "*", ['contra_id' => $id])[0];
 
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
                    <div class="card-header">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Update Contra</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="card-body">
                            <form method="POST" action="contra-update-save.php" enctype="multipart/form-data">
                                <input type ="text" name="cid" hidden value="<?php echo $id; ?>"><br>
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                     <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date-formatting" name="date" value="<?php echo $contra_data['date']; ?>" />
                                        <div class="field-placeholder">Date</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="from" value="<?php echo $contra_data['from']; ?>">
                                                <option value="">Select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="Bank">Bank</option>
                                            </select>
                                            <div class="field-placeholder">From</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="to" value="<?php echo $contra_data['to']; ?>">
                                                <option value="">Select</option>
                                                <option value="Bank">Bank</option>
                                                <option value="Cash">Cash</option>
                                            </select>
                                            <div class="field-placeholder">To</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="amount" value="<?php echo $contra_data['amount']; ?>">
                                        <div class="field-placeholder">Amount</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="description" value="<?php echo $contra_data['description']; ?>">
                                        <div class="field-placeholder">Description</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <button type="submit" name="submit" class="btn btn-info"> Update </button>
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
        <!-- Row start -->
    </div>
</div>

<?php
include 'footer.php';
?>