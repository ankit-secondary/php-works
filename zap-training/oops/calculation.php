<html>
    <head>
        <title>CALCULATOR</title> 

    </head>
    <body>
        
        <!--using form tag-->

        <form method="POST">
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
function __autoload($var){
    require_once "./".$var.".php";
}
$result=new Calculator();
$result->Addition();
$result->multiplication();
$result->division();
$result->squareroot();
?>
</center>

