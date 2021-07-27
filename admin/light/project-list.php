<?php
    include("header.php");
?>

    <div id="main-content" style="background-image: url('image/un3.jpg');">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Blog List</h2>
                </div>     
                
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h4" id="myLargeModalLabel">Add New Project Here</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        
                                        <div class="modal-body">
                                        <div class="body">
                            <form id="basic-form" action="op.php" method="POST" enctype="multipart/form-data" novalidate>
                                <div class="form-group">
								    <label for="adminimg">Project Picture<span style="color:red">&nbsp&nbsp(Size Only 800 * 700)</span></label>
								    <input type="file" name="imgp" class="form-control" id="adminimg" required=""onchange="readURL(this);">
								    <!-- <img id='blah' src='#' onerror="this.onerror=null;this.src='image/blk.jpg'" width=0px;height=0px;/> -->
							    </div>
                                
                                <div class="form-group">
                                    <label>Project Name</label>
                                    <input type="text" name="namep" class="form-control" required>
                                </div>
                                
                                <div class="form-group">
                                    <label>Project Summary</label>
                                    <input type="text" name="des" class="form-control" required>
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <div class="spinner-border text-danger" role="status">
                                        <span class="visually-hidden"></span>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="Update" value="Addpro" class="btn btn-primary">Add Project</button>
                                    
                                </div>
                                
                            </form>
                        </div>
                        </div>
                    </div>
                </div>
            </div>


                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <!-- Add New Team Member Button -->
                        

                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
					        Add New Project
				        </button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a>&nbsp Home</li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                   
                    <a href="app-contact-grid.html" class="btn btn-sm btn-success" title=""><i class="fa fa-th-large"></i></a>                    
                    <!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="" data-toggle="modal" data-target="#addcontact">Create New</a> -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-8 col-md-12 left-box">
                <?php
		            include('dbconfig.php');
				    $query="SELECT * FROM projects ORDER BY id DESC";
				    $sql=mysqli_query($conn,$query);
				    foreach($sql as $row ) {
				?>
                    <div class="card single_post2">
                        <img class="img-fluid" src='<?php echo "image/".$row['imgp'];?>' alt="img">
                        <div class="body">                    
                            <div class="content">
                                <div class="actions_sidebar">
                                    <a href="javascript:void(0)"><i class="icon-share"></i></a>
                                    <a href="javascript:void(0)"><i class="icon-heart"></i> <span>5</span></a>
                                    <a href="javascript:void(0)"><i class="icon-bubble"></i> <span>8</span></a>
                                </div>
                                <h4 class="title"><?php echo $row['namep'];?></h4>
                                <p class="date">
                                    <small><?php echo $row['id'];?></small>
                                </p>
                                <p class="text"><?php echo $row['des'];?></p>
                                <a class="btn btn-primary" href="javascript:void(0)">READ MORE</a>
                                <hr>
                                <form action="del.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                    <button type="submit" name="delete" value="Delpro"  class="btn btn-danger js-sweetalert" title="Delete">Delete Project &nbsp<i class="fa fa-trash-o"></i></button>
                            </form>
                            </div>
                        </div>                        
                    </div>
                    <?php } ?>
                    
                                            
                    <ul class="pagination pagination-primary">
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                        <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                        <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
                    </ul>                
                </div>

                <!-- <div class="col-lg-4 col-md-12 right-box">
                    <div class="card">
                        <div class="body search">
                            <div class="input-group m-b-0">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-magnifier"></i></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Search...">                                    
                            </div>
                        </div>
                    </div>
                    
                    <div class="card">
                        <div class="header">
                            <h2>Email Newsletter <small>Get our products/news earlier than others, let’s get in touch.</small></h2>
                        </div>
                        <div class="body widget newsletter">                        
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Enter Email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="icon-paper-plane"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/hexabit/html/light/blog-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 17:06:23 GMT -->
</html>
