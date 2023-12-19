<?php

require_once '../model/connexion.php';
require_once '../repo/Client.php';

class ClientDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_clients(){
        $query = "SELECT * FROM Clients;";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $clientsData = $stmt->fetchAll();
        $clientsList = array();
        foreach ($clientsData as $client) {
            $clientsList[] = new Client(
                $client["id"],
                $client["fullname"],
                $client["username"],
                $client["email"],
                $client["phonenumber"],
                $client["adresse"],
                $client["city"],
                $client["passw"],
                $client["valide"]
            );
        }
        return $clientsList;
    }

    public function insert_client($Client){
        $query = "INSERT INTO clients VALUES (NULL, '".$Client->getFullname()."','".$Client->getUsername()."','".$Client->getEmail()."','".$Client->getPhonenumber()."','".$Client->getAdresse()."','".$Client->getCity()."','".$Client->getPassw()."',".$Client->getValide().") ";
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }

    public function update_client($Client){
        $query = "UPDATE `clients` SET `fullname`='".$Client->getFullname()."',`username`='".$Client->getUsername()."',`email`='".$Client->getEmail()."',`phonenumber`='".$Client->getPhonenumber()."',`adresse`='".$Client->getAdresse()."',`city`='".$Client->getCity()."',`passw`='".$Client->getPassw()."',`valide`=".$Client->getValide()." WHERE `id`= ".$Client->getId();
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }

    public function delete_client($id){
        $query = "DELETE FROM `clients` WHERE `id`=".$id;
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }
}

?>
