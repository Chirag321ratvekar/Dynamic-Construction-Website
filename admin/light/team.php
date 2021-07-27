<?php
    include("header.php");
?>

    <div id="main-content" style="background-image: url('https://source.unsplash.com/1600x900/?nature,water');">
        
        <div class="block-header">
        
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Team Members&nbsp
                    <div class="spinner-border text-warning" role="status">
                        <span class="visually-hidden"></span>
                        </div>
                    </h2>
                    
                </div>    
                <!-- <center>
		            <?php
		            if (isset($_SESSION['Success'])&&$_SESSION['Success']!='')
			            show($_SESSION['Success'],1);
		            if (isset($_SESSION['Status'])&&$_SESSION['Status']!='')
			            show($_SESSION['Status'],0);
		            ?>
	            </center> -->
            <!-- Vertically centered -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">ADD NEW TEAM MEMBER</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p> </p>
                        <div class="card">
                        <div class="header">
                            <h2><i>Team Member Details :</i></h2>
                        </div>
                        <div class="body">
                            <form id="basic-form" action="op.php" method="POST" enctype="multipart/form-data" novalidate>
                                <div class="form-group">
								    <label for="adminimg">Team Member Picture For Website <span style="color:red">(Size Only 1500*1591)</span></label>
								    <input type="file" name="img" class="form-control" id="adminimg" required=""onchange="readURL(this);">
								    <!-- <img id='blah' src='#' onerror="this.onerror=null;this.src='image/blk.jpg'" width=0px;height=0px;/> -->
							    </div>
                                <div class="form-group">
								    <label for="adminimg2">Team Member Picture For AdminPanel <span style="color:red">(Size Only 45*45)</span></label>
								    <input type="file" name="img2" class="form-control" id="adminimg2" required=""onchange="readURL(this);">
								    <!-- <img id='blah' src='#' onerror="this.onerror=null;this.src='image/blk.jpg'" width=0px;height=0px;/> -->
							    </div>
                                <div class="form-group">
                                    <label>Name Of Team Member</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Position Of Team Member</label>
                                    <input type="text" name="position" class="form-control" required>
                                </div>
                                
                                <!-- <div class="form-group">
                                    <label>Gender</label>
                                    <br />
                                    <label class="fancy-radio">
                                        <input type="radio" name="gender" value="male" required data-parsley-errors-container="#error-radio">
                                        <span><i></i>Male</span>
                                    </label>
                                    <label class="fancy-radio">
                                        <input type="radio" name="gender" value="female">
                                        <span><i></i>Female</span>
                                    </label>
                                    <p id="error-radio"></p>
                                </div> -->
                                
                                <br>
                                <div class="modal-footer">
                                <div class="spinner-border text-info" role="status">
                                    <span class="visually-hidden"></span>
                                </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="Update" value="Addteam" class="btn btn-primary">Add Member</button>
                                    
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    </div>
                   
                </div>
            </div>
        </div>    
                                          
            <!--ADD Product section end here-->                
                            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <!-- Add New Team Member Button -->
                        
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
					        Add New Team Member
				        </button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a>&nbsp Home</li>
                        <li class="breadcrumb-item active">Team</li>
                    </ul>
                   
                    <a href="app-contact-grid.html" class="btn btn-sm btn-success" title=""><i class="fa fa-th-large"></i></a>                    
                    <!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="" data-toggle="modal" data-target="#addcontact">Create New</a> -->
                </div>
            </div>
        </div>
        
        <div class="container-fluid"> 
                   
            <div class="row clearfix">
                <?php
                    include('dbconfig.php');
                    $query="SELECT * From team ORDER BY id DESC";
                    $sql=mysqli_query($conn,$query);
                    foreach($sql as $row) {
                ?>
                
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body text-center">
                            <div class="chart easy-pie-chart-1" data-percent="75"><span><img src='<?php echo "image/".$row['img2'];?>' alt="user" class="rounded-circle"/></span></div>
                            <h6><?php echo $row['name'];?></h6>
                            <ul class="social-links list-unstyled">
                                <li><a title="facebook"href="javascript:void(0);"><i class="fa fa-facebook"></i></a></li>
                                <li><a title="twitter"href="javascript:void(0);"><i class="fa fa-twitter"></i></a></li>
                                <li><a title="instagram"href="javascript:void(0);"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                            <small><h5><?php echo $row['position'];?></h5><br> </small>
                            <form action="del.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                <button type="submit" name="delete" value="Delteam"  class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
              <?php } ?>
            </div>
        </div>

    </div>
    
</div>



<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/easypiechart.bundle.js"></script><!-- easypiechart Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/hexabit/html/light/app-contact-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 17:06:49 GMT -->
</html>
