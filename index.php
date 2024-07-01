<?php
include 'header.php';
?>

<!-- Content wrapper scroll start -->
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="stats-tile">
                    <div class="sale-icon">
                        <i class="icon-shopping-bag1"></i>
                    </div>
                    <div class="sale-details">
                        <h2>25</h2>
                        <p>Items</p>
                    </div>
                    <div class="sale-graph">
                        <div id="sparklineLine1"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="stats-tile">
                    <div class="sale-icon">
                        <i class="icon-shopping-bag1"></i>
                    </div>
                    <div class="sale-details">
                        <h2>32</h2>
                        <p>Suppliers</p>
                    </div>
                    <div class="sale-graph">
                        <div id="sparklineLine2"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                <div class="stats-tile">
                    <div class="sale-icon">
                        <i class="icon-check-circle"></i>
                    </div>
                    <div class="sale-details">
                        <h2>19</h2>
                        <p>Customers</p>
                    </div>
                    <div class="sale-graph">
                        <div id="sparklineLine3"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Row start -->
        <div class="row gutters">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="goal-container">
                    <div class="goal-info">
                        <h5>Today's Goal</h5>
                        <h6>70/100</h6>
                    </div>
                    <div class="goal-graph">
                        <div id="todaysTarget"></div>
                        <div class="circle-one"></div>
                        <div class="circle-two"></div>
                    </div>
                </div>
            </div>							
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="graph-card">
                    <h6>New Customers</h6>
                    <h4>2500</h4>
                    <div class="graph-placeholder">
                        <div id="customersGraph"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                <div class="payments-card">
                    <h6>Balance</h6>
                    <h4>$5699.89</h4>
                    <div class="custom-btn-group mt-2">
                        <button class="btn btn-outline-primary"><i class="icon-credit-card"></i>Deposit</button>
                        <button class="btn btn-primary"><i class="icon-credit-card"></i>Withdraw</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->

    </div>
    <!-- Content wrapper end -->

    <?php
    include 'footer.php';
    ?>