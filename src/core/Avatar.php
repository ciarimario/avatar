<?php
namespace App\core;



//////////////////////////////////////////////



class Avatar {


    // les proriétés de la class

    private $gridWidth; // Nombre de colonnes 
    private $gridHeight;
    private $colors; // tableau des couleurs
    private $grid;


    // le constructeur
    public function __construct(int $gridWidth = 5,array $colors = ['yellow','purple','red']) {

        $this->gridWidth = $gridWidth ;
        $this->gridHeight = $gridWidth;
        $this->colors = $colors;
        $grid = $this->createGrid();
        $this->grid = $grid ;

        
    }
    /*
    *Méthode qui permet de générer la grille
    *
    *
    */
    private function createGrid() {
        // on stocke dans une variable la propriété colors qui contient le tableau des couleurs
        $colors = $this->colors ;

        // Notre grille qui est vide au départ
        $grid=[];
        
        // création des lignes en fonction du nb de lignes voulues (gridWidth)
        for($i =0 ; $i < $this->gridWidth ; $i++) {
            // création d'une ligne
            $row= [] ; 
            for($b=0 ; $b < $this->gridWidth/2 ; $b++) {
                // index aléatoire du array colors 
                $index = mt_rand(0,count($colors)-1);
                // Remplissage de chaque ligne par des couleurs aléatoire
                //array_push($row, $colors[$index]);

                // remplissage symétrique
                $row[$b] = $colors[$index] ;
                // on assigne la même valeur à la case symétrique
                $row[($this->gridWidth - $b) -1] = $row[$b] ;

                // on trie dans l'ordre les indices du tableau row
                ksort($row);


                
            }
            array_push($grid,$row);
            
            
            
        }
        return $grid;
        
        
    }

    // GETTERS
    public function getGrid() {
        return $this->grid ;
    }

    public function getSizeCell() {
        return $this->gridWidth ;
    }

    public function getColors() {
        return $this->colors;
    }

    // SETTERS


}








