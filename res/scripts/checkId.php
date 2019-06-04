<?php
$id = $_GET['ID'];
$con = mysqli_connect("nightraud.de", "server", "IgC5eLQixX", "wahlsystem");
$sql = "SELECT * FROM codes WHERE ID='$id'";
$abfrage = mysqli_query($con, $sql);
if (!$abfrage ) {
    die('Ungültige Abfrage: ' . mysqli_error());
}
if($result = mysqli_fetch_object($abfrage)) {
    if($result->Status == "true") {
        echo "hack";
    }
    else {
        echo "ok";
    }
}
?>