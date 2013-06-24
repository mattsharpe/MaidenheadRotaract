var API_KEY = '2a3221042401b18265b7a22417d516d';
var eventsUrl = 'http://api.meetup.com/2/events?callback=JSON_CALLBACK&group_id=1324489&status=upcoming&order=time&limited_events=False&desc=false&offset=0&format=json&page=20&fields=&time=0d%2C7d&key=' + API_KEY + '&sign=true';
var rsvpUrl = 'http://api.meetup.com/2/rsvps?callback=JSON_CALLBACK&event_id=EVENT_ID&order=name&desc=false&offset=0&format=json&page=20&fields=&key=' + API_KEY + '&sign=true';

function meetup(){
	//constructor function
}

meetup.prototype.getThisWeeksEvents = function(after){

	function success(data){
		if(data.problem == "Client throttled"){
			return;
		}

		$j.each(data.results, function(){
			var formattedUrl = rsvpUrl.replace('EVENT_ID', this.id);
			var currentEvent = this;
			
			$j.ajax({
				type: "get",
				url: formattedUrl,
				dataType: 'jsonp',
				success : function(rsvpData){
					currentEvent['yes_rsvps'] = [];
					currentEvent['no_rsvps'] = [];
				
					$j.each(rsvpData.results, function(){
						if(this.response =='yes')
							currentEvent['yes_rsvps'].push(this);
						else
							currentEvent['no_rsvps'].push(this);
					});					
				}
			});
		});

		sessionStorage.thisWeeksEvents = JSON.stringify(data.results);

		//the callback to add data to the page - needs to wait for the rsvps to complete though?
		if($j.isFunction(after)){
			after(data.results);	
		}
			
	}

	if(!sessionStorage.thisWeeksEvents){
			$j.ajax({
				type: "get",
				url: eventsUrl,
				dataType: 'jsonp',
				success : success
			});
	} else {
		var events = JSON.parse(sessionStorage.thisWeeksEvents)
		if($j.isFunction(after)){
			after(events);	
		}
	}
}
