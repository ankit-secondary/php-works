<html>
    <head>
        <title>CALCULATOR</title>
    </head>
    <body>
        
        <!--using form tag-->

        <form  method="POST">
        <center>

        <!--using style tag for colour and input types for input-->

       <p style=color:blue>ENTER THE FIRST  NUMBER
        <input type="text" name="num1" required></p>
        <br>
       <p style=color:blue>ENTER THE SECOND NUMBER
        <input type="text" name="num2" required></p>
        <br>

        <!--submit type to submit input values-->

        <input type="submit" name="add" value="ADD(+)">
        <input type="submit" name="sub" value="SUB(-)">
        <input type="submit" name="mul" value="MUL(*)">
        <input type="submit" name="div" value="DIV(/)">
        <input type="submit" name="root" value="Root(&#8730)">
        <input type="reset" name="" value="Refresh">
        </form>
        <br>
    </body>
</html>

<?php
extract($_POST);

//making class first

class first{

    // variables for taking no from user and to perform calculation

    public $a,$b,$add,$sub,$mul,$div,$root;

    //making calculation method

    public function calculation(){

        //using isset method for 'addition'to check variable is set or not

        if (isset($_POST['add'])){
          /*  if(empty($_POST["num1"] && $_POST['num2'])){
                $error="one of the number Block is empty";
                echo"$error";
            }else{*/
                $a=$_POST['num1'];
                $b=$_POST['num2'];
                $add=$a+$b;
                echo"<br>";
                echo 'Addition of two no. is '.$add;
            }
        //for subtractiion

        elseif (isset($_POST['sub'])){
           /* if(empty($_POST["num1"] && $_POST['num2'])){
                $error="one of the number Block is empty";
                echo"$error";
            }else{*/
                $a=$_POST['num1'];
                $b=$_POST['num2'];
                $sub=$a-$b;
                echo"<br>";
                echo 'subtraction of two no. is '.$sub;
            }
        
        //for multiplication

        elseif (isset($_POST['mul'])){
          /*  if(empty($_POST["num1"] && $_POST['num2'])){
                $error="one of the number Block is empty";
                echo"$error";
            }else{*/
                $a=$_POST['num1'];
                $b=$_POST['num2'];
                $mul=$a*$b;
                echo"<br>";
                echo"<br>";
                echo 'multipication of two no. is '.$mul;
            }
        //for division

        elseif (isset($_POST['div'])){
           /* if(empty($_POST["num1"] && $_POST['num2'])){
                $error="one of the number Block is empty";
                echo"$error";
            }else{*/
                $a=$_POST['num1'];
                $b=$_POST['num2'];
                $div=$a/$b;
                echo"<br>";
                echo"<br>";
                echo"Division of two no. is ".$div;
                }

        //for square root

        elseif(isset($_POST['root'])){
          $a=$_POST['num1'];
          $b=$_POST['num2'];
            $root=sqrt($a);
            $Root=sqrt($b);
            echo"<br>";
            echo"<br>";
            echo 'Sqaure root of First no. is '.$root;
            echo"<br>";
            echo"<br>";
            echo 'Sqaure root of Second no. is '.$Root;
        }
    }
}
//making object of 'first' class

$result=new first();

//calling 'calculation' method of first class

$result->calculation();
?>
</center>
