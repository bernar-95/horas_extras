<?php
// Configurar datos de acceso a la Base de datos
$serverName = "BERNARDINO"; // Nombre del servidor (o localhost, o MI_PC\SQLEXPRESS)
$dbname = "HorasExtras";    // Nombre de la base de datos
$dbuser = "sa";             // Usuario de la base de datos
$userpass = "Berna.3006";   // Contraseña de la base de datos

// Definir el DSN (cadena de conexión)
$dsn = "sqlsrv:Server=$serverName;Database=$dbname";

try { 
    // Crear conexión a SQL Server usando PDO
    $conn = new PDO($dsn, $dbuser, $userpass);

    // Opcional: activar manejo de errores con excepciones
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Mostrar mensaje si la conexión es correcta
    /* echo "✅ Conectado a la base correctamente!"; */
} catch (PDOException $e) {
    // Si hay error en la conexión mostrarlo
    echo "❌ Error de conexión: " . $e->getMessage();
}
?>
