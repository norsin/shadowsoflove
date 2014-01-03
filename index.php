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
        <title>Shadows of Love</title>
        <meta name="description" content="Shadows of Love - Jetzt Fan werden und ein Verwöhnpaket für sinnliche Stunden zu zweit gewinnen!" />
        <link rel="image_src" href="img/share.jpg">
        <meta property="og:image" content="http://f-bilandia.de/luebbe/shadowsoflove/img/share.jpg"/>
        <meta property="og:image:secure_url" content="https://f-bilandia.de/luebbe/shadowsoflove/img/share.jpg">
        <meta property="og:image:type" content="image/jpg">
        <meta property="og:image:width" content="200">
        <meta property="og:image:height" content="200">
        <meta property="og:title" content="Shadows of Love"/>
        <meta property="og:description" content="Lasst euch entführen – zu den geheimnisvollen Ufern der Leidenschaft, mit der neuen E-Book-Serie „Shadows of Love“ – Jetzt gewinnen!" />
        <meta property="og:url" content="http://www.f-bilandia.de/luebbe/shadowsoflove/index.php"/>
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
        <script type="text/javascript" src="js/vendor/jquery-1.8.2.min.js"></script>
        <script type="text/javascript" src="js/vendor/jquery-ui-1.10.3.min.js"></script>
	<script type="text/javascript">
		if (top == self) {
			top.location = "https://www.facebook.com/BasteiLuebbe/app_417645798369157?ref=ts";
		}
	</script>
    </head>
    <body>
        <?php
        //Get PHP SDK
        require_once 'facebook.php';
        // Create our Application instance.
        $facebook = new Facebook( array('appId' => '417645798369157',
        'secret' => '232420f2a49e3fb57ba8b9d911b8f219', 'cookie' => true, ));
        $signed_request = $facebook -> getSignedRequest();
        $like_status = $signed_request["page"]["liked"];
        if ($like_status == "1") {
        //If the page is liked then display full app.

        ?>
        <div id="fb-root"></div>
        <script type="text/javascript">
            window.fbAsyncInit = function() {
                //Your app details here
                FB.init({appId: '417645798369157', status: true, cookie: true, xfbml: true});
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
                <a href="mailto:facebook@luebbe.de?subject=Shadows%20of%20Love" class="nav_element_bottom mitmachen"></a>
                <a href="http://www.facebook.com/sharer/sharer.php?s=100&p[url]=https://f-bilandia.de/luebbe/shadowsoflove/weiche.php[images][0]=http://f-bilandia.de/luebbe/shadowsoflove/img/share.jpg&p[title]=Shadows%20of%20Love&p[summary]=Lasst%20euch%20entf%C3%BChren%20%E2%80%93%20zu%20den%20geheimnisvollen%20Ufern%20der%20Leidenschaft,%20mit%20der%20neuen%20E-Book-Serie%20%C2%BBShadows%20of%20Love%C2%AB%20%E2%80%93%20Jetzt%20gewinnen!" target="_blank" class="nav_element_bottom teilen_start"></a>
                <div class="box" id="teilnahmebox">
                   <p><div class="close">Fenster schließen</div></p>
                    <p>
                            <u>
                                Voraussetzung für die Teilnahme am Gewinnspiel
                            </u>
                        <br /><br />
                            Voraussetzung für die Teilnahme am Gewinnspiel ist das Klicken auf den „Gefällt mir“-Button der Digital Darlings- oder Bastei Lübbe Facebook-Seite sowie eine E-Mail mit der richtigen Lösung an facebook@luebbe.de. Ausgeschlossen von der Teilnahme sind Mitarbeiter und Agenturen der Bastei Lübbe AG, sowie angeschlossener Unternehmen und deren Angehörige.
                        <br />
                            Die Teilnahme ist nur natürlichen Personen gestattet. Eine Sammelteilnahme (insbesondere unter Einbeziehung hierauf ausgerichteter Unternehmen) ist ausdrücklich ausgeschlossen. Teilnehmer müssen persönlich mitspielen und dürfen sich keinerlei technischer Hilfsmittel bedienen. Besteht der Verdacht, dass doch Hilfsprogramme o. ä. benutzt worden sind, behält sich der Verlag vor, die Mitspieler von der Teilnahme auszuschließen.</p>
                        <p>
                            <u>
                                Gewinne
                            </u>
                            <br /><br />
                            Wir verlosen:
                            <br /><br />
                            1. Preis:
                            Ein Verwöhnpaket für sinnliche Stunden zu zweit, bestehend aus
                            - Erste Folge von »Shadows of Love«
                            - Badepralinen
                            - Handschellen
                            - Body-Painting aus Schokolade
                            <br />
                            2.- 5. Preis: 
                            Die erste Folge von »Shadows of Love«
                            <br /><br />
                        </p>
                        <p>
                            <u>
                                Ermittlung der Gewinner
                            </u>
                            <br /><br />
                            Die Preise werden unter allen Einsendungen verlost. Das Gewinnspiel beginnt am XX.01.2014 und endet am 28.02.2014. Die Gewinner werden nach Ablauf des Gewinnspiels per E-Mail benachrichtigt. Auf die Benachrichtigung  weisen wir auf der Chronik der Facebook-Seite von Digital Darlings hin. Zum Abruf des Gewinns geben die Gewinner per E-Mail an facebook@luebbe.de ihren vollständigen Namen sowie ihre Adresse bekannt.
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
                       <p><div class="close">Fenster schließen</div></p>
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
                FB.init({appId: '417645798369157', status: true, cookie: true, xfbml: true});
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

        $('.close').click(function() {
            $('#teilnahmebox').hide('clip');
        });
       </script>
    </body>
</html>
