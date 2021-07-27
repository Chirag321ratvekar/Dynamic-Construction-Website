<?php
    include("header.php");
?>

    <div id="main-content"  style="background-image: url('image/un2.jpg');">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12">
                    <h2>Comapnies Detailed Info Chart</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Charts</li>
                        <li class="breadcrumb-item active">Info Chart</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Total Projects</h2>
                        </div>
                        <div class="body text-center">
                            <h2 id="default-textfield" class="preview-textfield"></h2>
                            <canvas id="gauge-default"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Total Engineers</h2>
                        </div>
                        <div class="body text-center">
                            <h2 id="donut-textfield" class="preview-textfield"></h2>
                            <canvas id="gauge-donut"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Maharashtra Zone</h2>
                        </div>
                        <div class="body text-center">
                            <h2 id="zone-textfield" class="preview-textfield"></h2>
                            <canvas id="gauge-zone" height="200"></canvas>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Total Emplyees</h2>
                        </div>
                        <div class="body text-center">
                            <h2 id="step-textfield" class="preview-textfield"></h2>
                            <canvas id="gauge-step" height="200"></canvas>
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

<script src="../assets/vendor/gauge/gauge.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>

<script src="assets/js/pages/chart/gauge.js"></script>

</body>

<!-- Mirrored from www.wrraptheme.com/templates/hexabit/html/light/chart-gauges.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 17:06:29 GMT -->
</html>
