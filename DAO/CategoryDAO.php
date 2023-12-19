<?php

require_once 'model/connexion.php';
require_once 'repo/Category.php';

class CategoryDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_categories(){
        $query = "SELECT * FROM Categories;";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $categoriesData = $stmt->fetchAll();
        $categoriesList = array();
        foreach($categoriesData as $category) {
            $categoriesList[] = new Category($category["catname"], $category["descrip"], $category["imgs"], $category["bl"]);
        }
        return $categoriesList;
    }

    public function insert_category($Category){
        $query = "INSERT INTO categories VALUES ('".$Category->getCatname()."','".$Category->getDescrip()."','".$Category->getImgs()."',".$Category->getBl().") ";
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }

    public function update_category($Category){
        $query = "UPDATE `categories` SET `descrip`='".$Category->getDescrip()."',`imgs`='".$Category->getImgs()."',`bl`=".$Category->getBl()." WHERE `catname`= '".$Category->getCatname()."'";
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }

    public function hide_category($catname){
        $query = "UPDATE `categories` SET `bl`= 0 WHERE `catname`= '".$catname."'";
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }
}

?>
