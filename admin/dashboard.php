<?php
require(getcwd().'/core_php/config.php');

if (!isset($_SESSION['data_admin'])) {
    header('Location: '.__base_url.'admin/login');
    dei();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Startmin - Bootstrap Admin Theme </title>

    <!-- Bootstrap Core CSS -->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../admin/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../admin/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="../admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="../admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">

    <!-- Navigation -->
    <?php require(getcwd().'/admin/navigation.php'); ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Page Title</h1>
                </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                <?php var_dump($_SESSION['data_admin']); ?>
              </div>
            </div>
            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="../admin/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../admin/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../admin/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../admin/js/startmin.js"></script>

</body>
</html>