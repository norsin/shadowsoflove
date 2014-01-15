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
        <title>Shadows of Love</title>
        <meta name="description" content="Shadows of Love - Jetzt Fan werden und ein Verwöhnpaket für sinnliche Stunden zu zweit gewinnen!" />
        <link rel="image_src" href="img/share.jpg">
        <meta property="og:image" content="http://f-bilandia.de/luebbe/shadowsoflove/be/img/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/luebbe/shadowsoflove/be/img/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Shadows of Love"/>
        <meta property="og:description" content="Lasst euch entführen – zu den geheimnisvollen Ufern der Leidenschaft, mit der neuen E-Book-Serie „Shadows of Love“ – Jetzt gewinnen!" />
        <meta property="og:url" content="http://www.f-bilandia.de/luebbe/shadowsoflove/be/index.php"/>
        <link rel="stylesheet" href="main.css">
        <script type="text/javascript">
            if (top == self) 
            { 
                top.location = "https://www.facebook.com/basteientertainment/app_199714773559167?ref=ts"; 
            }
        </script>
        </head> 
        
     <?php
        // Create our Application instance.
        $facebook = new Facebook( array('appId' => '199714773559167',
        'secret' => 'deaf9b42e966fa4874b88b1e673c9a63', 'cookie' => true, ));
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
                FB.init({appId: '199714773559167', status: true, cookie: true, xfbml: true});
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
                FB.init({appId: '199714773559167', status: true, cookie: true, xfbml: true});
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
