<?php
$id = $_GET['ID'];
$stm = "true";
$con = mysqli_connect("nightraud.de", "server", "IgC5eLQixX", "wahlsystem");
$sql = "UPDATE `codes` SET `Status`='$stm' WHERE ID='$id'";
$abfrage = mysqli_query($con, $sql);
if (!$abfrage ) {
    die('Ungültige Abfrage: ' . mysqli_error());
}
?>