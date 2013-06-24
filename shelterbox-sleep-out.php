<!DOCTYPE html>
<html lang="en" ng-app="ngSanitize">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - ShelterBox Sleep Out</title>
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
					<h1>ShelterBox Sleep Out</h1>
			
					<p><a href="http://www.shelterbox.org/" target="blank">ShelterBox</a> are a charity who provide emergency shelter and lifesaving supplies for families around the world who are affected by disasters, at the time when they need it the most.</p>

					<p>Click the poster below for details of the 2013 event:<p>
			
					<div class="row">
						<div class="span5 offset1">
							<a href="posters/2013_shelterbox.pdf"><img src="img/shelterbox/2013_shelterbox.jpg" class="img-rounded"></a>
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