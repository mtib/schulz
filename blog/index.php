<?php
$adminlogin = false;
if (isset($_GET["debug"])){
    $adminlogin = (boolean) $_GET["debug"];
}
?>
<!DOCTYPE html>
<html>
<?php
    include_once("../web/parts/head.php")
?>
    <body>
        <style media="screen">
            a#adminlink{
                position: absolute;
                right: 2em;
            }
        </style>
        <div id="header">
            <span id="headertext">Freie Schülerzeitung</span>
        </div>
        <div id="navigator">
            <a href="/index.php">Home</a><a href="/blog" class="current">Blog</a><a href="/about">Über Uns</a><a href="/impressum">Impressum</a>
        </div>
        <div id="container">
            <?php if( $adminlogin) { ?>
            <a href="/admin/edit" id="adminlink">admin</a>
            <?php } else { ?>
            <a href="/admin/login" id="adminlink">login</a>
            <?php }; ?>
            <!-- Iteriere über die letzten Einträge der Datenbank -->
            <h2>Eintrag 2</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <h2>Eintrag 1</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
