<?php

//using namespace

namespace myname{
    //global variables

 $id;
$id;

//making first class

class first{
    public $id;
    function show($id){
    $this->id=$id;
    echo"Ankit's id is ".$this->id;
    echo "<br>";
}
}
class second extends first{
    public $id;
    function display($id){
        $this->id=$id;
        echo "shiv's id is ".$this->id;
    }
}
//making object of first class

$first=new first();

//making object of second class

$second=new second();

//calling 'show' method of first class

$first->show("1234");

//calling 'dispaly' method of second class

$second->display("4567");
}
?>