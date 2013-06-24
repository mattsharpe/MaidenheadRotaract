<!DOCTYPE html>
<html lang="en" ng-app="ngSanitize">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Our Targets 2013-14</title>
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
					<h1>Our Targets</h1>

					<p>We have set ourselves 5 targets that we would like to achieve as a club for the coming 2013-14 Rotaract year.</p>
					<p>Click on each of our targets below to find out more about our plans:</p>
            
					<div class="accordion" id="clubTargets">
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#clubTargets" href="#collapseOne"><h3>1. Raise &pound;2,000 for charity</h3></a></div>
							<div id="collapseOne" class="accordion-body collapse">
								<div class="accordion-inner">
									<p>We will be fundraising throughout the year and hope to be able to make a <strong>big</strong> donation to our nominated Charity of the Year next summer.</p>
									<p>To raise money we will be running games and stalls at various fairs and events, we will be taking part in sponsored sporting fun-runs and swimarathons and we will also be hosting our very own <a href="cheese.php">Cheese and Wine Quiz</a> next Spring.</p>
								</div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#clubTargets" href="#collapseTwo"><h3>2. 1,000 hours of volunteering</h3></a></div>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="accordion-inner">
									<p>We will be volunteering our time for local good causes at <strong>loads</strong> of different events over the course of the year.</p>
									<p>From hands on conservation work to helping to feed the homeless, from marshalling fun-runs to organising our own <a href="oap-christmas-party.php">OAP Christmas Party</a>, we are always happy to donate our time to those who need it.</p>
									<p>We will be keeping track of the hours that we have donated <a href="volunteer-hours.php">here</a>.</p>
								</div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#clubTargets" href="#collapseThree"><h3>3. Focused community project</h3></a></div>
							<div id="collapseThree" class="accordion-body collapse">
								<div class="accordion-inner">
									<p>This year we are also going to be taking on a focused community project to support local charity <a href="http://www.braywickheath.co.uk/" target="_blank">Braywick Heath Nurseries</a>.</p>
									<p>We will be volunteering one Saturday morning each month to help to tidy up and maintain a plot of land that Braywick own but do not have the resourses to maintain.</p>
									<p>We will be documenting our project on a blog <a href="braywick-heath-project.php">here</a>.</p>
								</div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#clubTargets" href="#collapseFour"><h3>4. Get up to 40 members</h3></a></div>
							<div id="collapseFour" class="accordion-body collapse">
								<div class="accordion-inner">
									<p>We have a great group of young people in our club but new members are the lifeblood of any organisation as they bring with them fresh ideas and enthusiasm.</p>
									<p>We are therefore hoping to continue to attract new members and to push on to the 40 member mark by the end of next year.</p>
								</div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#clubTargets" href="#collapseFive"><h3>5. Develop trilateral ties</h3></a></div>
							<div id="collapseFive" class="accordion-body collapse">
								<div class="accordion-inner">
									<p>Rotaract is an international organisation with more than 9,000 clubs over the world and we are twinned with the
									<a href="http://www.tivolirotaract.net/" target="_blank">Rotaract Club of Tivoli</a> and, as of May 2013, with the 
									<a href="http://www.rotarysaintcloud.fr/379_p_21745/rotaract-saint-cloud.html" target="blank">Rotaract Club of Saint Cloud</a>.</p>
									<p>We are aiming to continue to develop ties with our friends in Italy and France and hope to be able to get invovled with	a collaborative international fundraising project between our clubs.</p>
									<p>We will also be hosting a visit to Maidenhead by both clubs next Spring.</p></div>
							</div>
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