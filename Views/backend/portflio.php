<?php
$page_name = "portflio.php";
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
                        <h1>Service Portflio</h1>

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
                                        <h3 class="card-title fs-2 fw-bolder">service portflio list</h3>
                                        <p class="text m-t-md fs-6 fw-400">
                                            All portflio services
                                        </p>
                                        <?php if (isset($_SESSION['msg'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo $_SESSION['msg']; ?>
                                            </div>
                                        <?php unset($_SESSION['msg']);
                                        } ?>
                                        


                                    </div>
                                      <div class="card-body overflow-auto">
  
                                     
                                     
                                              
                                               

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-stats-large-info-container">
                                    <div class="card-header ">
                                        <h3 class="card-title fs-2 fw-bolder">portflio add</h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can portflio at this link
                                            <?php if (isset($_SESSION['msg'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo  $_SESSION['msg']; ?>
                                            </div>
                                        <?php unset($_SESSION['msg']);
                                        } ?>
                                        </p>


                                        
                                        <div class="example-container">
                                            <div class="example-content">
                                                <div class="auth-credentials m-b-xxl">
                                                    <form class="form" action="portflio_back.php" method="post" enctype="multipart/form-data">
                                                        <label  class="form-label">Portflio Name</label>
                                                        <input type="text" class="form-control "  name="portflio_name" placeholder="Enter portflio Name">
                                                        <p class="text-danger"><?php if(isset($_SESSION['name'])){ 
                                                        echo $_SESSION['name'];}?> </p>
                                                        <label  class="form-label">Portflio Category</label>
                                                        <input type="text" class="form-control "  name="portflio_catogery" placeholder="Enter category Name">
                                                        <p class="text-danger"><?php if(isset($_SESSION['cat'])){ 
                                                        echo $_SESSION['cat'];}?> </p>

                                                        <label  class="form-label">Portflio Details</label>
                                                        <textarea class="form-control" id="summernote" rows="4" name="portflio_details"></textarea>
                                                        <p class="text-danger"><?php if(isset($_SESSION['descp'])){ 
                                                        echo $_SESSION['descp'];}?> </p>

                                                        <label  class="form-label">Portflio Photo</label>
                                                        <input type="file" class="form-control "  name="portflio_img" > 
                                                        <p class="text-danger"><?php if(isset($_SESSION['siz'])){ 
                                                        echo $_SESSION['siz'];}?> </p>                                 
                                                         <br>

                                                        <input type="submit" class="btn btn-primary" value="portflio add" name="p_btn">
                                                        <?php 
                                                        unset($_SESSION['name']);
                                                        unset($_SESSION['cat']);
                                                        unset($_SESSION['descp']);
                                                        unset($_SESSION['siz']);
                                                        ?>
                                                        
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
    <script>
       $(document).ready(function () {
    $("#example").DataTable();
    $('#summernote').summernote();
       });
    </script>
    