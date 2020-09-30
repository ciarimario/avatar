<?php
require 'Avatar.php' ;
require 'DisplaySvg.php';

// Instanciation de la class Avatar
$avatar = new Avatar(5,['yellow','purple']);
//dump($avatar->getGrid());

// Instanciation de la class DisplaySvg
$displaySvg = new DisplaySvg($avatar,50);
//echo $displaySvg->displaySvg() ;

//echo $displaySvg->displaySvg(5,10);
//echo $displaySvg->render();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<svg width='600' height='600' version='1.1' xmlns='http://www.w3.org/2000/svg'>
  <?php
  
  echo $displaySvg->render();
 
  ?>  
   </svg>
</body>
</html>



