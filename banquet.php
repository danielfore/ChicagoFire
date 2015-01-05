<!DOCTYPE html>
<html lang="en-us">
    <head>
        <title>Chicago Fire Pizza</title>
        <meta charset="utf-8"/>
        <meta name="theme-color" content="#da1c1c" />
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
        <link rel="icon" type="image/png" href="/images/icons/favicon-touch.png">
        <link rel="apple-touch-icon" type="image/png" href="/images/icons/favicon-touch.png">
    </head>
    <body>
        <?php include('nav.php'); ?>
        <div class="banner content view-height white_text banquet">
            <div class="animated fadeIn">
                <h1>Need to Feed 25+ People?</h1>
                <h3>This Holiday Season, we've got you covered</h3>
                <a class="button" onclick="showDialog()" href="#">Send Us an Email</a>
            </div>
        </div>
        <div id="arrow" class="scroll animated fadeInUp">
            <a href="#arrow" class="arrow-down"></a>
        </div>
        <div id="banquet-contact" class="dialog-background">
            <div class="dialog">
                <h3>Choose a Location</h3>
                <a class="option" onclick="hideDialog()" href="mailto:brett@chicagofire.com">
                    <img src="images/sutter.png">Historic Folsom</a>
                <a class="option" onclick="hideDialog()" href="mailto:leilani@chicagofire.com">
                    <img src="images/midtown.png">Midtown</a>
                <a class="option" onclick="hideDialog()" href="mailto:sarah@chicagofire.com">
                    <img src="images/palladio.png">Palladio</a>
                <a class="option" onclick="hideDialog()" href="mailto:phil@chicagofire.com">
                    <img src="images/roseville.png">Roseville</a>
                <a onclick="hideDialog()" href="#">Cancel</a>
            </div>
        </div>
        <div class="bar food-menu content">
            <h1>Banquet Packages</h1>
            <div class="flex-rows">
                <div>
                    <h2>Rush Street</h2>
                    <h4 style="text-align: center">$15.95</h4>
                    <p>Choose One: House or Caesar Salad</p>
                    <p>Variety of Thin Crust Pizza</p>
                    <p>Mini Beignets</p>
                </div>
                <div>
                    <h2>Lake Shore</h2>
                    <h4 style="text-align: center">$18.95</h4>
                    <p>Choose Two: House, Caesar, Spinach, Antipasto Salad, or Grilled Pear</p>
                    <p>Variety of Thin & Deep Dish Pizza</p>
                    <p>Warm Chocolate Chip Cookies</p>
                </div>
                <div>
                    <h2>Build Your Own Banquet</h2>
                    <h4 style="text-align: center">$12.95 Lunch<span style="display: inline-block; width: 3em"></span>$14.95 Dinner</h4>
                    <p>Choose One: House or Caesar Salad</p>
                    <p>Variety of Thin Crust Pizza</p>
                </div>
            </div>
        </div>
        <div class="content banner banquet-cookies">
            <h5 class="wow fadeInRight" data-wow-delay="0ms">Warm Chocolate Chip Cookies</h5>
            <p class="lead wow fadeInRight" data-wow-delay="0ms">Just one of our delicious banquet add ons.</p>
        </div>
        <div class="bar food-menu content firehours">
            <div class="flex-rows">
                </div>
                    <h2>Additional Options</h2>
                    <p>House or Caesar Salad <span class="float-right">$1</span></p>
                    <p>Antipasto Salad or Spinach Salad <span class="float-right">$2</span></p>
                    <p>Greek Fries <span class="float-right">$1</span></p>
                    <p>Fried Artichoke Hearts <span class="float-right">$2</span></p>
                    <p>Buffalo & Boneless Wings <span class="float-right">$3</span></p>
                    <p>Baked Artichoke Halves <span class="float-right">$4 per half</span></p>
                    <p>Add Deep Dish <span class="float-right">$2</span></p>
                    <p>Mini Beignets <span class="float-right">$1</span></p>
                    <p>Warm Chocolate Chip Cookies <span class="float-right">$1</span></p>
                    <p>Side of Ice Cream <span class="float-right">$2</span></p>
                    <br/>
                    <br/>
                    <br/>
                    <br/>
                </div>
            </div>
        </div>
    <?php include('footer.php'); ?>
    <script src="/js/scroll.js"></script>
    <script src="/js/viewheight.js"></script> 
    <script src="/js/dialog.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/wow/1.0.2/wow.js"></script>
    <script>
     var wow = new WOW(
      {
        boxClass: 'wow',      
        animateClass: 'animated', 
        offset: 20,
        mobile: true,
        live: true
      }
    );
    wow.init();
    </script>
    </body>
</html>
