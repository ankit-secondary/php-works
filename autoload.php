<?php
//using autoload method, will autload the existing class which object is called

function __autoload($var){
    require_once "./".$var.".php";
}
//making object of pass class from another file pass

$obj=new pass();

//calling go method  from pass class and file
$obj->go();
?>