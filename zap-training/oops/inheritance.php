<?php
// class

class company {

    //Access modifier ,variables, functions

    public $Name;
     public $Addressc;
      function set_Name($Name){
                 $this->Name = $Name;
      }
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

 //  used 2nd class for inheritance

 class client extends company{
     public $name;
     public $address;

     // used constructor

    public function __construct($name,$address){
        $this->name=$name;
        $this->address=$address;
    }
      public function display(){
            echo "Name of client is ".$this->name ."<br> Address of the client is ".$this->address;
        }
        }

        // making objects of the child class 'client'

    $client=new client("Ankit","chandigarh");


    //calling displayc function of parent class 'company'

     $client->displayc('mohali');

     //calling 'dispaly' function of child class 'client'
     
     $client->display();
?>