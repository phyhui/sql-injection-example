<?php
define("DB_HOST", "db");
define("DB_NAME", "my_database");
define("DB_CHARSET", "utf8mb4");
define("DB_USER", "root");
define("DB_PASSWORD", "my_root_password");
 
$pdo = new PDO(
  "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET, 
  DB_USER, DB_PASSWORD, [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
 
$stmt = $pdo->prepare($sql);
$stmt->execute($data);
$results = $stmt->fetchAll();
$stmt = null;
$pdo = null;

echo "<code class='sql'>$sql</code>";
if (count($results)==0) { echo "<div class='row'>No results</div>"; }
else { foreach($results as $r) {
  printf("<div class='row'>%u %s</div>", $r["status"], $r["name"]);
}}