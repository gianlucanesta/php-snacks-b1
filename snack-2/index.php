<!-- Passare come parametri GET name, mail e age e verificare:
(cercando i metodi che non conosciamo nella documentazione) 
- che name sia più lungo di 3 caratteri,
- che mail contenga un punto e una chiocciola 
- che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php 

$name = $_GET['name'];
var_dump($name);

$mail = $_GET['email'];
var_dump($mail);

$age = $_GET[age];
var_dump($age);


$snail = strpos($mail, '@');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    <?php if (strlen($name) <= 3 || strpos($mail, '@') === false || strpos($mail, '.') === false || !is_numeric($age)) { ?>
        <div>KO</div>
    <?php } else { ?>
        <div>OK</div>
    <?php } ?>
</body>
</html>


