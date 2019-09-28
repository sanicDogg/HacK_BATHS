<?php
$id = 7;
$user = R::load('volunteers', $id);
if (!empty($user)) {
  echo "<p>empty</p>";
}
?>

<div style="margin: 100px" class="colorlib-services colorlib-bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
        <div class="services">
          <p>
            <?php
                $access_token = $user->access_token;
                $vk = new \VK\Client\VKApiClient();
                $response = $vk->users()->get($access_token, array());
            ?>
          </p>
        </div>
      </div>
      <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
        <div class="services">
            <h2>Информация о текущем пользователе:</h2>
            <p>Имя:</p>
            <p><?echo $response[0]["first_name"];?></p>
            <p>Фамилия:</p>
            <p><?echo $response[0]["last_name"];?></p>
            <? $response = $vk->users()->get($access_token,
              array('user_ids' => array($response[0]["id"]),
                'fields' => array('city', 'about', 'activities')));
              print_r($response);
            ?>
            <p>Фамилия:</p>
            <p><?echo $response[0]["last_name"];?></p>
        </div>
      </div>
      <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
        <div class="services">

        </div>
      </div>
    </div>
  </div>
</div>
