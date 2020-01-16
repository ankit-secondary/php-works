<?php
class company {
    public $Name;
     public $Addressc;
      function set_Name($Name){
                 $this->Name = $Name;
      }
    // function _construct($Address){
    //$this->Addressc = $Addressc;
    function displayc($Addressc){
        $this->Addressc = $Addressc;
        echo " Address of the company is ". $Addressc;
        echo "<br>";
    }
function get_Name(){
    return $this->Name;
}
}
$contain=new company();
 $contain->set_Name("Zapbuild-technology");
 echo $contain->get_Name();
 echo "<br>";
 class client extends company{
     public $name;
     public $address;
    public function __construct($name,$address){
        $this->name=$name;
        $this->address=$address;
    }
      public function display(){
            echo "Name of client is ".$this->name ."<br> Address of the client is ".$this->address;
        }
        }
    $client=new client("Ankit","chandigarh");
     $client->displayc('mohali');
     $client->display();
?>