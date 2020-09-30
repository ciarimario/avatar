<?php



class AfficheAvatar {

    // propriétés de la class
    private $grid ;
    private $sizeCell ;


    public function __construct(avatar $grid, float $sizeCell) {

        $this->grid = $grid;
        $this->sizeCell = $sizeCell;

    }

    public function displaySvg() {

        return 
        "<svg width='200' height='250' version='1.1' xmlns='http://www.w3.org/2000/svg'>
        <rect x='10' y='10' width='$this->sizeCell.' height='$this->sizeCell.' stroke='red' fill='blue' stroke-width='5'/>
        </svg>
        ";
    }

}

$affiche = new AfficheAvatar(5,100);
echo $affiche->displaySvg() ;