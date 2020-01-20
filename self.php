<?php
class first{
    function practical(){
        //using self and this and scope resolution
    self::display();
    $this->display();
    }
    function display(){
        echo "My name is Ankit";
        echo "<br>";
    }
}
class second extends first{
    function display(){
        echo "My name is Shivshankar";
    }
}
$show=new second();
$show->practical();
?>