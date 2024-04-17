<?php
include ("header.php")
if(
    isset($_GET["name"])    &&  !empty($_GET["name"])   &&
    isset($_GET["password"])    &&  !empty($_GET["password"])
    isset($_GET["email"])    &&  !empty($_GET["email"])   &&
  )
    {
        $name=$_GET["name"]
        $password=$_GET["password"]
        $email=$_GET["email"]
    }
    
else
    exit("برخی از فیلدها مقداردهی نشده است")



if(filter_var($email,FILTER_VALIDATE_EMAIL)===FALSE)
exit("ایمل صحیح نمی باشد!")

include ("footer.php")


?>