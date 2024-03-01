<!DOCTYPE html>
<html>
<head>
	<title>Php tutorial</title>
</head>
<body>
<?php
/*
echo "Hello world <br>"; 

//variable 
$var1=null;

$a=33;
$A=30;
echo $a+$A ;
echo "<br>";
$str1="This is a string";
echo "str1<br>";

//DataTypes->str,int.float,booleans,arrays,obj,null
$str2="This is a string";
var_dump($str2);
var_dump($A)

$fruits = array('apple', 'banana', 'mango');
var_dump($fruits);

$strr="My name is Tamosa";
echo strlen($strr),"<br>";
echo str_word_count($strr);
echo strrev($strr),"<br>";
echo strpos($strr,'is'),"<br>";
echo str_replace('is', 'are', $strr);

define ("PI",3.14);//constants are global variables
echo PI;
//operators
echo "The value of 3+4 is",3+4,"<br>";
echo "The value of 3-4 is",3-4,"<br>";
echo "The value of 3/4 is",3/4,"<br>";
echo "The value of 3**4 is",3**4,"<br>";
//assinging=,comparision==
$x=1;
$x=$x+1;
$x++;//incresing,decresing
echo $x;
//logical oprators(and,or),string oprators,array oprators

$t=date("H");
if($t<"8"){
	echo $t . "is a good time";
}
else{
	echo "It is midnight";
}
echo date_default_timezone_get();


//Loops
$var1=5;
while ($var1 <= 8) {
	if($var1==6){
		$var1++;
		continue;
	}
	echo "The current value is" . $var1 . "<br>";
	$var1++;
}
//forlopp

//functions
function area($radius){
	$a=3.14*$radius*$radius;
	return $a;
}
echo area(6);
*/
$n = array(4,8,55,1);
sort($n);
$length=count($n);
for ($i=0; $i < $length; $i++) { 
	echo $n[$i];
	echo "<br>";
}

?>
</body>
</html>