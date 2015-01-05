<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Chicago Fire Pizza</title>
        <meta charset="utf-8"/>
        <meta name="theme-color" content="#da1c1c" />
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css"/>
        <link rel="stylesheet" href="/css/animate.css"/>
        <link rel="stylesheet" href="/css/mobile.css"
           media="screen and (max-width: 40em)">
        <link rel="stylesheet" href="/css/desktop-nav.css"
           media="screen and (min-width: 971px)"/>
        <link rel="icon" type="image/png" href="/icons/favicon-touch.png">
        <link rel="apple-touch-icon" type="image/png" href="/icons/favicon-touch.png">

	    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
	    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.0/angular.min.js"></script>

	    <script>
		    var formApp = angular.module('formApp', []);
		    function formController($scope, $http) {
			    $scope.formData = {};
			    $scope.processForm = function() {
				    $http({
			            method  : 'POST',
			            url     : '/community/process.php',
			            data    : $.param($scope.formData),
			            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
			        })
			            .success(function(data) {
			                if (!data.success) {
			                    $scope.errorName = data.errors.name;
			                    $scope.errorEmail = data.errors.email;
			                } else {
                                showDialog();
			                }
			            });
			    };
		    }
	    </script>
    </head>
    <body ng-app="formApp" ng-controller="formController">
        <?php include('nav.php'); ?>
        <div class="content banner community view-height white_text">
            <div class="animated fadeIn">
                <h1>#ChiFiCommunity</h1>
                <p class="lead">A huge part of our culture at Chicago Fire is about building 
                positive relationships. That means giving back to make our communities 
                a better place. If you're part of an organization that shares our
                values, we'd love to hear from you!</p>
            </div>
        </div>
        <div class="scroll animated fadeInUp">
            <a href="#scrollto" class="arrow-down"></a>
        </div>
        <div id="scrollto" class="content community">
            <p class="lead">Chicago Fire sets aside a portion of our budget to support
            those in need. If you're raising funds or putting together an event,
            please fill out the form below and we will be in touch with 
            you after we have reviewed your request.</p>
            <div id="messages" class="dialog-background">
                <div class="dialog">
                    <h3>Your Request Has Been Submitted</h3>
                    <p>It will be reviewed as soon as possible. Please allow up to 45 
                    days for your request to be processed.</p>
                    <a onclick="hideDialog()" href="#">Done</a>
                </div>
            </div>
            <form ng-submit="processForm()">
                    <h2>Event Info</h2>
		                <label for="event_name">Event name:</label>
		                <input type="text" name="event_name" id="event_name" class="form-control" placeholder="Save The Whales" ng-model="formData.event_name" required>
		                <label for="event_date">Date:</label>
		                <input type="date" name="event_date" id="event_date" class="form-control" ng-model="formData.event_date" required>
                        <input class="revealer" type="checkbox" name="reveal-event-time" id="reveal-event-time">
                        <label id="event-time-label" for="reveal-event-time">Add Time</label>
                        <div id="event-time" class="reveal-if-active animated-quickly fadeInDown">
		                    <label for="event_time_start">From:</label>
		                    <input type="time" name="event_time_start" id="event_time_start" class="form-control" ng-model="formData.event_time_start">
		                    <label for="event_time_end">Until:</label>
		                    <input type="time" name="event_time_end" id="event_time_end" class="form-control" ng-model="formData.event_time_end">
                        </div>
                    <h2>Host Info</h2>
	                    <div id="name-group" class="form-group" ng-class="{ 'has-error' : errorName }">
		                <label for="name">Organization Name:</label>
		                <input type="text" name="name" id="name" class="form-control" placeholder="Better Planet" ng-model="formData.name">
		                <span class="help-block" ng-show="errorName">{{ errorName }}</span>
	                    </div>
		                <label for="org_address">Address:</label>
		                <input type="text" name="org_address" id="org_address" class="form-control" placeholder="123 Awesome St." ng-model="formData.org_address" required>
                        <label for="org_city">City:</label>
                        <select name="org_city" id="org_city" class="form-control" ng-model="formData.org_city" required>
                            <option></option>
                            <option value="folsom">Folsom</option>
                            <option value="roseville">Roseville</option>
                            <option value="sacramento">Sacramento</option>
                        </select>
                        <label for="org_website">Website:</label>
		                <input type="url" name="org_website" id="org_website" class="form-control" placeholder="http://betterplanet.org" ng-model="formData.org_website">
                    <h2>Organization Info</h2>
                        <label for="org_id">Federal Taxpayer ID:</label>
                        <input type="number"
                                name="org_id"
                                id="org_id"
                                class="form-control" 
                                pattern="(\+?\d[- ]*){9,10}"
                                oninvalid="setCustomValidity('Please enter a 9 digit EIN')"
                                onchange="try{setCustomValidity('')}catch(e){}"
                                placeholder="000000000" 
                                ng-model="formData.org_id"
                        required>
		                <label for="contact_name">Contact Name:</label>
		                <input type="text" name="contact_name" id="contact_name" class="form-control" placeholder="Johnny B. Good" ng-model="formData.contact_name">
	                    <div id="email-group" class="form-group" ng-class="{ 'has-error' : errorEmail }">
		                <label for="email">Email Address:</label>
		                <input type="email" name="email" id="email" class="form-control" placeholder="Johnny@BetterPlanet.com" ng-model="formData.email">
		                <span class="help-block" ng-show="errorEmail">{{ errorEmail }}</span>
	                    </div>
                    <h2>Donation Info</h2>
                        <label for="donation_deadline">Deadline:</label>
                        <input type="date" name="donation_deadline" id="donation_deadline" class="form-control" ng-model="formData.donation_deadline" required>
                        <label for="donation_type">Donation Type:</label>
                        <select name="donation_type" id="donation_type" class="form-control" ng-model="formData.donation_type">
                            <option value="giftcard">Gift Card</option>
                            <option value="giftbasket">Gift Basket</option>
                            <option value="monetary">Monetary</option>
                            <option value="other">Other</option>
                        </select>
                        <label for="comment">Details:</label>
                        <textarea name="comment" id="comment" rows="6" class="form-control bodytext" placeholder="Describe your request here" ng-model="formData.comment"></textarea>
                    <p></p>
	            <button type="submit" class="button">Send Request</button>
            </form>
        </div>
    <?php include('footer.php'); ?>
    <script src="/js/dialog.js"></script>
    <script src="/js/scroll.js"></script>
    <script src="/js/viewheight.js"></script>
    <script>
        function addField (removeThis,addThis) {
            $(removeThis).css("display","none");
            $(addThis).css("display","block");
        }
    </script>
    </body>
</html>
