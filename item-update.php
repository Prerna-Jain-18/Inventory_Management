<?php
include 'header.php';
?>

<?php
include './inc/database.php';
$id = $_REQUEST['id'];
$db = new Database();
$item_data = $db->select('items', "*", ['item_id' => $id])[0];
 
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
                            <div class="form-section-header">Update Item</div>
                        </div>
                    </div>
                    <div class="card-body mt-4">
                        <form method="POST" action="item-update-save.php" enctype="multipart/form-data">
                            <input type ="text" name="iid" hidden value="<?php echo $id; ?>"><br>
                            <!-- Row start -->
                            <div class="row gutters">

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Item Name" required="" name="item_name" value="<?php echo $item_data['item_name']; ?>">
                                        </div>
                                        <div class="field-placeholder">Item Name</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Barcode" name="part_no" required="" value="<?php echo $item_data['part_no']; ?>">
                                        </div>
                                        <div class="field-placeholder">Part No./Bar-Code</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Description" name="description" required="" value="<?php echo $item_data['description']; ?>">

                                        </div>
                                        <div class="field-placeholder">Description</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="unit" required="" value="<?php echo $item_data['unit']; ?>">
                                                <option value="">Select</option>
                                                <option value="KG">KG</option>
                                                <option value="Piece">Piece</option>
                                            </select>
                                            <div class="field-placeholder">Unit</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="category" required=""value="<?php echo $item_data['category']; ?>">
                                                <option value="">Select</option>
                                                <option value="P&G">P&G</option>
                                                <option value="RSPL Group">RSPL Group</option>
                                                <option value="Euron Hygenic">Euron Hygenic</option>
                                                <option value="Mayuri Heena Herbal">Mayuri Heena Herbal</option>
                                                <option value="Scotch Brite">Scotch Brite</option>
                                                <option value="ZEBA">ZEBA</option>
                                                <option value="Disha Enterprises Megha">Disha Enterprises Megha</option>
                                                <option value="HansaPlast">HansaPlast</option>
                                                <option value="Capital Food Chings">Capital Food Chings</option>
                                                <option value="Sufal Distributor Kangaroo">Sufal Distributor Kangaroo</option>
                                                <option value="Anmol">Anmol</option>
                                                <option value="Platform No.1">Platform No.1</option>
                                                <option value="Unicharm India Pvt Ltd">Unicharm India Pvt Ltd</option>
                                            </select>
                                            <div class="field-placeholder">Category</div>
                                        </div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Quantity in Box" name="quantity" required="" value="<?php echo $item_data['quantity']; ?>">

                                        </div>
                                        <div class="field-placeholder">Quantity in Box</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="HSN Code" name="hsn_code" required="" value="<?php echo $item_data['hsn_code']; ?>">
                                        </div>
                                        <div class="field-placeholder">HSN Code</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="gst" required="" value="<?php echo $item_data['gst']; ?>">
                                                <option value="">Select</option>
                                                <option value="0%">0%</option>
                                                <option value="5%">5%</option>
                                                <option value="12%">12%</option>
                                                <option value="18%">18%</option>
                                                <option value="28%">28%</option>
                                            </select>
                                            <div class="field-placeholder">GST Rate in %</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="MRP" name="mrp" required="" value="<?php echo $item_data['mrp']; ?>">
                                        </div>
                                        <div class="field-placeholder">MRP</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Rate" name="rate" required="" value="<?php echo $item_data['rate']; ?>">
                                        </div>
                                        <div class="field-placeholder">Rate</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Price" name="selling_price" required="" value="<?php echo $item_data['selling_price']; ?>">
                                        </div>
                                        <div class="field-placeholder">Selling Price</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Location" name="location" required="" value="<?php echo $item_data['location_in_shop']; ?>">
                                        </div>
                                        <div class="field-placeholder">Location in Shop</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Opening Stock" name="opening_stock" required="" value="<?php echo $item_data['opening_stock']; ?>">
                                        </div>
                                        <div class="field-placeholder">Opening Stock (In Qty)</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="field-wrapper">
                                    <Center> 
                                        <button type="submit" name="submit" class="btn btn-info">
                                            <i class="la la-thumbs-o-up"></i> Save
                                        </button>
                                    </center>
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