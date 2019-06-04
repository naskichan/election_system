<html>
<head>
<link rel="stylesheet" type="text/css" href="res.css" media="print" />
<link rel="stylesheet" type="text/css" href="res.css" media="screen" />
</head>
</html>
<?php
$con = mysqli_connect("nightraud.de", "server", "IgC5eLQixX", "wahlsystem");
$sql = "SELECT ID FROM codes";
$query = mysqli_query($con, $sql);
echo "<center>";
while($result = mysqli_fetch_object($query)) {
    echo "
        <div class='hug'>
            <div class='head'>Du willst mitentscheiden? Nutze deine Chance!</div>
            <div class='entry'>Dein Zugangscode: $result->ID;</div>
            <div class='explain'>Einfach eingeben und mitmachen auf:</div>
            <div class='site'>www.nightraud.de</div>
        </div>";
        
}
echo "</center>";
?>