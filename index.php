<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Rotaract Club of the Year 2012</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php include("style.php"); ?>
		<style>
/*
    .carousel-control {
      height: 80px;
      margin-top: 0;
      font-size: 120px;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
      background-color: transparent;
      border: 0;
      z-index: 10;
    }

    .carousel {
      margin-bottom: 60px;
      margin-top: 75px;
    }

    .carousel .container {
      position: relative;
      z-index: 9;
    }



    .carousel .item {
      height: 500px;
    }    

    .carousel img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 500px;
    }

    .carousel-caption {
      background-color: rgba(0,0,0,.2);
      position: static;
      padding: 0 20px;
    }
    .carousel-caption h1,
    .carousel-caption .lead {
      margin: 0;
      line-height: 1.25;
      color: #fff;
      text-shadow: 0 1px 1px rgba(0,0,0,.4);
    }
    .carousel-caption .btn {
      margin-top: 10px;
    }*/

		</style>

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
						<div class="carousel-inner">
						
							<div class="item active">
								<!--<img src="docs/assets/img/examples/slide-01.jpg" alt="">-->
								<img src="img/social.jpg" alt="Comedy Night">
								<div class="container">
									<div class="carousel-caption">
										<h4>Social.</h4>
										<p>As a group of adventurous 18-30 year olds we spend a lot of time having fun, from pub crawls, paintballing &amp; comedy nights, to meals out &amp; theatre trips.</p>
									</div>
								</div>
							</div>
							
							<div class="item">
								<!--<img src="docs/assets/img/examples/slide-02.jpg" alt="">-->
								<img src="img/bunnies.jpg" Title="The Funny Bun Run">
								<div class="container">
									<div class="carousel-caption">
										<h4>Local Community.</h4>
										<p>We volunteer in our local area doing community work. From fun runs to hosting OAP Christmas parties, we're always keen to lend a hand &amp; get involved.</p>
									</div>
								</div>
							</div>
        
							<div class="item">
								<img src="img/snowdropwalk.jpg" Title="Snowdrop walk">
								<div class="container">
									<div class="carousel-caption">
										<h4>Charity Work.</h4>
										<p>Each year we nominate a charity to focus our fund raising and attentions on, this year we're supporting <a href="http://www.openkitchen.org.uk/" target="_blank">Open Kitchen</a></p>
									</div>
								</div>
							</div>
        
							<div class="item">
								<img src="img/runners_large.jpeg" Title="Training for Tough Mudder">
								<div class="container">
									<div class="carousel-caption">
										<h4>Personal Development.</h4>
										<p>Self improvement is one of our focuses, this includes circuit training, foreign cinema &amp; organised debates.</p>
									</div>
								</div>
							</div>
						</div>
      
						<a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
						<a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    
					</div><!-- /.carousel -->
				
					<h1>Welcome</h1>
					
					<p>Thank you for visiting our website</p>
					<p>Here you can find out all about who we are, what we get up to and how you can join us!</p>
				
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