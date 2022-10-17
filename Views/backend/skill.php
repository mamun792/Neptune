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
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title fs-2 fw-bolder">Skill list</h3>
                                        <p class="text m-t-md fs-6 fw-400">
                                            All skill
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
                                                  <th>Skill Name</th>
                                                  <th>Descprition</th>
                                                  <th>Skill Range</th>
                                                 
                                                  
                                              </tr>
                                          </thead>
                                          <tbody>
                                          <?php
                                                $select_all = "SELECT * FROM `skills` ORDER BY id DESC ";
                                                $query = mysqli_query($con, $select_all);


                                                ?>
                                                <?php foreach ($query as $user) : ?>
                                                    <tr>
                                                    
                                                       <td><?=$user['skill_nmae']?></td>
                                                       <td><?=$user['skill_details']?></td>
                                                       <td><?=$user['skill_range']?></td>
                                                      
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
                                        <h3 class="card-title fs-2 fw-bolder">Skill</h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can skill at this link
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
                                                    <form class="form" action="skill_back.php" method="post" enctype="multipart/form-data">
                                                        <label for="signUpUsername" class="form-label">skill name</label>
                                                        <input type="text" class="form-control  
                                                   <?php
                                                   if (isset($_SESSION['error_name'])) { ?>
                                                       is-invalid
                                                      
                                                  <?php }
                                                   ?>
                                   
                                                   " id="signUpUsername" name="skill_nmae" placeholder="Enter Skill">

                                                        <?php if (isset($_SESSION['error_name'])) { ?>
                                                            <p id="emailHelp" class="form-text text-danger"><?php echo $_SESSION['error_name']; ?> </p>
                                                        <?php } ?>

                                                        
                                                        <label  class="form-label">Descprition</label>
                                                        <textarea class="form-control" id="summernote" rows="4" name="skill_details"></textarea>
                                                        <?php
                                                        if (isset($_SESSION['error_phone'])) { ?>
                                                            is-invalid
                                                           
                                                       <?php }
                                                        ?>
                                                       <br>
                                                        <input type="range"  name="skill_range">

                                                        <br>
                                                        <input type="submit" class="btn btn-primary" value="add skill" name="s_btn">
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
    