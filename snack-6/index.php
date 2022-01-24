<?php 
    // Creare un array contenente qualche alunno di un’ipotetica classe. 
    // Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
    // Stampare Nome, Cognome e la media dei voti di ogni alunno.
?>

<?php 

$students = [
    [
        'name' => 'Ernesto',
        'lastname' => 'Rossi',
        'age' => 37,
        'votes' => [10, 8, 8, 9]
    ],
    [
        'name' => 'Valerio',
        'lastname' => 'Esposito',
        'age' => 18,
        'votes' => [6, 7, 8, 6]
    ],
    [
        'name' => 'Angelica',
        'lastname' => 'Manfrin',
        'age' => 39,
        'votes' => [9, 6, 8, 9]
    ],
    [
        'name' => 'Flaviana',
        'lastname' => 'Romano',
        'age' => 27,
        'votes' => [7, 7, 6, 7]
    ],
    [
        'name' => 'Libero',
        'lastname' => 'Di Lorenzo',
        'age' => 18,
        'votes' => [6, 9, 10, 9]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
          crossorigin="anonymous"
    >

    <title>Snack 6</title>
</head>
<body>
    <h1 class="mt-5 ml-5">Students List</h1>
    <?php for($i = 0; $i < count($students); $i++) { ?>
                <?php $this_student = $students[$i];?>
                    <div class="student ml-5 mb-5">
                        <div class="personal-info ml-1">
                            <?php echo $this_student['name'];?> 
                            <?php echo $this_student['lastname'];?>
                        </div>
                        <div class="vote ml-1">
                            Average: 
                            <?php $average =  array_sum($this_student['votes']) / count($this_student['votes']);
                            echo ceil($average);?>
                        </div>
                    </div>
            <?php } ?>
        </div>
</body>
</html>