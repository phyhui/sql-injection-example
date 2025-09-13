<?php
define("DB_HOST", "localhost");
define("DB_NAME", "test");
define("DB_USER", "root");
define("DB_PASSWORD", "");
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($mysqli->connect_errno) { exit($mysqli->connect_error); }

$stmt = $mysqli->prepare("SELECT * FROM `products` WHERE `status`=1 AND `name` LIKE ?");
$search = "%".$_POST["search"]."%";
$stmt->bind_param("s", $search);

$stmt->execute();
$stmt->bind_result($a, $b, $c);
while ($stmt->fetch()) { echo "<div>$a $b $c</div>"; }
mysqli_close($mysqli);