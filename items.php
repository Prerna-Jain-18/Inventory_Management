<?php
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
                            <div class="form-section-header">New Item</div>
                        </div>
                    </div>
                    <div class="card-body mt-4">
                        <form method="POST" action="item-data.php" enctype="multipart/form-data">

                            <!-- Row start -->
                            <div class="row gutters">

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Item Name" required="" name="item_name">
                                        </div>
                                        <div class="field-placeholder">Item Name</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Barcode" name="part_no" required="">
                                        </div>
                                        <div class="field-placeholder">Part No./Bar-Code</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Description" name="description" required="">

                                        </div>
                                        <div class="field-placeholder">Discription</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="unit" required="">
                                                <option value="">Select</option>
                                                <option value="KG">KG</option>
                                                <option value="Piece">Piece</option>
                                            </select>
                                            <div class="field-placeholder">Unit</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="category" required="">
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

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Quantity in Box" name="quantity" required="">

                                        </div>
                                        <div class="field-placeholder">Quantity in Box</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="HSN Code" name="hsn_code" required="">
                                        </div>
                                        <div class="field-placeholder">HSN Code</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                     <div class="field-wrapper">
                                        <div class="field-wrapper">
                                            <select class="form-select" id="formSelect" name="gst" required="">
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
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="MRP" name="mrp" required="">
                                        </div>
                                        <div class="field-placeholder">MRP</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Rate" name="rate" required="">
                                        </div>
                                        <div class="field-placeholder">Rate</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Price" name="selling_price" required="">
                                        </div>
                                        <div class="field-placeholder">Selling Price</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Location" name="location" required="">
                                        </div>
                                        <div class="field-placeholder">Location in Shop</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>

                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                    <!-- Field wrapper start -->
                                    <div class="field-wrapper">
                                        <div class="input-group">														
                                            <input type="text" class="form-control" placeholder="Opening Stock" name="opening_stock" required="">
                                        </div>
                                        <div class="field-placeholder">Opening Stock (In Qty)</div>
                                    </div>
                                    <!-- Field wrapper end -->
                                </div>
                                 <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                     <div class="field-wrapper">
                                    
                                        <button type="submit" name="submit" class="btn btn-info">
                                            <i class="la la-thumbs-o-up"></i> Save
                                        </button>
                                    
                                </div>       
                                </div>

                                                         
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $db = new Database();
        $item_data = $db->select('items', "*");
        ?>
        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="table-responsive">
                            <table id="copy-print-csv" class="table v-middle">
                                <thead>
                                    <tr>
                                        <th>Item Name</th>
                                        <th>Part No</th>
                                        <th>Discription</th>
                                        <th>Unit</th>
                                        <th>Category</th>
                                        <th>Quantity in Box</th>
                                        <th>HSN Code</th>
                                        <th>GST(%)</th>
                                        <th>MRP</th>
                                        <th>Rate</th> 
                                        <th>Selling Price</th>
                                        <th>Location in Shop</th>
                                        <th>Opening Stock</th>
                                        <th>Actions</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($item_data as $item) {
                                        ?>
                                        <tr>
                                            <td><?php echo $item['item_name']; ?> </td>
                                            <td><?php echo $item['part_no']; ?> </td>
                                            <td><?php echo $item['description']; ?> </td>
                                            <td><?php echo $item['unit']; ?> </td>
                                            <td><?php echo $item['category']; ?> </td>
                                            <td><?php echo $item['quantity']; ?> </td>
                                            <td><?php echo $item['hsn_code']; ?> </td>
                                            <td><?php echo $item['gst']; ?> </td>
                                            <td><?php echo $item['mrp']; ?> </td>
                                            <td><?php echo $item['rate']; ?> </td>
                                            <td><?php echo $item['selling_price']; ?> </td>
                                            <td><?php echo $item['location_in_shop']; ?> </td>
                                            <td><?php echo $item['opening_stock']; ?> </td>
                                           
                                            <td>
                                                <div class="actions">
                                                    <a href="item-update.php?id=<?php echo $item['item_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                        <i class="icon-edit1 text-info"></i>
                                                    </a>
                                                    <a href="item-delete.php?id=<?php echo $item['item_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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