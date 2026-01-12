<?php
session_start();
if($_SESSION['EMAIL'] == FALSE)
{
	header('location:dlogin.html');
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
	.f {
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
                <a style="font-weight:bold;" href="newwaste.php" class="nav-item nav-link">New Wastes</a>
                <a style="font-weight:bold;" href="appwaste.php" class="nav-item nav-link">Approved Wastes</a>
                <a style="font-weight:bold;" href="denywaste.php" class="nav-item nav-link">Dynied Wastes</a>
                <a style="font-weight:bold;" href="appbin.php" class="nav-item nav-link">Approved Bins</a>
                <a style="font-weight:bold;" href="denybin.php" class="nav-item nav-link">Dynied Bins</a>
				<a style="font-weight:bold;" href="dlogout.php" class="nav-item nav-link ">Logout</a>
            </div>
           
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
           
			<h3 class="display-3 text-white mb-4 animated slideInDown">New Bin Users</h3>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    
                    <li class="breadcrumb-item"><a href="workerdb.php">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">New Bin Users</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div style="background-image:url('img/qs.jpg'); " class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
              <center>  <div style="margin-right:200px;" class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div  class="contact-form" style="background-color:silver; backdrop-filter: blur(50px);
  webkit-backdrop-filter: blur(50px);">
								<table class="table table-striped">
											<tr>
														<th style="color:white" class="bg-primary">Name</th>
														<th style="color:white" class="bg-primary">Email</th>
														<th style="color:white" class="bg-primary">Dust-bin Name</th>
														<th style="color:white" class="bg-primary">Price</th>
													    <th style="color:white" class="bg-primary">Phone number</th>
														
														<th style="color:white" class="bg-primary">Address</th>
														<th style="color:white" class="bg-primary">Pincode</th>
														<th style="color:white" class="bg-primary">Date</th>
														<th style="color:white" class="bg-primary">Status</th>
														<th style="color:white" class="bg-primary">Payment</th>
														<th style="color:white" class="bg-primary">Provided</th>
														<th style="color:white" class="bg-primary">Not provided</th>
														
											</tr>
																   <?php
																   include 'connects.php';
																   $conn =connectdb();

																	$sql="Select * from dbin WHERE status='Pending' AND payment='pending'" ;
																	$result=$conn->query($sql);
																	
																	if($result->num_rows>0)
																	{
																		while($row=$result->fetch_assoc())
																		{	
																		echo '<tr >
																			<td style="color:black";>'.$row["uname"].'</td>
																			<td style="color:black">'.$row["email"].'</td>
																			<td style="color:black";>'.$row["dbname"].'</td>
																			<td style="color:black">'.$row["dbprice"].'</td>
																			<td style="color:black">'.$row["phone"].'</td>
																			
																			<td style="color:black">'.$row["address"].'</td>
																			<td style="color:black">'.$row["pin"].'</td>
																			<td style="color:black">'.$row["cdate"].'</td>
																			<td style="color:black;background-color:silver;">'.$row["status"].'</td>
																			<td style="color:black;background-color:silver;">'.$row["payment"].'</td>';
																				if($row['status']=='Pending'){
																				
																			 echo'  	
																						<td style="color:white;background-color:silver"><a style="background-color:DarkGreen;color:white;" class="btn btn-square w-100 me-2" href="allactions.php?aid='.$row["bid"].'">Approve</a></td>
																						<td style="color:white;background-color:silver"><a style="background-color:red;color:white;" class="btn btn-square w-100 me-2" href="allactions.php?did='.$row["bid"].'">Deny</a></td>
																						

																								
																								
																					
							
                      
           
																					</tr>                      
           
																							';
																											}
																											else
																											{
																												echo '<td style="color:white;background-color:silver"></td>
																												<td style="color:white;background-color:silver"></td>';
																											}
							 
																		}  
																	}
																?>
								</table>
                                    
                    </div>
					
					
					
					
					
                </div></center>
           
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
   <div class="container-fluid bg-dark text-light footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div style="boarder:5px;color:white;" class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h3 style="color:white;">Our Office</h3><br>
                     <p class="text-white mb-2"><i class="fa fa-map-marker-alt me-3"></i>Vasar Kudrige, Ankola 581357</p>
                    <p class="text-white mb-2"><i class="fa fa-phone-alt me-3"></i>7338516789</p>
                    <p class="text-white mb-2"><i class="fa fa-envelope me-3"></i>envirocaresolution@gmail.com</p>
                    <div class="d-flex pt-2">
                        
                    </div>
                </div>
               
                   <div class="col-lg-3 col-md-6">
                    <h3 style="color:white;">Quick Links</h3><br>
					<a style="color:white; font-size:19px; width:290px;" href="newwaste.php" class="btn btn-link">New Wastes</a>
                <a style="color:white; font-size:19px; width:290px;" href="appwaste.php" class="btn btn-link">Approved Wastes</a>
				<a style="color:white; font-size:19px; width:290px;" href="denywaste.php" class="btn btn-link">Dynied Wastes</a>
                
                <a style="color:white; font-size:19px; width:290px;" href="appbin.php" class="btn btn-link">Approved Bins</a>
                <a style="color:white; font-size:19px; width:290px;" href="denybin.php" class="btn btn-link">Dynied bins</a>
				<a style="color:white; font-size:19px; width:290px;" href="dlogout.php" class="btn btn-link">Logout</a>
					
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





