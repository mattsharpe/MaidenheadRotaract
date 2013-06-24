<!DOCTYPE html>
<html lang="en" ng-app="ngSanitize">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - What is Rotaract</title>
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
					<h1>What is Rotaract</h1>

					<h3 class="muted">In One Sentence</h3>
					<p>Maidenhead Rotaract is a group of young people who meet up regularly to <a href="social.php">socialise</a>, volunteer to help our <a href="community.php">community</a> and to raise a bit of money for <a href="social.php">charity</a>, all whilst make new friends and have fun!</p>
			
					<h3 class="muted">The Full Version</h3>
					<p>Rotaract is an international service organisation for men and women aged 18 - 30. The purpose of Rotaract is to provide an opportunity for young people to further their personal development, to address the needs of their communities and to promote better relations between all people through a framework of friendship and service.</p>
					<p>Rotaract is a non-political and non-secretarian organisation.</p>
					<p>Rotaract provides an opportunity to meet new people, try new things, and donate a little bit of your time to help others.</p>
			
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