    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>    
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    <script src="js/meetup.js"></script>
    
    <script>
		
		var $j = jQuery.noConflict();
    	var meetup = new meetup();

		var addEventsToMenu = function(){
			var events = JSON.parse(sessionStorage.thisWeeksEvents);

			$j.each(events, function(){
				var link = $j("<a>")
					.attr("href", this.event_url)
					.attr("target", "_blank")
					.append("<i class='icon-calendar'></i> ")
					.append(new Date(this.time).toDateString())
					.append("<br>")
					.append(this.name)
					.appendTo("ul#menuList");
				
				$j("ul#menuList").append($j("<li/>").append(link));
			});

			$j("li#loadingEvents").remove();
		}

		meetup.getThisWeeksEvents(addEventsToMenu);

/*
    	$j("#contactForm").validate({

    		"submitHandler": function(form){

					var contactData = {
						'name' : $j("input#inputName").val(), 
						'email' : $j("input#inputEmail").val(), 
						'phone' : $j("input#inputPhone").val(), 
						'message' : $j("textarea#inputMessage").val()
					};

				$j.ajax({

					type: "post",
					url: "contact-form-controller.php",
					data : contactData,
					dataType: 'jsonp',

					complete: function(XMLHttpRequest, textStatus){
						//$j('#contactForm').unblock();
					},
					success: function(data) {
						
						if(data.status == true)
						{
							var result = $('#formResult');
							result.empty();
							result.removeClass('ui-state-error');
							result.addClass('ui-state-success');
							result.append("<span class='ui-icon ui-icon-check'></span>");
							$('span',result).css("float","left");
							result.append(data.message);				
							result.fadeIn('slow');	
						} else {
							alert("Error in sending mail" + data.error);
						}
						
					},
					error: function(request, error, detail ){
						alert("error in request " + error + " " + detail);
					}
				});
				return false;
			}
		});
    
		$j("#submitbtn").click(function() {  
		});*/
    </script>