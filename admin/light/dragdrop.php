<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="HexaBit Bootstrap 4x Admin Template">
<meta name="author" content="WrapTheme, www.thememakker.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/color_skins.css">

<?php
    include("header.php");
?>

    <div id="main-content"  style="background-image: url('image/un2.jpg');">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-md-6 col-sm-12 py-3">
                    <h2>Drag & Drop File Upload</h2>
                </div>            
                <div class="col-md-6 col-sm-12 text-right py-3">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index-2.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">File Upload</li>
                    </ul>
                    <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create New</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
           
            <div class="row clearfix">
                
                <div class="col-lg-6 col-md-12">
                    <!-- <div class="card">
                        <div class="header">
                            <h2>Default <small>Taken from: https://github.com/JeremyFagis/dropify</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify">
                        </div>
                    </div> -->
                    <div class="card">
                        <div class="header">
                            <h2>Default <small><span style="color:red">(Size Required Only 800 * 700)</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify">
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="header">
                            <h2>With event and default file <small>try to remove the image</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" id="dropify-event" data-default-file="../assets/images/image-gallery/1.jpg">
                        </div>
                    </div>                     -->
                    <!-- <div class="card">
                        <div class="header">
                            <h2>Disabled file upload</h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" disabled="disabled">
                        </div>
                    </div> -->
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Limit file type <small>upload only jpg, jpeg or png only <span style="color:red">(Size Required Only 1024 * 640)</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-allowed-file-extensions="jpg jpeg png">
                        </div>
                    </div>
                    <!-- <div class="card">
                        <div class="header">
                            <h2>Limit file type <small>try to upload png or pdf only</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
                        </div>
                    </div> -->
                    <!-- <div class="card">
                        <div class="header">
                            <h2>Limit file size <small>try to upload file larger than 100 KB</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-max-file-size="100K">
                        </div>
                    </div>                     -->
                    <!-- <div class="card">
                        <div class="header">
                            <h2>Custom messages for default <small>replace, remove and error</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify-fr">
                        </div>
                    </div> -->
                </div>

            </div>

        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="../assets/vendor/dropify/js/dropify.min.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/dropify.js"></script>
</body>

<!-- Mirrored from www.wrraptheme.com/templates/hexabit/html/light/forms-dragdropupload.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 12 Jul 2021 17:06:06 GMT -->
</html>


