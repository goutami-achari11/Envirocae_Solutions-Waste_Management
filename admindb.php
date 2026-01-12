<?php
session_start();
if($_SESSION['EMAIL'] == FALSE)
{
	header('location:adlogin.html');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Envirocare Solutions</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
	<style>.f {
  animation: blinker 1s linear infinite;
}

@keyframes blinker {
  50% {
    opacity: 0;
  }
}</style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark text-light px-0 py-2">
        <div class="row gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <span class="fa fa-phone-alt me-2"></span>
                    <span>7338516789<span>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <span class="far fa-envelope me-2"></span>
                    <span>envirocaresolutions@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center mx-n2">

                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
        <a href="index.html" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h1 class="m-0">Envirocare Solutions</h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
       <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
			<a href="addbin.php" class="nav-item nav-link">Add bins</a>
                <a href="addedbin.php" class="nav-item nav-link">View added bins</a>
				
                <a href="viewfeedback.php" class="nav-item nav-link ">View Feedback</a>
                <a href="viewuser.php" class="nav-item nav-link">View Users</a>
               <a href="viewworker.php" class="nav-item nav-link">View Workers</a>
               <a href="alogout.php" class="nav-item nav-link">Logout</a>
                
            </div>
            
        </div>
    </nav>



    <!-- Top Feature Start -->
    <div style="background-image:url('img/r45.jpg'); border-radius: 8px;
  padding: 30px;
  text-align: center;border: 1px solid rgba(255, 255, 255, 0.5);
  backdrop-filter: blur(20px);
  webkit-backdrop-filter: blur(7px);" class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
               <!--  <p class="fs-5 fw-bold text-primary">WE MAKE YOUR CITY CLEAN</p> -->
			   <h1 style="color:white;backdrop-filter: blur(20px);webkit-backdrop-filter: blur(7px);" class="display-5 mb-5">Welcome to Envirocare Solutions <br><?php echo $_SESSION['ANAME'];?></h1>
             
            </div>
			
            <div class="row g-4">
			    <div style="float:left;" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div style="margin-left:30px; float:left; border:3px ridge green; border-radius:8px;width:300px;height:50px" class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/h5.jpg" alt="">
                        </div>
                        <div class="service-text rounded w-300 p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/wx.png" alt="Icon">
                            </div>
                            <h4 style="width:200px;"  class="mb-3 w-300">Add Dust Bins</h4>
                           
                            <a class="btn btn-sm" href="addbin.php"><i class="fa fa-plus text-primary me-2"></i>Click</a>
                        </div>
                    </div>
                </div>
			

				  <div style="float:left;" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div style="margin-left:30px; float:left; border:3px ridge green; border-radius:8px;width:300px;height:50px" class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/h5.jpg" alt="">
                        </div>
                        <div class="service-text rounded w-300 p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/wx.png" alt="Icon">
                            </div>
                            <h4 style="width:200px;"  class="mb-3 w-300">Added Bins</h4>
                           
                            <a class="btn btn-sm" href="addedbin.php"><i class="fa fa-plus text-primary me-2"></i>Click</a>
                        </div>
                    </div>
                </div>
                <div style="float:left;" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div style="margin-left:30px;margin-right:30px; float:left; border:3px ridge green; border-radius:8px;width:300px;height:50px" class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/l5.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/wx.png" alt="Icon">
                            </div>
                            <h4  style="width:200px;" class="mb-3">View Users</h4>
                            
                            <a class="btn btn-sm" href="viewuser.php"><i class="fa fa-plus text-primary me-2"></i>Click</a>
                        </div>
                    </div>
                </div>
				 <div style="float:left;" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div style="margin-left:30px; float:left; border:3px ridge green; border-radius:8px;width:300px;height:50px" class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/wx.png" alt="Icon">
                            </div>
                            <h4 style="width:200px;" class="mb-3">View Feedback</h4>
                           
                            <a class="btn btn-sm" href="viewfeedback.php"><i class="fa fa-plus text-primary me-2"></i>Click</a>
                        </div>
                    </div>
                </div>
				<div style="float:left;" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div style="margin-left:30px; float:left; border:3px ridge green; border-radius:8px;width:300px;height:50px" class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/wx.png" alt="Icon">
                            </div>
                            <h4 style="width:200px;" class="mb-3">View Workers</h4>
                   
                            <a class="btn btn-sm" href="viewworker.php"><i class="fa fa-plus text-primary me-2"></i>Click</a>
                        </div>
                    </div>
                </div>
				<div style="float:left;" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div style="margin-left:30px; float:left; border:3px ridge green; border-radius:8px;width:300px;height:50px" class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/wx.png" alt="Icon">
                            </div>
                            <h4 style="width:200px;" class="mb-3">View Payment</h4>
                         
                            <a class="btn btn-sm" href="viewpay.php"><i class="fa fa-plus text-primary me-2"></i>Click</a>
                        </div>
                    </div>
                </div>
				 <div style="float:left;" class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div style="margin-left:30px; float:left; border:3px ridge green; border-radius:8px;width:300px;height:50px" class="service-item rounded d-flex h-100">
                        <div class="service-img rounded">
                            <img class="img-fluid" src="img/r1.jpg" alt="">
                        </div>
                        <div class="service-text rounded p-5">
                            <div class="btn-square rounded-circle mx-auto mb-3">
                                <img class="img-fluid" src="img/icon/wx.png" alt="Icon">
                            </div>
                            <h4 style="width:200px;" class="mb-3">Logout</h4>
                         
                            <a class="btn btn-sm" href="alogout.php"><i class="fa fa-plus text-primary me-2"></i>Click</a>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Facts Start -->
    <div class="container-fluid facts my-5 py-5" data-parallax="scroll" data-image-src="img/p3.jpg">
        <div class="container py-5">
            <div class="row g-5">
               
            </div>
        </div>
    </div>
    <!-- Facts End -->

    <!-- Features End -->





    <!-- Footer Start -->
      <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Our Office</h3>
                    <p class="text-white mb-2"><i class="fa fa-map-marker-alt me-3"></i>Vasar Kudrige, Ankola 581357</p>
                    <p class="text-white mb-2"><i class="fa fa-phone-alt me-3"></i>7338516789</p>
                    <p class="text-white mb-2"><i class="fa fa-envelope me-3"></i>envirocaresolution@gmail.com</p>
                 
                </div>
           
                <div class="col-lg-3 col-md-6">
                    <h3 style="color:white;">Quick Links</h3><br>
					<a style="color:white; font-size:19px; width:290px;" class="btn btn-link" href="#">Dashboard</a>
                    <a style="color:white; font-size:19px; width:290px;" class="btn btn-link" href="addbin.php">Add dust bins</a>
                    <a style="color:white; font-size:19px; width:290px;" class="btn btn-link" href="addedbin.php">View Added bin</a>
                    <a style="color:white; font-size:19px; width:290px;" class="btn btn-link" href="viewfeedback.php">View Reviews</a>
					<a style="color:white; font-size:19px; width:290px;" class="btn btn-link" href="viewworker.php">View workers</a>
                    <a style="color:white; font-size:19px; width:290px;" class="btn btn-link" href="viewuser.php">View Users</a>
					  <a style="color:white; font-size:19px; width:290px;" class="btn btn-link" href="viewpay.php">View Payment</a>
					  <a style="color:white; font-size:19px; width:290px;" class="btn btn-link" href="alogout.php">Logout</a>
                </div>
				<div style="width:700px;height:300px;" class="col-lg-3 col-md-6">
                 <img style="width:900px;height:300px;" class="f img-fluid" src="img/p8.jpg" alt="">   
                </div>
              
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
   <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Envirocare Solutions</a>, All Right Reserved.
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>