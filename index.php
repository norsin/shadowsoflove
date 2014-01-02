<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html> 
<!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=640">
        <title>Schräg verliebt</title>
        <meta name="description" content="Schräg verliebt! Jetzt Fan werden und die skurrilsten Liebesgeschichten entdecken" />
        <link rel="image_src" href="img/share.jpg">
        <meta property="og:image" content="http://f-bilandia.de/luebbe/schraegverliebt/img/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/luebbe/schrageverliebt/img/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Schräg verliebt"/>
        <meta property="og:description" content="Schräg verliebt! Jetzt Fan werden und die skurrilsten Liebesgeschichten entdecken" />
        <meta property="og:url" content="http://www.f-bilandia.de/luebbe/schraegverliebt/index.php"/>
        <link rel="stylesheet" type="text/css" media="screen and (min-width: 801px)" href="css/main.css">
        <link rel="stylesheet" type="text/css" media="screen and (max-width: 800px)" href="css/mobile.css">
        <script type="text/javascript" src="js/vendor/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery-ui-1.10.3.min.js"></script>
    </head>
    <body>
        <?php
        //Get PHP SDK
        require_once 'facebook.php';
        // Create our Application instance.
        $facebook = new Facebook( array('appId' => '604049396298958',
        'secret' => 'c7db20e3c5dcf9f302bffde63a742285', 'cookie' => true, ));
        $signed_request = $facebook -> getSignedRequest();
        $like_status = $signed_request["page"]["liked"];
        if ($like_status == "1") {
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
        <div class="wrapper start">
                <div class="nav top">
                    <a href="index.html" class="nav_element left active_nav_gs"></a>
                    <a href="buch.html" class="nav_element right"></a>
                </div>
                <div class="buch_start"></div>
                <a href="" target="_blank" class="buch_link"></a>
                <a href="mailto:facebook@luebbe.de?subject=Schräg%20verliebt" class="nav_element_bottom mitmachen"></a>
                <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=http://f-bilandia.de/luebbe/schraeg_verliebt/weiche.php&p[images][0]=http://f-bilandia.de/luebbe/schraeg_verliebt/img/share.jpg&p[title]=Schr%C3%A4g%20verliebt&p[summary]=Schr%C3%A4g%20verliebt!%20Jetzt%20Fan%20werden%20und%20die%20skurrilsten%20Liebesgeschichten%20entdecken!" target="_blank" class="nav_element_bottom teilen_start"></a>
                <div class="box" id="teilnahmebox">
                    <div id="close" class="closebutton"></div>
                    <p>
                            <u>
                                Voraussetzung für die Teilnahme am Gewinnspiel
                            </u>
                        <br /><br />
                            Voraussetzung für die Teilnahme am Gewinnspiel ist das Klicken auf den „Gefällt mir“-Button der Bastei Lübbe Facebook-Seite sowie eine E-Mail mit der richtigen Lösung an facebook@luebbe.de. Ausgeschlossen von der Teilnahme sind Mitarbeiter und Agenturen der Bastei Lübbe GmbH & Co. KG, sowie angeschlossener Unternehmen und deren Angehörige.
                        <br />
                            Die Teilnahme ist nur natürlichen Personen gestattet. Eine Sammelteilnahme (insbesondere unter Einbeziehung hierauf ausgerichteter Unternehmen) ist ausdrücklich ausgeschlossen. Teilnehmer müssen persönlich mitspielen und dürfen sich keinerlei technischer Hilfsmittel bedienen. Besteht der Verdacht, dass doch Hilfsprogramme o. ä. benutzt worden sind, behält sich der Verlag vor, die Mitspieler von der Teilnahme auszuschließen.</p>
                        <p>
                            <u>
                                Gewinne
                            </u>
                            <br /><br />
                            Wir verlosen unter allen richtigen Einsendungen 10 Exemplare des Buches »Schräg verliebt«.
                        </p>
                        <p>
                            <u>
                                Ermittlung der Gewinner
                            </u>
                            <br /><br />
                            Die Preise werden unter allen Einsendungen verlost. Das Gewinnspiel beginnt 02.12.2013 und endet am 31.01.2014. Die Gewinner werden nach Ablauf des Gewinnspiels per E-Mail benachrichtigt. Auf die Benachrichtigung  weisen wir auf der Chronik der Facebook-Seite von Bastei Lübbe hin. Zum Abruf des Gewinns geben die Gewinner per E-Mail an facebook@luebbe.de ihren vollständigen Namen sowie ihre Adresse bekannt.
                        </p>
                        <p>
                            <u>
                                Datenschutz
                            </u>
                            <br /><br />
                            <u>
                                Nutzung von Daten durch Bastei Lübbe
                            </u>
                            <br /><br />
                            Die uns übermittelten Daten werden nur für das Gewinnspiel und zur Benachrichtigung der Gewinner verwendet. Die namentliche Veröffentlichung endet nach vollständiger Beendigung und Abwicklung des Gewinnspiels. Die gespeicherten Daten werden anschließend gelöscht, soweit ein Teilnehmer nicht seine Einwilligung zur weiteren Nutzung der Daten erteilt hat.
                        </p>
                        <p>
                            <u>
                                Nutzung von Daten durch Facebook
                            </u>
                            <br /><br />
                            Für unser Gewinnspiel nutzen wir die Plattform des sozialen Netzwerks facebook.com, das von der Facebook Ireland Ltd., Hanover Reach 5-7, Hanover Quay, Dublin 2 Irland, betrieben wird („Facebook“). Durch Ihre Teilnahme an diesem Gewinnspiel ist es nicht auszuschließen, dass Facebook Kenntnis über Ihre IP-Adresse erlangt. Alle weiteren Daten, die im Rahmen dieses Gewinnspiels erfasst werden, werden nicht an Facebook oder andere Dritte weitergegeben. Zweck und Umfang der Datenerhebung und die weitere Verarbeitung und Nutzung der Daten durch Facebook sowie ihre diesbezüglichen Rechte und Einstellungsmöglichkeiten zum Schutz Ihrer Privatsphäre entnehmen Sie bitte den Datenschutzhinweisen von Facebook: http://www.facebook.com/policy.php
                        </p>
                        <p>
                            <u>
                                Freistellung von Facebook
                            </u>
                            <br /><br />
                            Der Rechtsweg ist ausgeschlossen. Veranstalter des Gewinnspiels ist allein die Bastei Lübbe AG. Das Gewinnspiel steht in keiner Verbindung zu Facebook und wird in keiner Weise von Facebook gesponsert, unterstützt oder organisiert. Mit der Teilnahme am Gewinnspiel akzeptieren die Teilnehmer die vorstehenden Bedingungen.
                        </p>
                        <p><div class="close" id="close2">Fenster schließen</div></p>
                </div>
                <div class="box ausschluss">
                    <span style="margin-top: 10px;"> 
                        Veranstalter des Gewinnspiels ist allein die Bastei Lübbe AG. Das Gewinnspiel steht in keiner Verbindung zu Facebook und wird in keiner Weise von Facebook gesponsert, unterstützt oder organisiert. Das Gewinnspiel wird durch die bilandia GmbH ausgeführt.
                    </span>
                </div>
                <div id="teilnahme">Teilnahmebedingungen</div>
        </div>

        <script type="text/javascript">
            window.onload = function() {
                FB.Canvas.setAutoGrow();
            }
        </script>

        <?php

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
        <div class="fangate">
        </div>
        <?php
        }
        ?>

        <script type="text/javascript">
            window.onload = function() {
                FB.Canvas.setAutoGrow();
            }
        </script>

        <script type="text/javascript">
        $('#teilnahme').click(function() {
            $('#teilnahmebox').show('clip');
        });

        $('#close').click(function() {
            $('#teilnahmebox').hide('clip');
        });

        $('#close2').click(function() {
            $('#teilnahmebox').hide('clip');
        });
        </script>
    </body>
</html>