<?php

// GET LIST OF PRODUCTS BY CATEGORY

$username = $_POST["email"];
$username = addslashes($username);

$password = $_POST["password"];
$password = addslashes($password);

$name_first = $_POST["name_first"];
$name_first = addslashes($name_first);

$name_last = $_POST["name_last"];
$name_last = addslashes($name_last);

$address = $_POST["address"];
$address = addslashes($address);

$city = $_POST["city"];
$city = addslashes($city);

$province = $_POST["province"];
$province = addslashes($province);

$postal = $_POST["postal"];
$postal = addslashes($postal);

$phone = $_POST["phone"];
$phone = addslashes($phone);



require_once("easy_groceries.class.php");

$oEasyGroceries = new EasyGroceries();

$data = $oEasyGroceries->createAccount($username,$password,$name_first,$name_last,$address,$city,$province,$postal,$phone);

header("Content-Type: application/json");

echo $data;

?>
