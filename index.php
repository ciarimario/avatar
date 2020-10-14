<?php

namespace mario ;

// autoloader
require 'vendor/autoload.php';

// inclusion des dépendanceq
use App\core\Avatar;
use App\core\DisplaySvg;

// Vérification si les infos ont été transmises
$size = isset($_GET['size']) ? $_GET['size'] : 4;
$color = isset($_GET['nb_color']) ? $_GET['nb_color'] : 2;

// tableau des couleurs
$colors = ['yellow','red','orange','blue','black','white','brown'];
// couleurs tirées au hasard
$colorRamdom = [];
// ramdom des n couleurs
for($i=0 ; $i<$color ; $i++) {
   $rand = mt_rand(0,count($colors)-1);
  
   do {
       
    $rand = mt_rand(0,count($colors)-1);

    }
   while(in_array($colors[$rand], $colorRamdom));
   
       array_push($colorRamdom , $colors[$rand]);
}



var_dump($colorRamdom);

// Instanciation de la class Avatar
$avatar = new Avatar($size ,$colorRamdom);
//dump($avatar->getGrid());

// Instanciation de la class DisplaySvg
$displaySvg = new DisplaySvg($avatar,100);
//echo $displaySvg->displaySvg() ;

//echo $displaySvg->displaySvg(5,10);
//echo $displaySvg->render();



// template
include 'views/index.phtml';



