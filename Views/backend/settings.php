<?php
$page_name = "skill.php";
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
                        <h1>Testmonial Manager</h1>

                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xl-12">
                    <div class="card widget widget-stats-large">
                        <div class="row">
                           <h1 class="text-center">Settings Managers</h1>
                           <br>
                            <div class="col-md-6 m-auto">
                                <div class="widget-stats-large-info-container">
                                    <div class="card-header ">
                                        <h3 class="card-title fs-2 fw-bolder">Settings </h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can settings at this link
                                            <?php if (isset($_SESSION['up'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo  $_SESSION['up']; ?>
                                            </div>
                                        <?php unset($_SESSION['up']);
                                        } ?>
                                        </p>


                                        
                                        <div class="example-container">
                                            <div class="example-content">
                                                <div class="auth-credentials m-b-xxl">
                                                    <form class="form" action="settings_change.php" method="post" enctype="multipart/form-data">
                                                       <?php 
                                                       $setting_select="SELECT * FROM `settings`";
                                                       $setting_query=mysqli_query($con,$setting_select);

                                                       ?>
                                                       <?php foreach($setting_query as $in):?>
                                                    <label for="signUpUsername" class="form-label"><?=$in['settings_name'];?></label>
                                                        <input type="text" class="form-control  " id="signUpUsername" name="<?=$in['settings_name'];?>" 
                                                        placeholder="<?=$in['settings_value'];?>" value="<?=$in['settings_value'];?>">

                                                        <?php endforeach; ?>
                                                        <br>
                                                        <input type="submit" class="btn btn-primary" value="changes settings" name="s_btn">
                                                      
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
       });
    </script>
    