<?php
include ("header.php");

include './inc/database.php';
$id = $_REQUEST['id'];
$db = new Database();
$users_data = $db->select('users', "*", ['user_id' => $id])[0];
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
                            <div class="form-section-header">Update User</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="card-body">
                            <form method="POST" action="user-update-save.php" enctype="multipart/form-data">
                                <input type ="text" name="uid" hidden value="<?php echo $id; ?>"><br>
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="name" value="<?php echo $users_data['name']; ?>">
                                            <div class="field-placeholder">Name<span class="text-danger" >*</span></div>

                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="uname" value="<?php echo $users_data['username']; ?>">
                                            <div class="field-placeholder">UserName<span class="text-danger" >*</span></div>

                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="mobileno" value="<?php echo $users_data['mobile_number']; ?>">
                                            <div class="field-placeholder">Mobile Number<span class="text-danger" >*</span></div>

                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="field-wrapper">
                                                <select class="form-select" id="formSelect" name="type" value="<?php echo $users_data['type']; ?>" >
                                                    <option value="">Select</option>
                                                    <option value="">Admin</option>
                                                    <option value="">User</option>
                                                </select>
                                                <div class="field-placeholder">Type</div>
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <button type="submit" class="btn btn-info">Update</button>                                          
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
    </div>
    <!-- Content wrapper end -->
</div>
<!-- Content wrapper scroll end -->

<?php
include 'footer.php';
?>