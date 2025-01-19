<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin']) {
    header("Location: login.php");
    exit;
}

include 'db_connect.php';

// Obsługa dodawania, edycji i usuwania treści
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $duration = $_POST['duration'];

        $sql = "INSERT INTO massages (name, description, price, duration) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssdi", $name, $description, $price, $duration);
        $stmt->execute();
    }
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM massages WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        $stmt->execute();
    }
}

// Pobieranie danych masaży
$sql = "SELECT * FROM massages";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel Administratora</title>
</head>
<body>
    <h1>Panel Administratora</h1>
    <h2>Lista masaży</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Nazwa</th>
            <th>Opis</th>
            <th>Cena</th>
            <th>Czas trwania</th>
            <th>Akcja</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['price']; ?> zł</td>
                <td><?php echo $row['duration']; ?> minut</td>
                <td>
                    <form method="POST">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete">Usuń</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <h2>Dodaj nowy masaż</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Nazwa" required>
        <textarea name="description" placeholder="Opis" required></textarea>
        <input type="number" step="0.01" name="price" placeholder="Cena" required>
        <input type="number" name="duration" placeholder="Czas trwania (min)" required>
        <button type="submit" name="add">Dodaj</button>
    </form>
    
    <?php
// Pobieranie wiadomości z bazy danych
$sql = "SELECT * FROM contact_messages ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<h2>Wiadomości kontaktowe</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>E-mail</th>
        <th>Wiadomość</th>
        <th>Data</th>
        <th>Akcja</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo htmlspecialchars($row['first_name']); ?></td>
            <td><?php echo htmlspecialchars($row['last_name']); ?></td>
            <td><?php echo htmlspecialchars($row['email']); ?></td>
            <td><?php echo htmlspecialchars($row['message']); ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td>
                <form method="POST" action="delete_message.php">
                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                    <button type="submit" name="delete">Usuń</button>
                </form>
            </td>
        </tr>
    <?php endwhile; ?>
</table>



    <p><a href="logout.php">Wyloguj się</a></p>
</body>
</html>
