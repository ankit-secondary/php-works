<?php
class first{
    public $status;
    // magical functions
    public function __construct($status){
        $this->status=$status;
     //   echo " work is in  ".$this->status;
    //    echo "<br>";
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
$first=new first("progress");
$first->Name;
?>