<?php
include "header.php";
$id = $_REQUEST['id'];
$db = new Database();
$sale_data = $db->select('sale', "*", ['sale_id' => $id])[0];
$sale_items = $db->select("sale_items", "*", ["sale_id" => $id]);
$_SESSION['newSaleBill'] = $sale_items;
?>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

            <!-- Card start -->
            <div class="card">
                <form method="POST" id="sale_form" action="sale-update-save.php" enctype="multipart/form-data">

                    <div class="card-body">

                        <!-- Row start -->
                        <div class="row justify-content-between">
                            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-12">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-12">
                                        <div class="form-section-header light-bg">Customer Details</div>
                                    </div>
                                    <input type ="text"  hidden name="sale_id"  value="<?php echo $sale_data['sale_id'] ?>"><br>
                                    <div class="col-6">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">

                                            <input class="form-control" type="text" autofocus="" name="customer_name" id="customer_name" value="<?php echo $sale_data['customer_name']; ?>">
                                            <div class="field-placeholder">Customer Name <span class="text-danger">*</span></div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" id="name" name="name" value="<?php echo $sale_data['customer_name']; ?>">
                                            <div class="field-placeholder">Name</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" id="mobile_no" name="mobile_no" value="<?php echo $sale_data['mobile_no']; ?>">
                                            <div class="field-placeholder">Mobile Number</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="gstin" id="gstin"value="<?php echo $sale_data['gstin']; ?>">
                                            <div class="field-placeholder">GSTIN</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                </div>
                                <!-- Row end -->
                            </div>

                            <div class="col-xl-5 col-lg-5 col-md-7 col-sm-7 col-12">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-12">
                                        <div class="form-section-header light-bg">Date and Invoice Number</div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="input-group">
                                                <input type="text" class="form-control datepicker" id="date" name="date" value="<?php echo $sale_data['date']; ?>">
                                                <span class="input-group-text">
                                                    <i class="icon-calendar1"></i>
                                                </span>
                                            </div>
                                            <div class="field-placeholder">Date</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="field-wrapper">
                                                <select class="form-select" id="payment_mode" name="payment_mode" value="<?php echo $sale_data['payment_mode']; ?>">
                                                    <option value="Cash">Cash</option>
                                                    <option value="Credit">Credit</option>
                                                    <option value="Online">Online</option>
                                                </select>
                                                <div class="field-placeholder">Payment Mode</div>
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" id="payment_details" name="payment_details"   value="<?php echo $sale_data['payment_details']; ?>">
                                            <div class="field-placeholder">Payment Details</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-6">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="narration" id="narration"  value="<?php echo $sale_data['narration']; ?>">
                                            <div class="field-placeholder">Narration</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                </div>
                                <!-- Row end -->
                            </div>

                        </div>
                        <!-- Row end -->
                        <?php
                        ?>

                        <!-- Row start -->
                        <div class="row gutters">
                            <div class="col-12">

                                <div class="table">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th colspan="9" class="pt-3 pb-3">Item Details</th>
                                            </tr>
                                            <tr>
                                                <th>Items</th>
                                                <th>Description</th>
                                                <th>HSN Code</th>
                                                <th>GST Rate</th>
                                                <th>Rate</th>
                                                <th>Quantity</th>
                                                <th>Discount Type</th>
                                                <th>Discount</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr id="add_new_product_row">
                                        <form id="addItemForm" >
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input type="hidden" name="item_id" id="item_id"  >
                                                    <input class="form-control  item_name" type="text" name="item_name" id="item_name" >
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <div class="field-wrapper m-0">
                                                    <input class="form-control" type="text" name="description" id="description">
                                                </div>
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input class="form-control" type="text" name="hsn_code" id="hsn_code" >
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input class="form-control" type="text" name="gst_rate" id="gst_rate">
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input class="form-control" type="text" name="rate" id="rate">
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->
                                                <div class="field-wrapper m-0">
                                                    <input class="form-control" type="number" value="1" name="qty" id="qty">
                                                </div>
                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <!-- Field wrapper start -->

                                                <div class="field-wrapper m-0">
                                                    <select class="form-select"  name="discount_type" id="discount_type">
                                                        <option value="Rupees">Rupees</option>
                                                        <option value="Percent">Percent(%)</option>                                           
                                                    </select>

                                                </div>

                                                <!-- Field wrapper end -->
                                            </td>
                                            <td>
                                                <div class="field-wrapper m-0">
                                                    <input class="form-control" type="text" name="discount" id="discount">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="table-actions">
                                                    <button class="btn btn-light" id="add_item_btn" type="button">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </form>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                </form>
                                <div class="table-responsive" >
                                    <table class="table table-bordered m-0">
                                        <thead>
                                            <tr>
                                                <th rowspan="2">Items</th>
                                                <th rowspan="2">Description</th>
                                                <th rowspan="2">HSN Code</th>
                                                <th rowspan="2">MRP</th>
                                                <th rowspan="2">Discount</th>
                                                <th rowspan="2">Rate After Discount</th>
                                                <th rowspan="2">Quantity</th>
                                                <th colspan="2">GST</th>
                                                <th rowspan="2">Amount</th>
                                            </tr>

                                        </thead>
                                        <tbody  id="itemsList">


                                        </tbody>
                                    </table>
                                </div>
                                </form>
                            </div>
                        </div>
                        <!-- Row end -->


                    </div>
            </div>
            <!-- Card end -->
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        $("#itemsList").load("sale-bill-item-list.php");
        $("#sale_form").submit(function (event) {

            var formData = {
                date: $("#date").val(),
                referance: $("#referance").val(),
                payment_mode: $("#payment_mode").val(),
                payment_details: $("#payment_details").val(),
                customer_id: $("#customer_id").val(),
                customer_name: $("#customer_name").val(),
                mobile_no: $("#mobile_no").val(),
                gstin: $("#gstin").val(),
                narration: $("#narration").val(),
                round_off: $("#round_off").val()

            };

            $.ajax({
                type: "POST",
                url: "sale-update-save.php",
                data: formData
            }).done(function (data) {
                alert(data);

            });

            event.preventDefault();
        });
    });
</script>

<?php
include 'footer.php';
?>

<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    function roundOff(roundoff)
    {
        var total_bill = parseFloat($("#total_bill").html());
        $("#final_total").html(total_bill + parseFloat(roundoff));
    }
    $(document).ready(function () {



        $("#add_item_btn").click(function (e) {
            //alert('ok');
            //event.preventDefault();
            if ($("#rate").val() == 0)
            {
                alert("Please enter all fields");
                //  event.preventDefault();
                return false;
            } else {
                //alert('ok')
                var formData = {
                    item_id: $('#item_id').val(),
                    item_name: $("#item_name").val(),
                    description: $("#description").val(),
                    hsn_code: $("#hsn_code").val(),
                    gst_rate: $("#gst_rate").val(),
                    rate: $("#rate").val(),
                    quantity: $("#qty").val(),
                    discount_type: $("#discount_type").val(),
                    discount: $("#discount").val(),
                };
                $.ajax({
                    type: "POST",
                    url: "sale-item-add.php",
                    data: formData
                }).done(function (data) {
                    //alert(data);
                    $("#itemsList").load("sale-bill-item-list.php");
                    $("#item_name").val('');
                    $("#itemId").val('');
                    $("#qty").val('1');
                    $("#rate").val("0");
                    $("#item_name").focus();
                });
            }
        });
        //e.preventDefault();
        //event.preventDefault();
        return false;
    });

    $(function () {

        $("#customer_name").autocomplete({
            source: "search-customers.php",
            minLength: 1,
            autoFocus: true,
            select: function (event, ui) {
                //alert(ui.item.value);
                $("#customer_id").val(ui.item.value);
                $("#customer_name").val(ui.item.label);
                $("#name").val(ui.item.ledger_name);
                $("#name").focus();
                $("#mobile_no").val(ui.item.mobile_number);
                $("#gstin").val(ui.item.gst_no);
                //alert(ui.item);
                return false;
                //alert("Selected: " + ui.item.value + " aka " + ui.item.label);
            }

        });
        $("#item_name").autocomplete({
            source: "search-item.php",
            minLength: 1,
            autoFocus: true,
            select: function (event, ui) {
                $("#item_id").val(ui.item.value);
                $("#item_name").val(ui.item.label);
                $("#description").val(ui.item.description);
                $("#hsn_code").val(ui.item.hsn_code);
                $("#gst_rate").val(ui.item.gst);
                $("#rate").val(ui.item.rate);
                $("#qty").val("1");
                //alert(ui.item);
                return false;
                //alert("Selected: " + ui.item.value + " aka " + ui.item.label);
            }

        });
    });
</script>
