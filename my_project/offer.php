<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oferta masaży</title>
    
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/styles.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="logo">
            <a href="index.php" class="logo-link">
                <h1>Robert Jurajda</h1>
                <p>Fizjoterapeuta</p>
            </a>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="index.php#about"><b>O mnie</b></a></li> <!-- Usunięto zbędną spację w adresie -->
                <li><a href="offer.php"><b>Oferta</b></a></li>
                <li><a href="index.php#services"><b>Informacje</b></a></li>
                <li><a href="index.php#contact"><b>Kontakt</b></a></li>
            </ul>
        </nav>
    </header>
    
    <!-- Main Content -->
    <main>
        <!-- Section: Massage Offers -->
        <section id="massages" class="massages-class">
            <?php 
            // Pobranie ofert masaży z bazy danych
            include 'actions/fetch_massages.php'; 
            ?>
        </section>
    </main>

    <!-- Footer -->
    <footer class="footer-section">
        <div class="footer-content">
            <div class="footer-left">
                <h3>Robert Jurajda</h3>
                <p>123-456-789 | info@mojastrona.pl</p>
                <p>Warunki korzystania ze strony internetowej</p>
            </div>
            <div class="footer-right">
                <p>© 2035 Robert Jurajda</p>
                <div class="footer-links">
                    <a href="#">Polityka prywatności</a>
                    <a href="#">Polityka plików cookie</a>
                </div>
                <div class="login-button">
                    <a href="actions/login.php" class="login-link">Zaloguj się</a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
