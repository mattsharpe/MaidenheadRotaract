<!DOCTYPE html>
<html lang="en" ng-app="ngSanitize">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Maidenhead's Got Talent</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
					<h1>Maidenhead's Got Talent</h1>
			
					<p>Maidenhead's Got Talent is a community event organised collaboratively by Rotary in Maidenhead.</p>
					<p>The events sees groups of children from local schools perfoming on stage and showing off their talents to the audience.</p>
					<p>See the poster below for more details, click to expand:<p>
			
					<div class="row">
						<div class="span5 offset1">
							<a href="posters/2013_mgt.pdf"><img src="img/talent/2013_mgt.jpg" class="img-rounded"></a>
						</div>
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
		<?php include("angular-scripts.php"); ?>
	</body>
</html>