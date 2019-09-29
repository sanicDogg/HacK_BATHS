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
                <h2>Волонтеры</h2>
                <p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>Карточки волонтеров</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="colorlib-blog">
      <div class="container">
        <div class="row">
          <div class="col-md-4 text-center animate-box">
            <div class="staff-entry">
              <a href="https://vk.com/idlani_ka_nani" class="staff-img" style="background-image: url(images/pxkKrN3vsCQ.jpg);"></a>
                <div class="desc">
                 <h3>Виталий Гайнуллин</h3>
                <span>IT евангелист, дизайнер</span>
                <p>Парень, хорошо работающий языком и это не то, о чем вы возможно подумали.</p>
                </div>
            </div>
          </div>
                  <div class="col-md-4 text-center animate-box">
          <div class="staff-entry">
            <a href="#" class="staff-img" style="background-image: url(images/2QC-qIJeYH4.jpg);"></a>
            <div class="desc">
              <h3>Александр Молитвин</h3>
              <span>Камитан, программист</span>
              <p>Небольшой мальчуган-гений. Написал сайт стоящий 20к в одиночку и не попросил денег.</p>
            </div>
           </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-12 text-center">
            <ul class="pagination">
              <li class="disabled"><a href="#">&laquo;</a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">&raquo;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

