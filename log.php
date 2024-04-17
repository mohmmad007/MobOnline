<?php
include ("includes/header.php")
if(
    isset($_GET["name"])    &&  !empty($_GET["name"])   &&
    isset($_GET["password"])    &&  !empty($_GET["password"])
){
$name=$_GET["name"]
$password=$_GET["password"]
    }
    else
    exit("برخی از فیلدها مقداردهی نشده است")


include ("includes/footer.php")
?>