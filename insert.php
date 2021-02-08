<?php
include('database.php');

$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$images = $_POST['images'];
$prix = $_POST['prix'];
$quantite = $_POST['quantite'];
$date_achat = $_POST['date_achat'];
$date_de_publication = $_POST['date_de_publication'];




$sql = "INSERT INTO livres (titre, auteur, images, prix, quantite, date_achat, date_de_publication)
VALUES ('$titre', '$auteur', '$images','$prix', '$quantite' , '$date_achat','$date_de_publication')";
// use exec() because no results are returned
// $conn->exec($sql);
$query_run = mysqli_query($conn, $sql);

header("location: read.php");
?>