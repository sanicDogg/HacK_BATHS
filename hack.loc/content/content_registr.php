<form style="padding: 150px" action="/add_volunteer.php">
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
		<div class="col-md-12">
			<input type="text" id="" class="form-control" name="exp" placeholder="Есть ли у вас опыт волонтерства? Если есть, то опишите его. Если нет - это не страшно))">
		</div>
	</div>


	<div class="row form-group">
		<div class="col-md-12">
			<p>Создать блок с халочками(светлана)</p>
		</div>
	</div>


	<div class="row form-group">
		<div class="col-md-12">
			<input type="text" id="" class="form-control" name="languages" name="expKids" placeholder="Есть ли у вас опыт работы с детьми? Если есть, то опишите его">
		</div>
	</div>
	<div class="row form-group">
		<div class="col-md-6">
			<input type="text" id="" class="form-control" name="specialty" placeholder="Специальность по диплому">
		</div>
		<div class="col-md-6">
			<input type="text" id="" class="form-control" name="languages" placeholder="Какими иностранными языками Вы владеете (укажите уровень владения)?">
		</div>
	</div>
	
	<div class="form-group">
		<input type="submit" value="Отправить" class="btn btn-primary">
	</div>
</form>