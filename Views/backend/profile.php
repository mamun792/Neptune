<?php
$page_name="profile.php";
require_once('header.php');

if (!isset($_SESSION['email'])) {
    header('location: ../../denied.php');
}

if($_SESSION['email']){
    
    $getEmail=$_SESSION['email'];
    $conutU_name= "SELECT * FROM user_regi WHERE email='$getEmail'";
    $query=mysqli_query($con,$conutU_name);
    $read=mysqli_fetch_assoc($query);
   
}
?>

            <!-- app start -->
            <div class="app-content">
                <div class="content-wrapper">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="page-description">
                                    <h1>Dashboard</h1>
                                    <?php if (isset($_SESSION['email'])) { ?>
                                        <h4> <?php echo $_SESSION['email']; ?></h4>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card widget widget-stats">
                                    <div class="card-body">
                                        <div class="widget-stats-container d-flex">
                                        <?php if(isset($read['imge'])){?>
                                            <img src="imges/<?= $read['imge']?> " class="img-fluid" alt="not foundi" width="120">
                                      <?php }else {?>
                                        <img src="../../assets/Backend/images/other/depositphotos_225976914-stock-illustration-person-gray-photo-placeholder-man.jpg" class="img-fluid" alt="not foundii" width="120">
                                        <?php }?>
                                          
                                            <div class="widget-stats-content flex-fill mx-3">
                                                <span class="widget-stats-title"><?php echo $read['u_name']; ?> </span>
                                                <span class="widget-stats-amount">....</span>
                                                <span class="widget-stats-amount"><?php echo $_SESSION['email']; ?> </span>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>


                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card widget widget-stats-large">
                                    <div class="row">
                                        <div class="col-xl-8">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h5 class="card-title">Change Password</h5>
                                                    <?php if (isset($_SESSION['pass'])) { ?>
                                                        <div class="alert alert-danger mt-3 lg-sm" role="alert">
                                                            <?php echo $_SESSION['pass']; ?>
                                                        </div>
                                                    <?php unset($_SESSION['pass']);
                                                    } ?>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-description">
                                                        with this form you can change your password
                                                    </p>
                                                    <div class="example-container">
                                                        <div class="example-content">
                                                            <form action="ChangePassword.php" method="post">

                                                                <label class="form-label">Current Password</label>
                                                                <input type="password" class="form-control" name="c_pass" value="<?php if (isset($_SESSION['cpass'])) {
                                                                                                                                        echo $_SESSION['cpass'];
                                                                                                                                    } ?>">

                                                                <?php if (isset($_SESSION['error_current_pass'])) { ?>
                                                                    <p class="form-text text-danger"><? $_SESSION['error_current_pass']; ?> </p>
                                                                <?php unset($_SESSION['error_current_pass']);
                                                                } ?>

                                                                <label class="form-label">New Password</label>
                                                                <input type="password" class="form-control" name="n_pass">

                                                                <?php if (isset($_SESSION['error_new_pass'])) { ?>
                                                                    <p class="form-text text-danger"><?php echo $_SESSION['error_new_pass']; ?> </p>
                                                                <?php unset($_SESSION['error_new_pass']);
                                                                } ?>

                                                                <label class="form-label">Confinm Password</label>
                                                                <input type="password" class="form-control" name="co_pass">

                                                                <?php if (isset($_SESSION['error_c_pass'])) { ?>
                                                                    <p class="form-text text-danger"><?php echo $_SESSION['error_c_pass']; ?> </p>
                                                                <?php unset($_SESSION['error_c_pass']);
                                                                } ?>

                                                                <button type="submit" class="btn btn-info btn-lg mt-4" name="btn">Change Password</button>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4">
                                            <div class="widget-stats-large-info-container">
                                                <div class="card-header">
                                                    <h5 class="card-title">Change Photo</h5>
                                                    <?php if (isset($_SESSION['photo_upload'])) { ?>
                                                    <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                        <?php echo $_SESSION['photo_upload']; ?> 
                                                    </div>
                                                 <?php unset($_SESSION['photo_upload']);
                                                     } ?>

                                                <?php if (isset($_SESSION['error_photo'])) { ?>
                                                    <div class="alert alert-danger mt-3 lg-sm" role="alert">
                                                        <?php echo $_SESSION['error_photo']; ?> 
                                                    </div>
                                                 <?php unset($_SESSION['error_photo']);
                                                     } ?>
                                             
                                             </div>


                                                <div class="example-content">
                                                    <form action="Changephoto.php" method="post" enctype="multipart/form-data" >

                                                 
                                                        <input type="file" class="form-control" name="new_photo">

                                                        <button type="submit" class="btn btn-info btn-lg mt-4" name="c_btn">Change Photo</button>
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
                <!-- app close -->
            </div>
<?php require_once('footer.php'); ?>            

       