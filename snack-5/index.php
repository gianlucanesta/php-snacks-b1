<?php 
    //Utilizzare questo array: https://pastebin.com/CkX3680A. 
    //Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio
    //e i PM in un rettangolo verde.
?>

<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
 
    $teacherArray = $db['teachers'];
    $projectManagerArray = $db['pm'];
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

    <title>Snack 5</title>
</head>
<body>

<div class="teach d-flex mt-5 ml-5">
    <h2 class>Teachers</h2>
    <?php for($i= 0 ; $i < count($teacherArray); $i++) { ?>
    <?php $this_teacher = $teacherArray[$i]; ?>
    <div class="mb-2">
        <?php echo $this_teacher['name']; ?> 
        <?php echo $this_teacher['lastname']; ?>
    </div>    
    <?php } ?>
</div>

<div class="pm d-flex mt-5 ml-5">
    <h2 class>Project Manager</h2>
    <?php for($i= 0 ; $i < count($projectManagerArray); $i++) { ?>
    <?php $this_manager = $projectManagerArray[$i]; ?>
    <div class="mb-2">
        <?php echo $this_manager['name']; ?> 
        <?php echo $this_manager['lastname']; ?>
    </div>    
    <?php } ?>
</div>


</body>
</html>