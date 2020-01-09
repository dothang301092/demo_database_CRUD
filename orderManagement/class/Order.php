<?php


class Order
{
    protected $id;
    protected $orderDate;
    protected $status;
    protected $customerId;
    protected $customerName;

    public function __construct($id,$orderDate,$status,$customerId,$customerName)
    {
        $this->id = $id;
        $this->orderDate = $orderDate;
        $this->status = $status;
        $this->customerId = $customerId;
        $this->customerName = $customerName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return mixed
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

}