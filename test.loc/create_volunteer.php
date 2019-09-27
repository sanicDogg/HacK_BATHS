<?php
require "db_connect.php";

$data = $_GET;
 ?>
<html>
<head>
</head>

<body>
  <?php if (empty($data)):
    echo "Данные не передалисю";
  ?>
  <form action="add_volunteer.php" method="get">
    <p>ФИО:<input type="text" name="fio"></p>
    <p>Дата рожд<input type="text" name="dateOfBirth"></p>
    <p>EMAIL<input type="email" name="email"></p>
    <p>Номер телефона<input type="text" name="phoneNum"></p>
    <p>Место учебы(рабты)<input type="text" name="placeOfStudy"></p>
    <p>Специальность<input type="text" name="specialty"></p>
    <p>ин яз<input type="text" name="languages"></p>
    <p>опыт волонтерства<input type="text" name="exp"></p>
    <br>
    <p>опыт работы с детьми<input type="text" name="expKids"></p>
    <p>доп навыки<input type="text" name="addSkills"></p>
    <p>ожидания<input type="text" name="expections"></p>
    <p>аллергия<input type="text" name="allergy"></p>
    <br>
    <br>
    <p>ссылка на фото<input type="text" name="photoLink"></p>
    <br>
    <p>почему интересно сотр<input type="text" name="whyCooperating"></p>
    <br>
    <p><input type="submit"></p>
  </form>
<?php
  else:
?>
  <h1>Добро пожаловать!</h1>
<?  endif;?>

</body>
</html>
