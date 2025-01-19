<?php
$servername = "localhost"; // Adres serwera (domyślnie localhost)
$username = "lwc21152";        // Domyślna nazwa użytkownika w XAMPP
$password = "Kamilek123!";            // Domyślne hasło w XAMPP (puste)
$dbname = "lwc2115";   // Nazwa Twojej bazy danych (zmień na własną)

// Tworzenie połączenia z bazą danych
$conn = new mysqli($servername, $username, $password, $dbname);

// Sprawdzanie połączenia
if ($conn->connect_error) {
    die("Błąd połączenia: " . $conn->connect_error);
}
?>
