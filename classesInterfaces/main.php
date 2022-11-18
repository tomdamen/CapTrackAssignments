<?php

require("./interfaces/Animal.php");

require("./classes/Elephant.php");

require("./classes/ForestElephant.php");
require("./classes/AfricanElephant.php");
require("./classes/Giraffe.php");
require("./classes/Bear.php");
require("./classes/BrownBear.php");
require("./classes/SpectacledBear.php");
require("./classes/PolarBear.php");


$forestElephant = new ForestElephant();
$africanElephant = new AfricanElephant();
$giraffe = new Giraffe("very tall one");
$polarBear = new PolarBear();
$spectacledBear = new SpectacledBear();
$brownBear = new BrownBear();

