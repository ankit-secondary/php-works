<?php
//using namespace
namespace myname{
 $id;
$id;
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
$first=new first();
$second=new second();
$first->show("1234");
$second->display("4567");
}
?>