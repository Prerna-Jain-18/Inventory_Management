<?php
include 'header.php';
$db = new Database();
$company_data = $db->select('company', "*");
?>
<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">All Companies</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="table-responsive">
                            <table id="basicExample" class="table custom-table">
                                <thead>
                                    <tr>
                                       
                                        <th>Company Name</th>
                                        <th>Company Logo</th>
                                        <th>PAN Number</th>
                                        <th>GST Number</th>
                                        <th>Email</th>
                                        <th>Landline</th>
                                        <th>Mobile Number</th>
                                        <th>Address 1</th>
                                        <th>Address2</th>
                                        <th>City</th>
                                        <th>Taluka</th>
                                        <th>District</th>
                                        <th>State</th>
                                        <th>Country</th>
                                        <th>Pincode</th>
                                        <th>Bank Name</th>
                                        <th>Branch Name</th>
                                        <th>Account Number</th>
                                        <th>IFSC Code</th>
                                        <th>UPI ID</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($company_data as $item) {
                                        ?>
                                        <tr>
                                            <td><?php echo $item['company_name']; ?></td>
                                            <td> <img src ="logo/<?php echo $item['company_logo']; ?>" width="50" height="50" </td>
                                            <td><?php echo $item['pan_number']; ?></td>
                                            <td><?php echo $item['gst_no']; ?></td>
                                            <td><?php echo $item['email']; ?></td>
                                            <td><?php echo $item['landline']; ?></td>
                                            <td><?php echo $item['mobile_number']; ?></td>
                                            <td><?php echo $item['address1']; ?></td>
                                            <td><?php echo $item['address2']; ?></td>
                                            <td><?php echo $item['city']; ?></td>
                                            <td><?php echo $item['taluka']; ?></td>
                                            <td><?php echo $item['district']; ?></td>
                                            <td><?php echo $item['state']; ?></td>
                                            <td><?php echo $item['country']; ?></td>
                                            <td><?php echo $item['pincode']; ?></td>
                                            <td><?php echo $item['bank_name']; ?></td>
                                            <td><?php echo $item['branch']; ?></td>
                                            <td><?php echo $item['account_number']; ?></td>
                                            <td><?php echo $item['ifsc_code']; ?></td>
                                            <td><?php echo $item['upi_id']; ?></td>
                                            <td><a href="company-update.php?id=<?php echo $item['company_id']; ?>" class="icon-edit1"></a>
                                                <a href="company-delete.php?id=<?php echo $item['company_id']; ?>" class="icon-trash-2"></a>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                    ?>

                            </table>
                            <!-- Content wrapper start -->
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- Content wrapper end -->
</div>
<!-- Content wrapper scroll end -->

<?php
include 'footer.php';
?>