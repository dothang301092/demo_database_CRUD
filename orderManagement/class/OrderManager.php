<?php
include_once "../database/OderDB.php";
include_once "../database/connectDB.php";

class OrderManager
{
    protected $orderDB;
    public function __construct()
    {
       $connect = new connectDB("mysql:host=localhost;dbname=classicmodels","thangdo", "@Dohuythang123");
       $this->orderDB = new OderDB($connect->connect());
    }

    public function index()
    {
        $orders = $this->orderDB->getAll();
        include_once "View/list.php";
    }

    public function show()
    {
        $orderId = $_GET['orderId'];
        $order = $this->orderDB->findById($orderId);
        $status = ['disputed', 'shipped', 'In process', 'Canceled'];
        include_once "View/orderDetail.php";
    }

    public function updateStatus()
    {
        $orderId = $_POST['orderId'];
        $status = $_POST['status'];
        $order = $this->orderDB->updateStatus($status,$orderId);
        include_once "View/orderDetail.php";
    }

}