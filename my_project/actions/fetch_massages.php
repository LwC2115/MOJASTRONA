<?php
include 'db_connect.php';

$sql = "SELECT * FROM massages";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table class='massage-table'>";
    echo "<thead>";
    echo "<tr><th>Nazwa</th><th>Opis</th><th>Cena</th><th>Czas trwania</th></tr>";
    echo "</thead>";
    echo "<tbody>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['description']) . "</td>";
        echo "<td>" . htmlspecialchars($row['price']) . " zł</td>";
        echo "<td>" . htmlspecialchars($row['duration']) . " minut</td>";
        echo "</tr>";
    }
    echo "</tbody>";
    echo "</table>";
} else {
    echo "<p>Brak dostępnych masaży w ofercie.</p>";
}

$conn->close();
?>
