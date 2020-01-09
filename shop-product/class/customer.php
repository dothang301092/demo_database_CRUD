<?php
class Customer
{
    protected $id;
    protected $status;
    protected $orderDate;
    protected $customerName;
    protected $city;

    public function __construct($id, $status, $orderDate, $customerName, $city) {
        $this->id = $id;
        $this->status = $status;
        $this->orderDate = $orderDate;
        $this->customerName = $customerName;
        $this->city = $city;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getOrderDate()
    {
        return $this->orderDate;        
    }

    public function getCustomerName()
    {
        return $this->customerName;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getId()
    {
        return $this->id;
    }

}