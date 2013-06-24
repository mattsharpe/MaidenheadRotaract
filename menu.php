<div class="well sidebar-nav">
  <ul class="nav nav-list">
    <li class="nav-header">What we're up to</li>
    <li><a href="events.php">Upcoming Events</a></li>
    <li><a href="social.php">Social</a></li>
    <li><a href="community.php">Community</a></li>
    <li><a href="fundraising.php">Fundraising</a></li>
	<li><a href="#contactUs" data-toggle="modal">Contact Us</a></li>
	<li class="nav-header">About Rotaract</li>
    <li><a href="what-is-rotaract.php">What is Rotaract</a></li>		
	<li class="nav-header">About Us</li>	
	<li><a href="targets.php">Our Targets</a></li>         
    <li><a href="council.php">The Council</a></li>
	<li><a href="newsletters.php">Newletters</a></li>
    <li><a href="glimmer-of-brilliance.php">Glimmer of Brilliance</a></li>
    <li><a href="club-awards.php">Club Awards</a></li>
	<li class="nav-header">Our Biggest Events</li>
	<li><a href="cheese-and-wine-quiz.php">Cheese and Wine Quiz</a></li>
	<li><a href="oap-christmas-party.php">OAP Christmas Party</a></li>
    <li><a href="tough-mudder.php">Tough Mudder</a></li>
    <li><a href="maidenheads-got-talent.php">Maidenhead's Got Talent</a></li>	
	<li><a href="shelterbox-sleep-out.php">ShelterBox Sleep Out</a></li>	
    <li class="nav-header">Come and join in this week</li>
    <!--Grab from meetup? Should probably cache events on the server perhaps, minimise chatter to meetup API-->
    <li><a href="#"><i class="icon-calendar"></i>Tuesday 4/6/2013<br>Club Meeting at the Rose</a></li>
    <li><a href="#"><i class="icon-calendar"></i>Thursday 6/6/2013<br>Open Kitchen Volunteering</a></li>
    <li><a href="#"><i class="icon-calendar"></i>Friday 7/6/2013<br> Taplow Court Concert</a></li>
  </ul>
</div><!--/.well -->

<!-- Modal -->
<div id="contactUs" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3 id="myModalLabel">Contact Us</h3>
	</div>
	<div class="modal-body">
		<p>We're always happy to welcome new members into our group so if you're aged 18 - 30 and would like to come along to an event, find out more about us, or just want somebody to talk to, complete our contact form below:</p>
            <form class="form-horizontal" id="contactForm" action="formmail.php" method="POST">
              <div class="control-group">
                <label class="control-label" for="inputName">Name</label>
                <div class="controls">
                  <input type="text" id="inputName" placeholder="Name" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputEmail">Email</label>
                <div class="controls">
                  <input type="email" id="inputEmail" placeholder="Email" required>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputPhone">Phone</label>
                <div class="controls">
                  <input type="text" id="inputPhone" placeholder="Phone">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label" for="inputMessage">Message</label>
                <div class="controls">
                  <textarea rows="3" id="inputMessage" placehold="Message"></textarea>
                </div>
              </div>
              
              <div class="control-group">
                <div class="controls">
                  <button type="submit" class="btn btn-primary">Contact Us</button>
                </div>
              </div>
            </form>
<!--
		<div align="center"><p><iframe src="http://www.jotformpro.com/form/92495008136" frameborder="0" align="center" style="width:80%; height:230px; border:none;" scrolling="no"></iframe></p></div>
-->
		<p>Please also feel free to contact Sophie 07818 066432 or Robin on 07809 049774 or email us directly at <a href="mailto:maidenhead@rotaract.org.uk">maidenhead@rotaract.org.uk</a></p>
		<p>Alternatively, if you're scared of the technologies above, you can also contact us via post at: 15 The Maltings, Church Street, Staines-upon-Thames, TW18 4XH.</p>
	
	</div>
	<div class="modal-footer">
		<button class="btn btn-primary" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>
