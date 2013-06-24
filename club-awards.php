<!DOCTYPE html>
<html lang="en" ng-app="ngSanitize">
	
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Club Awards</title>
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
					<h1>Club Awards</h1>

					<p>The Changemaker Award 2011-12 is a new initiative that recognises Rotaract clubs who show extraordinary devotion to helping their communities.</p>
					<p>This recognition is organised by Rotary International and is awarded to Rotaract clubs that complete a minimum number of activities from the <a href="http://www.rotary.org/en/aboutus/rotaryinternational/guidingprinciples/pages/ridefault.aspx" target="blank">Avenues of Service</a>.</p>
					<p>We are <strong>delighted</strong> to announce that our club has been presented with this award as a result of our volunteering and fundraising efforts throughout the year!</p>
            
					<div class="row">
						<div class="span5 offset1">
							<p><a href="img/changemaker.jpg"><img src="img/changemaker.jpg" class="img-rounded"></a></p>
						</div>
					</div>
					
					<p>In order to qualify as Changemakers, we had to meet requirements of a number of categories:</p>
			
					<div class="accordion" id="changemakerRequirements">
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#changemakerRequirements" href="#collapseOne">Meet at least twice a month</a></div>
							<div id="collapseOne" class="accordion-body collapse">
								<div class="accordion-inner"><p>In addition to our twice monthly pub meetings we organise varied events each week and met up over 100 times in the last Rotaract year!</p></div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#changemakerRequirements" href="#collapseTwo">Ensure that each member of the club is assigned a specific role</a></div>
							<div id="collapseTwo" class="accordion-body collapse">
								<div class="accordion-inner"><p>We have a big club and so although we do not assign a specific role to everyone, we have a substantial council of 9 members who manage the organisation of our club and ensure that everyone is getting involved.</p></div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#changemakerRequirements" href="#collapseThree">Participate in at least one local project that serves the community</a></div>
							<div id="collapseThree" class="accordion-body collapse">
								<div class="accordion-inner"><p>We participated in 30 community projects this year from marshalling at fun runs and fireworks displays to hosting our own OAP Christmas party and Cheese and Wine Quiz.</p></div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#changemakerRequirements" href="#collapseFour">Participate in at least one activity that promotes international understanding</a></div>
							<div id="collapseFour" class="accordion-body collapse">
								<div class="accordion-inner"><p>Our World Culture Party featured a quiz on world geography, one of our members gave a talk about religious culture in Israel and we also organised a screening of the documentary film amaZulu which followed children at school in a black community in South Africa.</p></div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#changemakerRequirements" href="#collapseFive">Participate in a fund raiser to support polio eradication</a></div>
							<div id="collapseFive" class="accordion-body collapse">
								<div class="accordion-inner"><p>We have helped out at our local Rotary clubs charity fundraisers such as the Pub Quiz Challenge, the Boundary Walk and Maidenhead's Got Talent concert and have filled a few empty ketchup bottles with our own loose change in support of polio eradication.</p></div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#changemakerRequirements" href="#collapseSix">Use social networking to increase awareness of Rotary</a></div>
							<div id="collapseSix" class="accordion-body collapse">
								<div class="accordion-inner"><p>The Maidenhead Rotaract YouTube and Twitter accounts were set up this year to support our existing Meetup and Facebook groups in promoting our club across social networks.</p></div>
							</div>
						</div>
						
						<div class="accordion-group">
							<div class="accordion-heading"><a class="accordion-toggle" data-toggle="collapse" data-parent="#changemakerRequirements" href="#collapseSeven">Participate in professional development activities</a></div>
							<div id="collapseSeven" class="accordion-body collapse">
								<div class="accordion-inner"><p>We held a debate night to develop public speaking skills, organised a blood donation drive and promote interpersonal skills and understanding at every event we arrange!</p></div>
							</div>
						</div>

					</div>

					<p>Not the types to rest on our laurels, we are already targeting winning the award again in the coming 2012-13 Rotaract year and have lots of events coming up to help us reach our goal!</p>
			
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