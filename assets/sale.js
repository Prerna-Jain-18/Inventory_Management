        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {

                $("#customer_name").autocomplete({
                    source: "search-customers.php",
                    minLength: 1,
                    autoFocus: true,
                    select: function (event, ui) {
                        $("#ledger_id").val(ui.item.value);
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


                        //alert(ui.item);
                        return false;
                        //alert("Selected: " + ui.item.value + " aka " + ui.item.label);
                    }

                });
            });
        </script>

        <script>
            //    function getRowCode(id)
            //    {
            //        var code = "<tr><td><input type='text' id='</tr>";
            //    }
            //    $("#add_new_btn").click(function () {
            //        $("#last_row").before($("#add_new_product_row").prop('outerHTML'));
            //    });
        </script>
        <script>
            $("#addItemForm").submit(function (e) {

                //alert('form');
                var itemId = $("#itemId").val();
                var item_name = $("#item_name")
                var desc = $("#description").val();
                var hsn_code = $("#hsn_code")
                var gst_rate = $("gst_rate").val();
                var rate = $("rate").val();
                var qty = $("qty").val();
                var dis_type = $("discount_type").val();
                var discount = $("discount").val();
                if (rate == 0 || weight == 0)
                {
                    alert("Please enter all fields");
                    e.preventDefault();
                }
                // var quantity = $("#quantity_piece").val();

                var dataString = "itemId=" + itemId + "&rate=" + rate + "&qty=" + qty;
                if (itemId == 0)
                {

                    if (confirm("Want to save sale bill?"))
                    {

                        $("#round_off_1").select();
                        $("#round_off_1").focus();
                    }

                    e.preventDefault();
                } else if (rate == '')
                {
                    alert("Please enter Rate")
                } else {

                    $.ajax({
                        type: "POST",
                        url: "sale-item-add.php",
                        data: dataString,
                        cache: false,
                        success: function (result) {
                            document.getElementById("msg").innerHTML = result;
                            $("#itemsList").load("sale-billitemList.php");
                            $("#item_name").val('');
                            $("#itemId").val('');
                            $("#weight").val('0');
                            $("#rate").val("0");
                            $("#item_name").focus();
                        }
                    });
                }
                return false;
            });
            $("#c_state").change(function () {
                $("#itemsList").load("sale-billitemList.php", {'state': $(this).val()});

            });

        </script>



