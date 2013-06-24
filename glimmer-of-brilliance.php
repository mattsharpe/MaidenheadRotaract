<!DOCTYPE html>
<html lang="en" ng-app="ngSanitize">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Glimmer of Brilliance</title>
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
					<h1>Glimmer of Brilliance</h1>

					<p>Welcome to our G.O.B. Wall!</p>
					<p>This little corner of our site is where we give a small shout out to those who deserve one.</p>
					<p>Anyone or anything involved with our club who has done something noteworthy, interesting or even particularly silly in the last few weeks will get a mention here:</p>
					
					<div class="well well-small">
						<h4>July 2013</h4>
						<h3><span class="muted">Matt Sharpe</span></h3>
						<h5><em>Rewriting our website</em></h5>
							
						<div class="row-fluid">
							<div class="span6">
								<p><img src="img/gob/matt_mudder.jpg" class="img-rounded"></p>
							</div>
						</div>
						
						<p>Our previous website was designed more than 10 years ago and although the content was kept up to date, the appearance of the site was really beginning to show its age.</p>
						<p><em><a href="#oldHomePage" data-toggle="modal">Orange on blue</a>, really?</em><p>
						<p>It was time for a serious overhaul and we got one thanks to Matt who is responsible for the nice shiny new site you are looking at now.</p>
						<p>Those who have designed a website will know that this is no small undertaking and whilst Matt had a bit of help with some of the text, the wizardry behind the scenes is all his.</p>
						<p>Check out our <a href="events.php">Upcoming Events</a> page and you will see details of our events for the next week from Meetup magically displayed in nice boxes, 
						resize your browser window and you will see the content neatly resizing to fill the available space, take a look to the right and you will see out latest tweets automatically appearing...<p>
						<p>Matt has put together all of this in his free time so, we will forgive him having a pointless "e" on the end of his name for the time being and say great work on the site and thanks!</p>
					</div>
					
					<div class="well well-small">
						<h4>June 2013</h4>
						<h3><span class="muted">Becky Marchant</span></h3>
						<h5><em>Suggesting a G.O.B. Wall</em></h5>

						<div class="row-fluid">
							<div class="span6">
								<p><img src="img/gob/becky_tiger.jpg" class="img-rounded"></p>
							</div>
						</div>
					
						<p>The very fist mention on our new wall is going to go to the person who suggested creating one in the first place!</p>
						<p>We had been looking for ideas on how to get existing members to interact with our website more and how to provide recognition to people who had done something special.</p>
						<p>Thanks to Becky's idea, which we have shamelessly stolen from her workplace, we now have this cool new page where we can post details about anything that comes to mind.</p>
						<p>So thank you Tiger, well done for being our inaugural G.O.B and please don't eat us!</p>
					</div>
					
				</div>
								
				<div class="span2">
					<?php include("tweets.php"); ?>
				</div>
			</div><!--/row-->

			<!-- Modal -->
			<div id="oldHomePage" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					<h3 id="myModalLabel">Our Old Home Page</h3>
				</div>
				<div class="modal-body">
					<p><img src="img/gob/oldhomepage.jpg" class="img-rounded"></p>
				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
				</div>
			</div>
			
			<?php include("footer.php"); ?>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<?php include("common-scripts.php"); ?>
		<?php include("angular-scripts.php"); ?>
	</body>
</html>