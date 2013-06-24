<!DOCTYPE html>
<html lang="en" ng-app>
	<head>
		<meta charset="utf-8">
		<title>Tough Mudder - OAP Christmas Party</title>
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
         
					<h2>OAP Christmas Party</h2>

					<p>Our OAP Christmas Party is the <strong>biggest</strong> and <strong>best</strong> community service event that we organise each year and it is a thoroughly enjoyable event to be a part of.</p>
					<p>This video shows what we got up to at last year. There's no reason why you cannot have fun whilst volunteering!<p>

					<iframe width="100%" height="300" src="http://www.youtube.com/embed/Iep-tkYX8kQ?autoplay=1" frameborder="0" allowfullscreen></iframe>
		
					<br><p>Every December we arrange for OAPs from our town to join us for an afternoon to get into the Christmas spirit with a big party!</p>
					<p>We decorate the venue with plenty of tinsel, paper chains, photos of previous parties, wicker snowmen and of course a light-up Christmas tree!</p>
					<p>We provide a spread of sandwiches, biscuits and cakes which are all washed down with copious amounts of tea.</p>
					<p>We then spend the afternoon mixing with our guests and entertaining them with bingo, a raffle and carol singing</p>
					<p>We even arrange for a special visit from Santa himself who personally hands a Christmas present to everyone, as long as they've been good!</p>

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
		<?php include("angular-scripts.php"); ?>
	</body>
</html>