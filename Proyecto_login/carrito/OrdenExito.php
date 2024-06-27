<?php
if (!isset($_REQUEST['id'])) {
    header("Location: index.php");
    exit();
}

include 'Configuracion.php';
$orderId = $_REQUEST['id'];

// Obtiene los detalles de la orden
$orderQuery = $db->query("SELECT * FROM orden WHERE id = $orderId");
$order = $orderQuery->fetch_assoc();

// Obtiene los detalles del usuario
$userQuery = $db->query("SELECT * FROM users WHERE id = {$order['user_id']}");
$user = $userQuery->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Orden Completada - PHP Carrito de Compras</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style>
        .container {
            padding: 20px;
        }
        p {
            color: #34a853;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <ul class="nav nav-pills">
                    <li role="presentation" class="active"><a href="index.php">Volver</a></li>
                    <li role="presentation"><a href="../pagina.php">Volver al inicio</a></li>
                </ul>
            </div>
            <div class="panel-body">
                <h1>Estado de tu Requerimiento</h1>
                <p>La Orden se ha enviado exitosamente. El ID de tu pedido es <?php echo $orderId; ?>.</p>
                <p>Nombre del Usuario: <?php echo $user['username']; ?></p>
                <p>Total de la Orden: $<?php echo number_format($order['total_price'], 2); ?> CLP</p>
            </div>
        </div>
    </div>
</body>
</html>