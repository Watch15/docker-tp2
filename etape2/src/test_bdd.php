<?php
$servername = "db"; // Nom du service dans Docker Compose
$username = "root";
$password = "rootpassword";
$dbname = "test_db";

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifiez la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Requête de lecture
$result = $conn->query("SELECT * FROM your_table_name");
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Data: " . $row["data_column"];
    }
} else {
    echo "0 results";
}

// Requête d'écriture
$conn->query("INSERT INTO your_table_name (data_column) VALUES ('New Data')");

$conn->close();
?>
