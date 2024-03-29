<?
$events = R::findAll('events');
$events = array_reverse($events);
?>
<footer id="colorlib-footer">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-3 colorlib-widget">
						<h4>О The best volunteer maker</h4>
						<p>Управление волонтерским сообществом в одном месте.</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col-md-3 colorlib-widget">
						<h4>Информация</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="index.php"><i class="icon-check"></i> Домой</a></li>
								<li><a href="about.php"><i class="icon-check"></i> О нас</a></li>
								<li><a href="news.php"><i class="icon-check"></i> Новости</a></li>
							</ul>
						</p>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Свежее</h4>
						<?
						$i = 0;
						foreach($events as $item):
						?>
						<div class="f-blog">
							<a href="news.php" class="blog-img" style="background-image: url(<?echo $item->img_link?>);">
							</a>
							<div class="desc">
								<h2><a href="news.php"><?echo $item->name?></a></h2>
								<p class="admin"><span><?echo $item->date_of_publicating?></span></p>
							</div>
						</div>
						<?
							$i++;
							if($i==3)break;
							endforeach;
						?>
					</div>

					<div class="col-md-3 colorlib-widget">
						<h4>Контакты</h4>
						<ul class="colorlib-footer-links">
							<li>Россия, Санкт-Петербург, <br> Исакиевская пл. 1</li>
							<li><a href="tel://+ 79600588599"><i class="icon-phone"></i> + 79600588599</a></li>
							<li><a href="mailto:the_best_volunteer_maker@mail.ru"><i class="icon-envelope"></i> the_best_volunteer_maker@mail.ru</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- YTPlayer -->
	<script src="js/jquery.mb.YTPlayer.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
