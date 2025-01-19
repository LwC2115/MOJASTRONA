<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Dołącz plik z połączeniem do bazy danych
    require_once 'db_connect.php';

    // Pobranie i walidacja danych z formularza
    $firstName = trim($_POST['first_name'] ?? '');
    $lastName = trim($_POST['last_name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if (empty($firstName) || empty($lastName) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Niepoprawne dane. Uzupełnij wszystkie wymagane pola.";
        exit();
    }

    // Przygotowanie zapytania SQL
    $stmt = $conn->prepare("INSERT INTO contact_messages (first_name, last_name, email, message) VALUES (?, ?, ?, ?)");
    if (!$stmt) {
        echo "Błąd przygotowania zapytania: " . $conn->error;
        exit();
    }

    $stmt->bind_param("ssss", $firstName, $lastName, $email, $message);

    // Wykonanie zapytania
    if ($stmt->execute()) {
        header("Location: ../index.php?success=1"); // Przekierowanie po sukcesie
        exit();
    } else {
        echo "Błąd podczas zapisywania wiadomości: " . $stmt->error;
    }

    // Zamknięcie zapytania i połączenia
    $stmt->close();
    $conn->close();
}
?>
