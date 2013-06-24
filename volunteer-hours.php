<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Maidenhead Rotaract - Volunteer Hours</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Le styles -->
		<?php include("style.php"); ?>
		<link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
	</head>

	<body >
		<?php include("navbar.php"); ?>

		<div class="container">
			<div class="row">
				
				<div class="span3">
					<?php include("menu.php"); ?>
					<?php include("tweets.php"); ?>
				</div>
				
				<div class="span9">
					<h1>Volunteer Hours</h1>

					<p>We are aiming to volunteer 1,000 hours as a club to community projects over the course of the 2013-14 Rotaract year.</p>

					<div class="progress progress-striped">
					  <div class="bar bar-success" style="width: 0%;" id="progressBar"></div>
					</div>

					<p>The following table lists the volunteer hours for each club member by event.</p>
					
					<table class="table table-bordered table-condensed table-striped" id="eventsTable">
						<thead>
						</thead>
						<tbody>
						</tbody>
						<tfoot>
						</tfoot>
					</table>
				</div>
				
			</div><!--/row-->

		<?php include("footer.php"); ?>

		</div><!--/.fluid-container-->

		<!-- Le javascript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<?php include("common-scripts.php"); ?>

		<script src="js/jquery.dataTables.min.js"></script>
		<script src="js/DT_bootstrap.js"></script>
		<script src="js/FixedColumns.js"></script>

		<script>
			var url = "https://docs.google.com/spreadsheet/pub?key=0Aq0rCye-hkKAdHNmQjhHQVhxR2RLbVpjd2NJUm5ReUE&single=true&gid=0&output=csv"; //2013-14
			//var url = "https://docs.google.com/spreadsheet/pub?key=0Aq0rCye-hkKAdGZMb085UkFwbUtVdE1DZGxVVXY2LUE&single=true&gid=0&output=csv" //2012-13
			var targetHours = 1000;

			var success = function (data) {
			    var lines = data.split('\n');

			    $j.each(lines, function (lineIndex, line) {

			        var tr = $j("<tr>");
			        var events = this.split(',');
			        var totalRowIndex = 1; //48 for last year, 1 for this.

					if(lineIndex == totalRowIndex){
						//this is the grand total row - a better way to isolate it would be good
						updateProgressBar(events[1]);
					}

			        $j.each(events, function(){
			            var tag = "td";
			            if(lineIndex==0 || lineIndex == totalRowIndex) tag = "th";		            
			            tr.append("<"+tag+">" + this + "</"+tag+">");
			        });
			        
			        //$j("td",tr).first().css("font-weight","bold");
			        
			        if(lineIndex==0){
						$j("table#eventsTable>thead").append(tr);
					} else if(lineIndex==totalRowIndex){
						$j("table#eventsTable>tfoot").append(tr);
			        } else if(events[0]=="Committee"){
						$j("table#eventsTable>tfoot").prepend(tr);
			        } else {
			        	$j("table#eventsTable>tbody").append(tr);
			        }
			    });

			    var table = $j('table#eventsTable').dataTable({
			    	"bPaginate": false,
					"bFilter": true,
					"bSort": true,
					"bInfo": false,
					"bAutoWidth": false,
					"sScrollX": "100%",
					"bScrollCollapse": true,
					"aoColumnDefs": [
						{ "bVisible": false, "aTargets": [2] }					
					],
					"oLanguage": {
				    	"sSearch": ""
				    }
				});

				new FixedColumns( table, {
			 		"iLeftColumns": 2,
					"iLeftWidth": 350
			 	});

			 	$j("div#eventsTable_filter input").attr("placeholder", "Search by member");
			};

			function updateProgressBar(hoursDone){
				
				var percentComplete = Math.min(100, (hoursDone * 100) / targetHours);
				
				$j("div#progressBar")
					.css("width", percentComplete + "%")
					.text(hoursDone + " / " + targetHours + " hours");
			}

			$j.ajax({
			    url: url,
			    data: null,
			    success: success,
			    dataType: "text"
			});
		</script>
	</body>
</html>