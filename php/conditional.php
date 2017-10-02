<!DOCTYPE html>
<html>
<style>
div {
	margin-top: 20px;
	margin-bottom: 20px;
}
</style>
<body>

<?php 

$arr = [1, 2, 3];
print_r($arr);
var_dump($arr);
print ("<br>");

# looping through the array
for ($i = 0; $i < count($arr); $i++){
	echo $arr[$i] . "<br>";
}

# Another way
foreach ($arr as $v){
	echo $v . "<br>";
}


# Associative Array
$arr = array("a"=>"Lion", "b"=>"Chicken", "c"=>"Cat");
foreach ($arr as $key => $value){
	echo $key . " " . $value . "<br>";
}
var_dump($arr);


# Your exercise starts here...
# Loading a JSON file
$organizations = file_get_contents('json/data.json');

# <pre> tag makes it easy to read a large array
print ("<pre>");
print_r($organizations);
print ("</pre>");

echo "Parsing a JSON file to a PHP array.";
$json = json_decode($organizations, true);
print ("<pre>");
print_r($json);
print ("</pre>");
?>