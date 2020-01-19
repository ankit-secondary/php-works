<?php
class first{
    public $status;

    //magic functions

    public function __construct($status){
        $this->status=$status;
    }
    public function __destruct(){
        echo " work is in ".$this->status;
    }
    function __set($Name,$value){
        $this->Name=$value;
    }
    function __get($Name){
        echo "$Name does not exist";
        echo "<br>";
    }
    }
    //making object of first class and passing argument

$first=new first("progress");

//will search for name if does not found then call get function

$first->Name;
?>