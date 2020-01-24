
<html>
    <head>
        <title>Root</title>
    </head>
    <body>
        
        <!--using form tag-->

        <form  method="POST">
        <center>
       <p style=color:blue>ENTER THE NUMBER FOR SQUAREROOT
        <input type="text" name="num" required></p>
        <br>
        <!--submit type to submit input values-->
        <input type="submit" name="root" value="Root(&#8730)">
        <input type="reset"  value="Refresh">
        </center>
        </form>
        <br>
    </body>
</html>
<center>
<?php
extract($_POST);
class square{
public $sqrt;
public $i;
public function root(){
  if (isset($_POST['root'])){
    $num=$_POST['num'];
  }
for($i=1;$i<=$num;$i++){
   $sqrt=$i*$i;
        if($sqrt==$num){

          echo "square root of the given no. is " .$i;
        break;
        }
      elseif(($i*$i)>$num){
          $i=$i-1;
          $sqrt=$i+($num-($i*$i))/(2*$i);
          echo " square root of given no. is ".$sqrt;
      break;}          
    }
      }
}
    
$obj=new square();
$obj->root();
?>
</center>

