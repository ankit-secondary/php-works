<?php 
$cname="username";
$cvalue="Ankit";

// setcokkie method is used to set username,value and expiry time

setcookie($cname,$cvalue,time()+(60*60*24*10));

//checking cookie is set or not

    if(!isset($_COOKIE[$cname]))
    {
        echo "Name is not set";
    }
    else{
        echo "user name is ".$_COOKIE[$cname];
    }
?>