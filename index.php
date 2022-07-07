<?php
include __DIR__ . '/moovie.php';

$spiderman = new Moovie ("Spiderman", "Marvel", 10);
$spiderman->ticket();
// var_dump($spiderman);

$spiderman_preview = new Moovie ("Spiderman Preview", "Marvel", 12);
$spiderman_preview->ticket();
// var_dump($spiderman_preview);

?>

<div>
    <h1><?php echo $spiderman->name ?></h1>
    <h2><?php echo $spiderman->production ?></h2>
    <h3><?php echo $spiderman->typeOfTicket ?></h3>
</div>

<br>

<div>
    <h1><?php echo $spiderman_preview->name ?></h1>
    <h2><?php echo $spiderman_preview->production ?></h2>
    <h3><?php echo $spiderman_preview->typeOfTicket ?></h3>
</div>