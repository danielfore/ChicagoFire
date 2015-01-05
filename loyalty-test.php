<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Chicago Fire Pizza</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/main.css"/>
        <link rel="stylesheet" href="/css/animate.css"/>
        <link rel="stylesheet" href="/css/mobile.css"
           media="screen and (max-width: 40em)"/>
        <link rel="stylesheet" href="/css/desktop-nav.css"
           media="screen and (min-width: 971px)"/>
        <link rel="icon" type="image/png" href="/icons/favicon-touch.png">
        <link rel="apple-touch-icon" type="image/png" href="/icons/favicon-touch.png">
    </head>
    <body>
        <?php include('nav.php'); ?>
        <div class="banner content view-height loyalty-banner">
            <img id="loyalty-logo" class="animated fadeInDown" src="/images/loyalty_logo.png">
            <div class="white_text animated fadeIn">
                <p><span class="orange_text">Free</span> 
                    Deep Dish Delight on your Birthday<br/>
                    <span class="orange_text">Free</span> 
                    Specialty Pizza for every 500 points<br/>
                    <span class="orange_text">Free</span> 
                    Corkage; bring your favorite bottle of wine</p>
                <div>
                    <a class="button linked" href="/register" target="_blank">Register</a>
                    <a class="button linked" href="/card">Log In</a>
                </div>
            </div>
        </div>
        <div id="arrow" class="scroll animated fadeInUp">
            <a href="#scrollto" class="arrow-down"></a>
        </div>
        <div id="scrollto" class="content loyalty">
            <h1>Free to Join. Easy to Earn.</h1>
            <div class="flex-rows loyalty">
                <div>
                    <img src="/icons/loyalty-card.png">
                    <h5>Get a Card</h4>
                    <p class="lead">Ask your server for a loyalty card. <a href="https://secure.alohaenterprise.com:4430/memberlink/NewAccount.html?companyID=cfi02" target="_blank">Complete your profile online</a> for more reward opportunities. <a href="#loyalty-q-join" class="read-more">Learn More</a></p>
                </div>
                <div>
                    <img src="/icons/loyalty-earn.png">
                    <h5>Earn Points</h4>
                    <p class="lead">Order pizza, drinks, or merchandise to score points. Get double points on Take Out and Delivery. <a href="#rules" class="read-more">Learn More</a></p>
                </div>
                <div>
                    <img src="/icons/loyalty-tiers.png">
                    <h5>Free Pizza</h4>
                    <p class="lead">Get a large speciality pizza every 500 points. Score more points to earn Deep Dish and Stuffed pizzas. <a href="#loyalty-q-redeem" class="read-more">Learn More</a></p>
                </div>
            </div>
        </div>
        <div class="content banner loyalty corkage">
            <h5>No Corkage Fee</h4>
            <p class="lead">Bring in your favorite bottle of wine, Sunday-Thursday and enjoy free corkage.</p>
        </div>
        <div id="loyalty-q-join" class="content loyalty">
            <h1>Signing up is Fast & Easy.</h1>
            <div class="flex-rows loyalty">
                <div>
                    <span class="step one">1</span>
                    <h5>Pre-Register</h4>
                    <p class="lead">You can request a Square Points card from any team member at Chicago Fire. They will provide you with a pre-registration form.</p>
                </div>
                <div>
                    <span class="step">2</span>
                    <h5>Complete Your Profile</h4>
                    <p class="lead"><a href="https://secure.alohaenterprise.com:4430/memberlink/NewAccount.html?companyID=cfi02" target="_blank">Visit this page</a> to complete your profile. Provide your birthday to receive a free dessert and other info for even more rewards.</p>
                </div>
                <div>
                    <span class="step">3</span>
                    <h5>Use Your Card</h4>
                    <p class="lead">Once you’ve signed up, you can use your card, name or phone number to earn points whenever you dine at a Chicago Fire restaurant.</p>
                </div>
            </div>
        </div>
        <div class="content banner loyalty birthday">
            <h5>Birthday Dessert</h4>
            <p class="lead">Come in anytime during the calendar week of your birthday for a free Deep Dish Delight.</p>
        </div>
        <div id="faq" class="content">
            <h2>Square Points FAQ</h2>
            <div>
                <h3>Why is the loyalty club called Square Points?</h3>
                <p>We chose the name Square Points because our thin crust pizza 
                    is sliced in squares as it is in Chicago. This is a style that 
                    is unique to Chicago Fire in this area and is referred to as a “Party Cut”.</p>
            </div>
            <div>
            <h3>Do points expire?</h3>
                <p>Yes, if there is a one year lapse in restaurant visits, all 
                    accumulated points expire and any elevated profile statuses 
                    and benefits are lost.</p>
            </div>
            <div>
                <h3>Who can join Square Points Loyalty?</h3>
                <p>The Loyalty club is for individual customers only, 18 years of 
                    age or older. Anyone can join except business entities and 
                    Chicago Fire team members.</p>
            </div>
            <div>
                <h3>What if I don’t have my Square Points card when I'm dining at Chicago Fire?</h3>
                <p>You can provide your name or phone number to your server and
                    they will be able to look up your Square Points account.</p>
            </div>
            <div>
                <h3>Can I save up reward discounts?</h3>
                <p>You can choose not to use your Square Points card, but you
                    won't be able to accrue points for the purchase. Rewards
                    are redeemed automatically when you use your card.</p>
            </div>
            <div>
                <h3>How do I check my Square Points balance and earned rewards?</h3>
                <p>You can check you account balance at Chicagofire.com/loyalty. 
                    You can also request a member report from your server when 
                    dining at Chicago Fire.</p>
            </div>
            <div>
                <h3>Do I earn points with the purchase of a gift card?</h3>
                <p id="loyalty-q-redeem">While you won't earn points with the purchase of a gift card, 
                    you will earn Square Points when you redeem a gift 
                    card for food and beverages purchased at Chicago Fire.</p>
            </div>
            <div>
                <h3>How do I redeem my points or rewards?</h3>
                    <p>Whenever you reach a points threshold, you will see the reward 
                    printed on your guest check. The next time you visit, your discount 
                    will automatically be applied with the assignment of your account 
                    to the transaction.</p>
            </div>
        </div>
        <a href="#">
            <div class="scroll-up">
                <img src="/icons/arrow-up.svg">
                <p>top</p>
            </div>
        </a>
        <section id="rules" class="skyline">
            <div class="skylinecontent">
                <h2>Rules</h2>
                <ul>
                    <li>One Square Point is earned for every $1 spent on food, non-alcoholic beverages 
                        and merchandise. Gift Cards purchased, Sales tax
                        and Gratuities do not earn points. <strong>As an introductory bonus</strong>,
                        alcohol sales will earn points. However, sales categories eligible
                        for earning points are subject to change at any time.</li>
                    <li>Double points may be earned on Take-Out and Delivery orders.
                        They may also be earned on Deep Dish or Stuffed Pizza pre-orders,
                        limited to Fridays & Saturdays only. Extra point plans
                        such as these may be introduced, modified, or removed at any time.</li>
                    <li>Your initial member level is Thin Crust and therefore you receive 
                        a free “Large specialty Thin Crust pizza" upon reaching <strong>500</strong> 
                        Points. This is processed as a discount of $23.95 good for your very next visit. 
                        When you reach <strong>1,000</strong> Points, you become a Deep Dish level member 
                        and receive a free "Large Specialty Deep Dish Pizza" ($26.95 discount 
                        upon next visit). After <strong>1,500</strong> lifetime Points, you're considered 
                        Stuffed level and receive a free "Large Specialty Stuffed pizza" 
                        ($29.95 discount upon your next visit). Discounts are automatically
                        applied to pizza purchases. You must spend at least the
                        discount amount in order for it to apply.</li>
                    <li>Birthday reward is a complimentary “Deep Dish Delight” during 
                        the calendar week of your birthday. ID required at time of receipt. 
                        Guest must register profile prior to the start of the calendar 
                        week of their birthday.</li>
                    <li>One order "Small Greek Fries" or "Mini Beignets" are awarded for every Customer Voice survey completed by member;
                        Survery requests are limited to one per month.</li>
                    <li>Free corkage for any member is limited to one bottle per visit, per table, group or party 
                        and is only valid Monday through Thursday.</li>
                    <li>Square Points members also have access to exclusive merchandise, events and promotions.</li>
                </ul>
                <h2>Terms and Conditions</h2>
                <p>Square Points Loyalty Club is for individual customers only, 
                    18 years of age or older.  Employees of West of Chicago Restaurants 
                    and or Chicago Fire are not eligible for membership.</p>
                <p>Square Points expire after 1 year of inactivity.</p>
                <p>West of Chicago Restaurants reserve the right to change the terms 
                    or cancel the Square Points Loyalty Club at any time. Program is 
                    subject to these Rules and terms and conditions which may change 
                    from time to time and can be found on our website at Chicagofire.com/loyalty</p>
                <p>Member Hotline: If you have any questions regarding your account, 
                call 916-294-7496 x104 and a Chicago Fire Square Points representative will be glad to assist you.</p>
            </div>
        </section>
    <script src="/js/scroll.js"></script>
    <script src="/js/viewheight.js"></script> 
    <?php include('footer.php'); ?>
    </body>
</html>
