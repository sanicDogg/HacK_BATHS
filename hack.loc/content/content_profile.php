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
<style>
body{background:url(http://bootstraptema.ru/images/bg/bg-1.png)}

#main {
 padding: 20px;
-webkit-border-radius: 4px;
 -moz-border-radius: 4px;
 -ms-border-radius: 4px;
 -o-border-radius: 4px;
 border-radius: 4px;
 border-bottom: 4px solid #ddd;
}
#real-estates-detail #author img {
 -webkit-border-radius: 100%;
 -moz-border-radius: 100%;
 -ms-border-radius: 100%;
 -o-border-radius: 100%;
 border-radius: 100%;
 border: 5px solid #ecf0f1;
 margin-bottom: 10px;
}
#real-estates-detail .sosmed-author i.fa {
 width: 30px;
 height: 30px;
 border: 2px solid #bdc3c7;
 color: #bdc3c7;
 padding-top: 6px;
 margin-top: 10px;
}
.panel-default .panel-heading {
 background-color: #fff;
}
#real-estates-detail .slides li img {
 height: 450px;
}
</style>

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
<div class="colorlib-services colorlib-bg-white" style="padding: 0">
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

				$response = $vk->users()->get($access_token,
				array('user_ids' => array($response[0]["id"]),
						'fields' => array('city', 'about', 'activities', 'sex', 'bdate', 'contacts',
																'exports', 'online', 'photo_200', 'relation', 'status')));
			?>


      <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
			<div class="container">
			<div id="main">

			 <div class="row" id="real-estates-detail">
			 <div class="col-lg-4 col-md-4 col-xs-12">
			 <div class="panel panel-default">
			 <div class="panel-heading">
			 <header class="panel-title">
			 <div class="text-center">
			 <strong>Волонтер</strong>
			 </div>
			 </header>
			 </div>
			 <div class="panel-body">
			 <div class="text-center" id="author">
			 <img src="<?echo $response[0]['photo_200']?>">
			 <h3><?echo $response[0]["first_name"]." ".$response[0]["last_name"];?></h3>
			 <small class="label label-warning">Российская Федерация</small>
			 <p><?echo $response[0]["status"];?></p>
			 </div>
			 </div>
			 </div>
			 </div>
			 <div class="col-lg-8 col-md-8 col-xs-12">
			 <div class="panel">
			 <div class="panel-body">
			 <ul id="myTab" class="nav nav-pills">
			 <li class="active"><a href="#detail" data-toggle="tab">О пользователе</a></li>
			 <li class=""><a href="#contact" data-toggle="tab">Отправить сообщение</a></li>
			 </ul>
			 <div id="myTabContent" class="tab-content">
			<hr>
			 <div class="tab-pane fade active in" id="detail">
			 <h4>История профиля</h4>
			 <table class="table table-th-block">
			 <tbody>
			 <tr><td class="active">Зарегистрирован:</td><td><?echo $user->date_of_registration?></td></tr>
			 <tr><td class="active">Последняя активность:</td><td>12-06-2016 / 09:11</td></tr>
			 <tr><td class="active">Страна:</td><td>Россия</td></tr>
			 <tr><td class="active">Город:</td><td><?echo $response[0]['city']['title']?></td></tr>
			 <tr><td class="active">Пол:</td><td>
				 	<?if ($response[0]['sex'] == 1) echo "женский";
						if ($response[0]['sex'] == 2) echo "мужской";
						if ($response[0]['sex'] == 1) echo "не указан";?>
			 </td></tr>
			 <tr><td class="active">Дата рождения:</td><td><?echo $response[0]['bdate']?></td></tr>
			 <tr><td class="active">Семейное положение:</td><td>
				 <?if ($response[0]['relation'] == 1) echo "не женат/не замужем";
					 if ($response[0]['relation'] == 2) echo "есть друг/есть подруга";
					 if ($response[0]['relation'] == 3) echo "помолвлен/помолвлена";
					 if ($response[0]['relation'] == 4) echo "женат/замужем";
					 if ($response[0]['relation'] == 5) echo "всё сложно";
					 if ($response[0]['relation'] == 6) echo "в активном поиске";
					 if ($response[0]['relation'] == 7) echo "влюблён/влюблена";
					 if ($response[0]['relation'] == 8) echo "в гражданском браке";
					 if ($response[0]['relation'] == 0) echo "не указано";
					 ?>
			 </td></tr>
			 <tr><td class="active">Доброкоины:</td><td>4/5</td></tr>
			</tbody>
			 </table>
			 </div>
			 <div class="tab-pane fade" id="contact">
			 <p></p>
			 <form role="form">
			 <div class="form-group">
			 <label>Ваше имя</label>
			 <input type="text" class="form-control rounded" placeholder="Укажите Ваше Имя">
			 </div>
			 <div class="form-group">
			 <label>Ваш телефон</label>
			 <input type="text" class="form-control rounded" placeholder="(+7)(095)123456">
			 </div>
			 <div class="form-group">
			 <label>E-mail адрес</label>
			 <input type="email" class="form-control rounded" placeholder="Ваш Е-майл">
			 </div>
			 <div class="form-group">
			 <div class="checkbox">
			 <label>
			 <input type="checkbox"> Согласен с условиями
			 </label>
			 </div>
			 </div>
			 <div class="form-group">
			 <label>Текст Вашего сообщения</label>
			 <textarea class="form-control rounded" style="height: 100px;"></textarea>
			 <p class="help-block">Текст сообщения будет отправлен пользователю</p>
			 </div>
			 <div class="form-group">
			 <button type="submit" class="btn btn-success" data-original-title="" title="">Отправить</button>
			 </div>
			 </form>
			 </div>
			 </div>
			 </div>
			 </div>
			 </div>
			 </div>
			</div>

			</div>
</div>
</div>
</div>
</div>
			<?endif;?>

<?else:?>

<div style="" class="colorlib-services colorlib-bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center animate-box fadeInUp animated-fast">
        <div class="services">
          <div class="animate-box">
                <h2>Вы не авторизованы!!!</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?endif;?>
