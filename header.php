<?php
session_start();
include 'inc/Database.php';
$db = new Database();

if (!isset($_SESSION['login_user'])) {
    header("Location:login.php");
    exit(0);
}
$user_data = $_SESSION['login_user'];
$user_id = $user_data['user_id'];
$companies = $db->select("company", "*", ['user_id' => $user_id]);
if (!isset($_SESSION['company_id']) && $page != "select_company") {
    if (sizeof($companies) > 0) {
        header("location:select-company.php");
    } else {
        header("location:company.php");
    }
}
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags --
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         
        <!-- Meta -->
        <meta name="description" content="Responsive Bootstrap4 Dashboard Template">
        <meta name="author" content="ParkerThemes">
        <link rel="shortcut icon" href="img/fav.png">

        <!-- Title -->
        <title>Uni Pro Admin Template - Admin Dashboard</title>


        <!-- *************
                ************ Common Css Files *************
        ************ -->
        <!-- Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Icomoon Font Icons css -->
        <link rel="stylesheet" href="fonts/style.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/main.css">



        <!-- *************
        ************ Vendor Css Files *************
        ************ -->

        <!-- Mega Menu -->
        <link rel="stylesheet" href="vendor/megamenu/css/megamenu.css">


        <!-- Search Filter JS -->
        <link rel="stylesheet" href="vendor/search-filter/search-filter.css">
        <link rel="stylesheet" href="vendor/search-filter/custom-search-filter.css">

        <!-- Data Tables -->
        <link rel="stylesheet" href="vendor/datatables/dataTables.bs4.css" />
        <link rel="stylesheet" href="vendor/datatables/dataTables.bs4-custom.css" />
        <link href="vendor/datatables/buttons.bs.css" rel="stylesheet" />

        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    </head>
    <body>

        <!-- Loading wrapper start -->

        <!-- Loading wrapper end -->

        <!-- Page wrapper start -->
        <div class="page-wrapper">

            <!-- Sidebar wrapper start -->
            <nav class="sidebar-wrapper">

                <!-- Sidebar content start -->
                <div class="sidebar-tabs">

                    <!-- Tabs nav start -->
                    <div class="nav" role="tablist" aria-orientation="vertical">
                        <a href="#" class="logo">
                            <img src="img/logo.svg" alt="Uni Pro Admin">
                        </a>
                        <a class="nav-link" id="home-tab" data-bs-toggle="tab" href="#tab-home" role="tab" aria-controls="tab-home" aria-selected="true">
                            <i class="icon-home2"></i>
                            <span class="nav-link-text">Dashboards</span>
                        </a>
                        <a class="nav-link" id="product-tab" data-bs-toggle="tab" href="#tab-product" role="tab" aria-controls="tab-product" aria-selected="false">
                            <i class="icon-layers2"></i>
                            <span class="nav-link-text">Masters</span>
                        </a>

                        <a class="nav-link" id="forms-tab" data-bs-toggle="tab" href="#tab-forms" role="tab" aria-controls="tab-forms" aria-selected="false">
                            <i class="icon-edit1"></i>
                            <span class="nav-link-text">Transactions</span>
                        </a>

                        <a class="nav-link" id="graphs-tab" data-bs-toggle="tab" href="#tab-graphs" role="tab" aria-controls="tab-graphs" aria-selected="false">
                            <i class="icon-shopping-cart"></i>
                            <span class="nav-link-text">Purchase</span>
                        </a>
                        <a class="nav-link" id="authentication-tab" data-bs-toggle="tab" href="#tab-authentication" role="tab" aria-controls="tab-authentication" aria-selected="false">
                            <i class="icon-trending-up"></i>
                            <span class="nav-link-text">Sale</span>
                        </a>
                        <a class="nav-link" id="reports-tab" data-bs-toggle="tab" href="#tab-reports" role="tab" aria-controls="tab-reports" aria-selected="false">
                            <i class="icon-menu"></i>
                            <span class="nav-link-text">Reports</span>
                        </a>
                        <a class="nav-link settings" id="settings-tab" data-bs-toggle="tab" href="#tab-settings" role="tab" aria-controls="tab-authentication" aria-selected="false">
                            <i class="icon-settings1"></i>
                            <span class="nav-link-text">Settings</span>
                        </a>

                    </div>
                    <!-- Tabs nav end -->

                    <!-- Tabs content start -->
                    <div class="tab-content">

                        <!-- Chat tab -->
                        <div class="tab-pane fade"  id="tab-home" role="tabpanel" aria-labelledby="home-tab">

                            <!-- Tab content header start -->
                            <div class="tab-pane-header">
                                Dashboards
                            </div>
                            <!-- Tab content header end -->

                            <!-- Sidebar menu starts -->
                            <div class="sidebarMenuScroll">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li>
                                            <a href="index.php" class="">Dashboard</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- Pages tab -->
                        <div class="tab-pane fade" id="tab-product" role="tabpanel" aria-labelledby="product-tab">
                            <!-- Tab content header start -->
                            <div class="tab-pane-header">
                                Masters
                            </div>
                            <div class="sidebarMenuScroll">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li>
                                            <a href="item-category.php">Item Category</a>
                                        </li>
                                        <li>
                                            <a href="items.php">Items</a>
                                        </li>
                                        <li>
                                            <a href="route.php">Route</a>
                                        </li>
                                        <li>
                                            <a href="ledger.php">Ledger</a>
                                        </li>
                                        <li>
                                            <a href="users.php">Users</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar menu ends -->
                        </div>

                        <!-- Forms tab -->
                        <div class="tab-pane fade" id="tab-forms" role="tabpanel" aria-labelledby="forms-tab">

                            <!-- Tab content header start -->
                            <div class="tab-pane-header">
                                Transaction 
                            </div>
                            <!-- Tab content header end -->

                            <!-- Sidebar menu starts -->
                            <div class="sidebarMenuScroll">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li>
                                            <a href="contra.php">Contra</a>
                                        </li>
                                        <li>
                                            <a href="payment.php">Payment</a>
                                        </li>
                                        <li>
                                            <a href="receipt.php">Receipt</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar menu ends -->
                        </div>

                        <!-- Components tab -->


                        <!-- Graphs tab -->
                        <div class="tab-pane fade" id="tab-graphs" role="tabpanel" aria-labelledby="graphs-tab">

                            <!-- Tab content header start -->
                            <div class="tab-pane-header">
                                Purchase
                            </div>
                            <!-- Tab content header end -->

                            <!-- Sidebar menu starts -->
                            <div class="sidebarMenuScroll">
                                <div class="sidebar-menu">
                                    <ul>

                                        <li>
                                            <a href="purchase.php">Add Purchase</a>
                                        </li>
                                        <li>
                                            <a href="purchase-manage.php">Manage Purchase</a>
                                        </li>

                                    </ul>

                                </div>
                            </div>
                            <!-- Sidebar menu ends -->
                        </div>

                        <!-- Authentication tab -->
                        <div class="tab-pane fade" id="tab-authentication" role="tabpanel" aria-labelledby="authentication-tab">
                            <!-- Tab content header start -->
                            <div class="tab-pane-header">
                                Sale
                            </div>
                            <!-- Tab content header end -->
                            <!-- Sidebar menu starts -->
                            <div class="sidebarMenuScroll">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li>
                                            <a href="sale.php">Add Sale</a>
                                        </li>
                                        <li>
                                            <a href="sale-manage.php">Manage Sale</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar menu ends -->
                        </div>

                        <div class="tab-pane fade" id="tab-reports" role="tabpanel" aria-labelledby="reports-tab">
                            <!-- Tab content header start -->
                            <div class="tab-pane-header">
                                Reports
                            </div>
                            <!-- Tab content header end -->
                            <!-- Sidebar menu starts -->
                            <div class="sidebarMenuScroll">
                                <div class="sidebar-menu">
                                    <ul>
                                        <li>
                                            <a href="ledger-report.php">Ledger Report</a>
                                        </li>
                                        <li>
                                            <a href="sale-report.php">Sale Report</a>
                                        </li>
                                        <li>
                                            <a href="item-report.php">Item Report</a>
                                        </li>
                                        <li>
                                            <a href="purchase-report.php">Purchase Report</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar menu ends -->
                        </div>

                        <!-- Settings tab -->
                        <div class="tab-pane fade" id="tab-settings" role="tabpanel" aria-labelledby="settings-tab">

                            <!-- Tab content header start -->
                            <div class="tab-pane-header">
                                Settings
                            </div>
                            <!-- Tab content header end -->

                            <!-- Settings start -->
                            <div class="sidebarMenuScroll">
                                <div class="sidebar-settings">
                                    <div class="accordion" id="settingsAccordion">

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="chngPwd">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#chngPwdCollapse" aria-expanded="false" aria-controls="chngPwdCollapse">
                                                    Change Password
                                                </button>
                                            </h2>
                                            <div id="chngPwdCollapse" class="accordion-collapse collapse" aria-labelledby="chngPwd" data-bs-parent="#settingsAccordion">
                                                <div class="accordion-body">
                                                    <div class="field-wrapper">
                                                        <input type="text" value="">
                                                        <div class="field-placeholder">Current Password</div>
                                                    </div>
                                                    <div class="field-wrapper">
                                                        <input type="password" value="">
                                                        <div class="field-placeholder">New Password</div>
                                                    </div>
                                                    <div class="field-wrapper">
                                                        <input type="password" value="">
                                                        <div class="field-placeholder">Confirm Password</div>
                                                    </div>
                                                    <div class="field-wrapper m-0">
                                                        <button class="btn btn-primary stripes-btn">Save</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="sidebarNotifications">
                                                <a href="company-view.php">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#notiCollapse" aria-expanded="false" aria-controls="notiCollapse">
                                                        View Company
                                                    </button></a>
                                            </h2>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Settings end -->

                            <!-- Sidebar actions starts -->
                            <div class="sidebar-actions">
                                <div class="support-tile blue">
                                    <a href="account-settings.html" class="btn btn-light m-auto">Logout</a>
                                </div>
                            </div>
                            <!-- Sidebar actions ends -->
                        </div>
                    </div>
                    <!-- Tabs content end -->
                </div>
                <!-- Sidebar content end -->

            </nav>
            <!-- Sidebar wrapper end -->

            <!-- *************
                    ************ Main container start *************
            ************* -->
            <div class="main-container">

                <!-- Page header starts -->
                <div class="page-header">

                    <!-- Row start -->
                    <div class="row gutters">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-6 col-9">

                            <!-- Search container start -->
                            <div class="search-container">

                                <!-- Toggle sidebar start -->
                                <div class="toggle-sidebar" id="toggle-sidebar">
                                    <i class="icon-menu"></i>
                                </div>
                                <!-- Toggle sidebar end -->

                                <!-- Mega Menu Start -->

                                <!-- Mega Menu End -->
                                <!-- Search input group start -->
                                <?php
                                if (isset($_SESSION['company_id'])) {
                                    $cid = $_SESSION['company_id'];

                                    $company_data = $db->select('company', '*', ['company_id' => $cid])[0];

                                    //$company_data = $company_data[0];
                                    ?>


                                    <div class="user-title text-primary">
                                        <img src ="logo/<?php echo $company_data['company_logo']; ?>" width="50" height="50" style="border-radius:50%;"> &nbsp;
                                        <b style="font-size:large; "><?php echo $company_data['company_name']; ?></b>
                                    </div>
                                    <?php
                                }
                                ?>

                                <!-- Search input group end -->
                            </div>
                            <!-- Search container end -->

                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-3">
                            <!-- Header actions start -->
                            <ul class="header-actions">
                                <li class="dropdown">
                                    <a href="#" id="taskss" data-toggle="dropdown" aria-haspopup="true">
                                        <i class="icon-bug_report"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end lrg" aria-labelledby="taskss">
                                        <div class="dropdown-menu-header">
                                            Tasks 
                                            <ul class="header-notifications">
                                                <li>
                                                    <a href="#">
                                                        <div class="details">
                                                            <div class="user-title"></div>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                                        <i class="icon-check-square"></i>                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end " aria-labelledby="notifications">
                                        <div class="dropdown-menu-header">
                                            Your Businesses
                                        </div>
                                        <div class="customScroll">
                                            <ul class="header-notifications">

                                                <?php
                                                foreach ($companies as $c) {
                                                    ?>
                                                    <li>
                                                        <a href="set-company.php?company_id=<?php echo $c['company_id']; ?>">


                                                            <?php
                                                            if ($c['company_id'] == $cid) {
                                                                ?>
                                                                <div class="details">

                                                                    <div class="user-title text-primary"><b><?php echo $c['company_name']; ?></b><i class="icon-check1 pull-right"></i></div>
                                                                </div>
                                                                <?php
                                                            } else {
                                                                ?>
                                                                <div class="details">

                                                                    <div class="user-title"><?php echo $c['company_name']; ?></div>                                                               </div>
                                                                <?php
                                                            }
                                                            ?>

                                                        </a>
                                                    </li>

                                                    <?php
                                                }
                                                ?>
                                        </div>
                                </li>

                                <li class="dropdown">
                                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                                        <span class="avatar">
                                            <img src="img/user.svg" alt="User Avatar">
                                            <span class="status busy"></span>
                                        </span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end md" aria-labelledby="userSettings">
                                        <div class="header-profile-actions">
                                            <a href="company.php"><i class="icon-user1"></i>Profile</a>
                                            <a href="account-settings.html"><i class="icon-settings1"></i>Settings</a>
                                            <a href="logout.php"><i class="icon-log-out1"></i>Logout</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <!-- Header actions end -->
                        </div>
                    </div>
                    <!-- Row end -->					
                </div>
