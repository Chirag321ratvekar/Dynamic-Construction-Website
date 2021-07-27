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
<li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
<li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
<li class="nav-item"><a class="nav-link" href="project.php">Projects</a></li>
<li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
<li class="nav-item"><a class="nav-link active" href="contact.php">Contact</a></li>
</ul>
</div>
</div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_5.jpg.pagespeed.ic.UsyZ8C9-72.jpg)">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 pt-5 text-center">
<p class="breadcrumbs"><span class="me-2"><a href="index-2.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Contact us <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-0 bread">Contact us</h1>
</div>
</div>
</div>
</section>
<section class="ftco-section contact-section bg-light">
<div class="container-xl">
<div class="row d-flex mb-5 contact-info justify-content-center">
<div class="col-md-10">
<div class="row">
<div class="col-md-12 mb-4">
<h2 class="h3">Contact Information</h2>
</div>
<div class="col-md-12">
<div class="row">
<div class="col-md-3">
<p><span>Address:</span> Ganesh Colony, Jalgaon, India</p>
</div>
<div class="col-md-3">
<p><span>Phone:</span> <a href="tel:919403710771">+ 91 9403710771</a></p>
</div>
<div class="col-md-3">
<p><span>Email:</span> <a href="mailto:chinmayratvekar77@gmail.com"><span class="__cf_email__" data-cfemail="452c2b232a053c2a3037362c31206b262a28">chinmayratvekar77@gmail.com</span></a></p>
</div>
<div class="col-md-3">
<p><span>Website</span> <a href="#">yoursite.com</a></p>
</div>
</div>
</div>
</div>
</div>
</div>

	<div class="row g-md-0 block-9">
		<div class="col-md-6 order-md-last d-flex">

			<form action="opw.php" method="POST" class="bg-white p-5 contact-form">
				<div class="form-group">
					<input type="text" name="namec" class="form-control" placeholder="Your Name">
				</div>
				<div class="form-group">
					<input type="text" name="emailc" class="form-control" placeholder="Your Email">
				</div>
				<div class="form-group">
					<input type="text" name="subjectc" class="form-control" placeholder="Subject">
				</div>
				<div class="form-group">
					<textarea name="msgc" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="Update" value="send" class="btn btn-primary py-3 px-5">
				</div>
			</form>
			
		</div>
		<div class="col-md-6 d-flex">
			<div id="map" class="bg-white"></div>
		</div>
	</div>

</div>
</section>


<?php

	include("footer.php");
?>