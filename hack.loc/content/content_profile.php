<?php
if (!empty($_SESSION['logged_user'])) {
$id = $_SESSION['logged_user']->id;
$user = R::load('volunteers', $id);
}
?>

<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
                    <div class="col-md-6 col-md-offset-0">
          <div class="animate-box">
            <p><a href="vibor_volunteer.php" class="btn btn-primary btn-lg btn-custom">Я волонтер</a></p>
          </div>
        </div>
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Мой профиль</h2>
								<p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>Профиль</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
</section>

<?
//Проверка на авторизованность пользователя
if (!empty($_SESSION['logged_user'])):
?>
<div style="margin: 300px" class="colorlib-services colorlib-bg-white">
  <div class="container">
		<div class="col-md-12 col-md-offset-0">
                   <div class="animate-box">
                       <p><a href="vibor_volunteer.php" class="btn btn-primary btn-lg btn-custom">Выйти из профиля</a></p>
                   </div>
    </div>
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

<?else:?>

<div style="" class="colorlib-services colorlib-bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
        <div class="services">
            <p>Вы не авторизованы!!!</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?endif;?>
