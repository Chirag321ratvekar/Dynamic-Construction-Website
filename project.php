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
<li class="nav-item"><a class="nav-link active" href="project.php">Projects</a></li>
<li class="nav-item"><a class="nav-link" href="pricing.php">Pricing</a></li>
<li class="nav-item"><a class="nav-link" href="blog.php">Blog</a></li>
<li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
</ul>
</div>
</div>
</nav>
<section class="hero-wrap hero-wrap-2" style="background-image:url(images/xbg_5.jpg.pagespeed.ic.UsyZ8C9-72.jpg)">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
<div class="col-md-9 pt-5 text-center">
<p class="breadcrumbs"><span class="me-2"><a href="index-2.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Projects <i class="fa fa-chevron-right"></i></span></p>
<h1 class="mb-0 bread">Projects</h1>
</div>
</div>
</div>
</section>


<!--  -----------------------------      Product Section --------------------------- ------------------        -->
</section>
<section class="ftco-gallery ftco-section">
<div class="container-xl-fluid">
<div class="row justify-content-center pb-4">
<div class="col-md-7 text-center heading-section" data-aos="fade-up">
<span class="subheading">Portfolio</span>
<h2 class="mb-5">Our Leading Projects</h2>
</div>
</div>

<div class="row g-0">
<?php
include("admin/light/dbconfig.php");
$query="SELECT * FROM projects ORDER BY id DESC";
$sql=mysqli_query($conn,$query);
foreach($sql as $row ) {
?>

<div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
<div class="gallery-wrap img d-flex align-items-end justify-content-center" style="background-image:url(<?php echo "admin/light/image/". $row['imgp'];?>)">
<a href="images/work-1.jpg" class="icon d-flex align-items-center justify-content-center glightbox"><span class="fa fa-search"></span></a>
<div class="desc w-100 px-4">
<span><?php echo $row['namep'];?></span>
<h2><a href="#"><?php echo $row['des'];?></a></h2>
</div>
</div>
</div>

<!-- <div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
<div class="gallery-wrap img d-flex align-items-end justify-content-center" style="background-image: url(images/work-2.jpg);">
<a href="images/work-2.jpg" class="icon d-flex align-items-center justify-content-center glightbox"><span class="fa fa-search"></span></a>
<div class="desc w-100 px-4">
<span>Department Of Irrigation</span>
<h2><a href="#">Sand Merchandizing</a></h2>
</div>
</div>
</div>
<div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
<div class="gallery-wrap img d-flex align-items-end justify-content-center" style="background-image: url(images/work-3.jpg);">
<a href="images/work-3.jpg" class="icon d-flex align-items-center justify-content-center glightbox"><span class="fa fa-search"></span></a>
<div class="desc w-100 px-4">
<span>Department Of Irrigation</span>
<h2><a href="#">Bridges And Flyovers</a></h2>
</div>
</div>
</div>
<div class="col-md-4" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
<div class="gallery-wrap img d-flex align-items-end justify-content-center" style="background-image: url(images/work-4.jpg);">
<a href="images/work-4.jpg" class="icon d-flex align-items-center justify-content-center glightbox"><span class="fa fa-search"></span></a>
<div class="desc w-100 px-4">
<span>Government Project</span>
<h2><a href="#">Railway Yard</a></h2>
</div>
</div>
</div>
<div class="col-md-4" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
<div class="gallery-wrap img d-flex align-items-end justify-content-center" style="background-image: url(images/work-5.jpg);">
<a href="images/work-5.jpg" class="icon d-flex align-items-center justify-content-center glightbox"><span class="fa fa-search"></span></a>
<div class="desc w-100 px-4">
<span>Industries</span>
<h2><a href="#">High Tower Works</a></h2>
</div>
</div>
</div>
<div class="col-md-4" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
<div class="gallery-wrap img d-flex align-items-end justify-content-center" style="background-image: url(images/work-6.jpg);">
<a href="images/work-6.jpg" class="icon d-flex align-items-center justify-content-center glightbox"><span class="fa fa-search"></span></a>
<div class="desc w-100 px-4">
<span>Building</span>
<h2><a href="#">Houses &amp; Flates Works</a></h2>
</div>
</div>
</div> -->
<?php } ?>

<!--Projects Section End Here  ------------------------------------------------------------------------->

  <div class="row mt-5 pt-4">
    <div class="col text-center">
      <div class="block-27">
        <ul>
        <li><a href="#">&lt;</a></li>
        <li class="active"><span>1</span></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&gt;</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
</section>


<?php

	include("footer.php");
?>