<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>CHANGE THIS WHEN MAKING A NEW PAGE!Maidenhead Rotaract - Rotaract Club of the Year 2012</title>
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
					<h1>Meetup API Failure Test</h1>
					<h2 id="hitCount"></h2>
					<div class="alert alert-error" id="errorAlert"></div>
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
		<script>
			var API_KEY = '2a3221042401b18265b7a22417d516d';
			var eventsUrl = 'http://api.meetup.com/2/events?callback=JSON_CALLBACK&group_id=1324489&status=upcoming&order=time&limited_events=False&desc=false&offset=0&format=json&page=20&fields=&time=0d%2C7d&key=' + API_KEY + '&sign=true';
			var hitCount = 0;
			var running = true;

			var success = function(data){
				if(data.problem == "Client throttled"){
					running = false;
					$j("div#errorAlert")
						.text("Meetup throttled after " + hitCount + " requests")
						.show();
				} else {
					hitCount++;
					$j("h2#hitCount").text(hitCount + " succesful calls to meetup");
					helloMeetup();
				}
			};

			function helloMeetup(){
				$j.ajax({
				    url: eventsUrl,
				    data: null,
				    success: success,
				    dataType: "jsonp"
				});
			}
			
			helloMeetup();

		</script>
	</body>
</html>