<?php
require 'Pokemon.php';

//Attack(s) aanmaken
$eRing = new attack('Electric ring', '50');
$pPunch = new attack('Pika Punch', '20');

//Pokemon(s) aanmaken
$charmander = new Pokemon('Charmander', 'Fire', '150', 'Water', 'Fire', 'Scratch');
$pikachu = new Pokemon('Pikachu', 'Lightning', '60', 'Ground', 'Electric', array($eRing, $pPunch));



print_r('<pre>' . $pikachu . '</pre>');
