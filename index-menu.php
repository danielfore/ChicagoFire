<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Chicago Fire Pizza</title>
        <meta charset="utf-8"/>
        <meta name="theme-color" content="#da1c1c" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="keywords" content="pizza,party cut,menu,square points,square cut,stuffed,thin,slice,sacramento,roseville,chicago-style,deep dish,thin crust,chicago fire,italian beef,folsom,local,independent,restaurant,restaurants,bar,happy hour,beer,wings,salad,hot wings,buffalo wings,spicy,hot,delivery,pickup,takeout,pick up,take out,banquet,banquets,ca,midtown,downtown,palladio">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="/css/main.css"/>
        <link rel="stylesheet" href="/css/animate.css"/>
        <link rel="stylesheet" href="/css/mobile.css"
           media="screen and (max-width: 40em)"/>
        <link rel="stylesheet" href="/css/desktop-nav.css"
           media="screen and (min-width: 971px)"/>
        <link rel="icon" type="image/png" href="/icons/favicon-touch.png">
        <link rel="apple-touch-icon" type="image/png" href="/icons/favicon-touch.png">
        <style>
            #slides {
              display: none;
            }
            #slides img {
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    <body>
        <?php include('nav.php'); ?>
        <div class="content banner home view-height" id="bgvid">
            <img alt="Chicago Fire" class="biglogo animated fadeIn" src="/images/biglogo.png">
        </div>
        <div class="scroll animated fadeInUp">
            <a href="#scrollto" class="arrow-down"></a>
        </div>
        <div id="scrollto" class="content">
            <img alt="Locations" src="/icons/location.svg"  id="locations">
            <h1>Locations</h1>
            <br/>
            <section class="flex-rows cards">
                <div class="card" itemscope itemtype="http://schema.org/Organization">
                    <div class="sutter image-header">
                        <h2 class="white_text" itemprop="addressLocality">Historic Folsom</h2>
                    </div>
                    <div>
                        <div><a href="http://maps.google.com/maps?saddr=614+Sutter+Street,+Folsom,+CA" target="_blank" itemprop="streetAddress">
                            <p>614 Sutter Street</p>
                            <i class="md-directions"></i>
                        </a></div>
                        <div><a href="tel:19163530140" itemprop="telephone">
                            <p>(916) 353-0140</p>
                            <i class="fa fa-phone"></i>
                        </a></div>
                        <div id="sutter-time">
                            <p>Open Today: <span id="sutter"></span></p>
                            <i class="md-more-vert"></i>
                        </div>
                        <div class="sutter tooltip">
                            <p>Sunday: 12:00 - 9:00 pm</p>
                            <p>Monday - Thursday: 4:00 – 9:00 pm</p>
                            <p>Friday: 4:00 – 10:00 pm</p>
                            <p>Saturday: 12:00 - 10:00 pm</p>
                        </div>
                        <div><a class="manager" href="mailto:brett@chicagofire.com">
                            <p>Brett Hagen, General Manager</p>
                            <i class="md-email"></i>
                        </a></div>
                    </div>
                </div>
                <div class="card" itemscope itemtype="http://schema.org/Organization">
                    <div class="palladio image-header">
                        <h2 class="white_text" itemprop="addressLocality">Folsom Palladio</h2>
                    </div>
                    <div>
                        <div><a href="http://maps.google.com/maps?saddr=310+Palladio+Parkway,+Suite+701,+Folsom,+CA" target="_blank" itemprop="streetAddress">
                            <p>310 Palladio Parkway</p>
                            <i class="md-directions"></i>
                        </a></div>
                        <div><a href="tel:19169840140" itemprop="telephone">
                            <p>(916) 984-0140</p>
                            <i class="fa fa-phone"></i>
                        </a></div>
                        <div id="palladio-time">
                            <p>Open Today: <span id="palladio"></span></p>
                            <i class="md-more-vert"></i>
                        </div>
                        <div class="palladio tooltip">
                            <p>Monday - Thursday: 11:30 – 10:00 pm</p>
                            <p>Friday - Sunday: 11:30 - 11:00 pm</p>
                        </div>
                        <div><a class="manager" href="mailto:roberta@chicagofire.com">
                            <p>Roberta Jones, General Manager</p>
                            <i class="md-email"></i>
                        </a></div>
                    </div>
                </div>
                <div class="card" itemscope itemtype="http://schema.org/Organization">
                    <div class="midtown image-header">
                        <h2 class="white_text" itemprop="addressLocality">Midtown Sacramento</h2>
                    </div>
                    <div>
                        <div><a href="http://maps.google.com/maps?saddr=2416+J+Street,+Sacramento,+CA" target="_blank" itemprop="streetAddress">
                            <p>2416 J Street</p>
                            <i class="md-directions"></i>
                        </a></div>
                        <div><a href="tel:19164430440" itemprop="telephone">
                            <p>(916) 443-0440</p>
                            <i class="fa fa-phone"></i>
                        </a></div>
                        <div id="midtown-time">
                            <p>Open Today: <span id="midtown"></span></p>
                            <i class="md-more-vert"></i>
                        </div>
                        <div class="midtown tooltip">
                            <p>Sunday: 11:30 - 10:00 pm</p>
                            <p>Monday - Wednesday: 4:00 – 10:00 pm</p>
                            <p>Thursday: 11:30 – 10:00 pm</p>
                            <p>Friday - Saturday: 11:30 - 11:00 pm</p>
                        </div>
                        <div><a class="manager" href="mailto:pete@chicagofire.com">
                            <p>Pete Kertesz, General Manager</p>
                            <i class="md-email"></i>
                        </a></div>
                    </div>
                </div>
                <div class="card" itemscope itemtype="http://schema.org/Organization">
                    <div class="roseville image-header">
                        <h2 class="white_text" itemprop="addressLocality">Roseville</h2>
                    </div>
                    <div>
                        <div><a href="https://maps.google.com/maps?saddr=500+N.+Sunrise+Ave,+Roseville,+CA" target="_blank" itemprop="streetAddress">
                            <p>500 N. Sunrise Ave</p>
                            <i class="md-directions"></i>
                        </a></div>
                        <div><a href="tel:19167712020" itemprop="telephone">
                            <p>(916) 771-2020</p>
                            <i class="fa fa-phone"></i>
                        </a></div>
                        <div id="roseville-time">
                            <p>Open Today: <span id="roseville"></span></p>
                            <i class="md-more-vert"></i>
                        </div>
                        <div class="roseville tooltip">
                            <p>Monday - Thursday: 11:30 – 9:00 pm</p>
                            <p>Friday - Sunday: 11:30 - 10:00 pm</p>
                        </div>
                        <div><a class="manager" href="mailto:phil@chicagofire.com">
                            <p>Philip Hernandez, General Manager</p>
                            <i class="md-email"></i>
                        </a></div>
                    </div>
                </div>
            </section>
            <h1 id="event-header">Events</h1>
            <section id="event-grid"></section>
        </div>
        <section class="content eric white_text view-height">
            <div>
                <h3>Chicago Fire was born of my desire to enjoy the flavors and 
                    textures unique to Chicago Pizza and share them with others.</h3> 
                <p>I began researching and making pizza after moving out west from Chicago. Premium Wisconsin Mozzarella, separate thin and deep dish dough recipes prepared daily, and a third generation sausage purveyor from Chicago—the same sausage maker that supplied the pizzerias that made Chicago pizza famous—are just a few of the examples of my commitment to quality and authenticity.
                </p>
                <p>When I opened the first Chicago Fire, I created recipes based on how great they taste, not how much time they take to prepare. There is simply no substitute for time when preparing great tasting food. That philosophy has resulted in what I refer to as an “accidental success.” It turns out, people enjoy socializing when dining out and appreciate having a little more “table time” to relax, not to mention the anticipation of that hot, crispy, buffalo wing or the cheesy, flakey, deep dish pizza made to order!
                </p>
                <p>Our menu is strongly influenced by Chicago’s history and culture. Firstly, many of Chicago’s tastiest foods were created by Greek and Italian immigrants. Secondly, Chicago was once known as the pork capital of the world. Most of our sandwiches and pizzas have over a half pound of meat, staying true to portions one would expect in The Windy City. Lastly, we offer numerous “Fiery” foods such as Extra Hot Wings, The Great Chicago Fire Pizza, Spicy Italian Sausage, and of course our signature Hot Italian Beef.
                <p></p>
                <p>Enjoy!</p>
                <img alt="Eric Schnetz" id="signature" src="/images/signature.svg">
                <p id="eric-schnetz">Eric Schnetz</p>
            </div>
        </section>
        <div id="slides">
            <img alt="Roseville Bar" src="/images/chi_fire_roseville_bar.jpg">
            <img alt="Midtown Exterior" src="/images/chi_fire_ext.jpg">
            <img alt="Roseville Exterior" src="/images/chi_fire_roseville_ext.jpg">
            <img alt="Midtown Dining Room" src="/images/dining_room.jpg">
            <img alt="Roseville Private Dining" src="/images/chi_fire_roseville_wrigley.jpg">
            <img alt="Palladio Exterior" src="/images/Folsom_Chicago_002.jpg">
            <img alt="Historic Folsom Interior" src="/images/FOLSOM_004.jpg">
        </div>
    <?php include('footer.php'); ?>
    <script src="/js/clamp.js"></script>
    <script src="/js/events.js"></script>
    <script src="/js/moment.js"></script>
    <script src="/js/open.js"></script>
    <script src="/js/scroll.js"></script>
    <script src="/js/viewheight.js"></script>
    <script src="/js/jquery.slides.js"></script>
    <script>
    $(function(){
      $("#slides").slidesjs({
        width: 320,
        height: 200
      });
    });
    </script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56287748-1', 'auto');
      ga('require', 'displayfeatures');
      ga('send', 'pageview');

    </script>
    <script src="/js/jquery.videoBG.js"></script>
    <script>
    $(document).ready(function() {
        var mq = window.matchMedia( "(min-width: 500px)" );
        if (mq.matches) {
            $('#bgvid').videoBG({
                mp4:'/images/video.mp4',
                ogv:'/images/video.ogv',
                webm:'/images/video.webm',
                poster:'/images/transparent.png',
                scale:true,
                zIndex:0
            });
        }
    })    
    </script>
    </body>
</html>
