<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>

    <?php
        include("../common/header.php");
    ?>

    <div class="flex"></div>

    <!-- Section Welkom -->
    <section id="welkom"> 
        <div>
            <h2><b>welkom</b></h2><br>
            <p>
                <b>welkom</b> op de website van de lan-party.<br>
                We houden de lan party bij Curio Roosendaal, locatie Knippein 11,<br>
                We organiseren deze lan-party met het doel om nieuwe leerlingen te leren kennen<br>
                maar natuurlijk ook om een fijne avond te hebben tijdens dit gezellige evenement.<br>
                Mocht je interesse hebben kijk dan eens onderaan bij <a href="#inschrijven"><u>inschrijven</u></a>.
            </p>
        </div>

        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2481.861144029798!2d4.4690135159725175!3d51.53410661657076!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c41721d96284c3%3A0x3656c7617d279489!2sCurio%2C%20Knipplein%2011!5e0!3m2!1snl!2snl!4v1632605198714!5m2!1snl!2snl" width="450" height="300" allowfullscreen="" loading="lazy"></iframe>
        </div>    
    </section>

        <!-- Section Info -->
        <center>
            <section id="info"> 
                <center><h2>info</h2></center>
                <div class="flexrowinfo">

                    <!-- Kopje benodigdheden -->
                    <div class="benodigdheden">
                        <h1><b>Benodigdheden</b></h1>
                        <p> Wat je mee moet nemen:<br>
                            - Apparatuur<br>
                            - Een stekkerdoos<br>
                            - 5 euro voor entree<br>
                            <img class="lanpartyimg" src="../img/lan-party.jpg" alt="lanparty">
                        </p>
                    </div>

                    <!-- Kopje regels -->
                    <div>
                        <h1><b>Regels</b></h1>
                        <p>
                            De regels die tijdens de lan-party gelden:<br>
                            - Gedraag je netjes<br>
                            - Geen alcohol<br>
                            - Roken alleen buiten<br>
                            - Geen luidsprekers of speakers<br>
                            - Eten wel meenemen, maar niet bestellen op school<br>
                            - Geen downloads uitvoeren gedurende de lan-party<br>
                            - Maak er geen puinhoop van en laat de lokalen netjes achter
                            <br>
                            <br>
                            Kun je niet aan de regels houden, zal je helaas het pand moeten verlaten...<br>
                            Ongeacht het tijdstip.
                            <br><br>
                            <b>Zorg dat je je spullen niet kwijt raakt!</b>
                        </p>
                    </div>

                    <!-- Kopje Discord -->
                    <div>
                        <h1><b>Discord</b></h1>
                        <p>
                            Mocht je geïnteresseerd zijn dan kan je onze Discord joinen.<br>
                            Deze server gaan we gebruiken voor aankondigingen en om te<br>
                            kunnen communiceren tijdens het gamen.<br>
                            Klik op het logo hier onder om mee te doen.<br>
                        </p>
                        <a href="https://discord.gg/VBs9c74Y"><img class="dclogo" src="../img/discordlogo.png" alt="discord"></a>
                    </div> 
                </div>
            </section>
        </center>

    <!-- Section Games -->
    <section id="games"> 
        <center>
            <b>Games</b>
            <div class="gameflexrow">
                <div class="gameplaatjes">
                    <a href="https://playvalorant.com/en-gb/"><img class="valorant" src="../img/valorant.png" alt="valorant"></a>
                    <a href="https://store.steampowered.com/app/945360/Among_Us/"><img class="amongus" src="../img/amongus.jpg" alt="amongus"></img></a>
                    <a href="https://www.rocketleague.com/"><img class="rocketleague" src="../img/rocketleague.png" alt="rocketleague"></img></a>
                    <a href="https://www.minecraft.net/nl-nl"><img class="minecraft" src="../img/mc.jpg" alt="minecraft"></img></a>
                    <a href="https://www.rockstargames.com/V/"><img class="gtav" src="../img/gtav.jpg" alt="GTA V"></img></a>
                    <a href="https://www.leagueoflegends.com/en-gb/"><img class="leagueoflegends" src="../img/lol.jpg" alt="leagueoflegends"></img></a>
                </div>
            </div>
        </center>
    </section>
    
    <!-- Section Inschrijven & Foto's -->
    <section id="inschrijven"> 
        <div class="inschrijvenflex">

            <!-- Inschrijving -->
            <div class="inschrijven">
                <center>
                    <h2>inschrijven</h2>
                    <p>Ben jij een student van deze school en ben je geïnteresseerd?<br>
                    meld je dan nu aan door op de onderstaande knop te kliken! </p>
                    <a href="form.php">INSCHRIJVING</a>
                </center>
            </div>

            <!-- Foto's -->
            <div class="fotos">
                <center>
                    <h2>Foto's</h2>
                    <p>Wil je foto's van dit/andere lan-party's bekijken?<br>
                    Klik dan op de onderstaande knop!</p>
                    <a href="../pages/home.php">WORK IN PROGRESS</a>
                </center>
            </div>
        </div>
    </section>

    <!-- Footer Credits -->
    <footer>
        <center><h1>Credits</h1>
            <p>
                * Een evenement van studenten voor studenten.<br>
                * Vrijwilligers voor het meehelpen bij het evenement<br>
                * De docenten en betrokkenen voor de organisatie van het evenement<br>
            </p>
        </center>

        <div class="wrapper">

            <!-- Youtube -->
            <div class="button">
                <div class="icon">
                    <a class="yt" href="https://www.youtube.com">
                    <i class="fab fa-youtube"></i>
                </div>
                    <span>YouTube</span>
                    </a>
            </div>

            <!-- Discord -->
            <div class="button">
                <div class="icon">
                    <a class="discord" href="https://discord.gg/VBs9c74Y">
                    <i class="fab fa-discord"></i>
                </div>
                <span><b>Discord</b></span>
                    </a>
            </div>

            <!-- Instagram -->
            <div class="button">
                <div class="icon">
                    <a class="insta" href="https://www.instagram.com/">
                    <i class="fab fa-instagram"></i>
                </div>
                <span><b>Instagram</b></span>
                    </a>
            </div>

            <!-- Spotify -->
            <div class="button btnspoty">
                <div class="icon">
                    <a class="insta" href="https://open.spotify.com/playlist/4hzdF6oyAi171dhUihyuvs?si=e50a5e3098bf4aed/">
                    <img id="spotify" src="../img/spotifyicon1.png" alt="" width="30" height="30">
                </div>
                <span><b>spotify</b></span>
                    </a>
            </div>
        </div>
    </footer>
    
    <!-- Javascript -->
    <script>
        var img = document.getElementById('spotify');
        var btn = document.querySelector('.btnspoty');
        btn.onmouseout = function () {
        img.src = '../img/spotifyicon1.png';
        img.style = ' transform: scale(1);'
        };

        btn.onmouseover = function () {
        img.src = '../img/spotifyicongreen.png';
        img.style = 'transform: scale(1.2)';
        };
    </script>
dit is een test text.




