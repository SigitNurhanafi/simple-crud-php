<?php
require(getcwd().'/core_php/config.php');

if (isset($_SESSION['data_admin'])) {
    header("Location: ".__base_url."/admin/dashboard");
    dei();
}

require 'database.php';

if (!empty($_POST['username']) && !empty($_POST['password'])):

    $records = $conn->prepare('SELECT id_admin,nama_admin,username,password FROM admin WHERE username = :username');
    $records->bindParam(':username', $_POST['username']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
        unset($results['password']);
        $_SESSION['data_admin'] = $results;
        header('Location:  '.__base_url.'admin/dashboard');
    } else {
        $message = 'Sorry, those credentials do not match'.$results;
    }
    endif;
 ?>
 <!DOCTYPE html>
 <html lang="en">
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <meta name="description" content="">
         <meta name="author" content="">

         <title>Startmin - Bootstrap Admin Theme</title>

         <!-- Bootstrap Core CSS -->
         <link href="../admin/css/bootstrap.min.css" rel="stylesheet">

         <!-- MetisMenu CSS -->
         <link href="../admin/css/metisMenu.min.css" rel="stylesheet">

         <!-- Custom CSS -->
         <link href="../admin/css/startmin.css" rel="stylesheet">

         <!-- Custom Fonts -->
         <link href="../admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

         <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
         <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
         <!--[if lt IE 9]>
         <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
         <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
         <![endif]-->
     </head>
     <body>

         <div class="container">
             <div class="row">
                 <div class="col-md-4 col-md-offset-4">
                     <div class="login-panel panel panel-default">
                         <div class="panel-heading">
                             <h3 class="panel-title ">Dashboard Admin</h3>
                         </div>
                         <div class="panel-body">
                          <?php if (isset($message)) : ?>
                          <div class="alert alert-danger"> <?=$message?> </div>
                          <?php endif;?>
                           <form class="" action="<?= $_SERVER['REQUEST_URI']?>" method="post">
                                 <fieldset>
                                     <div class="form-group">
                                         <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                     </div>
                                     <div class="form-group">
                                         <input class="form-control" placeholder="Password" name="password" type="password">
                                     </div>
                                     <!-- Change this to a button or input when using this as a form -->
                                     <button type="submit"  class="btn btn-lg btn-success btn-block" name="button">Login</button>

                                 </fieldset>
                             </form>
                         </div>
                     </div>
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
