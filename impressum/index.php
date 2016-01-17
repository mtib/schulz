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
            <a href="/index.php">Home</a><a href="/blog">Blog</a><a href="/about">Über Uns</a><a href="/impressum" class="current">Impressum</a>
        </div>
        <div id="container">
            <h2>Impressum</h2>
            <table>
                <!--
                <tr>
                    <td>Content Manager</td>
                    <td>Swenja Wagner</td>
                </tr>
                -->
                <tr>
                    <td>Webadmin</td>
                    <td>Markus Becker</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <!-- Email Adresse ändern -->
                    <td>info@tibyte.net</td>
                </tr>
            </table>
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
