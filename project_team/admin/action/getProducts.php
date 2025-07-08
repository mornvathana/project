<?php
    session_start();
    include('../../config/dbcon.php');

    $page = isset($_POST['page']) ? (int)$_POST['page'] : 1;
    $limit = isset($_POST['limit']) ? (int)$_POST['limit'] : 10;
    $filterData = $_POST['filterData'] ?? '';
    $totalPage = ($page - 1) * $limit;

    $orderBy = match ($filterData) {
        'asc' => "ORDER BY d.name ASC",
        'desc' => "ORDER BY d.name DESC",
        default => "ORDER BY d.id DESC",
    };


    $sql = "SELECT COUNT(*) as Total 
            FROM product_detail d 
            JOIN product_image i ON d.id = i.product_id";
    $sTotal = $conn->query($sql);
    $rTotal = $sTotal->fetch_assoc();
    $total = $rTotal['Total'];

    $query = "SELECT d.id,d.brand_id,d.slug,d.barcode,d.name,d.original_price,d.sell_price,
                    i.specification,i.description,i.image,i.demo_image,i.created_at 
            FROM product_detail d 
            JOIN product_image i ON d.id = i.product_id 
            $orderBy 
            LIMIT $totalPage, $limit";

    $order = $conn->query($query);
    $Data = [];

    if ($order->num_rows > 0) {
        while ($row = $order->fetch_assoc()) {
            $id = $row['created_by'] ?? 24;
            $userName = '';
            $sql = $conn->query("SELECT * FROM users WHERE id = $id");
            if($sql->num_rows > 0){
                foreach($sql as $item){
                    $userName = $item['name'];
                }
            }
            $Data[] = [
                "id" => $row['id'],
                "barcode" => $row['barcode'],
                "name" => $row['name'],
                "total" => $total,
                "date" => $row['created_at'],
                "user_id" => $userName,
            ];
        }
        echo json_encode($Data);
    } else {
        echo json_encode([]);
    }
?>
