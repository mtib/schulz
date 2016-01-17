<!DOCTYPE html>
<html>
<?php
    include_once("../web/parts/head.php")
?>
    <body>
        <div id="header">
            <span id="headertext">Freie Schülerzeitung</span>
        </div>
        <div id="navigator">
            <a href="/index.php">Home</a><a href="/blog">Blog</a><a href="/about" class="current">Über Uns</a><a href="/impressum">Impressum</a>
        </div>
        <div id="container">
            <h2>Über uns</h2>
            <p>
                Wir hatten da so eine Idee.
            </p>
            <h2>Der Hintergrund</h2>
            <p>
                Diese Website läuft auf einem von uns selbst überschauten Webserver, nachdem der Entschluss
                gefasst wurde: Die Schüler brauchen eine Stimme!
            </p>
        </div>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-72530633-2', 'auto');
          ga('send', 'pageview');

        </script>
    </body>
</html>
