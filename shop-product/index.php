<?php
include_once 'view/header.php';
$page = isset($_GET['page']) ? $_GET['page'] : null;
$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : null;

             switch ($page) {
                case "list.php":
                    $orderManager->index();
                    break;
                case "order.php":
                    $orderManager->show();
                    break;
                default:
                    $orderManager->index();
            }

include_once 'view/footer.php';