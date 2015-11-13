<?php

require 'connect.php';

$descriere_produs = @$_POST['descriere_produs'];
$pret_produs = @$_POST['pret_produs'];
$cantitate = @$_POST['cantitate'];


$sql = "INSERT INTO meniu (descriere_produs, pret_produs, cantitate) VALUES ('". $descriere_produs ."', ". $pret_produs .", ". $cantitate .")";

echo $sql . "\n\n\n\n\n";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: adauga_produs.html.php");
die();
?>
