<?php
	$data = $_POST;

	if (isset($data['log_in'])) {
		$organization = R::findOne('organizations', 'login = ?', array($data["login"]));
		if ($organization) {
			if ($data['password'] == $organization->password) {
				$_SESSION['logged_user'] = $organization;
			} else  {
				echo "Неверный пароль";
			}
		} else {
			echo "Зарегистрированной организация с таким логином не существует";
		}
	}

?>

<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">

<? if (empty($_SESSION['logged_user'])): ?>
<div class="overlay">
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Войти</h2>
								<p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>Вход</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
</div>
</section>

<form style="padding: 100px" method="POST" action="/login_organization.php">
	<div>
		<p align="center" style="font-size: 27px">Заполните форму для регистрации</p>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="lname" class="form-control" name="login" placeholder="Введите логин">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<input type="password" id="lname" class="form-control" name="password" placeholder="Введите пароль">
		</div>
	</div>

	<div class="form-group">
		<input type="submit" name="log_in" value="Войти" class="btn btn-primary">
	</div>
</form>

<? else: ?>
	<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">

	<div class="overlay">
				<div class="display-t display-t2 text-center">
					<div class="display-tc display-tc2">
						<div class="container">
							<div class="col-md-12 col-md-offset-0">
								<div class="animate-box">
									<h1>Вход выполнен.</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>
	</section>
<?endif;?>
