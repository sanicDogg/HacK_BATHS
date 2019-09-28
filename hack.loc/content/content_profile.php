<?php
$id = $_SESSION['logged_user']->id;
$user = R::load('volunteers', $id);
if (empty($user)) {
  echo "<p>empty</p>";
}
?>

<div style="margin: 300px" class="colorlib-services colorlib-bg-white">
  <div class="container">
    <div class="row">
      <? if (empty($_SESSION['logged_user']->access_token)):?>
      <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
        <div class="services">
          <p>
            <?php
                echo $fio = $user->fio;
                $photo_link = $user->photo_link;
            ?>
          <img src="<?echo $photo_link;?>" width="200" height="200">
          </p>
        <?endif;?>
        </div>
      </div>
      <? if (!empty($_SESSION['logged_user']->access_token)):?>
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
        </div>
      </div>
      <?endif;?>
      <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
        <div class="services">
          <div class="col-md-3 text-center animate-box">
          <div class="staff-entry">
            <a href="#" class="staff-img" style="background-image: url(images/person4.jpg);"></a>
            <div class="desc">
              <h3>Dorothy Murphy</h3>
              <span>Designer</span>
              <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
              <p>
                <ul class="colorlib-social-icons">
                  <li><a href="#"><i class="icon-twitter"></i></a></li>
                  <li><a href="#"><i class="icon-facebook"></i></a></li>
                </ul>
              </p>
            </div>
          </div>
        </div>

        </div>
      </div>
    </div>
  </div>
</div>
