<?php
$page="select_company";
include 'header.php';
$user_data = $_SESSION['login_user'];
$user_id = $user_data['user_id'];
$companies = $db->select("company", "*", ['user_id' => $user_id]);
?>
<div class="content-wrapper-scroll">
    <!-- Content wrapper start -->
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <div class="graph-day-selection" role="group">
                    <a type="button" href="company.php" class="btn active">Create Company </a>
                        </div>
                <!-- Row start -->
                <div class="row gutters">
                    <?php
                    foreach ($companies as $c) {
                    ?>
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- Pricing plan start -->
                        <div class="pricing-plan">
                            <a href="set-company.php?company_id=<?php echo $c['company_id']?>">
                                <div class="pricing-header">
                                    <div class="pricing-cost"><?php echo $c['company_name'];?></div>                                   
                                </div>
                            </a>
                        </div>
                        <!-- Pricing plan end -->
                    </div>
                    <?php
                    }
                    ?>
                    <!-- Row end -->
                </div>
            </div>
            <!-- Card end -->
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>