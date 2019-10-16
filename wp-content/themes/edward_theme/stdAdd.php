<?php
require_once 'std.php';
//----------------------


$sname = $_GET['sname'];
$age = $_GET['age'];
$dep = $_GET['dep'];
echo std::store($sname, $age ,$dep);
 