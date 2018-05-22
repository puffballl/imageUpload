<?php
echo '<a href="index.php">Klik hier om een plaatje toe te voegen</a>';
echo '<br>';
require '../private/convar.php';
$query = "SELECT locatie, naam, omschrijving FROM plaatjes ORDER BY id DESC ";

$stmt = $mysqli->prepare($query) or die ('error preparing');
$stmt->bind_result($location, $title, $description) or die ('error binding results');
$stmt-> execute() or die ('error executing');
$stmt->fetch() or die ('er staan geen fotos');

echo '<img style="width: 25%" src ="' . $location . '"/>';

while ($success = $stmt->fetch()){
    echo '<img style="width: 25%" src ="' . $location . '"/>';
}

