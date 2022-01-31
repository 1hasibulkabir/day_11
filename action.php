<?php
//echo '<pre>';
//print_r($_POST);

require_once 'vendor/autoload.php';
use App\classes\FullName;

$fullName = new FullName($_POST);
$fullName->index();

