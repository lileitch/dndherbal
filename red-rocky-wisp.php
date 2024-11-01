<!DOCTYPE html>
<?php
   $flowerfocus = "Red Rocky Wisp";
?>
<html>
   <head>
      <title>The Pig's Coven - <?= $flowerfocus ?></title>
      <link href="./styles/main-theme.css" type="text/css" rel="stylesheet" />
      <script src="./jscript/funcs.js" type="text/javascript"></script>
   </head>
   <body>
      <div class="container">
         <header>
            <img id="header-img" src="./images/pigs-coven-logo-100.jpg" />
            <div id="header-title"><?= "The Pig's Coven Est. 1965 | {$flowerfocus}"; ?></div>
         </header>
         <div id="navmenu">
            <ul>
               <li><a href="./">HOME</a></li>
               <li><a href="./catalog.html">Catalog</a></li>
               <li><a href="./aboutus.html">About Us</a></li>
            </ul>
         </div>
         <aside>
            <?php include ("./aside.php"); ?>
         </aside>
         <main>
            <h3><?= $flowerfocus ?></h3>
            <div id="rating">
            </div>
            <button id="addstar" onclick="addrating(1);">ADD + </button>
            <button id="remstar" onclick="remrating(2);">DELETE - </button>
         </main>
         <footer>
            2020 - 2024 &copy; All Right Reserved to The Pig's Group of Companies Ltd.
         </footer>
      </div>
   </body>
</html>