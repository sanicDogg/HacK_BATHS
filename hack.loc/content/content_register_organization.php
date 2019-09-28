<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">

<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Заявка на регистрацию</h2>
								<p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>Заявка</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>

</section>

<form style="padding: 50px" method="pOST" action="/add_volunteer.php">
	<div style="
	padding-bottom: 0;
	text-align: center;
" class="row">
	
	<div>
		<p align="center" style="font-size: 27px">Заполните форму для регистрации</p>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="fname" class="form-control" name="fio" placeholder="Введите ФИО">
		</div>
		<div class="col-md-6">
			<input type="text" id="lname" class="form-control" name="email" placeholder="Введите e-mail">
		</div>

	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<input type="date" id="lname" class="form-control" name="dateOfBirth" placeholder="Дата рождения">
		</div>
		<div class="col-md-6">
			<input type="tel" id="fname" class="form-control" name="phoneNum" placeholder="Номер телефона. Пример: 89992225040" pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$" maxlength="11">
		</div>
	</div>

	<div class="form-group">
		<input type="submit" value="Отправить" class="btn btn-primary">
	</div>
</form>