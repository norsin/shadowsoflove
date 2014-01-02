<?php
//Get PHP SDK
require_once 'facebook.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width">
        <title>Schräg verliebt</title>
        <meta name="description" content="Schräg verliebt! Jetzt Fan werden und die skurrilsten Liebesgeschichten entdecken" />
        <link rel="image_src" href="img/share.jpg">
        <meta property="og:image" content="http://f-bilandia.de/luebbe/schraegverliebt/img/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/luebbe/schrageverliebt/img/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Schräg verliebt">
        <meta property="og:description" content="Schräg verliebt! Jetzt Fan werden und die skurrilsten Liebesgeschichten entdecken" >
        <meta property="og:url" content="http://f-bilandia.de/luebbe/schraeg_verliebt/weiche.php"/>
        <link rel="stylesheet" href="main.css">
        <script type="text/javascript">
            if (top == self) 
            { 
                top.location = "https://www.facebook.com/BasteiLuebbe/app_604049396298958?ref=ts"; 
            }
        </script>
        </head> 
        
     <?php
        // Create our Application instance.
        $facebook = new Facebook( array('appId' => '604049396298958',
        'secret' => 'c7db20e3c5dcf9f302bffde63a742285', 'cookie' => true, ));
        $signed_request = $facebook -> getSignedRequest();
        $like_status = $signed_request["page"]["liked"];
        if ($like_status == "1") {
            global $like_status;
        //If the page is liked then display full app.

        ?>
        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                //Your app details here
                FB.init({appId: '604049396298958', status: true, cookie: true, xfbml: true});
                //Resize the iframe when needed
                FB.Canvas.setAutoResize();
            };
    
            //Load the SDK asynchronously
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol +
                  '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>


     <body>

    <?php 
        
        header("location: index.html");

       

        } else {

        

        ?>
        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                //Your app details here
                FB.init({appId: '604049396298958', status: true, cookie: true, xfbml: true});
                //Resize the iframe when needed
                FB.Canvas.setAutoResize();
            };
    
            //Load the SDK asynchronously
            (function() {
                var e = document.createElement('script'); e.async = true;
                e.src = document.location.protocol +
                  '//connect.facebook.net/en_US/all.js';
                document.getElementById('fb-root').appendChild(e);
            }());
        </script>

        <!-- Fangate-Bild bitte einsetzen -->
        <div>

        <img src="img/fangate.jpg" style="width:800px;">

        
        </div>
        <?php
        }
        ?>

        <script type="text/javascript">
            window.onload = function() {
                FB.Canvas.setAutoGrow();
            }
        </script>



    
    </body>
</html>
