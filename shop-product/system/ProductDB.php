<?php
class ProductDB
{
    protected $conn;
    
    public function __construct($connect) {
        $this->conn = $connect;
    }

    public function getList($start, $limit)
    {
        $sql = "SELECT o.orderNumber, o.status, o.orderDate, c.customerName,c.city 
        FROM customers c
        INNER JOIN orders o ON c.customerNumber = o.customerNumber LIMIT $start, $limit";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];
        foreach ($result as $item){
            $customer = new Customer($item['orderNumber'], 
                                     $item['status'],
                                     $item['orderDate'], 
                                     $item['customerName'], 
                                     $item['city']);
            array_push($arr, $customer);
        }
        return $arr;
    }

    public function getOrder($id)
    {
        $sql = "SELECT c.customerName, c.phone, o.status, p.productCode, p.productName, p.buyPrice, od.quantityOrdered 
        FROM customers c
        INNER JOIN orders o ON c.customerNumber = o.customerNumber
        INNER JOIN orderdetails od ON o.orderNumber = od.orderNumber
        INNER JOIN products p ON od.productCode = p.productCode
        WHERE o.orderNumber = $id";
        $stmt = $this->conn->query($sql);
        $result = $stmt->fetchAll();
        $arr = [];

        foreach($result as $item){
            $orderDetails = new OrderDetails($item['productCode'],
                                             $item['customerName'],
                                             $item['status'],
                                             $item['phone'],
                                             $item['productName'],
                                             $item['buyPrice'],
                                             $item['quantityOrdered']);
            array_push($arr, $orderDetails);
        }
        return $arr;
    }
    public function updateStatus($status, $orderId)
    {
        $sql = "UPDATE orders SET status = ? WHERE orderNumber = ?";
        $stmt= $this->conn->prepare($sql);
        $stmt->execute([$status, $orderId]);
    }

    
    public function totalRecordsPage()
    {
        $sql = "SELECT COUNT(orderNumber) as total FROM `orders` ";
        $stmt = $this->conn->query($sql);
        $totals = $stmt->fetchAll();
        return $totals;
    }
}