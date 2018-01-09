<?php
require(getcwd().'/core_php/config.php');

if (isset($_SESSION['data_admin'])) {
    session_destroy();
    session_commit();
    header('Location: '.__base_url.'');
} else {
    header('Location: /kp-pertanian/admin/login');
}
