<?php
require "autoload.php";

// Instantiation of objects
$pikachu = new Pikachu("Elektrische Bob", 60);
$charmeleon = new Charmeleon("Vuur Harry", 60);

// ------------- Epic Pokémon Battle Begins  ------------- //

echo "<b>Status:</b> </br>";
echo "$pikachu->name's HP: $pikachu->health / $pikachu->maxHealth </br>";
echo "$charmeleon->name's HP: $charmeleon->health / $charmeleon->maxHealth </br>";
echo "<s>--------------------------------------</s></br>";
echo "</br>";

$pikachu->attack($charmeleon, $pikachu->attacks()["Electric Ring"]);

echo "$pikachu->name attacked $charmeleon->name using Electric Ring. </br>";
echo "</br>";

echo "<b>Status Update:</b> </br>";
echo "$pikachu->name's HP: $pikachu->health / $pikachu->maxHealth </br>";
echo "$charmeleon->name's HP: $charmeleon->health / $charmeleon->maxHealth </br>";
echo "<s>--------------------------------------</s></br>";
echo "</br>";

$charmeleon->attack($pikachu, $charmeleon->attacks()["Flare"]);

echo "$charmeleon->name attacked $pikachu->name using Flare. </br>";
echo "</br>";

echo "<b>Status Update:</b> </br>";
echo "$pikachu->name's HP: $pikachu->health / $pikachu->maxHealth </br>";
echo "$charmeleon->name's HP: $charmeleon->health / $charmeleon->maxHealth </br>";
echo "<s>--------------------------------------</s></br>";
echo "</br>";

// ------------- Pokémon Battle Ends ------------- //

echo "<b>Living Pokémon:</b> " . Pokemon::getPopulation();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>