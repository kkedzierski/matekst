<?php

    session_start();
    $message_send = false;
    if(isset($_SESSION['message_send'])){
        $message_send = true;
    }
     
    
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web&display=swap" rel="stylesheet">


    <!-- Icons made by <a href="https://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> -->
    <link rel="icon" href="./src/images/matekst-favicon.ico">
    

    <link rel="stylesheet" href="./src/css/main-style.css">
    <script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
    type="text/javascript"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.5/css/lightslider.min.css" rel="stylesheet" />
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.5/js/lightslider.min.js"></script>
    
    <title>Matekst</title>
</head>
<body>
    <!-- <div class="preload"><img src="http://i.imgur.com/KUJoe.gif"></div> -->
    <header>
        <video id="main_background_video" src="./src/video/background_video_write_on_paper.mp4" autoplay muted loop></video>
        <nav>
            <li><a href="#whoami">Kim jestem</a></li>
            <li><a href="#porftolio">Porftolio</a></li>
            <li><a href="#contact">Skontaktuj się</a></li>
        </nav>
        <h2 class="sentence">
            Słowa mają wielką moc! 
        </h2>
        <p class="sentence">
            Trzeba tylko umieć je odpowiednio dobrać i wykorzystać tak, by spełniały określony cel.
        </p>
    </header>
    <main>
        <section id="whoami">
            <div id="whoami-context">
                <h2>Kim jestem?</h2>
                <p>
                    Nazywam się Magdalena Kłosek i chętnie stworzę dla Państwa niepowtarzalny tekst. 
                </p>
                <p>
                    Staram się, by wszystko co wystukam na klawiaturze, było dopracowane i oryginalne. W myśl powiedzenia: <i>"jeśli ktoś jest od wszystkiego, to jest od niczego"</i>, nie udaję, że jestem świetna we wszystkim. Zgłaszam się tylko do realizacji zleceń, które "czuję", znam temat i wiem, że pisanie ich sprawi mi przyjemność, a Państwu przyniesie zamierzoną korzyść. 
                </p>
                <p>
                    Dzięki takiemu podejściu, otrzymują Państwo dobrze dopracowaną treść, która jest wiarygodna i zachęca do jej przeczytania.
                </p>
            </div>
            <div id="whoami-picture">
                <img src="./src/images/magda-profil.jpg" alt="Magdalena Kłosek">
            </div>
        </section>
        <section id="porftolio">
            <h2>Porfolio</h2>
            <ul id="lightSlider">
                <li>
                    <a href="https://docdro.id/TnJyQHj" target="_blank">
                        <img src="./src/images/portfolio items/jewlery.jfif" alt="Biżuteria">
                        <h3>Sklep jubilerski</h3>
                    </a>
                </li>
                <li>
                    <a href="https://docdro.id/D13T356" target="_blank">
                        <img src="./src/images/portfolio items/watch.jfif" alt="Zegarek">
                        <h3>Sklep z zegarkami</h3>
                    </a>
                </li>
                <li>
                    <a href="https://docdro.id/53mh7zJ" target="_blank">
                        <img src="./src/images/portfolio items/soaps.jfif" alt="Sklep z mydłami">
                        <h3>Sklep z mydłami</h3>
                    </a>
                </li>
                <li>
                    <a href="https://imgur.com/9S0bwVK" target="_blank">
                        <img src="./src/images/portfolio items/good-content.pl - logo.png" alt="Opinie z portalu goodContent">
                        <h3>Opinie z portalu good-content</h3>
                    </a>
                </li>
              </ul>
        </section>
        <section id="contact">
        <!-- If message submited correctly show this success message -->
        <?php if($message_send): ?>
                <div class="success-message">
                    <h3>Dziękuję za wiadomość, odezwę się wkrótce!</h3>
                </div>
        <?php endif; ?>

            <h2>Kontakt do mnie</h2>
            <div id="contact-content">
                <form id="email-form" method="POST" action="email_sender.php">
                    <label for="sender-email"> E-mail: </label>
                    <input type="email" id="sender-email" required name="sender-email" placeholder="Twój e-mail">
                    <label for="subject-email"> Temat: </label>
                    <input type="text" id="subject-email" required name="subject-email" placeholder="Temat wiadomości">
                    <label for="content-email"> Treść: </label>
                    <textarea id="content-email" name="content-email" required rows="4" cols="70" maxlength="500" placeholder="Treść wiadomości"></textarea>
                    <button type="submit">Wyślij wiadomość</button>
                </form>
                <div id="contact-describe">
                    <p>Jeśli Państwa celem jest reklama, zwiększenie zasięgów oraz sprzedaży, zwrócenie uwagi i zainteresowanie czytelnika, zapraszam do współpracy. Chętnie napiszę dla Państwa tekst inny niż wszystkie. Tworzę z pasją i zaangażowaniem. </p>
                    <p>
                        <strong>Czym się zajmuję</strong>
                        Teksty SEO, opisy produktów i usług, tworzenie artykułów blogowych, poradnikowych oraz reklamowych.
                    </p>
                    <p>
                        Wypełnij formularz lub napisz do mnie: <a href="mailto:magda.klosek90@gmail.com">magda.klosek90@gmail.com</a>
                    </p>
                </div>
               
            </div>
        </section>
    </main>
    <footer>
        <p>Magdalena Kłosek</p>
        <p><a href="mailto:magda.klosek90@gmail.com">magda.klosek90@gmail.com</a></p>
    </footer>
                 
    <script type="text/javascript" src="./src/js/main-script.js"></script>
</body>
</html>