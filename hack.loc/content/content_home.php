<?php
	$events = R::findAll('events');
	$events = array_reverse($events);
?>

<section id="home" class="video-hero" style="height: 700px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
<div class="overlay"></div>
  <a class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=HBXfOInHBlo',containment:'#home', showControls:false, autoPlay:true, loop:true, mute:true, startAt:0, opacity:1, quality:'default'}"></a>
  <div class="display-t text-center">
    <div class="display-tc">
      <div class="container">
        <div class="row">
        <div class="col-md-6 col-md-offset-0">
          <div class="animate-box">
            <p><a href="vibor_volunteer.php" class="btn btn-primary btn-lg btn-custom">Я волонтер</a></p>
          </div>
        </div>
        <div class="col-md-6 col-md-offset-0">
          <div class="animate-box">
            <p><a href="vibor_organization.php" class="btn btn-primary btn-lg btn-custom">Я представитель организации</a></p>
          </div>
        </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="colorlib-services colorlib-bg-white">
  <div class="container">
    <div class="row">
      <div class="col-md-4 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-browser"></i>
          </span>
          <div class="desc">
            <h3>Создайте свою карточку волонтера</h3>
            <p>Присоединитесь к огромному сообществу волонтеров и сделайте мир добрее.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-download"></i>
          </span>
          <div class="desc">
            <h3>Мы обеспечим вас работой</h3>
            <p>Каждый волонтер будет иметь возможность принести в мероприятие частичку себя.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 text-center animate-box">
        <div class="services">
          <span class="icon">
            <i class="icon-layers"></i>
          </span>
          <div class="desc">
            <h3>Вы сами определяете будущее</h3>
            <p>Сотрудничая с нами, вы имеете возможность стать лучшим волонтером года по версии BURNING_BUTHS.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



<div id="colorlib-counter" class="colorlib-counters" style="background-image: url(images/cover_img_1.jpg);" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-4 col-sm-4 text-center animate-box">
          <div class="counter-entry">
            <span class="icon"><i class="flaticon-ribbon"></i></span>
            <div class="desc">
              <span class="colorlib-counter js-counter" data-from="0" data-to="2" data-speed="5000" data-refresh-interval="50"></span>
              <span class="colorlib-counter-label">Волонтеры работающие с нами</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 text-center animate-box">
          <div class="counter-entry">
            <span class="icon"><i class="flaticon-church"></i></span>
            <div class="desc">
              <span class="colorlib-counter js-counter" data-from="0" data-to="1" data-speed="5000" data-refresh-interval="50"></span>
              <span class="colorlib-counter-label">Организации доверяющие нам</span>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-4 text-center animate-box">
          <div class="counter-entry">
            <span class="icon"><i class="flaticon-dove"></i></span>
            <div class="desc">
              <span class="colorlib-counter js-counter" data-from="0" data-to="48" data-speed="5000" data-refresh-interval="50"></span>
              <span class="colorlib-counter-label">Сколько часов потрачено на разработку</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="colorlib-blog">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center colorlib-heading animate-box">
        <h2>Последние события</h2>
        <p>Каждые 30 минут обновляются данные о событиях. Для вас все самое свежее.</p>
      </div>
    </div>
    <div class="row">
      <?
      foreach($events as $item):
      ?>
      <div class="col-md-4 animate-box">
        <article>
          <h2><a href="#"><?echo $item["name"];?></a></h2>
          <p class="admin"><span><?echo $item["date"]?></span></p>
          <p><?echo $item["description"]?></p>
          <p class="author-wrap"> <a href="#" class="author">Политехнический музей, создано <?echo $item["date_of_publicating"]?></a></p>
        </article>
      </div>
      <?
        $i++;
        if($i==3)break;
        endforeach;
      ?>
    </div>
  </div>
</div>
