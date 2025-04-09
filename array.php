<html>
    <head>
        <title>Array Representation</title>
</head>
<body>
<?php
$indexedArray = array("Maharashtra", "Karad", "Satara");
echo "Indexed Array:<br>";
foreach ($indexedArray as $index => $value) {
    echo "Index $index: $value<br>";
}


$indexedArray[] = "Date";
echo "After adding an element:<br>";
print_r($indexedArray);
echo "<br>";


echo "Count of Indexed Array: " . count($indexedArray) . "<br><br>";


$associativeArray = array(
    "name" => "Chrishtain",
    "age" => 29,
    "city" => "New York"
);
echo "Associative Array:<br>";
foreach ($associativeArray as $key => $value) {
    echo "$key: $value<br>";
}


$associativeArray["country"] = "London";
echo "After adding an element:<br>";
print_r($associativeArray);
echo "<br>"; 


if (array_key_exists("age", $associativeArray)) {
    echo "Key 'age' exists in the associative array.<br><br>";
}


$multidimensionalArray = array(
    array("John", 25),
    array("Jane", 30),
    array("Doe", 22)
);
echo "Multidimensional Array:<br>";
foreach ($multidimensionalArray as $subArray) {
    echo "Name: $subArray[0], Age: $subArray[1]<br>";
}


$multidimensionalArray[] = array("Alice", 28);
echo "After adding an element:<br>";
print_r($multidimensionalArray);
echo "<br>"; 
sort($indexedArray);
echo "Sorted Indexed Array:<br>";
print_r($indexedArray);
echo "<br>"; 

$secondArray = array("Pune", "Mumbai");
$mergedArray = array_merge($indexedArray, $secondArray);
echo "Merged Array:<br>";
print_r($mergedArray);
echo "<br>"; 


$numbers = array(1, 2, 3, 4, 5);
echo "Maximum value in numbers array: " . max($numbers) . "<br><br>";

?>
</body>
</html>

