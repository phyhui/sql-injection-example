<!DOCTYPE html>
<html>
  <head>
    <title>PHP MYSQL Injection Demo</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="x-dummy.css">
  </head>
  <body>
    <!-- (A) SEARCH FORM -->
    <form method="post">
      <p>* Search for any product normally - Will only extract products with <code>status=1</code>.</p>
      <p>* Then try <code>" OR 1=1 OR `name` LIKE "</code> - This will extract everything.</p>
      <input type="text" name="search">
      <input type="submit" value="Search">
    </form>

    <!-- (B) SEARCH RESULTS -->
    <div id="results"><?php
      if (isset($_POST["search"])) {
        $sql = "SELECT * FROM `products` WHERE `status`=1 AND `name` LIKE \"%".$_POST["search"]."%\"";
        $data = null;
        require "2-db.php";
      }
    ?></div>
  </body>
</html>