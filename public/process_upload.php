<?php
require '../private/convar.php';
//echo 'Het bestand heet:' . $_FILES['image']['name'] . '.<br>';
//echo 'Heeft een grote van: ' .  $_FILES['image']['size'] . ' bytes' . ',<br>';
//echo 'en het bestand is tijdelijk opgeslagen in: ' . $_FILES['image']['tmp_name'] . '.<br>';

//image in de juiste map zetten
$temp_location = $_FILES['image']['tmp_name'];
$target_location = 'images/' . time() . $_FILES['image']['name'];

move_uploaded_file($temp_location, $target_location);

//dbing the image

$title = $_POST['title'];
$description = $_POST['descriptie'];


$query = "INSERT INTO plaatjes VALUES (0,?,?,?)";
$stmt = $mysqli->prepare($query) or die ('Error preparing.');
$stmt->bind_param('sss',$title,$description, $target_location) or die('error bindsing');
$stmt->execute() or die('error executing');
$stmt->close();

echo 'Je plaatje staat er in hoor.';
echo '<a href="show_image.php">Klik om de plaatjes te zien</a>';