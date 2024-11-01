<?php
   $webposn = (int)$_GET['posn'];
   $lst = [
      '<a href="google.com">Google.com</a>', 
      '<span><a href="bing.com">Bing.com</a></span>', 
      '<img src="./images/potions-1.jpeg" width="400px" height="400px" />', 
      '<select size="1"><option selected>Choose a gender</option><option>male</option><option>female</option></select>'
   ];
   if ($webposn < 0 || $webposn > count($lst) - 1) $webposn = 0;
   $strRetn = $lst[$webposn];
   echo $strRetn;
?>