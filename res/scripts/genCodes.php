<?php
$con = mysqli_connect("nightraud.de", "server", "IgC5eLQixX", "wahlsystem");
$val = "false";
$counter = 1;
while($counter<=40 && false) {
    $id = 124000 + rand(100, 999);
    $sql = "INSERT INTO `codes`(`ID`, `Status`) VALUES ($id, '$val')";
    $counter++;
    $abfrage = mysqli_query($con, $sql);
        if (!$abfrage ) {
            die('Ungültige Abfrage: ' . mysqli_error());
        }
}
?>