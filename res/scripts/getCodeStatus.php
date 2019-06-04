<?php
$input = $_GET['ID'];
$con = mysqli_connect("nightraud.de", "server", "IgC5eLQixX", "wahlsystem");
$sql = "SELECT * FROM codes WHERE ID = '$input'";
$abfrage = mysqli_query($con, $sql);
if (!$abfrage ) {
    die('Ungültige Abfrage: ' . mysqli_error());
}
if($var = mysqli_fetch_object($abfrage)) {
    echo $var->Status;
}
else {
    echo "NaN";
}
?>