<?php
require 'app/bootstrap.php';
require 'routes.php';
$controller = new Home();
$controller->index();
?>