<?php
  //  $url = $_GET['page']
  //
  // $uri = explode('/', $url);
  //
  // echo "<br>";
  // var_dump($uri);
  // if (__base_url == null) {
  //     require(getcwd().'/core_php/config.php');
  // }

if (isset($_GET['page'])) {
    $uri = $_GET['page'];

    $uri = explode('/', $uri);

    if ($uri[0] == 'admin') {
        switch ($uri[1]) {
        case 'login':
            return require(getcwd().'/admin/login.php');
          break;
        case 'dashboard':
            return require(getcwd().'/admin/dashboard.php');
          break;
        case 'register':
            return require(getcwd().'/admin/register.php');
          break;
        case 'logout':
            return require(getcwd().'/admin/logout.php');
          break;
        default:
            return require(getcwd().'/404.php');
          break;
      }
    } elseif ($uri[0] == 'post') {
        switch ($uri[1]) {
          case 'berita':
              // var_dump($uri[2]);
              if (isset($uri[2])) {
                  $var = get_berita($uri[2]);
              } else {
                  require(getcwd().'/front-page/post_berita.php');
              }


            break;
          case 'artikel':
              require(getcwd().'/front-page/post_artikel.php');
              if (isset($uri[2])) {
                  get_artikel($uri[2]);
              }
            break;
          default:
              return require(getcwd().'/front-page/post.php');
            break;
        }
        // var_dump($uri[1]);
    } elseif ($uri[0] == 'agenda') {
        return require(getcwd().'/front-page/agenda.php');
    } else {
        return require(getcwd().'/404.php');
    }
} else {
    return require(getcwd().'/front-page/front.php');
}
