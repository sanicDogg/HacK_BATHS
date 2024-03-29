<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">

<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>Регистрация</h2>
								<p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>Регистрация</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>

</section>

<form style="padding: 100px" method="POST" action="/add_volunteer.php">
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
	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="" class="form-control"  name="vkLink" placeholder="Ссылка на личную страницу ВК">
		</div>
		<div class="col-md-6">
			<input type="text" id="" class="form-control" name="placeOfStudy" placeholder="Место учебы/работы">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<input type="text" id="" class="form-control" name="specialty" placeholder="Специальность по диплому">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-12">
			<input type="text" id="" class="form-control" name="languages" placeholder="Какими иностранными языками Вы владеете (укажите уровень владения)?">
		</div>
	</div>

    <div class="row form-group">
		<div class="col-md-6">
			<h3>Какие проекты Политеха Вам наиболее интересны?</h3>
		<label class="checkbox">
  <input type="checkbox" value="">
   Экспозиция "Россия делает сама"
		</label>

		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>
   Временные выставки
		</label>
		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
  Научные бои
		</label>
		<label class="checkbox">
  <input type="checkbox" value="">
   Лекторий
		</label>

		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="" value="option3" checked>
   Спецпроект Polytech.Science.Art
		</label>
		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="" value="option4">
  Научные лаборатории
		</label>
		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="" value="option5">
  Университет детей
		</label>
		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="" value="option6">
  "Открытые коллекции"
		</label>
		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="" value="option7">
  Политех360
		</label>
		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="" value="option8">
  Фестиваль науки и любознательности "Политех"
		</label>
		<label class="checkbox">
  <input type="checkbox" name="optionsRadios" id="" value="option9">
  Все проекты
		</label>
		</div>
    </div>

	<div class="row form-group">
		<div class="col-md-12">
			<input type="text" id="" class="form-control" name="expKids" placeholder="Есть ли у вас опыт работы с детьми? Если есть, то опишите его">
		</div>
	</div>



	<div class="row form-group">
		<div class="col-md-6">
			<textarea rows="4" type="text" id="" class="form-control" name="addSkills" placeholder="Какие дополнительные навыки могут быть полезны в сотрудничестве с Политехом? (возможно, вы прекрасно фотографируете или умеете красиво и профессионально говорить со сцены, напишите об этом!"></textarea>
		</div>


		<div class="col-md-6">
			<textarea rows="4" type="text" id="" class="form-control" name="expections" placeholder="Какие ожидания у вас от волонтерства в проектах Политехнического музея? Что волонтерство может дать лично вам?"></textarea>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<textarea rows="4" type="text" id="" class="form-control" name="allergy" placeholder="Есть ли у Вас медицинские противопоказания, аллергия, в т.ч. на животных?" ></textarea>
		</div>

		<div class="col-md-6">
			<textarea rows="4" type="text" id="" class="form-control" name="exp" placeholder="Есть ли у вас опыт волонтерства? Если есть, то опишите его. Если нет - это не страшно))"></textarea>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-6">
			<h3>Есть ли у Вас предпочтения в еде?</h3>
			<label class="radio">
  				<input type="radio" name="optionsRadios" id="" value="option1" checked>
  					я ем все
			</label>
			<label class="radio">
		  		<input type="radio" name="optionsRadios" id="" value="option2">
		  			вегетарианец
			</label>
			<label class="radio">
		  		<input type="radio" name="optionsRadios" id="" value="option3" checked>
		   			пескетарианец
			</label>
			<label class="radio">
		  		<input type="radio" name="optionsRadios" id="" value="option4">
		    	<div class="col-md-6">
		  			<textarea rows="4" type="text" id="" class="form-control" name="optionsRadios" placeholder="Другое"> </textarea>
				</div>
			</label>
		</div>
	</div>

    <div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="" class="form-control" name="photoLink" placeholder="Ссылка на Ваше фото">
		</div>
    </div>

<div class="row form-group">
		<div class="col-md-6">
			<input type="password" id="" class="form-control" name="password" placeholder="Пароль">
		</div>
    </div>
<div class="row form-group">
		<div class="col-md-6">
			<input type="password" id="" class="form-control" name="password2" placeholder="Повторите пароль">
		</div>
    </div>
	<div class="form-group">
		<input type="submit" value="Отправить" class="btn btn-primary">
	</div>
</form>
