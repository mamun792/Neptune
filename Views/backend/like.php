<?php
$page_name = "like.php";
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
                        <h1>Service Manager</h1>

                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-xl-12">
                    <div class="card widget widget-stats-large">
                        <div class="row">
                           
                            <div class="col-md-6">
                                <div class="widget-stats-large-info-container">
                                    <div class="card-header ">
                                        <h3 class="card-title fs-2 fw-bolder">Add Like </h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can Like at this link
                                        </p>


                                        <?php if (isset($_SESSION['msg'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo $_SESSION['msg']; ?>
                                            </div>
                                        <?php unset($_SESSION['msg']);
                                        } ?>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="like_insert.php" method="post">

                                                    

                                                    <div class="form-group m-1-md" style="height: 200px; overflow-y:scroll">
                                                    
                                                  
                                                   <?php require_once('fontawsome.php');


                                                    ?>
                                                    <?php foreach ($icone as $icon): ?>
                                                        <span class="badge text-dark p-4">
                                                            <input class="form-check-input" type="radio" name="logo" value="<?=$icon?>" id="flexRadioDefault1_<?=$icon?>" value="fa <?=$icon?>">
                                                            <label class="form-check-label" for="flexRadioDefault1_<?=$icon?>">
                                                                <i class="fa-2x fa <?=$icon?>"></i>
                                                                </span>
                                                            </label>
                                                       
                                                        
                                                    <?php endforeach; ?>
                                                    </div>
                                                    <br>
                                                    
                                                    <label class="form-label">Number</label>

                                                    <input type="number"class="form-control" name="number" placeholder="Number">
                                                    <label class="form-label">Descprition</label>
                                                    <input type="text" class="form-control" name="desc" placeholder="title">
                                                   <br>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" value="1" name="status" id="flexSwitchCheckDefault" />
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Status(show/hidden)</label>
                                                    </div>

                                                    <button type="submit" class="btn btn-info btn-lg mt-4" name="btn">Add info</button>

                                                </form>

                                            </div>

                                        </div>

                                    </div>



                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-stats-large-info-container">
                                    <div class="card-header ">
                                        <h3 class="card-title fs-2 fw-bolder">Work List</h3>

                                       
                                        <div class="example-container">
                                            <div class="example-content">
                                            <div class="card-body overflow-auto">
                                        <table class=" table >

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Number</th>
                                                        <th scope="col">Descprition</th>
                                                        <th scope="col">Iogo</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $select_all = "SELECT * FROM work ORDER BY id DESC ";
                                                    $query = mysqli_query($con, $select_all);


                                                    ?>
                                                    <?php foreach ($query as $show) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $show['id'] ?></th>
                                                            <td><?= $show['number'] ?></td>
                                                            <td><?= $show['descprition'] ?></td>
                                                            <td><i class="fa <?= $show['logo'] ?>"></i></td>

                                                            <td>
                                                                <?php if ($show['status'] == 1) : ?>
                                                                    <i class="btn btn-sm btn-success">show</i>
                                                                <?php else : ?>
                                                                    <button class="btn btn-sm btn-danger">Hide</button>
                                                                <?php endif; ?>
                                                            </td>
                                                            <td><a href="like_edit.php?id=<?= $show['id'] ?>" class="btn btn-sm btn-info">Edit</a>
                                                        </td>
                                                        </td>
                                                            <td><a href="like_delete.php?id=<?= $show['id'] ?>" class="btn btn-sm btn-danger">Delete</a>
                                                        </td>
                                                        </tr>
                                                    <?php endforeach; ?>

                                                </tbody>
                                            </table>



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
    </div>
    <!-- app close -->
</div>
<?php require_once('footer.php'); ?>