<?php

require_once '../model/connexion.php';
require_once '../repo/Order.php';

class OrderDAO {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function get_orders(){
        $query = "SELECT * FROM Orders;";
        $stmt = $this->db->query($query);
        $stmt->execute();
        $ordersData = $stmt->fetchAll();
        $ordersList = array();
        foreach ($ordersData as $order) {
            $ordersList[] = new Order(
                $order["order_id"],
                $order["creation_date"],
                $order["shipping_date"],
                $order["delivery_date"],
                $order["total_price"],
                $order["bl"]
            );
        }
        return $ordersList;
    }

    public function insert_order($Order){
        $query = "INSERT INTO orders VALUES (NULL, '".$Order->getCreationDate()."','".$Order->getShippingDate()."','".$Order->getDeliveryDate()."',".$Order->getTotalPrice().",".$Order->getBl().") ";
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }

    public function update_order($Order){
        $query = "UPDATE `orders` SET `creation_date`='".$Order->getCreationDate()."',`shipping_date`='".$Order->getShippingDate()."',`delivery_date`='".$Order->getDeliveryDate()."',`total_price`=".$Order->getTotalPrice().",`bl`=".$Order->getBl()." WHERE `order_id`= ".$Order->getOrderId();
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }

    public function delete_order($order_id){
        $query = "DELETE FROM `orders` WHERE `order_id`=".$order_id;
        echo $query;
        $stmt = $this->db->query($query);
        $stmt->execute();
    }
}

?>
