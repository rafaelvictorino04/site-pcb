<?php
// COPIA O ENDPOINT DO PAINEL DO RDS AWS
$host = "database-1.cjoum22mgvd4.eu-north-1.rds.amazonaws.com"; 
$user = "admin";
$pass = "ProvaCloud123";
$db   = "mysql"; 

$conn = new mysqli($host, $user, $pass, $db);

echo "<h1>Azure Docker -> AWS RDS</h1>";
if ($conn->connect_error) {
    echo "Erro: " . $conn->connect_error;
} else {
    echo "<h2>Conectado com sucesso à AWS!</h2>";
}
?>
