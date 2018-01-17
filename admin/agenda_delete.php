<?php
require(getcwd().'/core_php/config.php');
require(getcwd().'/admin/__php_function/__db_select.php');
require(getcwd().'/admin/__php_function/__db_delete.php');
require('database.php');

if (!isset($_SESSION['data_admin'])) {
    header('Location: '.__base_url.'admin/login');
    dei();
}
// $tableName, $primaryKey, $id, $pdoObject
if (isset($_GET['go']) and isset($_GET['yes'])) {
    $id = $_GET['yes'];
    delete_data('agenda', 'no_agenda', $id, $conn);
} elseif ($_GET['go']) {
    $id = $_GET['go'];
    $data = select_singel('agenda', 'no_agenda', $id, $conn);
    if ($data == null) {
        header('Location: '.__base_url.'admin/agenda');
    }
} else {
    header('Location: '.__base_url.'admin/agenda');
}

$page_name = 'Delete Agenda';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$page_name?></title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=__base_url?>admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?=__base_url?>admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?=__base_url?>admin/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=__base_url?>admin/css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=__base_url?>admin/css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=__base_url?>admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?=__base_url?>admin/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="<?=__base_url?>admin/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
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
                    <h1 class="page-header"><?=$page_name?></h1>
                </div>
            </div>

            <div class="row">
              <div class="col-md-5">
                <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            Peringatan
                        </div>
                        <div class="panel-body ">
                          <p>Anda yakin akan menghapus data <b>" <?= $data->judul_agenda ?> "</b> secara permanen ?</p>

                        </div>
                        <div class="panel-footer ">

                          <a href="<?=__base_url?>admin/agenda/delete?go=<?= $data->no_agenda ?>&yes=<?= $data->no_agenda ?>" class="btn btn-danger" style="color:#fff !important;"> ya</a>
                          <a href="<?=__base_url?>admin/agenda" class="btn btn-danger" style="color:#fff !important;"> tidak</a>

                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- ... Your content goes here ... -->

        </div>
    </div>

</div>

<!-- jQuery -->
<script src="<?=__base_url?>admin/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?=__base_url?>admin/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?=__base_url?>admin/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?=__base_url?>admin/js/startmin.js"></script>

</body>
</html>
