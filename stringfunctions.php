<?php

//  addcslashes method Will give a slash before specified letter

$contain=addcslashes("Ankit", "A");
echo($contain) . "<br>";

//add shlashe before every quotes

$contain=addslashes('Ankit"kumar"');
echo($contain) . "<br>";

//bin2hex method -convert into hexadecimal value

$contain=bin2hex("hellophp");
echo($contain) . "<br>";
$contain=("welcome to php");
echo $contain."<br>";

// chop method -Remove characters from right hand side & also string specified

echo chop($contain,"php");

// chr method- convert into character

echo chr(123) ."<br>";
echo chr(0123) ."<br>";
echo chr(0x12) ."<br>";
$contain="hello ankit";  

// chunk_split method- seperate string with .

echo chunk_split($contain,1,".");
echo "<br>";
$contain="Hello world! æøå";
echo $contain. "<br>";

//convert_cyr_string method- convert a string set from 1 to another

echo convert_cyr_string($contain,'w','a') . "<br>";
$contain = ",/2*8p;&\@=V}K;&0A `";

//uudecode method - decode a uucode string

echo convert_uudecode($contain) . "<br>";

// crypt method- encrypts the string

echo crypt($contain,'3wr4');
$contain="welcome to myworld";

// explode method - break a string into array

print_r(explode(" ",$contain));
echo "<br>";

// get_html_translation_table gives table of html translations and HTML_SPECIALCHARS

print_r(get_html_translation_table(HTML_SPECIALCHARS));
echo "<br>";

// wordwrap()-wrap string in a new line after reaching specific length

$contain="youarethemanager";
echo wordwrap($contain,3,"<br>",true) . "<br>";

//ucwords()- convert the first character of each word to uppercase 

$contain="you are the manager";
echo ucwords($contain) . "<br>";
//ucfirst()-convert first character of a string to uppercase
echo ucfirst($contain) . "<br>";
//convert lowercase string into uppercase string
echo strtoupper($contain) . "<br>";
$contain="YOU ARE THE MANAGER";
//convert uppercase string into lowercase string
echo strtolower($contain) . "<br>";
//will remove whitespaces and predefined characters from left and right 
echo trim($contain , "GER") . "<br>";
echo substr_compare($contain, "coming", 0) . "<br>";
//will count the string which is repeated
echo substr_count(" Himanshu is not the real name of ", "Himanshu");
echo "<br>";
$age=9;
$str="son";
//will print value of variable in %u if number and in %s if string
printf("your age is %u and you are my %s",$age,$str);
echo "<br>";
//will compare the string of the arguments of method
echo strcmp($str,"son") . "<br>";
//it will reverse the string
echo strrev($contain) . "<br>";
//will repeat the string with the specified times mentioned
echo str_repeat("come",13);
echo $str=array("sumit","amit","suman");
//  will replace amit to ankit
print_r(str_replace("amit","ankit", $str,$i));
//print_r(str_replace("amit","ankit",$str,$i));
echo "Replacement is $i" . "<br>";
$contain="welcome u are";
// padding of the   specified length if string is less than specified length then nothing change
echo str_pad($contain,16,".",STR_PAD_BOTH) . "<br>";
$com="sonofjohn";
//compare the string upto specified length and gives the difference
echo strncasecmp($com,"son",6)."<br>";
//will split the string with indexing
print_r(str_split("welcome"));
echo "<br>";
$str="hello friends how r u";
//will split string 1 by 1
echo strtok($str," ");
?>