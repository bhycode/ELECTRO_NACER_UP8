<?php

class Order {

    private $order_id;
    private $creation_date;
    private $shipping_date;
    private $delivery_date;
    private $total_price;
    private $bl;
    private $client;
    private $orderproducts;
    

    




    public function getOrderId()
    {
        return $this->order_id;
    }

    public function setOrderId($order_id): self
    {
        $this->order_id = $order_id;

        return $this;
    }


    public function getCreationDate()
    {
        return $this->creation_date;
    }


    public function setCreationDate($creation_date): self
    {
        $this->creation_date = $creation_date;

        return $this;
    }

    public function getShippingDate()
    {
        return $this->shipping_date;
    }

    public function setShippingDate($shipping_date): self
    {
        $this->shipping_date = $shipping_date;

        return $this;
    }

    public function getDeliveryDate()
    {
        return $this->delivery_date;
    }

    public function setDeliveryDate($delivery_date): self
    {
        $this->delivery_date = $delivery_date;

        return $this;
    }

    public function getTotalPrice()
    {
        return $this->total_price;
    }

    /**
     * Set the value of total_price
     */
    public function setTotalPrice($total_price): self
    {
        $this->total_price = $total_price;

        return $this;
    }

    /**
     * Get the value of bl
     */
    public function getBl()
    {
        return $this->bl;
    }

    /**
     * Set the value of bl
     */
    public function setBl($bl): self
    {
        $this->bl = $bl;

        return $this;
    }
}


?>