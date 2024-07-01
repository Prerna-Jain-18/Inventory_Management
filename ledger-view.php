<?php
include 'header.php';
?>
<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">    
<!-- Content wrapper start -->
<div class="content-wrapper">
    
<?php
 
 $ledger_data = $db->select('ledger', "*");
?>                   
                             
        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class = "card-header">
                        <div class = "col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">All Ledgers</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="table-responsive">
                            <table id="copy-print-csv" class="table v-middle">
                                <thead>
                                    <tr>
                                        <th>Ledger Name</th>
                                        <th>Alis</th>
                                        <th>Ledger Type</th>
                                        <th>Pan Number</th>
                                        <th>GST Number</th>
                                        <th>Email Id</th>
                                        <th>Mobile Number</th>
                                        <th>Address 1</th>
                                        <th>Address 2</th>
                                        <th>City</th> 
                                        <th>Pincode</th>
                                        <th>State</th>
                                        <th>Route</th>
                                        <th>Bank Name</th>
                                        <th>Account Number</th>
                                        <th>IFSC Code</th>
                                        <th>MICR Code</th>
                                        <th>Opening Balence</th>
                                        <th>Type</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($ledger_data as $item) {
                                        ?>
                                        <tr>
                                            <td><?php echo $item['ledger_name']; ?> </td>
                                            <td><?php echo $item['alis']; ?> </td>
                                            <td><?php echo $item['ledger_type']; ?> </td>
                                            <td><?php echo $item['pan_number']; ?> </td>
                                            <td><?php echo $item['gst_no']; ?> </td>
                                            <td><?php echo $item['email']; ?> </td>
                                            <td><?php echo $item['mobile_number']; ?> </td>
                                            <td><?php echo $item['address1']; ?> </td>
                                            <td><?php echo $item['address2']; ?> </td>
                                            <td><?php echo $item['city']; ?> </td>
                                            <td><?php echo $item['pincode']; ?> </td>
                                            <td><?php echo $item['state']; ?> </td>
                                            <td><?php echo $item['route']; ?> </td>
                                            <td><?php echo $item['bank_name']; ?> </td>
                                            <td><?php echo $item['account_number']; ?> </td>
                                            <td><?php echo $item['ifsc_code']; ?> </td>
                                            <td><?php echo $item['micr_code']; ?> </td>
                                            <td><?php echo $item['opening_balence']; ?> </td>
                                            <td><?php echo $item['type']; ?> </td>
                                            
                                            <td>
                                                <div class="actions">
                                                    <a href="ledger-update.php?id=<?php echo $item['ledger_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                       <i class="icon-edit1 text-info"></i>
                                                    </a>
                                                    <a href="ledger-delete.php?id=<?php echo $item['ledger_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
                <!-- Card end -->
            </div>
        </div>
        <!-- Row end -->
    </div>
</div>

<?php
include 'footer.php';
?>