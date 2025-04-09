<html>
    <head>
        <title>Foreach</title>
        <style>
            h2{
                color:brown;
                margin-left:750px;
                
            }
            body{
                background-color:white;
            }
            div{
                display:flex:
                
                margin-top:250px;
                border:dotted 3px;
                padding-left:10px;
            }
        </style>
</head>
<body>
    <div>
<?php
$season=["January","Februry","March","April"];
foreach($season as $s)
{
    echo "<h2> $s<br/> </h2>";
}
?>
</div>
</body>
</html>