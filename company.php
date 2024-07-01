<?php
$page="select_company";
include 'header.php';

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
                            <div class="form-section-header">Business Info</div>
                        </div>
                    </div>
                    <div class="card-body mt-4">
                        <form method="POST" action="company-data.php" enctype="multipart/form-data">
                        <div class="row gutters">
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                    <div class="field-placeholder">Company Name <span class="text-danger">*</span></div>
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">														
                                        <input type="file" class="form-control" id="inputGroupFile01" name="logo">
                                    <button class="btn btn-outline-primary" type="button" id="inputGroupFile02">Upload</button>
                                    <div class="field-placeholder">Company Logo</div>
                                    </div>
                                </div>
                                
                                <!-- Field wrapper end -->
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="pan">
                                    </div>
                                    <div class="field-placeholder">Pan Number <span class="text-danger"></span></div>
                                </div>
                                <!-- Field wrapper end -->
                            </div>

                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text"name="gst">
                                    </div>
                                    <div class="field-placeholder">GST Number <span class="text-danger">*</span></div>
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                            
                            

                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                <div class="form-section-header">Contact Info</div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="email" name="email">
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
                                        <input class="form-control" type="text" name="landline">
                                    </div>
                                    <div class="field-placeholder">Landline Number</div>
                                </div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="mobile">
                                        <span class="input-group-text">
                                            <i class="icon-phone1"></i>
                                        </span>
                                    </div>
                                    <div class="field-placeholder">Mobile Number</div>
                                </div>
                            </div>
                            
                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                <div class="form-section-header">Address</div>
                            </div>
                            
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="address1">
                                    </div>
                                    <div class="field-placeholder">Address 1</div>
                                </div>
                            </div>
                            
                             <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="address2">
                                    </div>
                                    <div class="field-placeholder">Address 2</div>
                                </div>
                            </div>
                            
                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="city">
                                    </div>
                                    <div class="field-placeholder">City</div>
                                </div>
                            </div>
                            
                            
                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="taluka">
                                    </div>
                                    <div class="field-placeholder">Taluka</div>
                                </div>
                            </div>
                            
                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="district">
                                    </div>
                                    <div class="field-placeholder">District</div>
                                </div>
                            </div>
                                                       
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <div class="field-wrapper">
                                    <div class="field-wrapper">
                                        <select class="form-select" id="formSelect" name="state" >
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
                                            <option value="Maharashtra-27" selected="">Maharashtra-27</option>
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
                                        <div class="field-placeholder">State <span class="text-danger">*</span></div>
                                    </div>
                                </div>
                                <!-- Field wrapper end -->

                            </div>
                            
                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="country">
                                    </div>
                                    <div class="field-placeholder">Country</div>
                                </div>
                            </div>
                            
                            
                             <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="number" name="pincode">
                                    </div>
                                    <div class="field-placeholder">Pincode</div>
                                </div>
                            </div>
                           
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                                <div class="form-section-header">Bank Details</div>
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="bank_name">
                                    </div>
                                    <div class="field-placeholder">Bank Name</div>
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                            
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="branch">
                                    </div>
                                    <div class="field-placeholder">Branch Name</div>
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                            
                            
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                               <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="account_no">
                                    </div>
                                    <div class="field-placeholder">Account Number</div>
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                            
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="ifsc">
                                    </div>
                                    <div class="field-placeholder">IFSC Code</div>
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                            
                            
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                <!-- Field wrapper start -->
                                <div class="field-wrapper">
                                    <div class="input-group">
                                        <input class="form-control" type="text" name="upi">
                                    </div>
                                    <div class="field-placeholder">UPI ID</div>
                                </div>
                                <!-- Field wrapper end -->
                            </div>
                            
                               <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                   <center><button class="btn btn-primary" type="submit" name="submit">Submit</button></center>
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