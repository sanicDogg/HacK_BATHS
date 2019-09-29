<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">

<div class="overlay"></div>
	<div class="display-t display-t2 text-center">
		<div class="display-tc display-tc2">
			<div class="container">
				<div class="col-md-12 col-md-offset-0">
					<div class="animate-box">
						<h2>Создание события</h2>
						<p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>Создание события</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>

</section>

<div >
<form style="padding: 100px"  method="POST" action="/add_event.php">
	<div>
		<p align="center" style="font-size: 27px">Заполните поля</p>
	</div>
<div>
	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="" class="form-control" name="name" placeholder="Введите название события">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-12">
			<textarea rows="4" type="text" id="" class="form-control" name="description" placeholder="Описание"></textarea>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="" class="form-control" name="img_link" placeholder="Вставьте ссылку на картинку карточки">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<h3>Дата проведения:</h3>
			<input type="date" id="" class="form-control" name="date" placeholder="Дата проведения" maxlength="10">
		</div>
	</div>

	<div class="form-group">
		<input type="submit" value="Создать" class="btn btn-primary">
	</div>
</div>
</div>
</form>
