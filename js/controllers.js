'use strict';

/* Controllers */
var API_KEY = '2a3221042401b18265b7a22417d516d';
var $j = jQuery.noConflict();

var eventsUrl = 'http://api.meetup.com/2/events?callback=JSON_CALLBACK&group_id=1324489&status=upcoming&order=time&limited_events=False&desc=false&offset=0&format=json&page=20&fields=&time=0d%2C7d&key=' + API_KEY + '&sign=true';
var rsvpUrl = 'http://api.meetup.com/2/rsvps?callback=JSON_CALLBACK&event_id=EVENT_ID&order=name&desc=false&offset=0&format=json&page=20&fields=&key=' + API_KEY + '&sign=true';


function WeeklyEmailController($scope, $http) {

	$http.jsonp(eventsUrl).success(function(data){
		$scope.events = data.results;
		//now for each event load the RSVP data for it. N web requests - yuck!
	
		$j.each($scope.events, function(){
			var formattedUrl = rsvpUrl.replace('EVENT_ID', this.id);
			var currentEvent = this;

			$http.jsonp(formattedUrl).success(function(rsvpData){
				currentEvent['yes_rsvps'] = [];
				currentEvent['no_rsvps'] = [];
			
				$j.each(rsvpData.results, function(){
					if(this.response =='yes')
						currentEvent['yes_rsvps'].push(this);
					else
						currentEvent['no_rsvps'].push(this);
				});
			});
		});
	})
  	.error(function(data, status, headers, config) {
    	alert("someting went bang");
		// called asynchronously if an error occurs
    	// or server returns response with an error status.
  	});
}

function MinutesController($scope, $http){
	var pastEventsUrl = 'http://api.meetup.com/2/events?callback=JSON_CALLBACK&group_id=1324489&status=past&order=time&limited_events=False&desc=false&offset=0&format=json&page=20&fields=&time=-1m,0m&key=' + API_KEY + '&sign=true';
	$http.jsonp(pastEventsUrl).success(function(data){
	$scope.events = data.results;
	//now for each event load the RSVP data for it. N web requests - yuck!
	/*
	$j.each($scope.events, function(){
		var formattedUrl = rsvpUrl.replace('EVENT_ID', this.id);
		var currentEvent = this;
		$http.jsonp(formattedUrl).success(function(rsvpData){
			currentEvent['yes_rsvps'] = [];
			currentEvent['no_rsvps'] = [];
			
			$j.each(rsvpData.results, function(){
				if(this.response =='yes')
					currentEvent['yes_rsvps'].push(this);
				else
					currentEvent['no_rsvps'].push(this);
				});
			});
		});*/
	})
}

function CouncilController($scope){
	$scope.council = [
		{
			"name": "Robin Ogilvie", 
			"position":"President", 
			"photo" : "http://profile.ak.fbcdn.net/hprofile-ak-ash3/c63.62.782.782/s160x160/11864_10151598133050310_1137812584_n.jpg",
			"description": "Robin is our club's president and runs the council and all club meetings. He sets the club's objectives for the year and also looks after our Twitter account. He's also our representative to our sponsoring Rotary club as well as the other Rotaract clubs in our district."
		},
		{
			"name": "Matt Sharpe", 
			"position":"Vice President", 
			"photo":"http://profile.ak.fbcdn.net/hprofile-ak-ash4/c65.65.819.819/s160x160/388093_10100281816100684_848552_n.jpg",
			"description": "Matt is Vice President of the club and oversees the Events Team, his job is to make sure we have a varied selection of things going on and that the major events of the year like our big charity projects are being taken care of."
		},
		{
			"name": "Jenni Howells", 
			"position":"Community Officer", 
			"photo":"http://profile.ak.fbcdn.net/hprofile-ak-ash4/c57.37.621.621/s160x160/482729_807268073389_661572273_n.jpg",
			"description": "As Community Officer Jenni's role is to ensure we're doing plenty of volunteering and organising charity events for the club to help at. She's also responsbile for making sure we're on track for our 1,000 hours volunteering target for the year."
		},
		{
			"name": "Becky Marchant", 
			"position":"Social", 
			"photo":"http://profile.ak.fbcdn.net/hprofile-ak-ash2/c25.25.311.311/s160x160/255571_888518027636_1684350941_n.jpg",
			"description": "Becky's job is to plan fun things for the club to do, a well deserved break from all our hard work at volunteering events. This includes pub trips, dinners and weekends away along with bigger events like our annual Christmas party."
		},
		{
			"name": "Becky Shaw", 
			"position":"International Officer", 
			"photo":"http://photos4.meetupstatic.com/photos/member/2/f/6/e/member_86772142.jpeg",
			"description": "Becky looks after our international projects, this means working with our twinned Rotaract clubs in France & Italy and planning trips to visit them. We're also planning to start a collaborative charity project with the other clubs this year."
		},		
		{
			"name": "David Irvine", 
			"position":"Personal Development", 
			"photo":"http://profile.ak.fbcdn.net/hprofile-ak-ash3/c48.48.600.600/s160x160/558748_759108061439_1195934097_n.jpg",
			"description": "Being in charge of Personal Development, David's responsible for planning activities that stretch us and help improve our professional skills."
		},
		{
			"name": "Sophie Condie", 
			"position":"Membership", 
			"photo":"http://profile.ak.fbcdn.net/hprofile-ak-frc1/c68.66.824.824/s160x160/317414_10151615236690148_1129809525_n.jpg",
			"description": "Sophie is the first person that comes over to say hello when someone turns up to an event for the first time. She looks after the membership list and sells our branded club clothing."
		},		
		{
			"name": "Craig Baxter", 
			"position":"Treasurer", 
			"photo":"http://profile.ak.fbcdn.net/hprofile-ak-prn1/c36.36.447.447/s160x160/69779_10151492937797818_558635919_n.jpg",
			"description": "Our penny pinching accountant Craig looks after the finances of the club. As well as waking up in a cold sweat at the thought of expenses claims he can be found writing cheques for the charities we support."
		},
	]
}

var mudders = [
	{
		"name":"Matt Sharpe",
		"photo": "img/toughmudder/matt.jpg",
		"questions" : [{
				"question" : "Do we know you?",
				"answer" : "Yep, my names Matt; I've been a Rotaractor for about a year and a half now. When I'm not obsessing over our events calendar I can usually be found throwing shapes in Smokeys ;)"
			}, {
				"question" : "Do you have a nickname?",
				"answer" : "Those that know me best call me Uncool Matt."
			}, {
				"question" : "Why do you want to do Tough Mudder?",
				"answer" : "For the glory! Its good to try challenging things to push ourselves. Plus chicks dig scars."
			}, {
				"question" : "Which parts of the event are you most scared about?",
				"answer" : "I think the ice water and high jump will be the physically worst parts, mentally the endurance part is probably the worst, just have to keep going. I think what I'm most scared of though is letting Rob loose on the fancy dress idea! Pink frilly tutus anyone?"
			}, {
				"question" : "What was your fitness like before signing up to Tough Mudder?",
				"answer" : "I can run 5K in under half an hour without killing myself. Any further or faster than that and I'm in trouble though; does clubbing count as training?"
			}, {
				"question" : "Who would win in a fight between you and a badger?",
				"answer" : "I would, I know his weak spot!"
			}]
	},	{
		"name":"Robin Ogilvie",
		"photo": "img/toughmudder/robin.jpg",
		"questions" : [{
				"question" : "Who the hell are you?",
				"answer" : "My name is Robin, I am 29, originally from Nottingham and no I don't know where Maid Marian is!"
			}, {
				"question" : "Feelin' Tough enough to take on the Mudder?",
				"answer" : "Definitely, sounds pretty easy to be honest - half marathon through freezing cold water, mud, fire and 10,000 volt shocks... not sure what the big deal is?!"
			}, {
				"question" : "Yeah piece of cake you might as well run it twice! What motivated you to take on the challenge?",
				"answer" : "It sounds like awesome fun and the feeling of satisfaction when I cross the finish line with my friends will be pretty special. Didn't have to think twice before signing up."
			}, {
				"question" : "Which parts are you most looking forward to and dreading?",
				"answer" : "I'm looking forward to most of the obstacles. Not the biggest fan of confined spaces though so crawling through the boa constrictor tubes might be my worst bit."
			}, {
				"question" : "How much training have you been doing to prepare?",
				"answer" : "I am pretty fit and active so I know I can handle the half-marathon distance and obstacles individually, it is doing them all in a row that will be hard. I am doing more interval work to get used to the stopping and starting and circuits training to get my all-round conditioning up - think I am going to need it!"
			}, {
				"question" : "Who would win in a fight between Darth Vader and a T-Rex?",
				"answer" : "T-Rex obviously. Being the Dark Lord and waving what is essentially a glow stick around is not going to help you much when a hungry T-Rex bites your face off!"
			}, {
				"question" : "I find your lack of faith disturbing. What's your favourite colour VK, and why?",
				"answer" : "Cherry because the contents taste the nicest and it gives you a luscious rouge effect on your lips for bold, long lasting colour."
			}]
	},	{
		"name":"Sophie Condie",
		"photo": "img/toughmudder/sophie.jpg",
		"questions" : [{
				"question" : "And you are?",
				"answer" : "Sophie, I'm a teacher and I've been in Rotaract for nearly three years now."
			}, {
				"question" : "What is your biggest sporting achievement prior to Tough Mudder?",
				"answer" : "I've never been a particularly sporty person although I won a couple of awards for swimming at school and I'm about to take part in my first 5k run wearing a Santa suit!"
			}, {
				"question" : "And now you want to do Tough Mudder, are you crazy?!",
				"answer" : "Totally! Since starting the training for my 5k, I've reminded myself that I can be very determined when I want to be and can achieve whatever I put my mind to, so I'm stepping up my game and taking on my biggest challenge yet!"
			}, {
				"question" : "Which part of the course are you most looking forward to?",
				"answer" : "Finishing it! I'm also looking forward to the team spirit and seeing everyone work together and help each other."
			}, {
				"question" : "If you were a kitchen utensil, what would you be?",
				"answer" : "A spoon because they are versatile and they love cereal!"
			}, {
				"question" : "What is on your iPod when you're training?",
				"answer" : "I started running using The Couch to 5K program which was amazing but now I have anything upbeat and current and of course, a bit of Gangnam Style! *Horsey dances off*"
			}]
	}, {
		"name":"Craig Baxter",
		"photo": "img/toughmudder/baxter.jpg",
		"questions" : [{
				"question" : "You look familiar?",
				"answer" : "Howzit I'm Craig. After spending my first 25 years in South Africa I emigrated to the UK and have been a familiar face at the Rotaract club for just over 3 years!"
			}, {
				"question" : "What is your current level of fitness like?",
				"answer" : "Poor to very poor! Hoping that training for Tough Mudder will improve it."
			}, {
				"question" : "Are you hoping to conquer any fears by doing Tough Mudder?",
				"answer" : "Heights don't sit well with me. So any obstacles greater than twice my height will be a personal challenge! "
			}, {
				"question" : "Is there any part of Tough Mudder you are looking forward to, and you can't say \"finishing\", we've already had that?!",
				"answer" : "I'm looking forward to sharing with and reminiscing (over a pint) about the experience with the team."
			}, {
				"question" : "Pretty sure I just said you can't say... never mind. Coke or Pepsi?",
				"answer" : "100% Coke! Would rather drink mud than Pepsi."
			}, {
				"question" : "What is your view on garden gnomes?",
				"answer" : "Garden gnomes are an integral part of a garden's ecosystem. Without them you will be plagued with slugs, snails and mealybugs! Fact!"
			}]
	},{
		"name":"Helen Sexton",
		"photo": "img/toughmudder/helen.jpg",
		"questions" : [{
				"question" : "Hello! Who are you?",
				"answer" : "My name is Helen and I'm pretty much 29 years old. I have been a member of the club for 4 and a half years now. Originally from a little village called Theale."
			}, {
				"question" : "Tough Mudder is getting really close now. Are you more scared or excited?",
				"answer" : "I am excited until I hear the stories from other people that have done it. I'm looking forward to the pint of beer at the end!"
			}, {
				"question" : "Have you enjoyed the challenge of getting into shape and training?",
				"answer" : "The getting fit part has probably been the best part of the whole Tough Mudder experience for me. Everyone has been supporting each other and training as a team which has been great!"
			}, {
				"question" : "Any bits of the course you are particularly dreading?",
				"answer" : "Probably the first half as it's mentally tiring telling yourself to keep going. Not looking forward to the electric shocks either!!"
			}, {
				"question" : "If you were a salad, what dressing would you have?",
				"answer" : "Probably a balsamic vinegar, yummy but low in calories!"
			}, {
				"question" : "Julia didn't see to want our elephant... what would you do if I have you an elephant right now?",
				"answer" : "I would shrink it with my shrink ray gun and keep it as a cute pet."
			}]
	}, {
		"name":"Julia Hill",
		"photo": "img/toughmudder/julia.jpg",
		"questions" : [{
				"question" : "And you would be?",
				"answer" : "I'm Julia and I've been a member of the club for nearly 4 years now after moving to Maidenhead from up North."
			}, {
				"question" : "How are you currently feeling about Tough Mudder?",
				"answer" : "The more I hear about it the more scared I get so feeling a bit underprepared to be honest. I think it's time I increased my training!!"
			}, {
				"question" : "A little bird tells us you regularly run half marathons?",
				"answer" : "I think regularly and run is a bit of a stretch but I have completed the last 3 Great North Runs and have my next one planned in for this September. So the distance of Tough Mudder should not be the worst part it will be everything on top of that!"
			}, {
				"question" : "What do you think you will find hardest on the course?",
				"answer" : "Generally I think all the obstacles will not be easy but especially any requiring strength and I'm not too keen on the idea of being confined underwater!"
			}, {
				"question" : "If you were any animal, what animal would you be?",
				"answer" : "Oh I'm not sure - maybe a dolphin to help with those confined underwater obstacles!"
			}, {
				"question" : "If I gave you an elephant right now, what would you do with it?",
				"answer" : "Um thanks, I think I would pass it on to a Zoo to look after!?!"
			}]
	}, {
		"name":"Craig Fuller",
		"photo": "img/toughmudder/fuller.jpg",
		"questions" : [{
			"question" : "Howdy, who are you?",
			"answer" : "Hey I'm Craig, proud Tough Mudder contestant since Rob and Matt finally finished convincing me it was a good idea. I made it hard work, they had to wait until I had watched the first 13 seconds of the promo vid before I joined up!"
			} , {
				"question" : "So you're a real life ninja, right?",
				"answer" : "Ummm... nooo... the picture is... photoshopped... promise! Nah, it's just something I do for fun really. There are much better people out there than me!"
			} , {
				"question" : "What are you most looking forward to about Tough Mudder?",
				"answer" : "The part at the end where we say \"Lets do it again!\" That's the plan right?"
			}, {
				"question" : "Of course! Any bits of the course that you think might scare you?",
				"answer" : "Hmmm don't know about scared, I'm far too over the UK and its sissy Health and Safety to take much seriously now! I think all of the obstacles will be challenging but that's what makes it fun and gets the blood pumping!"
			}, {
				"question" : "Would you rather be super-strong or super-fast?",
				"answer" : "Super-fast no question! Work to do? - Done!; Fun to be had? - There!; Fight to win? - 20 trillion mosquito bite punches landed vs 0 earth-shattering game over punch landed, yeah that's me sold!"
			}, {
				"question" : "How would you beat an elephant in a fight?",
				"answer" : "With a unicorn, a badass unicorn. They're also good for apocalypses!"
			}]
	}, {
		"name":"David Irvine",
		"photo": "img/toughmudder/david.jpg",
		"questions" : [{
				"question" : "Hello, who do we have here?",
				"answer" : "I'm David. I'm 28 and generally a sporty person."
			} , {
				"question" : "You look like someone who has done a fair bit of running in the past?",
				"answer" : "I try to get three runs in the week with the shortest being around four miles."
			} , {
				"question" : "Tough Mudder is about 2 months away now, feeling prepared?",
				"answer" : "I'm ready for the distance and the legwork but not so sure about the arms. I need to get prepared for teamwork and the mental dynamics of the obstacles."
			} , {
				"question" : "Any bits of the course you are particularly looking forward to?",
				"answer" : "I'm looking forward to the mud and the mystery obstacles; the rest sound too daunting to think about."
			} , {
				"question" : "What would I find in your fridge right now?",
				"answer" : "Too much, mostly fruit and veg, but the most delightful would be a home-made toffee apple pie."
			} , {
				"question" : "Sounds good. If you were a superhero, what would your super power be?",
				"answer" : "Morphing! Do I get the powers of the shape? E.g. cheetah with super speed and spiders with secret stealth powers? I think changing shapes would be fun. Not sure how I could save the world with the super power though!"
			}]
	}, {
		"name":"Shirin Alagha",
		"photo": "img/toughmudder/shirin.jpg",
		"questions" : [{
				"question" : "Hi there, who is this?",
				"answer" : "My name is Shirin and I like chocolate digestives."
			} , {
				"question" : "You run marathons right, Tough Mudder will be easy surely?!",
				"answer" : "I've run a couple of marathons so you could say I'm used to running but Tough Mudder is a completely different story! You challenge yourself by putting yourself into situations you wouldn't normally. It tests your endurance in unpleasant circumstances, so there's the challenge.",
			} , {
				"question" : "Have you been doing any specific training to convert yourself from a marathon runner to a Tough Mudder?",
				"answer" : "Tough Mudder will require general body strength, which I'll need to focus on a little more. I've been painting my new house so that may have strengthened my arms a bit. I'm not quite sure how you train for the electric shocks and the mud though?!"
			} , {
				"question" : "Are there any bits of the event you are particularly not looking forward to?",
				"answer" : "Yes; anything that makes me cold. Ice baths?"
			} , {
				"question" : "If I was planning to go on holiday, where is the one place you would recommend I go?",
				"answer" : "South of France is the dream location in my mind. I haven't been yet, but I've heard you can walk and walk and walk in beautiful places (I love walking), the weather's nice and you get plenty of good food and wine."
			} , {
				"question" : "Sounds idyllic. How would you weigh our elephant without using weighing scales?",
				"answer" : "Yahoo! Answers: 'Put him in a deep swimming pool and measure the difference in the water weight before and after he enters the pool.' No way I could have come up with that! I'd have said something like, 'Give it as many chocolate digestives as possible and then see the difference in weight.' But how do you weigh the it in the first place?! Complicated."
			}]
	}, {
		"name":"Jess Parsons",
		"photo": "img/toughmudder/jess.jpg",
		"questions" : [{
				"question" : "Hi there, who is this?",
				"answer" : "Jessica Parsons, duh!"
			},{
				"question" : "Alright! How are you feeling about Tough Mudder being only a few weeks away?",
				"answer" : "Well getting quite excited now as it is getting closer and hardcore exercise is on way, it feels a bit more achievable!"
			},{
				"question" : "I hear you play rugby, you should be used to a bit of mud then?",
				"answer" : "Yeah mud is a major part of rugby and that part doesn't phase me, will make it even more fun."
			},{
				"question" : "Which bits are you least looking forward to?",
				"answer" : "The under water part scares me especially with so many people pushing and shoving. Not particularly looking forward to the electric shocks either but surely they can't be that bad."
			},{
				"question" : "Do you prefer Tom or Jerry?",
				"answer" : "Jerry, I like his cheeky ways of evading the situations."
			},{
				"question" : "If you won the lottery, what's the first thing you would do?",
				"answer" : "Travelling around the world a bit would probably be the first thing I'd look into."
			}]
	}];

function ToughMudderController($scope){
	$scope.mudders = mudders;
	$scope.show = function(item) {
        $scope.activeMudder = item;
    }
}