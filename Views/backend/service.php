<?php
$page_name = "profile.php";
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
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title fs-2 fw-bolder">service list</h3>
                                        <p class="text m-t-md fs-6 fw-400">
                                            All services
                                        </p>
                                        <?php if (isset($_SESSION['msg'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo $_SESSION['msg']; ?>
                                            </div>
                                        <?php unset($_SESSION['msg']);
                                        } ?>
                                        <?php if (isset($_SESSION['msgd'])) { ?>
                                            <div class="alert alert-danger mt-3 lg-sm" role="alert">
                                                <?php echo $_SESSION['msgd']; ?>
                                            </div>
                                        <?php unset($_SESSION['msgd']);
                                        } ?>


                                    </div>
                                    <div class="card-body overflow-auto">
                                        <table class=" table >

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                        <th scope="col">Title</th>
                                                        <th scope="col">Descprition</th>
                                                        <th scope="col">Iogo</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $select_all = "SELECT * FROM Services ORDER BY id DESC ";
                                                    $query = mysqli_query($con, $select_all);


                                                    ?>
                                                    <?php foreach ($query as $show) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $show['id'] ?></th>
                                                            <td><?= $show['title'] ?></td>
                                                            <td><?= $show['description'] ?></td>
                                                            <td><i class="fa <?= $show['logo'] ?>"></i></td>

                                                            <td>
                                                                <?php if ($show['status'] == 1) : ?>
                                                                    <i class="btn btn-sm btn-success">show</i>
                                                                <?php else : ?>
                                                                    <button class="btn btn-sm btn-danger">Hide</button>
                                                                <?php endif; ?>
                                                            </td>
                                                           
                                                            <td><a href="service_edit.php?id=<?= $show['id'] ?>" class="btn btn-sm btn-info">Edit</a>
                                                        </td>
                                                        </td>
                                                        <td><button value="service_delete.php?id=<?= $show['id'] ?>" class="btn btn-sm btn-danger service_sweet_btn">Delete</button>

                                                        </td>
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
                                        <h3 class="card-title fs-2 fw-bolder">Add service </h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can service at this link
                                        </p>


                                        <?php if (isset($_SESSION['suce'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo $_SESSION['suce']; ?>
                                            </div>
                                        <?php unset($_SESSION['suce']);
                                        } ?>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="services.php" method="post">

                                                    <label class="form-label">Title</label>
                                                    <input type="text" class="form-control" name="title" placeholder="title">



                                                    <label class="form-label">Descprition</label>

                                                    <textarea maxlength="50" class="form-control" id="exampleFormControlTextarea1" name="desc" rows="4"></textarea>


                                                    <div class="form-group m-1-md" style="height: 200px; overflow-y:scroll">


                                                        <?php require_once('fontawsome.php');


                                                        ?>
                                                        <?php foreach ($icone as $icon) : ?>
                                                            <span class="badge text-dark p-4">
                                                                <input class="form-check-input" type="radio" name="logo" value="<?= $icon ?>" id="flexRadioDefault1_<?= $icon ?>" value="fa <?= $icon ?>">
                                                                <label class="form-check-label" for="flexRadioDefault1_<?= $icon ?>">
                                                                    <i class="fa-2x fa <?= $icon ?>"></i>
                                                            </span>
                                                            </label>


                                                        <?php endforeach; ?>
                                                    </div>
                                                    <br>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch" value="1" name="status" id="flexSwitchCheckDefault" />
                                                        <label class="form-check-label" for="flexSwitchCheckDefault">Status(show/hidden)</label>
                                                    </div>



                                                    <button type="submit" class="btn btn-info btn-lg mt-4" name="btn">Add Service</button>

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
   $(document).ready(function(){
      $('.service_sweet_btn').click(function(){
        var link=$(this).val();
        Swal.fire({
            
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'question',
  showCancelButton: true,
  confirmButtonColor: '#d33',
  cancelButtonColor: '#d33#3085d6',
  confirmButtonText: 'Delete Now!'
}).then((result) => {
  if (result.isConfirmed) {
   
        window.location.href = link;
      
  }
})

      });
   });
</script>