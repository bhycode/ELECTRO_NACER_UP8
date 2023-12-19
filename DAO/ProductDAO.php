<?php

require_once 'model/connexion.php';
require_once 'repo/Product.php';


class ProductDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_products(){
        $query = "SELECT * FROM products;";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $productsData = $stmt->fetchAll();
        $productsList = array();
        foreach ($productsData as $product) {
            $productsList[] = new Product($product["reference"],$product["imgs"],$product["productname"], $product["barcode"],$product["purchase_price"],$product["final_price"],$product["price_offer"],$product["descrip"],$product["min_quantity"],$product["stock_quantity"],$product["category_name"],$product["bl"]);
        }
        return $productsList;

    }


    public function get_popular_products(){
        $query = "SELECT * FROM products LIMIT 6;";
        $stmt = $this->db->query($query);
        $stmt -> execute();
        $productsData = $stmt->fetchAll();
        $productsList = array();
        foreach ($productsData as $product) {
            $productsList[] = new Product($product["reference"],$product["imgs"],$product["productname"], $product["barcode"],$product["purchase_price"],$product["final_price"],$product["price_offer"],$product["descrip"],$product["min_quantity"],$product["stock_quantity"],$product["category_name"],$product["bl"]);
        }
        return $productsList;

    }


    public function insert_product($Product){
        $query= "INSERT INTO products VALUES (0,'".$Product->getImgs()."','".$Product->getProductname()."',".$Product->getBarcode().",".$Product->getPurchase_price().",".$Product->getFinal_price().",".$Product->getPrice_offer().",'".$Product->getDescrip()."',".$Product->getMin_quantity().",".$Product->getStock_quantity().",'".$Product->getCategory_name()."',".$Product->getBl().") ";
        echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();

    }

    public function update_product($Product){
        $query = "UPDATE `products` SET `imgs`='".$Product->getImgs()."',`productname`='".$Product->getProductname()."',`barcode`=".$Product->getBarcode().",`purchase_price`=".$Product->getPurchase_price().",`final_price`=".$Product->getFinal_price().",`price_offer`=".$Product->getPrice_offer().",`descrip`='".$Product->getDescrip()."',`min_quantity`=".$Product->getMin_quantity().",`stock_quantity`=".$Product->getStock_quantity().",`category_name`='".$Product->getCategory_name()."',`bl`=".$Product->getBl()." WHERE `reference`= ".$Product->getReference();
        echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }

    public function hide_product($id){
        $query = "UPDATE `products` SET `bl`= 0 WHERE `reference`=" . $id ;

        echo $query;
        $stmt = $this->db->query($query);
        $stmt -> execute();
    }


}


?>