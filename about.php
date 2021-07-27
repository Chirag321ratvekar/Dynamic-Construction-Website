<?php
	include("header.php");
?>


<nav class="navbar navbar-expand-lg  ftco-navbar-light">
<div class="container-xl">
<a class="navbar-brand aside-stretch align-items-center" href="index-2.php">
Ratvekar Builders
</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="fa fa-bars"></span> Menu
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
<li class="nav-item"><a class="nav-link active" href="about.php">About</a></li>
<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
<li class="nav-item"><a class="nav-link" href="project.php">Projects</a></li>
<li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
</ul>
</div>
</div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 pt-5 text-center">
<p class="breadcrumbs"><span class="me-2"><a href="index-2.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>About us <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-0 bread">About Us</h1>
</div>
</div>
</div>
</section>
<!--  -->



<section class="ftco-section">
<div class="container">
<div class="row justify-content-center pb-4">
<div class="col-md-7 text-center heading-section" data-aos="fade-up">
<span class="subheading">Team &amp; Staff</span>
<h2 class="mb-5">Qualified Engineers</h2>
</div>
</div>
<div class="row">

<?php
include("admin/light/dbconfig.php");
$query="SELECT * FROM team ORDER BY id DESC";
$sql=mysqli_query($conn,$query);
foreach($sql as $row ) {
?>

<div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
<div class="staff">
<div class="img" style="background-image:url(<?php echo "admin/light/image/". $row['img'];?>)">
<ul class="ftco-social">
<!-- <li><a href="#"><span class="fa fa-twitter"></span></a></li>
<li><a href="#"><span class="fa fa-facebook"></span></a></li> -->
<li><a href="https://www.instagram.com/chinmay_prince_77/"><span class="fa fa-instagram"></span></a></li>
<li><a href="https://www.linkedin.com/in/chirag-ratvekar/"><span class="fa fa-google-plus"></span></a></li>
</ul>
</div>
<div class="text">
<h3><a href="#"><?php echo $row['name'];?></a></h3>
<span><?php echo $row['position'];?></span>
</div>
</div>
</div>


<?php } ?>
</div>
</div>


<section class="ftco-section-counter img" style="background-image:url(images/xbg_2.jpg.pagespeed.ic.7sptddicsi.jpg)">
<div class="overlay"></div>
<div class="container">
<div class="row section-counter">
<div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
<div class="counter-wrap-2 d-flex" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
<div class="icon">
<span class="flaticon-engineer"></span>
</div>
<div class="text">
<h2 class="number"><span class="countup">30</span></h2>
<span class="caption">Completed Projects</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
<div class="counter-wrap d-flex" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
<div class="icon">
<span class="flaticon-engineer"></span>
</div>
<div class="text">
<h2 class="number"><span class="countup">72</span></h2>
<span class="caption">Happy Clients</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
<div class="counter-wrap d-flex" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
<div class="icon">
<span class="flaticon-engineer"></span>
</div>
<div class="text">
<h2 class="number"><span class="countup">1000</span></h2>
<span class="caption">Cup Of Coffee</span>
</div>
</div>
</div>
<div class="col-sm-6 col-md-6 col-lg-3 d-flex align-items-stretch">
<div class="counter-wrap d-flex" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
<div class="icon">
<span class="flaticon-engineer"></span>
</div>
<div class="text">
<h2 class="number"><span class="countup">87</span></h2>
<span class="caption">Engineers &amp; Staffs</span>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- ----------   Testmonials Section Start Here ------------------------------------------------------>
<section class="ftco-section testimony-section bg-light">
<div class="container-xl">
	<div class="row justify-content-center pb-4">
		<div class="col-md-7 text-center heading-section" data-aos="fade-up" data-aos-duration="1000">
			<span class="subheading">Testimonial</span>
			<h2 class="mb-5">Happy Clients</h2>
		</div>
	</div>

	<div class="row">
	<div class="row g-0">
	

	<div class="col-md-12" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
		<div class="carousel-testimony">
		<?php
			include("admin/light/dbconfig.php");
			$query="SELECT * FROM testmon ORDER BY id DESC";
			$sql=mysqli_query($conn,$query);
			foreach($sql as $row ) {
			?>
			<div class="item">
				<div class="testimony-wrap">
					<div class="text">
						<div class="d-flex align-items-center mb-4">
							<div class="user-img" style="background-image: url(<?php echo "admin/light/image/". $row['imgtest'];?>)">
								<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left">

								</div>
							</div>
							<div class="ps-3 tx">
								<p class="name"><?php echo $row['name'];?></p>
								<span class="position">Marketing Manager</span>
							</div>
						</div>
						<p class="mb-4 msg"><?php echo $row['testmoni'];?></p>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</div>
</section>


<!--footer-->
<?php

	include("footer.php");
?>