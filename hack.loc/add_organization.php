 <?
  require "db_connect.php";
  $data = $_POST;
  $organization = R::dispense('organizations');

  $organization->name = $data["name"];
  $organization->contact_phone = $data["contact_phone"];
  $organization->email = $data["email"];
  $organization->isVolunteer = 0;

  R::store($organization);
?>
