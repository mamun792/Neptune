<?php
$page_name = "upload_cv.php";
require_once('header.php');
require_once('../../db_controler.php');

?>

<!-- app start -->
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Upload CV List</h1>

                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xl-12">
                    <div class="card widget widget-stats-large">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title fs-2 fw-bolder">service list</h3>
                                        <p class="text m-t-md fs-6 fw-400">
                                            All CV
                                        </p>
                                        <?php if (isset($_SESSION['band_upload'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo $_SESSION['band_upload']; ?>
                                            </div>
                                        <?php unset($_SESSION['band_upload']);
                                        } ?>
                                        <?php if (isset($_SESSION['error_photo'])) { ?>
                                            <div class="alert alert-danger mt-3 lg-sm" role="alert">
                                                <?php echo $_SESSION['error_photo']; ?>
                                            </div>
                                        <?php unset($_SESSION['error_photo']);
                                        } ?>


                                    </div>
                                    <div class="card-body overflow-auto">
                                        <table class=" table >

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                       
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $select_all = "SELECT * FROM upload_pdf ORDER BY id DESC ";
                                                    $query = mysqli_query($con, $select_all);


                                                    ?>
                                                    <?php foreach ($query as $show) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $show['cv_pdf'] ?></th>
                                                  
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>



                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-stats-large-info-container">
                                    <div class="card-header ">
                                        <h3 class="card-title fs-2 fw-bolder">Add CV </h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can CV at this link
                                        </p>


                                        <?php if (isset($_SESSION['band_upload'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo  $_SESSION['band_upload']; ?>
                                            </div>
                                        <?php unset($_SESSION['band_upload']);
                                        } ?>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="upload_back.php" method="post" enctype="multipart/form-data">

                                                    <label class="form-label">Upload Your CV</label>
                                                    <input type="file" class="form-control" name="img" placeholder="logo ">

                                                                                         
                                                    <button type="submit" class="btn btn-info btn-lg mt-4" name="btn">Add CV</button>

                                                </form>

                                            </div>

                                        </div>

                                    </div>



                                </div>
                            </div>

                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>
    <!-- app close -->
</div>
<?php require_once('footer.php'); ?>