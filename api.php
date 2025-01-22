<?php

require_once("classes/initialize.php");
$DB = new Database();

$DATA_RAW = file_get_contents("php://input");
$DATA_OBJ = json_decode($DATA_RAW);

//process the data

