<?php
$page_name = "testmonial.php";
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
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title fs-2 fw-bolder">Testmonial list</h3>
                                        <p class="text m-t-md fs-6 fw-400">
                                            All Testmonial
                                        </p>
                                        <?php if (isset($_SESSION['msg'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo $_SESSION['msg']; ?>
                                            </div>
                                        <?php unset($_SESSION['msg']);
                                        } ?>
                                        


                                    </div>
                                      <div class="card-body overflow-auto">
  
                                     
                                      <table id="example"  class="display" cellspacing="0" width="100%">
                                     
                                      <thead>
                                              <tr>
                                                  <th>Photo</th>
                                                  <th>Descprition</th>
                                                  <th>Name</th>
                                                  <th>Actione</th>
                                                  
                                              </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                                $select_all = "SELECT * FROM `testmonial` ORDER BY id DESC ";
                                                $query = mysqli_query($con, $select_all);


                                                ?>
                                                <?php foreach ($query as $user) : ?>
                                                    <tr>
                                                    <td><img src="imges/testminil/<?=$user['photo']?>" alt="not found" width="100" height="70">
                                                       <td><?=$user['descprition']?></td>
                                                       <td><?=$user['name']?></td>
                                                       <td><?=$user['idea']?></td>
                                                      
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
                                        <h3 class="card-title fs-2 fw-bolder">Testmonial</h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can testmonial at this link
                                            <?php if (isset($_SESSION['regi'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo  $_SESSION['regi']; ?>
                                            </div>
                                        <?php unset($_SESSION['regi']);
                                        } ?>
                                        </p>


                                        
                                        <div class="example-container">
                                            <div class="example-content">
                                                <div class="auth-credentials m-b-xxl">
                                                    <form class="form" action="testmonial_back.php" method="post" enctype="multipart/form-data">
                                                        <label for="signUpUsername" class="form-label">Title</label>
                                                        <input type="text" class="form-control  
                                                   <?php
                                                   if (isset($_SESSION['error_name'])) { ?>
                                                       is-invalid
                                                      
                                                  <?php }
                                                   ?>
                                   
                                                   " id="signUpUsername" name="testmonial_title" placeholder="Enter Title">

                                                        <?php if (isset($_SESSION['error_name'])) { ?>
                                                            <p id="emailHelp" class="form-text text-danger"><?php echo $_SESSION['error_name']; ?> </p>
                                                        <?php } ?>

                                                        <label for="signUpUsername" class="form-label">Photo</label>
                                                        <input type="file" class="form-control  
                                                        <?php
                                                        if (isset($_SESSION['error_email'])) { ?>
                                                            is-invalid
                                                           
                                                       <?php }
                                                        ?>
                                        
                                                        " id="signUpUsername" name="imgs" >

                                                        <?php if (isset($_SESSION['error_email'])) { ?>
                                                            <p id="emailHelp" class="form-text text-danger "><?php echo $_SESSION['error_email']; ?> </p>
                                                        <?php } ?>
                                                        

                                                        <label  class="form-label">Descprition</label>
                                                        <textarea class="form-control" id="summernote" rows="4" name="testmonial_details"></textarea>
                                                        <?php
                                                        if (isset($_SESSION['error_phone'])) { ?>
                                                            is-invalid
                                                           
                                                       <?php }
                                                        ?>
                                        
                                                       

                                                        <label for="signUpPassword" class="form-label">Name</label>
                                                        <input type="text" class="form-control
                                                        <?php
                                                        if (isset($_SESSION['error_pass'])) { ?>
                                                            is-invalid
                                                           
                                                       <?php }
                                                        ?>
                                                        " id="signUpPassword" name="testmonial_name">

                                                        <?php if (isset($_SESSION['error_pass'])) { ?>
                                                            <p id="emailHelp" class="form-text text-danger"><?php echo $_SESSION['error_pass']; ?> </p>
                                                        <?php } ?>

                                                        <label for="signUpPassword" class="form-label">Idea</label>
                                                        <input type="text" class="form-control
                                                      <?php
                                                      if (isset($_SESSION['error_cpass'])) { ?>
                                                          is-invalid
                                                         
                                                     <?php }
                                                      ?>
                                                      " id="signUpPassword" name="testmonial_idea">

                                                        <?php if (isset($_SESSION['error_cpass'])) { ?>
                                                            <p id="emailHelp" class="form-text text-danger "><?php echo $_SESSION['error_cpass']; ?> </p>
                                                        <?php } ?>
                                                        <br>
                                                        <input type="submit" class="btn btn-primary" value="add testmonial" name="t_btn">
                                                        <?php
                                                        unset($_SESSION['error_cpass']);
                                                        unset($_SESSION['error_pass']);
                                                        unset($_SESSION['error_email']);
                                                        unset($_SESSION['error_name']);
                                                        unset($_SESSION['error_phone']);
                                                        //unset($_SESSION['email']);
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
       });
    </script>
    