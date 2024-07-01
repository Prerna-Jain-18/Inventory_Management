<?php
include 'header.php';
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
                            <div class="form-section-header">New User</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="card-body">
                            <form method="POST" action="user-data.php" enctype="multipart/form-data">

                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">

                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="name" required="">
                                            <div class="field-placeholder">Name<span class="text-danger">*</span></div>

                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="uname" required="">
                                            <div class="field-placeholder">UserName<span class="text-danger">*</span></div>

                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="mobileno">
                                            <div class="field-placeholder">Mobile Number<span class="text-danger">*</span></div>

                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <div class="field-wrapper">
                                                <select class="form-select" id="formSelect" name="type" required="">
                                                    <option value="">Select</option>
                                                    <option value="Admin">Admin</option>
                                                    <option value="User">User</option>
                                                </select>
                                                <div class="field-placeholder">Type</div>
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="password" name="password" required="">
                                            <div class="field-placeholder">Password<span class="text-danger">*</span></div>

                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <button type="submit" name="submit" class="btn btn-info">
                                                <i class="la la-thumbs-o-up"></i> Save
                                            </button>
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


//use
//include 'database.php';
        $db = new Database();

//$id = $db->insert("users", ['name' => 'Disha Patil']);
        $users_data = $db->select('users', "*");
//print_r($data);
//foreach ($data as $key => $value) {
//    print_r($value);
//}
//$db->update('demo', ['name' => 'Prasad Neve'], ['id' => 1]);
//$db->delete('demo', ['id' => 2]);
        ?>

        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                       
                    </div>
                    <div class="card-body">
                        <form method="POST" action="user-update.php" enctype="multipart/form-data">
                            <!-- Place your content here -->
                          
                                    <div class="table-responsive">
                                        <table id="copy-print-csv" class="table v-middle">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Username</th>
                                                    <th>Mobile Number</th>
                                                    <th>Type</th>
                                                    <th>Password</th>
                                                    <th>Actions</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($users_data as $item) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $item['name']; ?> </td>
                                                    <td><?php echo $item['username']; ?> </td>
                                                    <td><?php echo $item['mobile_number']; ?> </td>
                                                    <td><?php echo $item['type']; ?> </td>
                                                    <td><?php echo $item['password']; ?> </td>

                                                    <td>
                                                        <div class="actions">
                                                            <a href="user-update.php?id=<?php echo $item['user_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                                <i class="icon-edit1 text-info"></i>
                                                            </a>
                                                            <a href="user-delete.php?id=<?php echo $item['user_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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
        <!-- Row end -->
    </div>
    <!-- Content wrapper end -->
</div>
<!-- Content wrapper scroll end -->


<?php
include 'footer.php';
?>
