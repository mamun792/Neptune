<?php

$page_name = "profile.php";
require_once('header.php');
require_once('../../db_controler.php');
$id = $_GET['id'];

//$_SESSION['id']=$id;
?>

<!-- app start -->
<div class="app-content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-description">
                        <h1>Service Edit Manager</h1>

                    </div>
                </div>
            </div>

            <?php
            $select = "SELECT * FROM Services WHERE id=$id ";

            $query = mysqli_query($con,$select);

            $read = mysqli_fetch_array($query);


            ?>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card widget widget-stats-large">
                        <div class="row">

                            <div class="col-md-6 m-auto">
                                <div class="widget-stats-large-info-container">
                                    <div class="card-header ">
                                        <h3 class="card-title fs-2 fw-bolder">service edit--<?=$read['title'];?></h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can edit service here
                                        </p>
                                        
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="service_update.php" method="post">

                                               
                                                    <input type="hidden" class="form-control" value="<?= $read['id']; ?>" name="id" placeholder="title">
                                                    <label class="form-label">Title</label>
                                                    <input type="text" class="form-control" value="<?= $read['title']; ?>" name="title" placeholder="title">



                                                    <label class="form-label">Descprition</label>

                                                    <textarea class="form-control" name="desc" rows="4"><?= $read['description']; ?></textarea>


                                                    <div class="form-group m-1-md" style="height: 200px; overflow-y:scroll">

                                                        <?php require_once('fontawsome.php');


                                                        ?>
                                                        <?php foreach ($icone as $icon) : ?>
                                                            <span class="badge text-dark p-4">
                                                                <input class="form-check-input" type="radio" name="logo" value="<?= $icon ?>" id="flexRadioDefault1_<?= $icon ?>" value="fa <?= $logo ?>">
                                                                <label class="form-check-label" for="flexRadioDefault1_<?= $icon ?>">
                                                                    <i class="fa-2x fa <?= $icon ?>"></i>
                                                            </span>
                                                            </label>


                                                        <?php endforeach; ?>

                                                    </div>
                                                    <br>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" value="1" name="status" id="flexSwitchCheckDefault" <?=$read['status'] ? 'checked': ''?>/>
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Status(show/hidden)</label>
                                                    </div>

                                            </div>



                                            <button type="submit" class="btn btn-info btn-lg mt-4" name="btn">Update Service</button>

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