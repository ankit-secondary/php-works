<?php
class first{
    public $number=6203009772;
    public $name="Ankit";
    public $cont=987676;

    //magic functions
  //constructor called
    public function __construct(){
        echo "work is in progress";
        echo "<br>";
    }
    // tostring magic function called  

    function __toString(){
                return "Name is:$this->name phone no. is: $this->number";
    }

    //get function called

    function __get($Name){
            echo"$Name does not exist";
            echo "<br>";
        }

        //set function called 

        function __set($Name,$value){
              var_dump("$Name",$value);
        }
        //call magic function called

          public  function __call($no,$argument){
                  if($no==='mobilephone'){
                      
                      // it will call the normal method phone

                      return $this->phone();
                  }
              }
              //Destructor called

              public function __destruct(){
                echo " Destructor called ";
                echo "<br>";
            }
       public function phone(){
             return $this->cont;
        }
        public function __invoke(){
            return "invoke method is called";
            echo "<br>";
        }
    }    
    //making object of first class and passing argument to constructor

$first=new first("progress");
$p=new first();

//echo &p- it will call _tostring magic function

echo $p;

//It will search for name if not found then will go to _get magic function
$first->Name;

//will go for set magic function

$first->Name='pulok';
echo "<br>";

//it will search for mobilephone function if not found then will go to _call magic function

echo $first->mobilephone();

//trying to use object as a method it will go to _invoke magic metehod

echo $p();
echo "<br>";

?>