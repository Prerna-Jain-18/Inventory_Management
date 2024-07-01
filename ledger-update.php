<?php
include 'header.php';
?>

<?php
include './inc/database.php';
$id = $_REQUEST['id'];
$db = new Database();
$ledger_data = $db->select('ledger', "*", ['ledger_id' => $id])[0];
 
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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">New Ledger</div>
                        </div>
                    </div>
                    <div class="card-body mt-4">
                       <form method="POST" action="ledger-update-save.php" enctype="multipart/form-data">
                            <input type ="text" name="lid" hidden value="<?php echo $id; ?>"><br>
                            <div class="row gutters">

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="ledger_name" required="" value="<?php echo $ledger_data['ledger_name']; ?>">
                                            <span class="input-group-text">
                                                <i class="icon-user1"></i>
                                            </span>
                                        </div>
                                        <div class="field-placeholder">Ledger Name <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="alis" required="" value="<?php echo $ledger_data['alis']; ?>">
                                        </div>
                                        <div class="field-placeholder">Alias <span class="text-danger"></span></div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12"> </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="ledger_type" required="" value="<?php echo $ledger_data['ledger_type']; ?>">
                                                <option value="">Select</option>
                                                <option value="Supplier">Supplier</option>
                                                <option value="Customer">Customer</option>
                                                <option value="Bank">Bank</option>
                                            </select>
                                            <div class="field-placeholder">Ledger Type</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="pan_no" required="" value="<?php echo $ledger_data['pan_number']; ?>">
                                        </div>
                                        <div class="field-placeholder">PAN Number <span class="text-danger"></span></div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="gstin" required="" value="<?php echo $ledger_data['gst_no']; ?>">
                                        </div>
                                        <div class="field-placeholder">GSTIN. <span class="text-danger"></span></div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                    <div class="form-section-header">Contact Info </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="email" name="email" required="" value="<?php echo $ledger_data['email']; ?>">
                                            <span class="input-group-text">
                                                <i class="icon-email"></i>
                                            </span>
                                        </div>
                                        <div class="field-placeholder">Email Address <span class="text-danger">*</span></div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->  
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="mobile_no" required="" value="<?php echo $ledger_data['mobile_number']; ?>">
                                            <span class="input-group-text">
                                                <i class="icon-phone1"></i>
                                            </span>
                                        </div>
                                        <div class="field-placeholder">Mobile Number</div>
                                    </div>
                                    <!-- Field wrapper end --> 
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="address1" required="" value="<?php echo $ledger_data['address1']; ?>">
                                        </div>
                                        <div class="field-placeholder">Address 1</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="address2" required="" value="<?php echo $ledger_data['address2']; ?>">
                                        </div>
                                        <div class="field-placeholder">Address 2</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="city" required="" value="<?php echo $ledger_data['city']; ?>">
                                        </div>
                                        <div class="field-placeholder">City</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="pin_code" required="" value="<?php echo $ledger_data['pincode']; ?>">
                                        </div>
                                        <div class="field-placeholder">Pin Code</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="state" required="" value="<?php echo $ledger_data['state']; ?>">
                                                <option value="">Select</option>
                                                <option value="Andaman and Nicobar Islands-35">Andaman and Nicobar Islands-35</option>
                                                <option value="Andhra Pradesh-37">Andhra Pradesh-37</option>
                                                <option value="Arunachal Pradesh-12">Arunachal Pradesh-12</option>
                                                <option value="Assam-18">Assam-18</option>
                                                <option value="Bihar-10">Bihar-10</option>
                                                <option value="Chandigarh-04">Chandigarh-04</option>
                                                <option value="Chattisgarh-22">Chattisgarh-22</option>
                                                <option value="Dadra and Nagar Haveli-26">Dadra and Nagar Haveli-26</option>
                                                <option value="Daman and Diu-25">Daman and Diu-25</option>
                                                <option value="Delhi-07">Delhi-07</option>
                                                <option value="Goa-30">Goa-30</option>
                                                <option value="Gujarat-24">Gujarat-24</option>
                                                <option value="Haryana-06">Haryana-06</option>
                                                <option value="Himachal Pradesh-02">Himachal Pradesh-02</option>
                                                <option value="Jammu and Kashmir-01">Jammu and Kashmir-01</option>
                                                <option value="Jharkhand-20">Jharkhand-20</option>
                                                <option value="Karnataka-29">Karnataka-29</option>
                                                <option value="Kerala-32">Kerala-32</option>
                                                <option value="Lakshadweep Islands-31">Lakshadweep Islands-31</option>
                                                <option value="Madhya Pradesh-23">Madhya Pradesh-23</option>
                                                <option value="Madhya Pradesh-23">Maharashtra-21</option>
                                                <option value="Manipur-14">Manipur-14</option>
                                                <option value="Meghalaya-17">Meghalaya-17</option>
                                                <option value="Mizoram-15">Mizoram-15</option>
                                                <option value="Nagaland-13">Nagaland-13</option>
                                                <option value="Odisha-21">Odisha-21</option>
                                                <option value="Pondicherry-34">Pondicherry-34</option>
                                                <option value="Punjab-03">Punjab-03</option>
                                                <option value="Rajasthan-08">Rajasthan-08</option>
                                                <option value="Sikkim-11">Sikkim-11</option>
                                                <option value="Tamil Nadu-33">Tamil Nadu-33</option>
                                                <option value="Telangana-36">Telangana-36</option>
                                                <option value="Tripura-16">Tripura-16</option>
                                                <option value="Uttar Pradesh-09">Uttar Pradesh-09</option>
                                                <option value="Uttarakhand-05">Uttarakhand-05</option>
                                                <option value="West Bengal-19">West Bengal-19</option>
                                            </select>
                                            <div class="field-placeholder">State</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-3">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="route" required=""value="<?php echo $ledger_data['route']; ?>">
                                        </div>
                                        <div class="field-placeholder">Route</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                    <div class="form-section-header">Bank Details</div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="bank_name" required="" value="<?php echo $ledger_data['bank_name']; ?>">
                                        </div>
                                        <div class="field-placeholder">Bank Name</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="account_no" required="" value="<?php echo $ledger_data['account_number']; ?>">
                                        </div>
                                        <div class="field-placeholder">Account Number</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="ifsc_code" required="" value="<?php echo $ledger_data['ifsc_code']; ?>">
                                        </div>
                                        <div class="field-placeholder">IFSC Code</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="micr_code" required="" value="<?php echo $ledger_data['micr_code']; ?>">
                                        </div>
                                        <div class="field-placeholder">MICR Code</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                    <div class="form-section-header">Other Details</div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">
                                            <input class="form-control" type="text" name="opening_balence" required="" value="<?php echo $ledger_data['opening_balence']; ?>">
                                        </div>
                                        <div class="field-placeholder">Opening Balence</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="type" required="" value="<?php echo $ledger_data['type']; ?>">
                                                <option value="">Select</option>
                                                <option value="Credit">Credit</option>
                                                <option value="Debit">Debit</option>
                                            </select>                   
                                            <div class="field-placeholder">Type</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <center><button class="btn btn-primary" type="submit" name="submit">Save</button></center>
                                </div>                           
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include 'footer.php';
?>





































































































































