<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>پنل مدیریت | دیجی کالا </title>

    <link rel="stylesheet" href="/fonts/WebFonts/css/fontiran.css">
    <link rel="stylesheet" href="/fonts/WebFonts/css/stylef.css">

    <link rel="icon" type="image/x-icon" href="/admin/src/assets/img/favicon.ico"/>
    <link href="/admin/layouts/vertical-dark-menu/css/light/loader.css" rel="stylesheet" type="text/css" />
    <link href="/admin/layouts/vertical-dark-menu/css/dark/loader.css" rel="stylesheet" type="text/css" />
    <script src="/admin/layouts/vertical-dark-menu/loader.js"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="/admin/src/bootstrap/css/bootstrap.rtl.min.css" rel="stylesheet" type="text/css" />

    <link href="/admin/layouts/vertical-dark-menu/css/light/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/admin/src/assets/css/light/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />

    <link href="/admin/layouts/vertical-dark-menu/css/dark/plugins.css" rel="stylesheet" type="text/css" />
    <link href="/admin/src/assets/css/dark/authentication/auth-boxed.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

</head>
<body class="form">

<!-- BEGIN LOADER -->
<div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
<!--  END LOADER -->

<div class="auth-container d-flex">

 {{$slot}}

</div>

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="/admin/src/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->


</body>
</html>
