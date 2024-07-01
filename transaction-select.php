<?php
include 'header.php';
?>
<div class="content-wrapper-scroll">

    <!-- Content wrapper start -->
    <div class="content-wrapper">

        <div class="card">
            <div class="card-body">

                <!-- Row start -->
                <div class="row gutters">
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- Pricing plan start -->
                        <div class="pricing-plan">
                            <a href="transaction.php?type=payment">
                                <div class="pricing-header">

                                    <div class="pricing-cost">Payment</div>
                                    <div class="pricing-save">Save $5.00</div>
                                </div>
                            </a>
                        </div>
                        <!-- Pricing plan end -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- Pricing plan start -->
                        <div class="pricing-plan">
                            <a href="transaction.php?type=receipt">
                                <div class="pricing-header">

                                    <div class="pricing-cost">Receipt</div>
                                    <div class="pricing-save">Save $5.00</div>
                                </div>
                            </a>
                        </div>
                        <!-- Pricing plan end -->
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- Pricing plan start -->
                        <div class="pricing-plan">
                            <a href="transaction.php?type=contra">
                                <div class="pricing-header">

                                    <div class="pricing-cost">Contra</div>
                                    <div class="pricing-save">Save $5.00</div>
                                </div>
                            </a>
                        </div>
                        <!-- Pricing plan end -->
                    </div>


                </div>
                <!-- Row end -->

            </div>
        </div>
        <!-- Card end -->
    </div>
</div>

<?php
include 'footer.php';
?>
