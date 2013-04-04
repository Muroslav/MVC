<?php 
error_reporting(E_ALL);
 ini_set('display_errors', '1');

require 'app/Controller.php';

$page =new Controller();

$page->initPage($_POST,$_GET);

$page->viewPage();

