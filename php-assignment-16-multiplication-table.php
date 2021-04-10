


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>

    <style type= "text/css">

    table,th,tr,td{
        border: 1px solid black;
        text-align: center;
        border-collapse: collapse;
        }

    table tr:nth-child(1){
        font-size: xx-large;
        font-weight: bold;
    }

    table tr:nth-child(even){
        background: grey;
    }

    td{
        width: 50px;
    }

    table tr td:first-child {
        font-size: xx-large;
        font-weight: bold;
    }
    </style>
</head>

<body>

<?php
echo "<table>";
echo "<tr>";
for($i=0; $i<10; $i++){    
    echo "<td>".$i."</td>";
    }

for($i=1; $i<10; $i++){
    echo "<tr><td>".$i."</td>";

    for($j=1; $j<10; $j++){        
        $output = $i*$j;
        echo "<td>".$output."</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>

</body>
</html>
