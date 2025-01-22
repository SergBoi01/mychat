<?php

require_once("classes/initialize.php");


$DB = new Database();

$data = file_get_contents("php://input");
$myobject = json_decode($data);
