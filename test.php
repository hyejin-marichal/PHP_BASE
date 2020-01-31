<?php
$adulte = false;
if ($adulte) {
    ?>

    <p>Tu es adulte</p>

    <?php
}?>

<?php
$age = 0;

while ($age<10)
{
    echo '<p>tu as moins 10ans.</p>';
    $age++;
}
?>

<?php

for($age=0; $age<10; $age++)
{
    echo '<p>tu as moins 10ans.</p>';
}
?>

<?php

$coordonnees = array (
    'prenom' => 'François',
    'nom' => 'Dupont',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Marseille');

echo '<pre>';
print_r($coordonnees);
echo '</pre>';

foreach ($coordonnees as $a){
    echo $a;
}

function calcule ($b)
{
    echo '<p>'. $b*$b.'</p>';
}

calcule(5);
?>

