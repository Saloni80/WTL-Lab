<html>
    <head>
        <title>Array Function</title>
</head>
<body>
    <?php
    $season=array("Summer","Winter","Spring","Autumn");
    foreach($season as $s => $value)
    {
        echo"Index $s :$value<br/>";
    }
    echo count($season);

    echo "<br/>Sorted Array:<br/>";
    sort($season);
    foreach($season as $s)
    {
        echo " $s<br/>";
    }

    echo "Reverse Array:<br/>";
    $reverseseason=array_reverse($season);
    foreach($reverseseason as $rs)
    {
        echo "$rs<br/>";
    }

    echo "Search elemenet:<br/>";
    $key=array_search("Spring",$season);
    echo $key;

?>
</body>
</html>