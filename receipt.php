<?php
include 'header.php';
$db = new Database();
$from_ledgers=$db->select("ledger", "*",["ledger_type"=>["Cash","bank"]]);
$ledgers=$db->select("ledger", "*",["ledger_type"=>["Customer","Supplier"]]);
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
                            <div class="form-section-header">New Receipt</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="receipt-data.php" enctype="multipart/form-data">
                            <!-- Row start -->
                            <div class="row gutters">
                                
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" placeholder="DD-MM-YYYY" id="date-formatting" name="date" />
                                        <div class="field-placeholder">Date</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="receipt_from">
                                               <option value="">Select</option>
                                                 <?php
                                                foreach($ledgers as $l)
                                                {
                                                 ?>
                                               <option value="<?php echo $l['ledger_id'];?>"><?php echo $l['ledger_name'];?></option>
                                               <?php
                                                }
                                                ?>
                                                
                                            </select>
                                            <div class="field-placeholder">Receipt From</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="receipt_to">
                                                <option value="">Select</option>
                                                <?php
                                                foreach($from_ledgers as $l)
                                                {
                                                    echo "<option value='".$l['ledger_id']."'>".$l['ledger_name']."</option>";
                                                }
                                                ?>
                                            </select>
                                            <div class="field-placeholder">Receipt To</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="receipt_by">
                                                <option value="">Select</option>
                                                <option value="Cash">Cash</option>
                                                <option value="NEFT">NEFT</option>
                                                <option value="RTGS">RTGS</option>
                                                <option value="UPI">UPI</option>
                                                <option value="Cheque">Cheque</option>
                                            </select>
                                            <div class="field-placeholder">Receipt By</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input class="form-control" type="text" name="details">
                                        <div class="field-placeholder">Details</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <input type="text" class="form-control" id="input-numeral-lakh" name="amount" />
                                        <div class="field-placeholder">Amount</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <center> <button type="submit" name="submit" class="btn btn-primary">Save</button></center>
                            </div>

                        </form>
                    </div>
                    <!-- Row end -->
                </div>
            </div>
            <!-- Card end -->
        </div>
        <?php
        
        $receipt_data = $db->select('receipt', "*");
        ?>

        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form method="POST" action="receipt-update.php" enctype="multipart/form-data">
                            <!-- Place your content here -->

                            <div class="table-responsive">
                                <table id="copy-print-csv" class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Receipt From</th>
                                            <th>Receipt To</th>
                                            <th>Receipt By</th>
                                            <th>Amount</th>
                                            <th>Details</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($receipt_data as $item) {
                                            ?>
                                            <tr>
                                                <td><?php echo $item['date']; ?> </td>
                                                <td><?php echo $item['receipt_from']; ?> </td>
                                                <td><?php echo $item['receipt_to']; ?> </td>
                                                <td><?php echo $item['receipt_by']; ?> </td>
                                                <td><?php echo $item['amount']; ?> </td>
                                                <td><?php echo $item['details']; ?> </td>

                                                <td>
                                                    <div class="actions">
                                                        <a href="receipt-update.php?id=<?php echo $item['receipt_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="icon-edit1 text-info"></i>
                                                        </a>
                                                        <a href="receipt-delete.php?id=<?php echo $item['receipt_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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