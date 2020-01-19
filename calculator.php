<?php

//making class first

class first{

    // variables for taking no from user and to perform calculation

    public $a,$b,$add,$sub,$mul,$div,$root;

    //making calculation method

    public function calculation(){

        //using isset method for 'addition'to check variable is set or not

        if (isset($_POST['add'])){

            //storing user inputs in variables

           $a=$_POST['num1'];
           $b=$_POST['num2'];
           $add=$a+$b;
           echo 'Addition of two no. is '.$add;
        }
        //for subtractiion

        elseif (isset($_POST['sub'])){
            $a=$_POST['num1'];
            $b=$_POST['num2'];
            $sub=$a-$b;
            echo 'Subtraction of two no. is '.$sub;
        }
        //for multiplication

        elseif (isset($_POST['mul'])){
            $a=$_POST['num1'];
            $b=$_POST['num2'];
            $mul=$a*$b;
            echo 'Multiplication of two no. is '.$mul;
        }
        //for division

        elseif (isset($_POST['div'])){
            $a=$_POST['num1'];
            $b=$_POST['num2'];
            $div=$a/$b;
            echo 'Division of two no. is '.$div;
        }
        //for square root

        elseif (isset($_POST['root'])){
            $a=$_POST['num3'];
            $root=sqrt($a);
            echo 'Sqaure root of entered no. is '.$root;
        }
    }
}
//making object of 'first' class

$result=new first();

//calling 'calculation' method of first class

$result->calculation();
?>