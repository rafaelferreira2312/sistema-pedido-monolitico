<?php

require_once '../controllers/UserController.php';
require_once '../controllers/OrderController.php';

$database = new Database();
$db = $database->connect();

$userController = new UserController($db);
$orderController = new OrderController($db);

// Defina as rotas para usuários
switch ($_SERVER['REQUEST_URI']) {
    case '/users':
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $userController->index();
        } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $userController->store();
        }
        break;
    case preg_match('/\/users\/\d+/', $_SERVER['REQUEST_URI']) ? true : false:
        $id = basename($_SERVER['REQUEST_URI']);
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $userController->show($id);
        } elseif ($_SERVER['REQUEST_METHOD'] === 'PUT') {
            $userController->update($id);
        } elseif ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
            $userController->destroy($id);
        }
        break;
    
    // Defina as rotas para pedidos de maneira semelhante

    default:
        http_response_code(404);
        echo json_encode(["message" => "Route not found"]);
        break;
}
?>
