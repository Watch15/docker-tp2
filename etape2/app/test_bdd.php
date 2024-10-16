<?php
$servername = "db"; // Nom du conteneur pour MariaDB
$username = "user";
$password = "password";
$dbname = "mydatabase";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CRUD operations
// Create
$sql = "INSERT INTO test_table (value) VALUES (RAND())";
$conn->query($sql);

// Read
$result = $conn->query("SELECT value FROM test_table ORDER BY id DESC LIMIT 1");
$row = $result->fetch_assoc();
echo "Latest value: " . $row['value'];

$conn->close();
?>
