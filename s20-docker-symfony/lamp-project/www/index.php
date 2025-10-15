<?php
$servername = "db";
$username = "user";
$password = "userpass";
$dbname = "testdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connexion échouée : " . $conn->connect_error);
}

$result = $conn->query("SELECT * FROM quotes");

echo "<h1>💬 Citations depuis MySQL</h1>";

while ($row = $result->fetch_assoc()) {
  echo "<p><strong>{$row['author']}</strong> — {$row['message']}</p>";
}

$result2 = $conn->query("SELECT * FROM recipe");

echo "<h2> recettes de cuisines littéraire :</h2>";

while ($row2 = $result2->fetch_assoc()) {
  echo "<p><strong>{$row2['title']}</strong> — {$row2['description']} - temps de préparation : {$row2['time']}</p>";
}

$conn->close();
?>
