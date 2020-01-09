<?php


class OderManager
{
    protected $productDB;

    public function __construct() {
        $dbname = "mysql:host=localhost;dbname=classicmodels;charset=utf8";
        $username = "thangdo";
        $password = "@Dohuythang123";
        $db = new DBConnect($dbname, $username, $password);
        $this->productDB = new ProductDB($db->connect());
    }

    public function index()
    {
        $limit = 15;
        $current_page = isset($_GET['page']) ? $_GET['page'] : null;
        $start = $current_page * $limit;
        $total_records = $this->productDB->totalRecordsPage();
        $total_page = (int)($total_records[0]['total'] / $limit);
        $list = $this->productDB->getList($start, $limit);
        include "view/list.php";
        include_once 'view/pagination.php';
    }
    public function show()
    {
        $orderId = $_GET['id'];
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $status = $_POST['status'];
            $this->productDB->updateStatus($status, $orderId);
        }
        $order = $this->productDB->getOrder($orderId);
        include "view/order.php";
    }
}