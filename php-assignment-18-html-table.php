

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table</title>

    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
            font-family: Arial Narrow, sans-serif;
        
        }
        table tr:nth-child(5n+6){
            background: black;
            color: white;
        }
    </style>
</head>

<body>
    <table>
        <tr>
            <th>User #</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Full Name</th>
            <th>Full Name in upper case</th>
            <th>Length of full name (without spaces)</th>
        </tr>
    
      
    

    
    
    <?php
    $users = array( 
        array('first_name' => 'Michael', 'last_name' => 'Choi'),
        array('first_name' => 'John', 'last_name' => 'Supsupin'),
        array('first_name' => 'Mark', 'last_name' => 'Guillen'),
        array('first_name' => 'KB', 'last_name' => 'Tonel'),
        array('first_name' => 'Louie', 'last_name' => 'Penales'),
        array('first_name' => 'Peewee', 'last_name' => 'Max'),
        array('first_name' => 'Chingkoy', 'last_name' => 'Penales'),
        array('first_name' => 'Panda', 'last_name' => 'Bulilit'),
        array('first_name' => 'Cheezy', 'last_name' => 'Flashy'),
        array('first_name' => 'BBR', 'last_name' => 'QM'),
        array('first_name' => 'General', 'last_name' => 'Mingtsai'),
        array('first_name' => 'Robin', 'last_name' => 'Miming'),
        array('first_name' => 'Sharon', 'last_name' => 'Piolo'),
        array('first_name' => 'Miming', 'last_name' => 'Rica'),
        array('first_name' => 'Goldy', 'last_name' => 'Boy'),


     );
    
    foreach($users as $key => $value){
        $key = $key+1;
        echo "<tr>";
        echo "<td>".$key."</td>";
        echo "<td>".$value["first_name"]."</td>";
        echo "<td>".$value["last_name"]."</td>";
        echo "<td>".$value["first_name"]." ".$value["last_name"]."</td>";
        echo "<td>".strtoupper($value["first_name"]." ".$value["last_name"])."</td>"; 
        echo "<td>".strlen($value["first_name"].$value["last_name"])."</td>";
        echo "</tr>";
        
        
    }
    
    ?>
 
    
    </table>
</body>
</html>
