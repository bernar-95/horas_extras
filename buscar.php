<?php
//Incluimos la conexión, aquí queda de manera global para todos los //archivos que incluyan el header.php
include_once "conexion_sqlserver.php";

$cedula = isset($_GET['cedula']) ? trim($_GET['cedula']) : '';

$query = "SELECT * FROM empleados WHERE cedula = :cedula";
$stmt  = $conn->prepare($query);
$stmt->bindParam(":cedula", $cedula, PDO::PARAM_STR);
$stmt->execute();
$resultado = $stmt->fetch(PDO::FETCH_ASSOC);

$res = [];

$res[] = $resultado;

echo json_encode($res);
