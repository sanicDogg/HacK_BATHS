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
        <?endif;?>
        </div>
      </div>
    </div>
  </div>
</div>

