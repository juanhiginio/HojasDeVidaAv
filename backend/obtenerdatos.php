<?php
session_start();
$conn = include('connection.php'); 

try {
    $sql = "SELECT id_registro, marca, activoFijo, serial FROM datoshardware ORDER BY id_registro ASC";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $dispositivos = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
