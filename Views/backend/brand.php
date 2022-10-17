<?php
$page_name = "brand.php";
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
                                        


                                    </div>
                                    <div class="card-body overflow-auto">
                                        <table class=" table >

                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">ID</th>
                                                       
                                                        <th scope="col">Iogo</th>
                                                       
                                                        <th scope="col">Action</th>
                                                        <th scope="col">Delete</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $select_all = "SELECT * FROM idbrands ORDER BY id DESC ";
                                                    $query = mysqli_query($con, $select_all);


                                                    ?>
                                                    <?php foreach ($query as $show) : ?>
                                                        <tr>
                                                            <th scope="row"><?= $show['id'] ?></th>
                                                             
                                                            
                                                            <td><img src="imges/bands/<?=$show['logo'];?>" alt="not found" width="100" height="70">

                                                           
                                                           
                                                        </td>
                                                        </td>
                                                            
                                                            <td><button value="bands_delete.php?id=<?= $show['id'] ?>" class="btn btn-sm btn-danger sweet_btn">Delete</button>
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
                                        <h3 class="card-title fs-2 fw-bolder">Add brands </h3>


                                        <p class="text m-t-md fs-6 fw-400">
                                            you can brands at this link
                                        </p>


                                        <?php if (isset($_SESSION['band_upload'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo  $_SESSION['band_upload']; ?>
                                            </div>
                                        <?php unset($_SESSION['band_upload']);
                                        } ?>
                                        <div class="example-container">
                                            <div class="example-content">
                                                <form action="brands.php" method="post" enctype="multipart/form-data">

                                                    <label class="form-label">Icon</label>
                                                    <input type="file" class="form-control" name="img" placeholder="logo ">

                                                                                         
                                                    <button type="submit" class="btn btn-info btn-lg mt-4" name="btn">Add Bands</button>

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
      $('.sweet_btn').click(function(){
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


    <?php if (isset($_SESSION['sweets'])) { ?>
        <script>
             Swal.fire(
           ' Done ?',
           'Bands Deleted Succeefully ?',
           'question'
         )
</script>
     <?php unset($_SESSION['sweets']);
     } ?>


