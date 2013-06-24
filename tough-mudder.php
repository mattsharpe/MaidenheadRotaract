<!DOCTYPE html>
<html lang="en" ng-app>
	<head>
		<meta charset="utf-8">
		<title>Tough Mudder - Rotaracting Like We're Tough!</title>
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php include("style.php"); ?>
	</head>

	<body ng-controller="ToughMudderController">
		<?php include("navbar.php"); ?>

		<div class="container">
			<div class="row">
				
				<div class="span3">
					<?php include("menu.php"); ?>
				</div>
				
				<div class="span7">
         
					<h2>Tough Mudder - <span class="muted">Rotaracting Like We're Tough!</span></h2>

					<p>Personal development and challenging yourself in events that push you outside of your comfort zone is an important part of what being a Rotaractor is about.</p>
					<p>With this in mind, we have signed up to take on the South Coast <a href="http://toughmudder.co.uk/"><strong>Tough Mudder</strong></a> event on June 8th 2013.</p>
					<p>This event is a "hardcore 12 mile-long obstacle course designed by the Special Forces to test your all around strength, stamina, mental grit, and camaraderie!"</p>

					<iframe width="100%" height="400" src="http://www.youtube.com/embed/vh5HdPM_QuE" frameborder="0" allowfullscreen></iframe>

					<p>None of us have attempted anything quite like this before and we are very aware of the magnitude of the challenge we are taking on.  The months leading up to the event will be dominated by training and blood, sweat and tears will all be spilt!</p>
					<p>We <strong>are</strong> going to complete the event however and we are going to work together to complete it as a team, no-one will be left behind.</p>
					<p>We will also be raising money for the charity <a href="http://www.helpforheroes.org.uk/"><strong>Help for Heroes</strong></a> who are supported by Tough Mudder.</p>
					<hr/>
					<h2>Meet the Mudders</h2>
					<p>Click through the profiles below to meet the team and learn a bit more about why we're doing this.</p>

					<div class="span7" ng-show="activeMudder">
						<img width="170px" height="170px" ng-src="{{activeMudder.photo}}" class="img-polaroid pull-left" alt="{{activeMudder.name}}" Title="{{activeMudder.name}}"/>
						<h2 class="pull-right"> {{activeMudder.name}} <span class="muted">(Tough Mudder)</span></h2>

						<div ng-repeat="question in activeMudder.questions" class="span7">
							<h4>{{question.question}}</h4>
							<p>{{question.answer}}</p>
						</div>
					<hr class="span7"/>
					</div>

					<div ng-repeat="mudder in mudders" class="pull-left" style="text-align:center; margin:10px" ng:click="show(mudder)">
						<a href=""><img width="170px" height="170px" ng-src="{{mudder.photo}}" class="img-polaroid" alt="{{mudder.name}}" Title="{{mudder.name}}"/>
						<p>{{mudder.name}}</p></a>
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
		<script src="js/app.js"></script>
	</body>
</html>