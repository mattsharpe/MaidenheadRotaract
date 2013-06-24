<!DOCTYPE html>
<html lang="en" ng-app>
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Club Council</title>
    
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php include("style.php"); ?>
		<style>
			img{
				margin: 10px;
			}
		</style>
	</head>

	<body ng-controller="CouncilController">
		<?php include("navbar.php"); ?>

		<div class="container">
			<div class="row">
				
				<div class="span3">
					<?php include("menu.php"); ?>
				</div>
        
				<div class="span7">
					<h1>The Club Council</h1>
					<p>The Council is responsible for the running of the club, from planning our very busy social calendar, finding volunteering events for us to take part in to looking after our new members. </p>
					<p>You'll normally find the people below at one of our events, come along and say hi to find out more about what we do.</p>

					<div ng-repeat="councilMember in council" class="row-fluid councilMemberRow">
						<img width="170px" height="170px" ng-src="{{councilMember.photo}}" class="img-polaroid pull-left" alt="{{councilMember.name}} - {{councilMember.position}}" Title="{{councilMember.name}} - {{councilMember.position}}"/>
						<h3>{{councilMember.name}} <span class="muted">{{councilMember.position}}</span></h3>
						<p>{{councilMember.description}}</p>
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