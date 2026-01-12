
<?php 
session_start();
if($_SESSION['EMAIL'] == FALSE)
{
	header('location:login.html');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Envirocare solutions</title>
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
	<style>
	.inputs {
  text-align: left;
  margin-top: 30px;
}

label, input, textarea{
  display: block;
  width: 100%;
  padding: 0;
  border: none;
  outline: none;
  box-sizing: border-box;
}

label {
  margin-bottom: 4px;
}

label:nth-of-type(2) {
  margin-top: 12px;
}

input::placeholder {
  color: gray;
}
textarea::placeholder {
  color: gray;
}

input {
  background: #ecf0f3;
  padding: 10px;
  padding-left: 20px;
  height: 50px;
  font-size: 14px;
  border-radius: 50px;
  box-shadow: inset 6px 6px 6px #cbced1, inset -6px -6px 6px white;
}
	</style>
	
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
			<a style="font-weight:bold;" href="useradd.php" class="nav-item nav-link">Add waste</a>
                <a style="font-weight:bold;" href="requestbin.php" class="nav-item nav-link">Ask bin</a>
                <a style="font-weight:bold;" href="viewwaste.php" class="nav-item nav-link">View added Waste</a>
                <a style="font-weight:bold;" href="viewbins.php" class="nav-item nav-link">View dust-bins</a>
                <a style="font-weight:bold;" href="contact.html" class="nav-item nav-link">Contact</a>
				 <a style="font-weight:bold;" href="logout.php" class="nav-item nav-link ">Logout</a>
            </div>
           
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-3 text-white mb-4 animated slideInDown">Rental Bin</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="userdb.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="requestbin.php">Bins</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Rental Bin</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
              <center>  <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <p style="font-size:50px;font-weight:bold;" class="fw-bold text-primary">Ask for rental Dust-bin</p>
                    <h5 >Make your city clean.</h5>
                   
                    <form action="bin.php" method="POST">
                        <div class="row g-3">
                             <div class="col-md-6">
                                 <div style="border:3px ridge green; border-radius:8px;height:60px;" class="form-floating">
								
								<label for="uname"><?php echo $_SESSION['NAME']; ?>    </label>

                                     
                                </div>
                            </div>
                            <div class="col-md-6">
                                 <div style="border:3px ridge green; border-radius:8px;height:60px;" class="form-floating">
								
								<label for="email"><?php echo $_SESSION['EMAIL']; ?>    </label>

                                     
                                </div>
                            </div>
							<?php
								   include 'connects.php';
								   $conn =connectdb();

									$sql="Select * from addbin WHERE dbid= '".$_GET['dbid']."'";  
									$result=$conn->query($sql);
									
									if($result->num_rows>0)
									{
										while($row=$result->fetch_assoc())
										{	$_SESSION['DDBID']=$row['dbid'];
									
										echo '
												<div class="col-md-6">
													<div style="border:3px ridge green; border-radius:8px;height:60px;" class="form-floating">
														<label for="dbname"> Dust-bin Name: '.$row["dbname"].'</label>
													</div>
												</div>
												<div class="col-md-6">
													<div style="border:3px ridge green; border-radius:8px;height:60px;" class="form-floating">
														<label for="dbprice">Price: '.$row["dbprice"].'</label>
													</div>
												</div>';
										}  
									}
							?>
							
						  
                            <div class="col-12">
                               <div style="border:3px ridge green; border-radius:8px;height:60px;" class="form-floating">
								
								<label for="email"><?php echo $_SESSION['ADDRESS']; ?>    </label>

                                     
                                </div>
                            </div>
							<div class="col-12">
                                <div style="border:3px ridge green; border-radius:8px;" class="form-floating">
                                    <input type="text" class="form-control" name="pin" required placeholder="pincode">
                                    <label for="pin">Pin code</label>
                                </div>
                            </div>
                            <div class="col-12"><center>
                                <button style="border:3px ridge green; border-radius:8px;width:250px;" class="btn btn-primary py-3 px-4" type="submit" name="btnsubmit">Ask Dust-bin</button>
                            </center>
							</div>
                        </div>
                    </form>
					
                </div></center>
          
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 class="text-white mb-4">Our Office</h3>
                     <p class="text-white mb-2"><i class="fa fa-map-marker-alt me-3"></i>Vasar Kudrige, Ankola 581357</p>
                    <p class="text-white mb-2"><i class="fa fa-phone-alt me-3"></i>7338516789</p>
                    <p class="text-white mb-2"><i class="fa fa-envelope me-3"></i>envirocaresolution@gmail.com</p>
                    <div class="d-flex pt-2">
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 style="color:white;">Services</h3><br>
                    <a style="color:white; font-size:19px;" class="btn btn-link" href="useradd.php">Waste collection</a>
                    <a style="color:white; font-size:19px; width:290px; height:30px;" class="btn btn-link" href="useradd.php">Waste Dumping</a>
                    <a style="color:white; font-size:19px; width:290px; height:30px;" class="btn btn-link" href="requestbin.php">Rental bin</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3 style="color:white;">Quick Links</h3><br>
				<a href="useradd.php" style="color:white; font-size:19px; width:290px;" class="btn btn-link">Add waste</a>
				<a href="requestbin.php" style="color:white; font-size:19px; width:290px;" class="btn btn-link">Ask bin</a>
                <a href="viewwaste.php" style="color:white; font-size:19px; width:290px;" class="btn btn-link">View added Waste</a>
                <a href="viewbins.php" style="color:white; font-size:19px; width:290px;" class="btn btn-link">View dust-bins</a>
                <a href="contact.html" style="color:white; font-size:19px; width:290px;" class="btn btn-link">Contact</a>
				 <a href="logout.php" style="color:white; font-size:19px; width:290px;" class="btn btn-link">Logout</a>
                </div>
                <div class="col-lg-3 col-md-6">
                   
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





<!-- <div  data-parallax="scroll" data-image-src="img/h5.jpg" style="opacity:100%">
        <div class="container py-5">
		<form action="service.php" method="post">
            <div class="row justify-content-center">
                <div class="col-lg-7" style=" width: 800px;
															  border-radius: 8px;
															  padding: 30px;
															  text-align: center;border: 1px solid rgba(255, 255, 255, 0.5);
															  backdrop-filter: blur(20px);
															  webkit-backdrop-filter: blur(7px);">
                    <div class="rounded p-4 p-sm-5 wow fadeIn" data-wow-delay="0.5s">
                        <h1 style="background-color:white;" class="display-5 text-center mb-5">Ask For A Service</h1>
                        <div class="row g-3">
                            <!-- <div class="col-sm-6"> -->
<!--                                 <div class="form-floating">
                                    <input type="text" class="form-control bg-light border-0" name="name" placeholder="Gurdian Name">
                                    <label for="name">Full Name</label>
                                </div>
                            <!-- </div> -->
                            <!-- <div  class="col-sm-6"> -->
                                <!-- <div class="form-floating">
                                    <input type="email" class="form-control bg-light border-0" name="email" placeholder="Gurdian Email">
                                    <label for="email">Your Email</label>
                                </div> -->
                            <!-- </div> -->
                            <!-- <div class="col-sm-6"> -->
                               <!--  <div class="form-floating">
                                    <input type="number" class="form-control bg-light border-0" name="phone" placeholder="Child Name">
                                    <label for="phone">Your Mobile</label>
                                </div> -->
                            <!-- </div> -->
                           <!--  
                            <div class="col-12 text-center">
                                <button name="btnsubmit" class="btn btn-primary py-3 px-4" type="submit">Confirm service</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			</form>
        </div>
    </div> --> 