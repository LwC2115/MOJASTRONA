<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fizjoterapeuta - Jurajda</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- Custom Styles -->
    <link rel="stylesheet" href="assets/styles.css">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <!-- Header Section -->
    <header class="header">
        <div class="logo">
            <h1>Robert Jurajda</h1>
            <p>Fizjoterapeuta</p>
        </div>
        <nav class="nav">
            <ul>
                <li><a href="#about"><b>O mnie</b></a></li>
                <li><a href="offer.php"><b>Oferta</b></a></li>
                <li><a href="#services"><b>Informacje</b></a></li>
                <li><a href="#contact"><b>Kontakt</b></a></li>
            </ul>
        </nav>
    </header>

    <!-- Parallax Section -->
    <div class="parallax-container">
        <div class="background"></div>
        <div class="foreground">
            <div class="content">
                <h1><b>Relaks i regeneracja</b></h1> <!-- Poprawiono literówkę -->
                <p>Gabinet masażu</p>
                <a href="offer.php" class="button-link"><b>Oferta</b></a>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <div id="about" class="about-section">
        <div class="about-container">
            <div class="about-image">
                <img src="assets/img/ja.jpg" alt="Zdjęcie osoby" />
            </div>
            <div class="about-text">
                <h2><b>O mnie</b></h2>
                <p>Robert Jurajda</p>
                <p>Licencjonowany masażysta</p>
                <p>
                    Jestem pasjonatem zdrowia i dobrego samopoczucia. Od ponad 10 lat zajmuję się fizjoterapią,
                    pomagając klientom w regeneracji ciała i umysłu. Specjalizuję się w masażach relaksacyjnych,
                    leczniczych i aromaterapeutycznych, dostosowując techniki do indywidualnych potrzeb.
                    Moją misją jest wspieranie zdrowia poprzez dotyk i empatię.
                </p>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="services" class="services-section">
        <h1><b>Usługi</b></h1> <!-- Poprawiono literówkę w tagu -->
        <div class="container">
            <div id="customCarousel" class="carousel slide custom-carousel" data-ride="carousel">
              
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel" data-slide-to="1"></li>
                    <li data-target="#customCarousel" data-slide-to="2"></li>
                </ol>
        
                <!-- Slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="assets/img/chiropractic.jpg" alt="Slajd 1">
                        <div class="carousel-caption">
                            <h3>Chiropraktyka</h3>
                            <button class="open-lightbox" data-modal="lightbox-1">Czytaj więcej</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/therapy.jpg" alt="Slajd 2">
                        <div class="carousel-caption">
                            <h3>Terapia regeneracyjna</h3>
                            <button class="open-lightbox" data-modal="lightbox-2">Czytaj więcej</button>
                        </div>
                    </div>
                    <div class="item">
                        <img src="assets/img/relaxing-massage.jpg" alt="Slajd 3">
                        <div class="carousel-caption">
                            <h3>Terapia regeneracyjna</h3>
                            <button class="open-lightbox" data-modal="lightbox-3">Czytaj więcej</button>
                        </div>
                    </div>
                </div>
        
                <!-- Controls -->
                <a class="left carousel-control" href="#customCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#customCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Lightbox Modals -->
    <div class="lightbox" id="lightbox-1">
        <div class="lightbox-content">
            <span class="close">&times;</span>
            <p>
                Chiropraktyka to terapia manualna skoncentrowana na poprawie funkcjonowania układu mięśniowo-szkieletowego, szczególnie kręgosłupa. Dzięki precyzyjnym technikom terapeuta przywraca prawidłową równowagę ciała, co przekłada się na ulgę w bólu oraz poprawę ogólnego zdrowia.
            </p>
            <ul>
                <li>Łagodzenie bólu pleców i karku</li>
                <li>Korygowanie wad postawy</li>
                <li>Poprawa mobilności stawów</li>
            </ul>
        </div>
    </div>
    
    <div class="lightbox" id="lightbox-2">
        <div class="lightbox-content">
            <span class="close">&times;</span>
            <p>
                Terapia regeneracyjna to kompleksowa usługa, która wspomaga procesy odbudowy organizmu. Dzięki zastosowaniu zaawansowanych technik masażu i regeneracji, terapia jest idealna dla osób aktywnych fizycznie lub szukających ulgi po stresującym okresie.
            </p>
            <ul>
                <li>Poprawa krążenia krwi</li>
                <li>Przyspieszenie regeneracji mięśni</li>
                <li>Głębokie odprężenie i redukcja napięcia</li>
            </ul>
        </div>
    </div>

    <div class="lightbox" id="lightbox-3">
        <div class="lightbox-content">
            <span class="close">&times;</span>
            <p>
                Masaż relaksacyjny to idealna forma odprężenia po ciężkim dniu. Delikatne i płynne ruchy pomagają zniwelować napięcie mięśniowe, uspokoić umysł oraz poprawić ogólne samopoczucie. Masaż wykonywany jest z użyciem naturalnych olejków eterycznych, które dodatkowo wspierają proces relaksacji.
            </p>
            <ul>
                <li>Zmniejszenie stresu i poprawa nastroju</li>
                <li>Rozluźnienie napiętych mięśni</li>
                <li>Poprawa jakości snu</li>
            </ul>
        </div>
    </div>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="contact-container">
            <h2><b>Skontaktuj się</b></h2>
            <p>123-456-789 | info@mojastrona.pl</p>
            <p>ul. Witrynowa 1, 01-001 Warszawa, Polska</p>
            
            <form class="contact-form" method="POST" action="actions/submit_contact.php">
                <div class="form-row">
                    <div class="form-group">
                        <label for="first-name">Imię *</label>
                        <input type="text" id="first-name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last-name">Nazwisko *</label>
                        <input type="text" id="last-name" name="last_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">E-mail *</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="message">Wiadomość</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <button type="submit" class="submit-btn">Prześlij</button>
            </form>
        </div>
    </section>

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

    <!-- Custom Script -->
    <script src="assets/script.js"></script>
</body>
</html>
