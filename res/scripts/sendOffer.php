<?php
$id = $_GET['ID'];
$offer = $_GET['Offer'];
$con = mysqli_connect("nightraud.de", "server", "IgC5eLQixX", "wahlsystem");
$sql = "INSERT INTO `offers`(`ID`, `Offer`) VALUES ('$id','$offer')";
$abfrage = mysqli_query($con, $sql);
if (!$abfrage ) {
    die('Ungültige Abfrage: ' . mysqli_error());
}
?>