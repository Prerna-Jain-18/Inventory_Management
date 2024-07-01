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
                            <div class="form-section-header">New Category</div>
                        </div>
                    </div>
    
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="card-body">
                            <!-- Row start -->
                            <form method="POST" action="item-category-data.php" enctype="multipart/form-data">
                                <div class="row gutters">                               
                                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-12">
                                        <!-- Field wrapper start -->
                                        <div class="field-wrapper">
                                            <input class="form-control" type="text" name="category_name" required="">
                                            <div class="field-placeholder">Category Name<span class="text-danger">*</span></div>
                                            <div class="form-text">
                                                Enter Item Category Name
                                            </div>
                                        </div>
                                        <!-- Field wrapper end -->
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <!-- Field wrapper start -->                                   
                                        <div class="field-wrapper">
                                            <button type="submit" name="submit" class="btn btn-info">
                                                <i class="la la-thumbs-o-up"></i> Save
                                            </button>
                                            <!-- Field wrapper start --> 
                                        </div>
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
        $db = new Database();
        $category_data = $db->select('category', "*");
        ?>
        <div class="row gutters">
            <div class="col-xl-12">
                <!-- Card start -->
                <div class="card">
                    <div class="card-header">
                        
                    </div>
                    <div class="card-body">
                        <!-- Place your content here -->
                        <div class="table-responsive">
                            <table id="copy-print-csv" class="table v-middle">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Actions</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    foreach ($category_data as $item) {
                                        ?>
                                    <tr>
                                       <td><?php echo $item['category_name']; ?> </td>
                                       											 
                                        <td>
                                            <div class="actions">
                                                <a href="item-category-update.php?id=<?php echo $item['category_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                    <i class="icon-edit1 text-info"></i>
                                                </a>
                                                <a href="item-category-delete.php?id=<?php echo $item['category_id']; ?>" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete">
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