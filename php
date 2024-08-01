<?php
header('Content-Type: application/json');
header("Access-Control-Allow-Origin: *");

$user = $_GET['username'] ?? null;
$pass = $_GET['password'] ?? null;

$products = [
    ['name' => 'Bulad', 'price' => 100, 'picture' => '[1]'],
    ['name' => 'shampoo', 'price' => 100, 'picture' => '[2]'],
    ['name' => 'coke', 'price' => 100, 'picture' => '[3]'],
    ['name' => 'tissue', 'price' => 100, 'picture' => '[4]'],
    ['name' => 'ice candy', 'price' => 100, 'picture' => '[6]'],
    ['name' => 'biscuit', 'price' => 100, 'picture' => '[5]'],
    ['name' => 'surf powder', 'price' => 100, 'picture' => '[7]'],
    ['name' => 'pizza', 'price' => 100, 'picture' => '[8]'],
];

$accounts = [
    ['username' => 'valle', 'password' => 'password', 'name' => 'christian mark']
];

$response = ['success' => false];

foreach ($accounts as $account) {
    if ($account['username'] === $user && $account['password'] === $pass) {
        $response = ['success' => true, 'name' => $account['name']];
        break;
    }
}

echo json_encode($response);
?>
