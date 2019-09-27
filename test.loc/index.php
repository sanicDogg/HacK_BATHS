<?php
require "db_connect.php";
 ?>
<html>
<head>
</head>

<body>
  <p><a href="create_volunteer.php">Создать волонтера</a></p>

  <form action="add.php" method="get">
    <p><input type="text" name="name"></p>
    <p><input type="text" name="age"></p>
    <p><input type="submit"></p>
  </form>
</body>
</html>
