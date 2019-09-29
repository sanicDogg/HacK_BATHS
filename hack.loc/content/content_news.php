<?php
	$events = R::findAll('events');
?>
<section id="home" class="video-hero" style="height: 500px; background-image: url(images/cover_img_1.jpg);  background-size:cover; background-position: center center;background-attachment:fixed;" data-section="home">
		<div class="overlay"></div>
			<div class="display-t display-t2 text-center">
				<div class="display-tc display-tc2">
					<div class="container">
						<div class="col-md-12 col-md-offset-0">
							<div class="animate-box">
								<h2>События</h2>
								<p class="breadcrumbs"><span><a href="index.php">Домой</a></span> <span>События</span></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="colorlib-blog">
			<div class="container">
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
					<?endforeach;?>
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
