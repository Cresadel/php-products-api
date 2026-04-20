<?php
header("Content-Type: application/json");

// Mock Data
$products = [
    ["id" => 1, "product" => "Laptop", "price" => 50000],
    ["id" => 2, "product" => "Phone", "price" => 20000]
];

$method = $_SERVER['REQUEST_METHOD'];

// API Logic
switch ($method) {
    case 'GET':
        echo json_encode($products);
        break;
    case 'POST':
        echo json_encode(["message" => "Product Created"]);
        break;
    case 'PUT':
        echo json_encode(["message" => "Product Updated"]);
        break;
    case 'DELETE':
        echo json_encode(["message" => "Product Deleted"]);
        break;
    default:
        echo json_encode(["message" => "Method Not Allowed"]);
        break;
}
?>
