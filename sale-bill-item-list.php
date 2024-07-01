<?php
session_start();
include 'inc/database.php';
$db = new Database();

if (isset($_SESSION['newSaleBill']) && count($_SESSION['newSaleBill'])>0) {
    $bill = $_SESSION['newSaleBill'];
    $total_bill = $total_qty=0;
    foreach ($bill as $key => $i) {
        $rate = $i['rate'];
        if ($i['discount'] != 0 || $i['discount'] != "" || $i['discount'] != NULL) {
            if ($i['discount_type'] == "Percent") {
                $discount = $i['discount'] . "%";
                $rate = $rate - ($rate * $i['discount'] / 100);
            } else {
                $discount = "Rs. " . $i['discount'];
                $rate = $rate - $i['discount'];
            }
        } else {
            $discount = "-";
        }
        $amount = $rate * $i['quantity'];
        $gst = $amount * $i['gst_rate'] / 100;
        $amount = $amount + $gst;
        $total_bill += $amount;
        $total_qty += $i['quantity'];
        ?>
        <tr>
            <td><?php echo $i['item_name']; ?></td>
            <td><?php echo $i['description']; ?></td>
            <td><?php echo $i['hsn_code']; ?></td>
            <td><?php echo $i['rate']; ?></td>
            <td><?php echo $discount; ?></td>
            <td><?php echo $rate; ?></td>
            <td><?php echo $i['quantity']; ?></td>
            <td><?php echo $i['gst_rate']; ?></td>
            <td><?php echo $gst; ?></td>
            <td><?php echo $amount; ?></td>
            
            <td><input type="button" onclick="delete_item(<?php echo $key; ?>);" data-id="" value="X"></b></button></td>
        </tr>
        <?php
    }
    ?>
    <tr>
        <th colspan="5"></th>

        <th>Total</th>
        <th><?php echo $total_qty; ?></th>

        <td>-</td>
        <th><?php echo $gst; ?></th>
        <th id="total_bill"><?php echo $total_bill; ?></th>
    </tr>
    <tr>
        <th colspan="7"></th>
        <?php
        $round= round(round($total_bill)-$total_bill,2);
        ?>
        <th colspan="2">Round Off</th>
        <th colspan="1"><input  style="width:50px;" id="round_off" type="text" name="round_off" value="<?php echo $round; ?>" onkeyup="roundOff(this.value);" id="round_off"></th>
        
    </tr>
    <tr>
        <th colspan="7"></th>
        <th colspan="2">Final Total</th>
        <th id="final_total" name="total"><?php echo round($total_bill); ?></th>
    </tr>
    <tr>
        <th colspan="7"></th>
        <th colspan="3"><button class="btn btn-success" type="submit" name="submit" onclick="myfunction()" >Save Invoice</button></th>

    </tr>
    <?php
}else{
    echo "<tr><th colspan=10>No items in cart</th></tr>";
}
?>

