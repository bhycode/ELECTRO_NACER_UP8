<?php

class Category {

    private $catname;
    private $descrip;
    private $imgs;
    private $bl;


    public function __constructor($catname, $descrip, $imgs, $bl) {
        $this->catname = $catname;
        $this->descrip = $descrip;
        $this->imgs = $imgs;
        $this->bl = $bl;
    }



    // Setters and Getters
    
    public function getCatname()
    {
        return $this->catname;
    }

    public function setCatname($catname): self
    {
        $this->catname = $catname;

        return $this;
    }

    public function getDescrip()
    {
        return $this->descrip;
    }

    public function setDescrip($descrip): self
    {
        $this->descrip = $descrip;

        return $this;
    }

    public function getImgs()
    {
        return $this->imgs;
    }

    public function setImgs($imgs): self
    {
        $this->imgs = $imgs;

        return $this;
    }

    public function getBl()
    {
        return $this->bl;
    }

    public function setBl($bl): self
    {
        $this->bl = $bl;

        return $this;
    }
}




?>