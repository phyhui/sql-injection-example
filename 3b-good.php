<!DOCTYPE html>
<html>
  <head>
    <title>PHP MYSQL Injection Demo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="x-dummy.css">
  </head>
  <body>
    <form method="post">
      <p><code>" OR 1=1 OR `name` LIKE "</code> no longer works.</p>
      <input type="text" name="search">
      <input type="submit" value="Search">
    </form>

    <div id="results"><?php
      if (isset($_POST["search"])) {
        $sql = "SELECT * FROM `products` WHERE `status`=1 AND `name` LIKE ?";
        $data = ["%".$_POST["search"]."%"];
        require "2-db.php";
      }
    ?></div>
  </body>
</html>