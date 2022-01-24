<!-- Creare un array con 15 numeri casuali, 
tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
$random=array();
for($i=0; $i<15; $i++)
{
    if (!in_array($random)) {
        $random[]=rand(0,100)."<br />";
    }      
}
// echo var_dump($random);
// var_dump ($random);
print_r($random);
?>