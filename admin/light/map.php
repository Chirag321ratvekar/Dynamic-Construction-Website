<?php
    include("header.php");
?>

    <div id="main-content">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Map</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Map</li>
                        <li class="breadcrumb-item active">JVector Map</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row clearfix">
            <div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>India Map</h2>
                        </div>
                        <div class="body text-center">
                            <div id="india" style="height: 400px"></div>
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

<script src="assets/bundles/jvectormap.bundle.js"></script><!-- JVectorMap Plugin Js -->
<script src="../assets/vendor/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="../assets/vendor/jvectormap/jquery-jvectormap-in-mill.js"></script><!-- India Map Js -->
<script src="../assets/vendor/jvectormap/jquery-jvectormap-us-aea-en.js"></script><!-- USA Map Js -->
<script src="../assets/vendor/jvectormap/jquery-jvectormap-uk-mill-en.js"></script><!-- UK Map Js -->
<script src="../assets/vendor/jvectormap/jquery-jvectormap-au-mill.js"></script><!-- Australia Map Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/maps/jvectormap.js"></script><!-- Custom Js -->
</body>

<!-- Mirrored from www.wrraptheme.com/templates/hexabit/html/light/map-jvectormap.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 17:06:45 GMT -->
</html>
