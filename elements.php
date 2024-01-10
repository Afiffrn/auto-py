	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="CodePixar">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>D'TOURISMO</title>


		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">

		<style>
			#loading {
            display: none;
            text-align: center;
        }

	        #loading img {
	            width: 50%; /* Ubah ukuran gambar sesuai kebutuhan */
	            height: auto;
	    } 
	            

	        body {
  
            animation: fadeIn 1.5s ease-in-out forwards; /* Terapkan animasi fadeIn */
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

		</style>
		</head>
		<body>
			<!-- Start banner Area -->
			<section class="generic-banner relative" style="background: url(img/AIF.gif);background-size: cover;" >
			<!-- Start Header Area -->
				<header class="default-header">
					<nav class="navbar navbar-expand-lg  navbar-light">
						<div class="container">
							  <a class="navbar-brand" href="index.php" style="font-weight: bold; color: whitesmoke;">
							  	D' TOURISMO
							  </a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							    <span class="text-white lnr lnr-menu"></span>
							  </button>

							  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
							    <ul class="navbar-nav">
									<li><a href="index.php">Home</a></li>
                                    <li><a href="elements.php">Rute</a></li>                                 
                                    
							    </ul>
							  </div>						
						</div>
					</nav>
				</header>
			<!-- End Header Area -->				
				<div class="container" >
					<div class="section-top-border">
						<div class="row">
							<div class="col-6">
								<div class="text-center">
									<h1 class="mb-30" style="color : white;">D'destination</h1>
								</div>
								
								<form method="post" action="http://127.0.0.1:5000/run_automation" onsubmit="showLoading()" id="form">
									<div>
										<input type="text" name="tujuan_1" placeholder="Destinasi 1" class="form-control" style=" border: solid; border-color: floralwhite; border-width: 3px;  border-radius: 10px;">
									</div>
									<div class="mt-10">
										<input type="text" name="tujuan_2" placeholder="Destinasi 2" class="form-control" style=" border: solid; border-color: floralwhite; border-width: 3px;  border-radius: 10px;">
									</div>
									<div class="mt-10">
										<input type="text" name="tujuan_3" placeholder="Destinasi 3" class="form-control" style=" border: solid; border-color: floralwhite; border-width: 3px;  border-radius: 10px;" >
									</div>
									<div class="text-right">
										<button class="genric-btn default circle arrow mt-30" type="submit"  >Buat Rute<span class="lnr lnr-arrow-right"></span></button>
									</div>
									<div id="loading">
									    <img src="img/bb.gif" alt="Loading...">
									</div>
								</form>

								<script>
								    function showLoading() {
								        document.getElementById('loading').style.display = 'block';
								    }

								    document.getElementById('form').addEventListener('submit', function() {
								        showLoading();
								    });
								</script>
							</div>
							<div class="col-6 mt-30" >
								<img src="img/location.gif" alt="GIF" class="img-fluid" style="max-height: 250px; border: solid; border-radius: 20px; border-width: 5px; border-color: floralwhite;">
							</div>
						</div>
					</div>
				</div>

			</section>		
			

			<!-- start footer Area -->		
			<footer class="footer-area section-gap " style="background: black;">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									D'Tourismo
								</p>
								
							</div>
						</div>
							
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>							
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		


			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>
			<script src="js/owl.carousel.min.js"></script>
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>
			<script src="js/main.js"></script>	
		</body>
	</html>