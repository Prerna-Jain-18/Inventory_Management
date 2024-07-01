<?php
include 'header.php';
$db = new Database();
$purchase_id = $_REQUEST['purchase_id'];
$purchase = $db->select("purchase", "*", ['purchase_id' => $purchase_id])[0];
$purchase_items = $db->select("purchase_items", "*", ['purchase_id' => $purchase_id]);
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
                    <div class="card-header-lg">
                        <h4>Create Invoice</h4>
                        <div class="text-end">
                            <a href="purchase.php" class="btn btn-primary">Create Invoice</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="invoice-container">
                            <div class="invoice-header">
                                <!-- Row start -->
                                <div class="row justify-content-between">
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                        <a href="index.html" class="invoice-logo">
                                            <img src="img/logo.svg" alt="Meow Admin Dashboard">
                                        </a>
                                    </div>
                                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-12">
                                        <address class="text-right">
                                            Softanic Solutions Pvt. Ltd. <br>
                                            Near Madhur Corner<br>
                                            Behind Ramanand Nagar Jalgaon (425001)
                                        </address>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="invoice-details">
                                        <address class="m-0">
                                            <?php echo $purchase['customer_name']; ?><br>
                                            Mobile No.-  <?php echo $purchase['mobile_no']; ?><br>
                                            GST No.-<?php echo $purchase['gstin']; ?>                                            
                                        </address>
                                        <div class="invoice-num">
                                            <div>Date - <?php echo $purchase['date']; ?></div>
                                            <div>Invoice No - <?php echo $purchase['purchase_id']; ?></div>
                                            <div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                            <!-- Row start -->
                            <div class="row gutters">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Sr. No.</th>
                                                    <th>Description of Goods</th>
                                                    <th>Qty</th>
                                                    <th>Rate</th>
                                                    <th>Discount</th>
                                                    <th>Taxable Value</th>
                                                    <th>GST Rate</th>
                                                    <th>CGST</th>
                                                    <th>SGST</th>
                                                    <th>IGST</th>
                                                    <th>Total</th>                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $val = 0;
                                                $total_cgst = $total_sgst = $total_igst = $total_qty = $total_discount = 0;
                                                foreach ($purchase_items as $item) {
                                                    $total_cgst += $item['cgst'];
                                                    $total_sgst += $item['sgst'];
                                                    $total_igst += $item['igst'];
                                                    $total_qty += $item['quantity'];
                                                    $total_discount += $item['discount'];
                                                    $val++;
                                                    ?>
                                                    <tr>
                                                        <td>
                                                            <h6><?php
                                                                echo $val;
                                                                ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['item_name']; ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['quantity']; ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['rate']; ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['discount']; ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['total']; ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['gst_rate']; ?></h6>
                                                        </td>                                                        
                                                        <td>
                                                            <h6><?php echo $item['cgst'];
                                                                ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['sgst']; ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['igst']; ?></h6>
                                                        </td>
                                                        <td>
                                                            <h6><?php echo $item['grand_total']; ?></h6>
                                                        </td>                                                      
                                                    </tr>
                                                    <?php
                                                }
                                                ?>
                                                <tr>                                                    
                                                    <td>
                                                        <h5 class="mt-2 text-danger"></h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="mt-2 text-danger">Total :</h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="mt-2 text-danger"><?php echo $total_qty; ?></h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="mt-2 text-danger"></h5>
                                                    </td>
                                                    <td colspan="1">
                                                        <h5 class="mt-2 text-danger"><?php echo $total_discount; ?></h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="mt-2 text-danger"></h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="mt-2 text-danger"></h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="mt-2 text-danger"><?php echo $total_cgst; ?></h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="mt-2 text-danger"><?php echo $total_sgst; ?></h5>
                                                    </td>
                                                    <td>
                                                        <h5 class="mt-2 text-danger"><?php echo $total_igst; ?></h5>
                                                    </td>                                                                                               
                                                    <td>
                                                        <h5 class="mt-2 text-danger"><?php echo $purchase['grand_total']; ?> (Rs)</h5>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
                            <!-- Row start -->
                            <div class="row gutters">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-start">
                                        <button class="btn btn-primary">Download</button>
                                        <button class="btn btn-ligt ms-1">Print</button>
                                    </div>
                                </div>
                            </div>
                            <!-- Row end -->
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