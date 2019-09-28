 <?
  require "db_connect.php";
  $data = $_POST;
  $user = R::dispense('organizations');

  $user->name = $data["name"];
  $user->contact_phone = $data["contact_phone"];
  $user->email = $data["email"];
  $user->isVolunteer = 0;

  R::store($user);
?>
