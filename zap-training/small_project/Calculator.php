<?php

//it will show output on same page


//making class first

class Calculator{

    //making calculation method

    public function Addition() {

        //using isset method for 'addition'to check variable is set or not

        
          /*  if(empty($_POST["num1"] && $_POST['num2'])){
                $error="one of the number Block is empty";
                echo"$error";
            }else{*/
                if (isset($_POST['add'])){
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $add=$num1+$num2;
                echo"<br>";
                echo 'Addition of two no. is '.$add;
            }}
        //for subtractiion
        public function __construct(){

        if (isset($_POST['sub'])){
           /* if(empty($_POST["num1"] && $_POST['num2'])){
                $error="one of the number Block is empty";
                echo"$error";
            }else{*/
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $sub=$num1-$num2;
                echo"<br>";
                echo 'subtraction of two no. is '.$sub;
            }
        }
        //for multiplication
        public function multiplication(){

        if (isset($_POST['mul'])){
          /*  if(empty($_POST["num1"] && $_POST['num2'])){
                $error="one of the number Block is empty";
                echo"$error";
            }else{*/
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $mul=$num1*$num2;
                echo"<br>";
                echo"<br>";
                echo 'multipication of two no. is '.$mul;
            }
        }
        //for division
        public function division(){

        if (isset($_POST['div'])){
           /* if(empty($_POST["num1"] && $_POST['num2'])){
                $error="one of the number Block is empty";
                echo"$error";
            }else{*/
                $num1=$_POST['num1'];
                $num2=$_POST['num2'];
                $div=$num1/$num2;
                echo"<br>";
                echo"<br>";
                echo"Division of two no. is ".$div;
                }}

        //for square root
        public function squareroot(){

        if(isset($_POST['root'])){
          $num1=$_POST['num1'];
          $num2=$_POST['num2'];
            $root=sqrt($num1);
            $Root=sqrt($num2);
            echo"<br>";
            echo"<br>";
            echo 'Sqaure root of First no. is '.$root;
            echo"<br>";
            echo"<br>";
            echo 'Sqaure root of Second no. is '.$Root;
        }
    }
}
?>
