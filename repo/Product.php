<?php

class Product {

    private $reference;
    private $imgs;
    private $productname;
    private $barcode;
    private $purchase_price;
    private $final_price;
    private $price_offer;
    private $descrip;
    private $min_quantity;
    private $stock_quantity;
    private $category_name;
    private $bl;


    public function __construct($reference, $imgs, $productname, $barcode, $purchase_price, $final_price, $price_offer, $descrip, $min_quantity, $stock_quantity, $category_name, $bl) {
        $this->reference = $reference;
        $this->imgs = $imgs;
        $this->productname = $productname;
        $this->barcode = $barcode;
        $this->purchase_price = $purchase_price;
        $this->final_price = $final_price;
        $this->price_offer = $price_offer;
        $this->descrip = $descrip;
        $this->min_quantity = $min_quantity;
        $this->stock_quantity = $stock_quantity;
        $this->category_name = $category_name;
        $this->bl = $bl;
    }




    // Setters and Getters
    public function getReference()
    {
            return $this->reference;
    }


    public function setReference($reference): self
    {
            $this->reference = $reference;

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


    public function getProductname()
    {
            return $this->productname;
    }

    public function setProductname($productname): self
    {
            $this->productname = $productname;

            return $this;
    }


    public function getBarcode()
    {
            return $this->barcode;
    }


    public function setBarcode($barcode): self
    {
            $this->barcode = $barcode;

            return $this;
    }


    public function getPurchasePrice()
    {
            return $this->purchase_price;
    }


    public function setPurchasePrice($purchase_price): self
    {
            $this->purchase_price = $purchase_price;

            return $this;
    }

    public function getFinalPrice()
    {
            return $this->final_price;
    }


    public function setFinalPrice($final_price): self
    {
            $this->final_price = $final_price;

            return $this;
    }


    public function getPriceOffer()
    {
            return $this->price_offer;
    }


    public function setPriceOffer($price_offer): self
    {
            $this->price_offer = $price_offer;

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


    public function getMinQuantity()
    {
            return $this->min_quantity;
    }


    public function setMinQuantity($min_quantity): self
    {
            $this->min_quantity = $min_quantity;

            return $this;
    }


    public function getStockQuantity()
    {
            return $this->stock_quantity;
    }


    public function setStockQuantity($stock_quantity): self
    {
            $this->stock_quantity = $stock_quantity;

            return $this;
    }


    public function getCategoryName()
    {
            return $this->category_name;
    }


    public function setCategoryName($category_name): self
    {
            $this->category_name = $category_name;

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