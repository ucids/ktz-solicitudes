<?php
    require 'functions/profile/session.php';
?>
<!DOCTYPE html>
<html lang="en">

<!--begin::Head-->

<head>
    <base href="../">
    <title>Katzkin | Compras</title>
    <meta name="description" content="KTZ Dashboard" />
    <meta name="keywords" content="ucid, " />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="utf-8" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title"
        content="ucid - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
    <meta property="og:url" content="https://ucid.com" />
    <meta property="og:site_name" content="Ucid | Katzkin" />
    <link rel="canonical" href="https://ucid.com" />
    <link rel="shortcut icon" href="view/assets/media/logos/katzkin.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="view/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="view/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->

<!--begin::Body-->

<body id="kt_body" style="background-image: url(view/assets/media/patterns/header-bg.jpg)"
    class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled">
    <!--begin::Main-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Page-->
        <div class="page d-flex flex-row flex-column-fluid">
            <!--begin::Wrapper-->
            <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                <!-- Begin Header -->
                <?php include "partials/skeleton/header.php"; ?>
                <!-- End: Header -->
                <!--begin::Toolbar-->
                <?php include "partials/skeleton/toolbar.php"; ?>
                <!--end::Toolbar-->
                <!--begin::Container-->
                <?php 
                    if(isset($_GET['almacen'])){
                        $estatus = $_GET['almacen'];
                        if($estatus==5 || $estatus==9|| $estatus==6){
                            include "partials/invoice/almacen_llegada.php"; 
                        }elseif($estatus==7){
                            include "partials/invoice/almacen_llegada.php"; 
                        }
                        
                    }else{
                        include "partials/invoice/invoice.php"; 
                    }
                ?>

                <!--end::Container-->
                <!--begin::Footer-->
                <?php include "partials/skeleton/footer.php" ?>
                <!--end::Footer-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::Root-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
        <span class="svg-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)"
                    fill="black" />
                <path
                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                    fill="black" />
            </svg>
        </span>
        <!--end::Svg Icon-->
    </div>
    <!--end::Scrolltop-->
    <!--end::Main-->
    <script>
    var hostUrl = "view/assets/";
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="functions/solicitud/ajax.js"></script>
    <!--begin::Javascript-->
    <!-- <script src = "view/assets/js/custom/formulario/items.js" ></script> -->
    <!--begin::Global Javascript Bundle(used by all pages)-->
    <script src="view/assets/plugins/global/plugins.bundle.js"></script>
    <script src="view/assets/js/scripts.bundle.js"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Page Custom Javascript(used by this page)-->
    <script src="view/assets/js/custom/widgets.js"></script>
    <script src="view/assets/js/custom/apps/chat/chat.js"></script>
    <script src="view/assets/js/custom/modals/create-app.js"></script>
    <script src="view/assets/js/custom/modals/upgrade-plan.js"></script>
    <!--end::Page Custom Javascript-->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>