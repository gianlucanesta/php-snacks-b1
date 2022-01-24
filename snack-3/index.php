<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$array = [];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>

    <h1>Random Numbers</h1>

<?php 
    for ($i = 0; $i < 15; $i++) {
        $randNum = rand(1,100);
        if (!in_array($randNum, $array)){
           
            $array[] = $randNum;
        };
        echo $randNum . "<br>";
    }
?>
    
</body>
</html>


