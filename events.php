<!DOCTYPE html>
<html lang="en" ng-app="ngSanitize">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Rotaract Club of the Year 2012</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php include("style.php"); ?>
	</head>

	<body ng-controller="WeeklyEmailController">
		<?php include("navbar.php"); ?>

		<div class="container">
			<div class="row">
				
				<div class="span3">
					<?php include("menu.php"); ?>
				</div>
				
				<div class="span7">
					<h1>Upcoming Events</h1>

					<p>We've got loads of great events planned including social activities, community volunteering and fundraising events, as well as international and personal development projects.</p>
					<p>Whatever your interests are, Maidenhead Rotaract will have something for you.</p>
					<p>Below you will find what we have coming up in the next week.</p>
					<p>Take a look and if you want to come along to anything just get in touch with us by emailing <a href="mailto:maidenhead@rotaract.org.uk">maidenhead@rotaract.org.uk</a> or by contacting Sophie on 07818 066432.</p>
					
					<div ng-hide="events || error" class="alert"><strong>Please wait</strong> Downloading the awesome from meetup</div>
					<div ng-show="error" class="alert alert-block alert-error">
						<button type="button" class="close" data-dismiss="alert">&times;</button>
					  	<h4>Error :(</h4>
					  	Getting the events from meetup has failed<br>
					  	Try looking at our calendar <a href="http://www.meetup.com/Rotaract-Club-of-Maidenhead/events/calendar/" target="_blank">here</a>
					</div>

					<div class="well well-small" ng-repeat="event in events">
						<h5><a href="{{event.event_url}}" target="_blank">{{event.name}}</a></h5> 
						<p><em>When:</em> {{event.time | date:'EEEE dd MMMM h:mma'}}</p>
						<p ng-show="event.venue"><em>Where:</em><a href="http://maps.google.com/?q={{event.venue.lat}},{{event.venue.lon}}" _target="new"> {{event.venue.name}}, {{event.venue.address_1}}</a></p>
						<p ng-bind-html="event.description"></p>
						<p>
							<strong>{{event.yes_rsvp_count}} people going: </strong>
							<span class="name" ng-repeat="rsvp in event.yes_rsvps" style="text-transform: capitalize;">
								<!--<img ng-src="{{rsvp.member_photo.thumb_link}}"/>-->
								{{rsvp.member.name}}{{$last && ' ' || ', '}}
							</span>
						</p>
					</div>
					
					<p>And remember, we meet on the 1st Tuesday of the month at The Rose, SL6 1EF and on the 3rd Tuesday of the month at The Bear, SL6 1QJ, both from 8pm.</p>
					<p>You are always more than welcome to drop in to meet us at any time!</p>
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