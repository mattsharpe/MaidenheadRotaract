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

					<h4 class="muted">The Short Version</h4>
					<p>We are a group of young people who meet up regularly to <a href="social.php">socialise</a>, volunteer to help our <a href="community.php">community</a> and to raise a bit of money for <a href="social.php">charity</a>, all whilst make new friends and have fun!</p>
					<p>Our club provides an opportunity for you to meet new people, try new things, and donate a little bit of your time to help others in your area.</p>
			
					<h4 class="muted">About Rotaract</h4>
					<p>Rotaract is an international service and leadership organisation for men and women aged 18 - 30.</p>
					<p>The purpose of the organisation is to provide an opportunity for young people to:</p>
					<ul>
						<li>Further their personal development,</li>
						<li>Address the needs of their communities, and</li>
						<li>Promote better relations between all people through a framework of friendship and service.</li>
					</ul>
					<p>Rotaract is a non-political and non-secretarian organisation and welcomes members from all backgrounds regarless of race, gender or religious beliefs.</p>
			
					<h4 class="muted">Rotary in Action</h4>
					<p>The first Rotaract club was founded in 1968 as a Rotary International youth program.</p>
					<p>Today there are more than 9,000 Rotaract clubs around the globe with more than 200,000 members!<p>

					<h4 class="muted">Maidenhead Rotaract</h4>
					<p>The Rotaract Club of Maidenhead was founded on <a href="#charterCertificate" data-toggle="modal">3rd December 1979</a> with <a href="#originalMembers" data-toggle="modal">29 original members</a>.</p>
					<p>Today we are still going strong with around 35 members and won the RGBI Club of the Year Award in both 2009 and <a href="#clubAwards" data-toggle="modal">2012</a>.</p>
				</div>
				
				<div class="span2">
					<?php include("tweets.php"); ?>
				</div>
			</div><!--/row-->

			<?php include("footer.php"); ?>

		</div><!--/.fluid-container-->
		
		<!-- Modal -->
		<div id="charterCertificate" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">Certificate of Organisation</h3>
			</div>
			<div class="modal-body">
				<p><img src="img/about/charter_certificate.jpg" class="img-rounded"></p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>
		
		<!-- Modal -->
		<div id="originalMembers" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">Organisation List</h3>
			</div>
			<div class="modal-body">
				<p><img src="img/about/original_members_1.jpg" class="img-rounded"></p>
				<p><img src="img/about/original_members_2.jpg" class="img-rounded"></p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>

		<!-- Modal -->
		<div id="clubAwards" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 id="myModalLabel">Club of the Year 2012</h3>
			</div>
			<div class="modal-body">
				<p><img src="img/about/club_of_the_year.jpg" class="img-rounded"></p>
			</div>
			<div class="modal-footer">
				<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
			</div>
		</div>
		
		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<?php include("common-scripts.php"); ?>
		<?php include("angular-scripts.php"); ?>
	</body>
</html>