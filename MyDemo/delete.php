<?php

include_once "fileClass/Student.php";
include_once "fileClass/StudentManager.php";

$index = $_REQUEST['id'];
$userManager = new StudentManager('data.json');
$userManager->remove($index);
header('location: index.php');
