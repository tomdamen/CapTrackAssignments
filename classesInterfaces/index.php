<?php

require("./main.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dierentuin</title>
</head>
<body>
    <h1>Dierentuin</h1>
    <p>Ik zeg maar zoo, want dat is korter dan dierentuin.</p>

    <div class="zoo">
        <p>In deze dierentuin bevinden zich een hele hoop dieren:</p>

        <p>Er is een giraf, deze is <?= $giraffe->getWeight() ?> kg en beweeg met 
        een snelheid van <?= $giraffe->getMovementSpeed() ?> km/u. Hij is te omschrijven als
         een <?= $giraffe->getDescription() ?></p>
    
        <p>Er zijn meerdere olifanten, de leukste daarvan is de bosolifant. Deze weegt <?= $forestElephant->getWeight() ?> kg
        en kan maar liefst <?= $forestElephant->getMovementSpeed() ?> km/u wandelen.</p>

        <p>Er zijn ook beren, maar die zijn minder interessant. Het zijn wel hele zware dieren, de bruine 
            beer weegt maar liefst <?= $brownBear->getWeight() ?> kg.
        </p>

        <p>Er is een kakofonie aan geluiden, een greep uit wat je kunt horen:
            <?= $polarBear->getSound() ?>,
            <?= $brownBear->getSound() ?>,
            <?= $spectacledBear->getSound() ?>,
            <?= $giraffe->getSound() ?>,
            <?= $forestElephant->getSound() ?>,
            <?= $africanElephant->getSound() ?>.
        </p>
    
    </div>


</body>
</html>