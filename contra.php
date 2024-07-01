<?php
include 'header.php';
$db = new Database();
$from_ledgers = $db->select("ledger", "*", ["ledger_type" => ["Cash","Bank"]]);
$ledgers = $db->select("ledger", "*", ["ledger_type" => ["Bank"]]);
?>
<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-4 col-12">
                            <div class="form-section-header">Add Contra</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="card-body">
                            <form method="POST" action="contra-data.php" enctype="multipart/form-data">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input type="text" class="form-control" placeholder="YYYY-MM-DD" id="date-formatting" />
                                            <div class="field-placeholder">Date</div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="field-wrapper">
                                                <select class="form-select" id="formSelect" name="from">
                                                    <option value="">Select</option>
                                                    <?php
                                                    foreach ($from_ledgers as $l) {
                                                        echo "<option value='" . $l['ledger_id'] . "'>" . $l['ledger_name'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <div class="field-placeholder">From</div>
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="field-wrapper">
                                                <select class="form-select" id="formSelect" name="to">
                                                    <option value="">Select</option>
                                                    <?php
                                                    foreach ($from_ledgers as $l) {
                                                        echo "<option value='" . $l['ledger_id'] . "'>" . $l['ledger_name'] . "</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <div class="field-placeholder">To</div>
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="description">
                                            <div class="field-placeholder">Description</div>
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

                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <button type="submit" name="submit" class="btn btn-info"> Save </button>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Card end -->
            </div>
        </div>
        <!-- Row end -->
        <!-- Row start -->
        <?php
        $contra_data = $db->select('contra', "*");
        ?>

        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <form method="POST" action="contra-update.php" enctype="multipart/form-data">
                            <!-- Place your content here -->

                            <div class="table-responsive">
                                <table id="copy-print-csv" class="table v-middle">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>From</th>
                                            <th>To</th>                                           
                                            <th>Amount</th>
                                            <th>Description</th>
                                            <th>Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($contra_data as $item) {
                                            ?>
                                            <tr>
                                                <td><?php echo $item['date']; ?> </td>
                                                <td><?php echo $item['from']; ?> </td>
                                                <td><?php echo $item['to']; ?> </td>                                               
                                                <td><?php echo $item['amount']; ?> </td>
                                                <td><?php echo $item['description']; ?> </td>

                                                <td>
                                                    <div class="actions">
                                                        <a href="contra-update.php?id=<?php echo $item['contra_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                            <i class="icon-edit1 text-info"></i>
                                                        </a>
                                                        <a href="contra-delete.php?id=<?php echo $item['contra_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
</div>
<!-- Content wrapper end 
<!-- Content wrapper scroll end -->

<?php
include 'footer.php';
?>