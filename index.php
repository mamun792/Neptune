<?php 
require_once('db_controler.php');


?>

<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:27:43 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Personal Portfolio </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="shortcut icon" type="image/x-icon" href="assets/fontent/img/favicon.png">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/fontent/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fontent/css/animate.min.css">
        <link rel="stylesheet" href="assets/fontent/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/fontent/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/fontent/css/flaticon.css">
        <link rel="stylesheet" href="assets/fontent/css/slick.css">
        <link rel="stylesheet" href="assets/fontent/css/aos.css">
        <link rel="stylesheet" href="assets/fontent/css/default.css">
        <link rel="stylesheet" href="assets/fontent/css/style.css">
        <link rel="stylesheet" href="assets/fontent/css/responsive.css">
        <!-- <link rel="stylesheet" href="assets/fontent/fonts"> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    
    </head>
    <body class="theme-bg">

        <!-- preloader -->
        <div id="preloader">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                </div>
            </div>
        </div>
        <!-- preloader-end -->

        <!-- header-start -->
        <header>
            <div id="header-sticky" class="transparent-header">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <a href="index.html" class="navbar-brand logo-sticky-none"><img src="assets/fontent/img/logo/logo.png" alt="Logo"></a>
                                    <a href="index.html" class="navbar-brand s-logo-none"><img src="assets/fontent/img/logo/s_logo.png" alt="Logo"></a>
                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarNav">
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                        <span class="navbar-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                            <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                            <li class="nav-item"><a class="nav-link" href="./login.php">Sign-in</a></li>
                                        </ul>
                                    </div>
                                    <div class="header-btn">
                                        <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- offcanvas-start -->
            <div class="extra-info">
                <div class="close-icon menu-close">
                    <button>
                        <i class="far fa-window-close"></i>
                    </button>
                </div>
                <div class="logo-side mb-30">
                    <a href="index-2.html">
                        <img src="assets/fontent/img/logo/logo.png" alt="" />
                    </a>
                </div>
                <div class="side-info mb-30">
                    <div class="contact-list mb-30">
                        <h4>Office Address</h4>
                        <p>123/A, Miranda City Likaoli
                            Prikano, Dope</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Phone Number</h4>
                        <p>+0989 7876 9865 9</p>
                    </div>
                    <div class="contact-list mb-30">
                        <h4>Email Address</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="social-icon-right mt-20">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="offcanvas-overly"></div>
            <!-- offcanvas-end -->
        </header>
        <!-- header-end -->

        <!-- main-area -->
        <main>

            <!-- banner-area -->
            <section id="home" class="banner-area banner-bg fix">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-7 col-lg-6">
                            <div class="banner-content">
                                <?php 
                                 $select_owner_fb="SELECT settings_value FROM settings where settings_name='fb'";
                                  $select_owner_des="SELECT settings_value FROM settings where settings_name='owner describe'";
                                   $select_owner="SELECT settings_value FROM settings where settings_name='Owner Name'";
                                   ?>
                                <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                                <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am Will </span><?=mysqli_fetch_assoc( mysqli_query($con,$select_owner))['settings_value'];?> </h2>
                                <p class="wow fadeInUp" data-wow-delay="0.6s"><?=mysqli_fetch_assoc( mysqli_query($con,$select_owner_des))['settings_value'];?> </p>
                                <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                    <ul>
                                        <li><a href="<?=mysqli_fetch_assoc( mysqli_query($con,$select_owner_fb))['settings_value'];?> "><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    </ul>
                                </div>
                                <?php
                                $sel="SELECT * FROM upload_pdf";
                                $query=mysqli_query($con,$sel);
                                $read=mysqli_fetch_assoc($query);
                               
                                ?>
                                <a download="" href="Views/backend/imges/CV/<?=$read['cv_pdf'];?>" class="btn wow fadeInUp" data-wow-delay="1s">Download CV</a>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                            <div class="banner-img text-right">
                                <img src="assets/fontent/img/banner/banner_img.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner-shape"><img src="assets/fontent/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
            </section>
            <!-- banner-area-end -->

            <!-- about-area-->
            <section id="about" class="about-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="about-img">
                                <img src="assets/fontent/img/banner/banner_img2.png" title="me-01" alt="me-01">
                            </div>
                        </div>

                        <?php  
                         $select="SELECT * FROM `skills`";
                         $query=mysqli_query($con,$select);
                        
                        
                        ?>
                        <div class="col-lg-6 pr-90">
                            <div class="section-title mb-25">
                                <span>Introduction</span>
                               
                                <h2>About Me</h2>
                            </div>
                            <?php foreach($query as $show): ?>
                            <div class="about-content">
                           
                                <p></p>
                                <h3>Education:</h3>
                            </div>
                            <!-- Education Item -->
                            <div class="education">
                                <div class="year"><?=$show['skill_nmae'];?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?=$show['skill_details'];?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$show['skill_range'];?>%;" aria-valuenow="<?=$show['skill_range'];?>" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <?php endforeach; ?>
                            <!-- End Education Item -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-area-end -->

            <!-- Services-area -->
            <section id="service" class="services-area pt-120 pb-50">
				<div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>WHAT WE DO</span>
                                <h2>Services and Solutions</h2>
                            </div>
                        </div>
                    </div>

                   
                    
					<div class="row">
                    <?php  
                    $select="SELECT * FROM Services where status=1";
                    $query=mysqli_query($con,$select);
                   // echo $query['title'];
                    
                    ?>
                    <?php foreach($query as $pro):?>
						<div class="col-lg-4 col-md-6">
							<div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <i class="fa <?=$pro['logo']?>"></i>
								<h3><?=$pro['title']?></h3>
								<p>
									<?=$pro['description']?>
								</p>
							</div>
						</div>
                     <?php endforeach; ?>

						
						
					</div>
				</div>
			</section>
            <!-- Services-area-end -->

            <!-- Portfolios-area -->
            <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                            <div class="section-title text-center mb-70">
                                <span>Portfolio Showcase</span>
                                <h2>My Recent Best Works</h2>
                            </div>
                        </div>
                    </div>

                     <?php 

                     $select="SELECT * FROM `portflio`";
                     $query=mysqli_query($con,$select);
                     ?>

                    <div class="row">
                    <?php foreach($query as $port):?> 
                        <div class="col-lg-4 col-md-6 pitem">
                       
                            <div class="speaker-box">
								<div class="speaker-thumb">
									<img src="Views/backend/imges/portflio/<?=$port['photo'];?>" alt="img">
								</div>
								<div class="speaker-overlay">
									<span><?=$port['p_name'];?></span>
									<h4><a href="single.php?id=<?=$port['id'];?>"><?=$port['p_category'];?></a></h4>
									<a href="single.php?id=<?=$port['id'];?>" class="arrow-btn"><?=$port['p_descprition'];?> <span></span></a>
								</div>
                               
							</div>
                            
                        </div>
                      
                        <?php endforeach; ?>
                    </div>
                   
                </div>
            </section>
            <!-- services-area-end -->


            <!-- fact-area -->
            <?php
             $select="SELECT * FROM work where status=1";
             $query=mysqli_query($con,$select);
             ?>
            <section class="fact-area">
                <div class="container">
             
                    <div class="fact-wrap">
                   
                    <div class="row justify-content-between">
                    <?php foreach($query as $show):?>
                            <div class="col-xl-2 col-lg-3 col-sm-6">
                            
                                <div class="fact-box text-center mb-50">
                                
                                    <div class="fact-icon">
                                    <i class="fa <?=$show['logo']?>"></i>
                                        <h2><span class="count"><?=$show['number'];?></span></h2>
                                        <span><?=$show['descprition'];?></span>
                                    </div>
                                   
                                </div>
                               
                            </div>
                            <?php endforeach;?>
                           
                            
                       
                        
                    </div>
                   
                </div>
             
            </section>
            <!-- fact-area-end -->
            <?php
             $select="SELECT * FROM testmonial";
             $query=mysqli_query($con,$select);
             ?>
            <!-- testimonial-area -->
            <section class="testimonial-area primary-bg pt-115 pb-115">
           
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6 col-lg-8">
                       
                            <div class="section-title text-center mb-70">
                                <span>testimonial</span>
                                <h2>Happy Quater</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10">
                      
                            <div class="testimonial-active">
                                <div class="single-testimonial text-center">
                                <?php foreach($query as $show):?>
                                    <div class="testi-avatar">
                                    
                                        <img src="Views/backend/imges/testminil/<?=$show['photo'];?>" alt="img">
                                    </div>
                                    <div class="testi-content">
                                        <h4><span>“</span> <?=$show['descprition'];?><span>”</span></h4>
                                        <div class="testi-avatar-info">
                                            <h5><?=$show['name'];?></h5>
                                            <span><?=$show['idea'];?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                      
                        <!--  -->
                    </div>
                </div>
            </section>
            <!-- testimonial-area-end -->

            <!-- brand-area -->
            <?php
             $select="SELECT * FROM idbrands ";
             
             $query=mysqli_query($con,$select);
           
            
            ?>
           
            <div class="barnd-area pt-100 pb-100">
            
                <div class="container">
                    
                    <div class="row brand-active">
                    <?php foreach($query as $show):?>
                        <div class="col-xl-2 mx-5">
                       
                            <div class="single-brand">
                            
                            <img src="Views/backend/imges/bands/<?=$show['logo'];?>" alt="not found" width="100" height="70">
                            </div>
                             
                        </div>
                        <?php endforeach; ?>
                    </div>
                
                </div>
               
            </div>
           
            <!-- brand-area-end -->

            <!-- contact-area -->
            <section id="contact" class="contact-area primary-bg pt-120 pb-120">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title mb-20">
                                <span>information</span>
                                <h2>Contact Information</h2>
                            </div>
                            
                            <div class="contact-content">
                                <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an unknown printer took a galley.</p>
                                <h5>OFFICE IN <span>Bangladesh</span></h5>
                                <div class="contact-list">
                                <?php
                                $select_address="SELECT settings_value FROM settings where settings_name='address'";
                                $select_phone="SELECT settings_value FROM settings where settings_name='phone number'";
                                $select_email="SELECT settings_value FROM settings where settings_name='email_address'";
                                $select_about="SELECT settings_value FROM settings where settings_name='about_me'";
             
                                 ?>
                                    <ul>
                                        <li><i class="fas fa-map-marker"></i><span>address :</span><?=mysqli_fetch_assoc( mysqli_query($con,$select_address))['settings_value'];?></li>
                                        <li><i class="fas fa-map-marker"></i><span>phone number :</span><?=mysqli_fetch_assoc( mysqli_query($con,$select_phone))['settings_value'];?></li> 
                                        <li><i class="fas fa-map-marker"></i><span>email_address :</span><?=mysqli_fetch_assoc( mysqli_query($con,$select_email))['settings_value'];?></li>
                                        <li><i class="fas fa-map-marker"></i><span>about_me :</span><?=mysqli_fetch_assoc( mysqli_query($con,$select_about))['settings_value'];?></li>
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                        <?php if (isset($_SESSION['sent'])) { ?>
                                            <div class="alert alert-success mt-3 lg-sm" role="alert">
                                                <?php echo  $_SESSION['sent']; ?>
                                            </div>
                                        <?php unset($_SESSION['sent']);
                                        } ?>
                            <div class="contact-form">
                                <form action="sent.php" method="POST">
                                    <input type="text" name="name" placeholder="your name *">
                                    <input type="email" name="email" placeholder="your email *">
                                    <textarea name="message" id="message" placeholder="your message *"></textarea>
                                    <input type="submit" class="btn btn-primary" value="sent" name="sent">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->

        </main>
        <!-- main-area-end -->

        <!-- footer -->
        <footer>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="copyright-text text-center">
                                <p>Copyright© <span>Mahabub</span> | All Rights Reserved</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->





		<!-- JS here -->
        <script src="assets/fontent/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/fontent/js/popper.min.js"></script>
        <script src="assets/fontent/js/bootstrap.min.js"></script>
        <script src="assets/fontent/js/isotope.pkgd.min.js"></script>
        <script src="assets/fontent/js/one-page-nav-min.js"></script>
        <script src="assets/fontent/js/slick.min.js"></script>
        <script src="assets/fontent/js/ajax-form.js"></script>
        <script src="assets/fontent/js/wow.min.js"></script>
        <script src="assets/fontent/js/aos.js"></script>
        <script src="assets/fontent/js/jquery.waypoints.min.js"></script>
        <script src="assets/fontent/js/jquery.counterup.min.js"></script>
        <script src="assets/fontent/js/jquery.scrollUp.min.js"></script>
        <script src="assets/fontent/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/fontent/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/fontent/js/plugins.js"></script>
        <script src="assets/fontent/js/main.js"></script>
        <!--Start of Tawk.to Script-->
       <script type="text/javascript">
             var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
             (function(){
             var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
             s1.async=true;
             s1.src='https://embed.tawk.to/6348ff9837898912e96e9215/1gfaicumh';
             s1.charset='UTF-8';
             s1.setAttribute('crossorigin','*');
             s0.parentNode.insertBefore(s1,s0);
             })();
       </script>
<!--End of Tawk.to Script-->

    </body>


</html>
