<?php
if (!empty($_SESSION['logged_user'])) {
	$id = $_SESSION['logged_user']->id;
	$user = R::load('volunteers', $id);
}

if ($_GET["logout"] == 1) {
	unset($_SESSION['logged_user']);
	session_unset();
}
?>

<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">

						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Мой профиль</h2>
								<p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>Профиль</span></p>
							</div>
						<?if (!empty($_SESSION['logged_user'])):?>
            <div class="col-md-12 col-md-offset-0">
          		<div class="animate-box">
            		<p><a href="profile.php?logout=1" class="btn btn-primary btn-lg btn-custom">Выйти из профиля</a></p>
          		</div>
        		</div>
						<?endif;?>
						</div>
					</div>
				</div>
			</div>
</section>

<?
//Проверка на авторизованность пользователя
if (!empty($_SESSION['logged_user'])):
?>
<div class="colorlib-services colorlib-bg-white">
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
        </div>
      </div>
			<?endif;?>
      <? if (!empty($_SESSION['logged_user']->access_token)):
				$access_token = $user->access_token;
				$vk = new \VK\Client\VKApiClient();
				$response = $vk->users()->get($access_token, array());
			?>
      <div class="col-md-12 text-center animate-box fadeInUp animated-fast">
        <div class="services">
					<h2>Информация о текущем пользователе:</h2>
					<p>Имя:</p>
					<p><?echo $response[0]["first_name"];?></p>
					<p>Фамилия:</p>
					<p><?echo $response[0]["last_name"];?></p>
					<? $response = $vk->users()->get($access_token,
						array('user_ids' => array($response[0]["id"]),
							'fields' => array('city', 'about', 'activities', 'bdate', 'contacts',
																	'exports', 'online', 'photo_200')));
						//print_r($response);
					?>

					<div class="col-md-4">
						<img src="<?echo $response[0]['photo_200']?>">
					</div>

					<div class="col-md-4">
						<p>Город: <?echo $response[0]['city']['title']?></p>
					</div>

					<div class="col-md-4">
						<p>Дата рождения: <?echo $response[0]['bdate']?></p>
					</div>

					<div class="col-md-4">
						<p>Деятельность: <?echo $response[0]['activities']?></p>
					</div>

					<div class="col-md-4">
						<p>Ссылки на соц сети: <?echo $response[0]['exports']?></p>
					</div>

					<div class="col-md-4">
						<p>Сейчас в сети:
							<?if ($response[0]['online'] == 0) echo "нет";
								else echo "да";
							?>
						</p>
					</div>
        </div>
      </div>
      <?endif;?>
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
