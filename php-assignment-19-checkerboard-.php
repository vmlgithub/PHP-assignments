<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Checkerboard</title>
    <style>            
    .off_white{
        background: #ffffe0;
        width: 80px;
        height: 80px;
        border: 1px solid blue;
        padding: 0px;
        margin: 0;
        font-size: 0; 
        border-collapse: collapse;
        text-align: center;
    }
    .green{
    background: #556b2f;
    width: 80px;
    height: 80px;
    border: 1px solid blue;
    padding: 0px;
    margin: 0;
    border-collapse: collapse;
    }
    </style>
</head>
<body>
<?= "<table>" ?>
    
    <?= "<tr>" ?>
<?php for($i=1; $i<=8; $i++){
    for($j=1; $j<=8; $j++){
        $output = $i+$j;        
            if($output%2==0){ ?>
    
        <?="<td class='green'></td>"?>                    
<?php }
    else{ ?>

        <?= "<td class='off_white'></td>" ?>
<?php } 
        }?>       
    <?= "</tr>" ?>
<?php } ?>

<?= "</table>" ?>
<?php ?>

</body>
</html>

