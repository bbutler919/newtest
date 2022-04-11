<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fisrst Doc</title>
</head>
<body>

<?php 
$name = "Benjamins Official Site"; 
?>
    <h1><?php echo $name?></h1>




<?php 
$name = "Benjamin";
$number = 10000;
 
$new = "<h1> HELLO</h1>";


echo $name;

echo $name . " " . $number;
echo $new;

echo 56 + 65;
echo "<br>";
echo 65 - 37;
echo "<br>";
echo 2 * 4;
echo "<br>";

//Arrays
$numberList = array(23,76,54,64,"75" ,564,8769,"<h1>TEST</h1>");//older way to write an array.

$numbersList = [2,3,4,1,4,1];//newer way to write an array.

print_r($numberList);

echo $numberList[0];
echo "<br>";

$setNumber = array(10,20,54);
echo $setNumber[0];

echo "<br>";
//associative arrays can change the names of the keys 
$newNames = array("first_name" => "Ben", "last_name" => "Butler");
print_r($newNames);
echo "<br>";
echo $newNames["first_name"] . " " . $newNames["last_name"];
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";





//IF statements
if(3 > 10){
echo"three is less than 10";
}elseif(4 > 5) {
    echo "4 is less than 5.";
} 

else{
    echo "it aint";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
//comparison operators
// equal to is ==
//identical is ===
//compare is > < >= <= <>
//not equal is !=
//not identical is !==
//and is &&
//or is ||
//not is !


if(4 < 4){
    echo "it is true1";// this will not print as 4 is not greater than 4
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if(4 <= 4){
    echo "it is true2";// this will print because 4 is less than or equal to 4 
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if(4 == 4){
    echo "it is true3";// this will print because 4 is equal to 4 
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if(4 > 4){
    echo "it is true4";// this will not print as 4 is not less than 4 
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if(4 != 4){
    echo "it is true5";// this will not print as 4 is equal to 4 
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if(4 != 5){
    echo "it is true6";// this will  print as 4 is not equal to 5 
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if(4 === 4 || 5 < 10){// if 4 is equal to 4 or 5 is less than 10 then print the below
    echo "it is true7";
    echo "yas";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if(4 === "4"){
    echo "it is true8";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
if(4 === 4 && 5 < 10){// if 4 is equal to 4 and 5 is less than 10 then print the statement. NOTE THAT BOTH CONDITIONS MUST BE MET.
    echo "it is true9";
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>



</body>
</html>