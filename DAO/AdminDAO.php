<?php

require_once '../model/connexion.php';
require_once '../repo/Admin.php';

class AdminDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_admins(){
        $query = "SELECT * FROM Admins;";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $adminsData = $stmt->fetchAll();
        $adminsList = array();
        foreach ($adminsData as $admin) {
            $adminsList[] = new Admin(
                $admin["id"],
                $admin["username"],
                $admin["email"],
                $admin["pass"]
            );
        }
        return $adminsList;
    }

    public function insert_admin($Admin){
        $query = "INSERT INTO admins VALUES (NULL, '".$Admin->getUsername()."','".$Admin->getEmail()."','".$Admin->getPass()."') ";
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }

    public function update_admin($Admin){
        $query = "UPDATE `admins` SET `username`='".$Admin->getUsername()."',`email`='".$Admin->getEmail()."',`pass`='".$Admin->getPass()."' WHERE `id`= ".$Admin->getId();
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }

    public function delete_admin($id){
        $query = "DELETE FROM `admins` WHERE `id`=".$id;
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }
}

?>
