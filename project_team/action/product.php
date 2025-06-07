<?php
session_start();
include('../config/dbcon.php');

$value = $_POST['value']; 
$brandid = (int) $_POST['brandid']; 
$minPrice = (int) $_POST['min']; 
$maxPrice = (int) $_POST['max']; 
$page = $_POST['page'];
$limit = 10;
$totalPage = ($page - 1 ) * $limit;
// 
$sqlTotal = "SELECT COUNT(*) as Total FROM product_detail";
$resTotal = $conn->query($sqlTotal);
$rowTotal = $resTotal->fetch_array();
$total = $rowTotal['0'];

$stmt = $conn->prepare("SELECT d.id, d.brand_id, d.slug, d.barcode, d.name, d.original_price, d.sell_price,
                                   i.specification, i.description, i.image, i.demo_image
                            FROM product_detail d
                            JOIN product_image i ON d.id = i.product_id
                            WHERE d.slug = ? AND d.brand_id = ? AND d.sell_price BETWEEN ? AND ? LIMIT ?,?");
$stmt->bind_param("siiiii", $value, $brandid, $minPrice, $maxPrice,$totalPage,$limit);

$data = array();

if ($stmt->execute()) {
    $result = $stmt->get_result();

    while ($row = $result->fetch_assoc()) {
        $data[] = array(
            "id" => $row['id'],
            "name" => $row['name'],
            "sellprice" => $row['sell_price'],
            "originalprice" => $row['original_price'],
            "image" => $row['image'],
             "total" => $total,
        );
    }
    echo json_encode($data);
} else {
    echo json_encode(['error' => 'Query execution failed.']);
}

$stmt->close();

?>