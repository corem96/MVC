<!doctype html>
<html class="no-js" lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>MVC - PHP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="assets/fonts/typicons.min.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bulma.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/jquery.validate.min.js"></script>
    <script src="assets/js/additional-methods.min.js"></script>
    <script src="assets/js/validation.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <!-- Add your site or application content here -->
    <header>
        <?php 
           include "modules/navegacion.php";
        ?>
    </header>
    <main>
        <?php
            $mvc = new MvcController();
            $mvc->enlacesPaginasController();
        ?>
    </main>    
</body>

</html>
