<?php

include('database.php');

// Récupération du paramètre de la requête
$id = $_GET["id"];
// connection au SGBD


// sql to delete a record
$sql = "DELETE FROM livres WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

header("location:read.php");
?>



