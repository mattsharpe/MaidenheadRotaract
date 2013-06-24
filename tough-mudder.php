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
         
					<h1>Tough Mudder</h1>
					<h3 class="muted">Rotaracting Like We're Tough!</h3>
					<p>Personal development and challenging yourself in events that push you outside of your comfort zone is an important part of what being a Rotaractor is about.</p>
					<p>This is why a group of 10 of us recently found ourselves on the start line of "probably the toughest event on the planet", the London South <a href="http://toughmudder.co.uk/" target="blank"><strong>Tough Mudder</strong></a>.</p>
					<p>The event is a "hardcore 12 mile-long obstacle course designed by the Special Forces to test your all around strength, stamina, mental grit, and camaraderie!"</p>

					<object width="100%" height="300"> <param name="flashvars" value="offsite=true&lang=en-us&page_show_url=%2Fphotos%2F82994563%40N08%2Fsets%2F72157634035563600%2Fshow%2Fwith%2F9000408759%2F&page_show_back_url=%2Fphotos%2F82994563%40N08%2Fsets%2F72157634035563600%2Fwith%2F9000408759%2F&set_id=72157634035563600&jump_to=9000408759"></param> <param name="movie" value="http://www.flickr.com/apps/slideshow/show.swf?v=124984"></param><param name="autoPlay" value="true"></param> <param name="allowFullScreen" value="true"></param><embed type="application/x-shockwave-flash" src="http://www.flickr.com/apps/slideshow/show.swf?v=124984" allowFullScreen="true" flashvars="offsite=true&lang=en-us&page_show_url=%2Fphotos%2F82994563%40N08%2Fsets%2F72157634035563600%2Fshow%2Fwith%2F9000408759%2F&page_show_back_url=%2Fphotos%2F82994563%40N08%2Fsets%2F72157634035563600%2Fwith%2F9000408759%2F&set_id=72157634035563600&jump_to=9000408759" width="400" height="300"></embed></object>

					<!--<iframe width="100%" height="400" src="http://www.youtube.com/embed/vh5HdPM_QuE" frameborder="0" allowfullscreen></iframe>-->

					<br><p>None of us had attempted anything quite like this before and there were a few nerves as we took our first steps out onto the course.</p>
					<p>Thankfully the weather was absolutely perfect on the day and the venue, Matterly Bowl in Winchester, was looking resplendent.</p>
					<p>It wasn't long before we were gettig stuck into the obstacles; crawling through mud, submerging ourselves in ice cold water, jumping through fire and running through electrified wires!</p>
					<p>We helped each other and managed to get everyone round the course inonce piece, crossing the finish line as a team which was a very special feeling.</p>
					
					<h3 class="muted">Help for Heroes</h3>
					<p>Tough Mudder support the charity <a href="http://www.helpforheroes.org.uk/"><strong>Help for Heroes</strong></a> and so we pestered our families and friends to sponsor us for the event.</p>
					<p>Thanks to the generous donations we reveived we were able to raise a massive <strong>&pound;xxxx</strong> for this very worthwhile charity.</p>
					
					<h3 class="muted">Meet the Mudders</h3>
					<p>Click through the profiles below to find out a little bit about each of our team members:</p>

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