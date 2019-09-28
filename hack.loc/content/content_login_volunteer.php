<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">

<div class="overlay"></div>
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

</section>

<form style="padding: 100px" method="POST" action="/profile.php">
	<div style="
	padding-bottom: 0;
	text-align: center;
" class="row">
	<h1>Настоятельно рекомендуем авторизоваться через VK!</h1>

	<p>
		<a class="btn btn-primary btn-lg btn-custom" href="/vk_access.php">Войти через VK</a>
	</p>
</div>
	<div>
		<p align="center" style="font-size: 27px">Заполните форму для регистрации</p>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="lname" class="form-control" name="email" placeholder="Введите e-mail">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<input type="password" id="lname" class="form-control" name="password" placeholder="Введите пароль">
		</div>
	</div>
	<label class="checkbox">
    <input type="checkbox"> Запомнить
  </label>

	<div class="form-group">
		<input type="submit" value="Войти" class="btn btn-primary">
	</div>
</form>