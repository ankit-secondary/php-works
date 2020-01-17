<?php
abstract  class schools{
    public $board;
    public $Region;
    public $Name;
    public function name($Name){
        $this->Name=$Name;
        echo "Name of the Department is ".$this->Name;
        echo "<br>";
    }
         abstract public function display($board);
        abstract public function region($Region);
}
class dav extends schools{
public function region($Region){
    $this->Region=$Region;
    echo "Region of the school is ".$this->Region;
    echo "<br>";
}
     function display($board){
        $this->board=$board;
        echo "Name of the board is ".$this->board;
        echo "<br>";
    }
}
class dps extends schools{
    public function display($board){
        $this->board=$board;
        echo "Board of the school is ".$this->board;
        echo "<br>";
    }
    public function region($Region){
        $this->Region=$Region;
        echo "Region of the school is ".$this->Region;
        echo "<br>";
}
}
$dps=new dps();
$dps->name("Education");
$dps->region("Delhi");
$dps->display("CBSE");
?>