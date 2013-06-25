<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Rotaract Club of the Year 2012</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php include("style.php"); ?>
	</head>
	
	<body>
		<?php include("navbar.php"); ?>

		<div class="container">
			<div class="row">
				
				<div class="span3">
					<?php include("menu.php"); ?>
				</div>
				
				<div class="span7">

					<div id="myCarousel" class="carousel slide">
						<ol class="carousel-indicators">
		                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
		                  <li data-target="#myCarousel" data-slide-to="2" class=""></li>
		                  <li data-target="#myCarousel" data-slide-to="3" class=""></li>
		                </ol>
						<div class="carousel-inner">
							<div class="item active">
								<img src="img/home/safari.jpg" alt="Safari Supper" Title="Safari Supper" class="img-rounded" />
								<div class="container">
									<div class="carousel-caption">
										<h4>Social.</h4>
										<p>As a group of adventurous 18-30 year olds we spend a lot of time having fun, from pub crawls, paintballing &amp; comedy nights, to meals out &amp; theatre trips.</p>
									</div>
								</div>
							</div>
							
							<div class="item">
								<img src="img/home/oap.jpg" Title="OAP Christmas Party" class="img-rounded" alt="OAP Christmas Party"/>
								<div class="container">
									<div class="carousel-caption">
										<h4>Local Community.</h4>
										<p>We volunteer in our local area doing community work. From fun runs to hosting OAP Christmas parties, we're always keen to lend a hand &amp; get involved.</p>
									</div>
								</div>							
							</div>
        
							<div class="item">
								<img src="img/home/raceforlife.jpg" Title="Volunteering at the Race for Life" class="img-rounded" alt="Volunteering at the Race for Life"/>
								<div class="container">
									<div class="carousel-caption">
										<h4>Charity Work.</h4>
										<p>Each year we nominate a charity to focus our fund raising and attentions on, this year we're supporting <a href="http://www.openkitchen.org.uk/" target="_blank">Open Kitchen</a></p>
									</div>
								</div>
							</div>
        
							<div class="item">
								<img src="img/home/mudders.jpg" Title="Rotaracting Like We're Tough!" class="img-rounded" alt="Rotaracting Like We're Tough!"/>
								<div class="container">
									<div class="carousel-caption">
										<h4>Personal Development.</h4>
										<p>Self improvement is one of our focuses, this includes circuit training, foreign cinema &amp; organised debates.</p>
									</div>
								</div>								
							</div>
						</div>    
					</div><!-- /.carousel -->
					<div class="hero-unit">
					  <h1>Maidenhead Rotaract</h1>
					  <p>Tagline</p>
					  <p>
					    <a class="btn btn-primary btn-large">
					      Learn more
					    </a>
					  </p>
					</div>

				</div>
				
				<div class="span2">
					<?php include("tweets.php"); ?>
				</div>
				
			</div><!--/row-->

			<?php include("footer.php"); ?>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<?php include("common-scripts.php"); ?>
	</body>
</html>