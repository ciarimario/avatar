<?php

namespace App\core;

class DisplaySvg {

    // propriétés de la class
    private $grid ;
    private $sizeCell ;
    private $posX = 100 ;
    private $posY=10;

    // constructeur
    public function __construct(Avatar $grid, float $sizeCell) {

        $this->grid = $grid;
        $this->sizeCell = $sizeCell;
        $grid = $grid->getGrid();
        

    }
    /*
    * construit un rectangle svg
    *
    * return svg
    */
    public function displaySvg($posX=10, $cellColor) {

        return 
        "
        <rect x='".$this->getPosX()."' y='".$this->posY."' width='".$this->getSizeCell()."' height='".$this->getSizeCell()."' stroke='' fill='".$cellColor."' stroke-width='5'/>
        
        ";
    }
    /**
     * 
     * return le nombre de svg demandé
     * 
     */
    public function render() {
        $result ='';

        foreach($this->grid->getGrid() as $row) {
            //dump($row);
            //dump($this->grid->getSizeCell());
            $this->posY += $this->sizeCell;
            
            foreach($row as $cell) {
                
                $color =  $cell;
                $this->setPosX($this->posX += $this->sizeCell);
                
                $result .= $this->displaySvg($this->getPosX(),$color);
            }
            $this->posX = 100;
        };
        
        return $result ;
    }



    ///////////////////// GETTERS /////////////////////////
    public function getSizeCell() {
        return $this->sizeCell ;
    }

    public function getPosX() {
        return $this->posX ;
    }

    ///////////////////// SETTERS ////////////////////////////
    public function setPosX($value) {
        $this->posX = $value ;
    }

}

