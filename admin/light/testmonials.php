<?php
    include("header.php");
?>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2><b>Testmonials</b></h2>
                </div>  
                
                <!-- larg modal -->
                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title h4" id="myLargeModalLabel">New Client's Testmonial</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="body">
                            <form id="basic-form" action="op.php" method="POST" enctype="multipart/form-data" novalidate>
                                <div class="form-group">
								    <label for="adminimg">Client's Picture For Website <span style="color:red">(Size Only 479*479)</span></label>
								    <input type="file" name="imgtest" class="form-control" id="adminimg" required=""onchange="readURL(this);">
								    <!-- <img id='blah' src='#' onerror="this.onerror=null;this.src='image/blk.jpg'" width=0px;height=0px;/> -->
							    </div>
                                <div class="form-group">
								    <label for="adminimg2">Client's Picture For AdminPanel <span style="color:red">(Size Only 45*45)</span></label>
								    <input type="file" name="imgtest2" class="form-control" id="adminimg2" required=""onchange="readURL(this);">
								    <!-- <img id='blah' src='#' onerror="this.onerror=null;this.src='image/blk.jpg'" width=0px;height=0px;/> -->
							    </div>
                                <div class="form-group">
                                    <label>Name Of Client</label>
                                    <input type="text" name="name" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>Client's Testmonial</label>
                                    <textarea type="text" name="testmoni" class="form-control" required></textarea>
                                </div>
                                <br>
                                <div class="modal-footer">
                                    <div class="spinner-border text-info" role="status">
                                        <span class="visually-hidden"></span>
                                    </div>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="Update" value="Addtest" class="btn btn-primary">Save changes</button>
                                    
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
					        Add New Testmonial
				        </button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        <li class="breadcrumb-item"><a href="index.php"><i class="icon-home"></i></a>&nbsp Home</li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ul>
                   
                    <a href="index.php" class="btn btn-sm btn-success" title=""><i class="fa fa-th-large"></i></a>                    
                    <!-- <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="" data-toggle="modal" data-target="#addcontact">Create New</a> -->
                </div>
            </div>
        </div>
        
        <div class="container-fluid">

            <div class="row clearfix">
                <div class="col-lg-12">
                    
                    <div class="card">
                        <div class="header">
                            <h2>Our Client's</h2>
                            <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive check-all-parent">
                                <table class="table table-hover m-b-0 c_list">
                                    <thead>
                                        <tr>
                                            <th>
                                                <label class="fancy-checkbox">
                                                    <input class="check-all" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </th>
                                            <th>Name</th>                                    
                                            <th>Phone</th>                                    
                                            <th>Testmonials</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                        <tbody>
                                        <tr>
                                        <?php
                                            include('dbconfig.php');
                                            $query="SELECT * From testmon ORDER BY id DESC";
                                            $sql=mysqli_query($conn,$query);
                                            foreach($sql as $row) {
                                        ?>
                                            <td style="width: 50px;">
                                                <label class="fancy-checkbox">
                                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                                    <span></span>
                                                </label>
                                            </td>
                                            <td>
                                                <img src='<?php echo "image/".$row['imgtest2'];?>' class="rounded-circle avatar" alt="">
                                                <p class="c_name"><?php echo $row['name'];?> <span class="badge badge-default m-l-10 hidden-sm-down">Family</span></p>
                                            </td>
                                            <td>
                                                <span class="phone"><i class="zmdi zmdi-phone m-r-10"></i>264-625-2583</span>
                                            </td>                                   
                                            <td>
                                                <address><i class="zmdi zmdi-pin"></i><?php echo $row['testmoni'];?></address>
                                            </td>
                                            <td>                                            
                                                <!-- <button type="button" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></button> -->
                                                <form action="del.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                                    <button type="submit" name="delete" value="Deltest"  class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            

            

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script>
    $('.sparkbar').sparkline('html', { type: 'bar' });
</script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/hexabit/html/light/table-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 17:06:11 GMT -->
</html>
