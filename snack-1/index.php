<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di 
casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php 
$matches = [
    [
        'homeTeam' => 'Brindisi',
        'awayTeam' => 'Virtus Bologna',
        'homeTeamScore' => 76,
        'awayTeamScore' => 83,
    ],
    [
        'homeTeam' => 'Cremona',
        'awayTeam' => 'Venezia',
        'homeTeamScore' => 85,
        'awayTeamScore' => 82,
    ],
    [
        'homeTeam' => 'Trieste',
        'awayTeam' => 'VL Pesaro',
        'homeTeamScore' => 89,
        'awayTeamScore' => 78,
    ],
    [
        'homeTeam' => 'Trento',
        'awayTeam' => 'Napoli',
        'homeTeamScore' => 85,
        'awayTeamScore' => 72,
    ],
    [
        'homeTeam' => 'Fortitudo Bologna',
        'awayTeam' => 'Derthona',
        'homeTeamScore' => 74,
        'awayTeamScore' => 92,
    ],
    [
        'homeTeam' => 'Brescia',
        'awayTeam' => 'Dinamo Sassari',
        'homeTeamScore' => 97,
        'awayTeamScore' => 86,
    ],

];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Partite Basket Serie A1</h1>

    <?php for($i = 0; $i < count($matches); $i++) { ?>
        <?php $this_match = $matches[$i]; ?>


        <div class="match">
            <h3>
                <?php echo $this_match['homeTeam']; ?> - <?php echo $this_match['awayTeam']; ?> |
                <?php echo $this_match['homeTeamScore']; ?> - <?php echo $this_match['awayTeamScore']; ?>
            </h3>

        </div>

    <?php } ?>
</body>
</html>