<?php
  // var_dump($_GET['page']);
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    $page = explode('/', $page);

    if ($page[0] == 'admin') {
        switch ($page[1]) {
        case 'login':
            return require('../kp-pertanian/admin/login.php');
          break;
        case 'dashboard':
            return require('../kp-pertanian/admin/dashboard.php');
          break;
        case 'register':
            return require('../kp-pertanian/admin/register.php');
          break;
        default:
            return require('../kp-pertanian/404.php');
          # code...
          break;
      }
    } elseif ($page[0] == 'blog') {
        return require('../kp-pertanian/front-page/blog.php');
    } else {
        return require('../kp-pertanian/404.php');
    }
} else {
    return require('../kp-pertanian/front-page/front.php');
}
