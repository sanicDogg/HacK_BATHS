

<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">

<div class="overlay"></div>
	<div class="display-t display-t2 text-center">
		<div class="display-tc display-tc2">
			<div class="container">
				<div class="col-md-12 col-md-offset-0">
					<div class="animate-box">
						<h2>Регистрация организации</h2>
						<p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>Регистрация</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<div >
<form style="padding: 100px"  method="POST" action="/add_organization.php">
	<div>
		<p align="center" style="font-size: 27px">Заполните форму для регистрации</p>
	</div>
<div align="center">
	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="" class="form-control" name="name" placeholder="Введите название организации">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="" class="form-control" name="email" placeholder="Введите e-mail">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<input type="tel" id="" class="form-control" name="contact_phone" placeholder="Номер телефона. Пример: 89992225040"  maxlength="11">
		</div>
	</div>


	<div class="form-group">
		<input type="submit" value="Отправить" class="btn btn-primary">
	</div>
</div>
</div>
</form>
