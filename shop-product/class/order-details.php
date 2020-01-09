<?php
class OrderDetails
{
    protected $customerName;
    protected $phone;
    protected $status;
    protected $productCode;
    protected $productName;
    protected $buyPrice;
    protected $quantityOrdered;
    
    public function __construct($productCode, $customerName, $status, $phone, $productName, $buyPrice, $quantityOrdered) {
        $this->productCode = $productCode;
        $this->customerName = $customerName;
        $this->status = $status;
        $this->phone = $phone;
        $this->productName = $productName;
        $this->buyPrice = $buyPrice;
        $this->quantityOrdered = $quantityOrdered;
    }

    /**
     * Get the value of customerName
     */ 
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * Get the value of phone
     */ 
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Get the value of productCode
     */ 
    public function getProductCode()
    {
        return $this->productCode;
    }

    /**
     * Get the value of productName
     */ 
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Get the value of buyPrice
     */ 
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * Get the value of quantityOrdered
     */ 
    public function getQuantityOrdered()
    {
        return $this->quantityOrdered;
    }
}