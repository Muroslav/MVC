<?php 

header("Content-Type:text/html; charset=utf-8");
error_reporting(E_ALL);

require 'app/Controller.php';

$page =new Controller();

$page->initPage($_POST,$_GET);
$page->viewPage();



?>


