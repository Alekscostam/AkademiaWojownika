<?php

$message_sent = '0';

if (isset($_POST['submit'])) {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "awzlotysmok@awzlotysmok.pl";

        $headers = "Wiadomość ze strony Akademii od:\n$name $surname.\n" .
            "Email: $email.";

        $secretKey = "6LdpmNsaAAAAACh7-O3ML742LM26QSDUAtteNca0";
        $responseKey = $_POST['g-recaptcha-response'];
        $UserIP = $_SERVER['REMOTE_ADDR'];
        $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";
        $response = file_get_contents($url);
        $response = json_decode($response);

        if ($response->success) {
            $message_sent == '1';
            mail($to, $subject, $message, $headers);
            ?>
            <script language="javascript" type="text/javascript">
            window.location.href = 'http://www.awzlotysmok.pl/?success';
            </script>
            <?php
        } else {
            $message_sent =  '2';
        }
    } else {
        $message_sent =  '2';
    }
}

?>
<style>
    <?php include './CSS/style.css'; ?><?php include './js/main.js'; ?>
</style>

<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="shortcut icon" type="image/x-icon" href="./img/Loga/logo-smok.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Akademia Wojowników powstała z pasji do sportu oraz chęci zarażenia nią najmłodszych, to miejsce, w którym zadbamy o prawidłowy rozwój Twojego dziecka, uczymy pokonywania własnych słabości i współpracy z rówieśnikami. Zajęcia sportowe z elementami sportów walki są idealnym sposobem na wypełnienie wolnego czasu, a także budowanie sprawności fizycznej i pewności siebie u dzieci. Zajęcia prowadzone są w oparciu o najnowsze metody treningowe przez doświadczonych trenerów.">
    <title>Akademia Wojowników Bydgoszcz: Sport Zabawa Integracja - Treningi dla dzieci</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="CSS/style.css" rel="stylesheet">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javascript" src="./js/main.js"></script>
    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <link rel="stylesheet" type="text/css" href="./lightbox.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <link href='https://css.gg/add.css' rel='stylesheet'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <?php include('./header.php'); ?>
    </header>
    <!--- Image Slider -->

    <div style="padding-top: 52px;;"></div>
    <div class="col-lg-12 text-dark" style="height:85%;">
        <video controls autoplay loop muted="muted" id="myVideo" controls poster="./img/miniatura.png" title="Sport Zabawa Integracja">
             <source preload="auto" src="./Video/AK.mp4" type="video/mp4"> 
            <source preload="auto" src="./Video/AK.mp4" type="video/mp4">
        </video>
    </div>
    

    <section id="Akademia"></section>
    <h1 title="Sport Zabawa Integracja" class="text-dark pb-4 text-center top-text " id="header-styler" >
    <div style="padding-top: 30px;" >
        <a class="sport " style="color:red; text-shadow: 0px 1px 1px #000!important;">SPORT</a>&nbsp;
        <a class="zabawa" style="color:black;  text-shadow: 0px 1px 1px #000!important;">ZABAWA</a>&nbsp;
        <a class="integracja" style="color:rgb(255, 200, 0);  text-shadow: 0px 1px 1px #000!important;">INTEGRACJA</a>&nbsp;
        </div>
    </h1>
    <br>
    <div id="club-back">
        <div class="container">

            <div class="row justify-content-center ">

                <div class="col-lg-6 text-dark">

                    <div class="text-spacing">
                        <!-- text-align: justify; -->

                        <div class="div-changer">

                            Założycielem Akademii jest trener
                            <B><a href="http://www.awzlotysmok.pl/#Trener" style="text-decoration: none; color:#3d3a3b;">Michał&nbsp;Grabarek</a></B>
                            z wieloletnim doświadczeniem w pracy z dziećmi.<br>
                            <p></p>


                            <B> Akademia Wojowników</B>
                            powstała z pasji do sportu oraz chęci zarażenia nią najmłodszych, to miejsce, w którym zadbamy o prawidłowy rozwój Twojego dziecka,
                            uczymy pokonywania własnych słabości i współpracy z rówieśnikami. Zajęcia sportowe z elementami sportów walki są idealnym sposobem na wypełnienie
                            <B> wolnego czasu</B>,
                            a także budowanie sprawności fizycznej i pewności siebie u dzieci.
                            Zajęcia prowadzone są w oparciu o najnowsze metody treningowe przez doświadczonych trenerów.
                            <div class="my-3"> Obecnie dzieci szybko się
                                <B> nudzą</B>
                                i niełatwo je zainteresować na dłuższy czas, ciężko im także dostrzec
                                <b>cel</b>
                                w systematycznych treningach. Opracowany przez trenera Michała Grabarka system motywacji i nagradzania,
                                zachęca dzieci do większego skupienia i wysiłku na treningach.
                            </div>

                            Jeżeli Twoje dziecko jest
                            <B>nadpobudliwe</B>
                            i ma ciągłą potrzebę ruchu w akademii nauczy się koncentracji,
                            kontrolowania ruchów i samodyscypliny. Będzie miało możliwości rozładowania swoich emocji w pozytywny sposób.
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-dark">

                    <div class="text-spacing">
                        <!-- text-align: justify; -->
                        <div class="div-changer" id="right-div-hidden">

                            <span class="">
                                <B>Obalamy mity</B>
                                - sztuki walki mogą być i są bezpieczne dzięki specjalnej formule bezkontaktowej (4-6 lat) oraz formule light-contact (+7 lat).
                                Formuły te pozwalają podopiecznym na bezpieczny trening przy zachowaniu szeregu korzyści z ćwiczeń.
                                <p></p>
                                Od dawna wiadomo, że sztuki walki to wyjątkowa forma aktywności ucząca wytrwałości,
                                zwinności i radzenia sobie ze stresem, a także pomagająca korygować wady postawy.
                                <p></p>
                                W obecnej sytuacji epidemicznej w kraju i spadku aktywności wśród dzieci naszym celem jest stworzenie bezpiecznego miejsca,
                                w którym podopieczni poprawią koordynację, zrzucą zbędne kilogramy, a także nauczą się cierpliwości i kontrolowania swoich emocji.
                                <p></p>Dodatkowym atutem są niewielkie grupy(max 16 os.), dzięki czemu podchodzimy indywidualnie do każdego Wojownika.
                                Ponadto stale obserwujemy rozwój naszych podopiecznych poprzez cykliczne testy sprawnościowe, które obrazują ich rozwój.
                                <p></p>Zachęcamy także rodziców do czynnego udziału w naszych treningach, co jest nie tylko świetną formą spędzania czasu z dzieckiem,
                                ale także szansą na obserwowanie postępów swojej pociechy.
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- Gallery -->

        <!-- Section: Images -->
        <div class= "container" id="bottom-div-hidden">
            <div class="row">
                <div class="col-lg-4 col-md-12 mb-2 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img title="zajęcia sportowe" src="./img/złoty smoczek/zajęcia-sportowe.png" class="w-100 shadow-1-strong rounded " alt="zajęcia sportowe" />

                    </div>
                </div>

                <div class="col-lg-4  mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img title="ćwiczenia rozciagające" src="./img/złoty smoczek/ćwiczenia-rozciągające.png" class="w-100 shadow-1-strong rounded " alt="ćwiczenia rozciagające" />
                    </div>
                </div>

                <div class="col-lg-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img title="ćwiczenia koordynacyjne"  src="./img/złoty smoczek/ćwiczenia-koordynacyjne.png" class="w-100 shadow-1-strong rounded " alt="ćwiczenia koordynacyjne" />
                    </div>
                </div>
            </div>

        </div>

    <!-- Gallery -->
    <div id="btn-div" style="text-align:center; display:none ">
        <button id="read-more-btn" onclick="ShowOrHideTxt();"><i class="fas fa-chevron-down"></i></button>
    </div>
   <p></p>
    <section id="Zajęcia"></section>

    <section id="Zajecia no-gutters">
        <div class="row no-gutters">
            <div class="col-lg-5">
                <div class="leftside no-gutters "><span class="centering-text ">SPORT</span></div>
            </div>
            <div class="col-lg-7 no-gutters">

                <div class="rightside no-gutters">
                    <div class="no-gutters rightside-margin"><br>
                        <h6 class=" text-dark pb-2 h4-responsive my-py-2 desc" style="font-size: 100%; ">
                            <b>Zajęcia ogólnorozwojowe</b> z elementami boksu i kickboxingu prowadzimy w trzech grupach wiekowych 4-6 lat, 7-9 lat i +9 lat.<p></p>

                            Na treningach w Akademii nie zabraknie:<p></p>
                            <ul class="list-unstyled" style="margin-left:1rem; font-size: 93%;">
                                <li class="my-1"><i class="fas fa-circle" style="font-size:55%;"></i> &nbsp;bezkontaktowej nauki technik bokserskich i kick-bokserskich,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;treningów formie light-contaktu, </li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;ćwiczeń ogólnorozwojowych całego ciała,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;ćwiczeń rozciągających i koordynacyjnych,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;pracy na refleksem i pamięcią,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;gier i zabaw ruchowych,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;gimnastyki korekcyjnej,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;ćwiczeń ogólnorozwojowych, rozciągających i koordynacyjnych,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;gier i zabaw ruchowych z elementami gimnastyki korekcyjnej,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;nauki koncentracji, kontrolowania ruchów i samodyscypliny,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;nauki pokonywania własnych słabości,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;testów sprawnościowych,</li>
                                <li class="my-1"><i class="fas fa-circle"style="font-size: 55%;"></i> &nbsp;współpracy z rówieśnikami.</li>
                            </ul>
                            <p></p>
                            Stosujemy najnowsze metody treningowe, a odpowiednie podejście do dzieci skutkuje przyjazną atmosferą i zauważalnymi efektami treningów.
                            <p></p>
                            <b>Boks olimpijski</b> - wymaga bardzo dobrej techniki, cierpliwości, a także uczy szacunku do przeciwnika i czystej, zdrowej rywalizacji.
                            Zawodnik musi być szybki i pewnie wymierzać ciosy z zachowaniem reguł. <p></p>
                            <b>Kick-boxing light </b> - połączenie boksu i kopnięć, dyscyplina wpływająca na wszechstronny rozwój. Zajęcia prowadzone są w formie bezkontaktowej,
                            podobnie jak karate, zapewnione jest więc bezpieczeństwo podopiecznych.<p></p>

                        </h6>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <div class="back-card">
        <div class="card-deck  justify-content-center" style="margin:auto;">
            <div class="card col-lg-3 ">
                <img title="Zabawa, imprezy integracyjne" class="card-img-top" src="./img/site/Impreza-integracyjana.jpg" alt="Zabawa, imprezy integracyjne">
                <div class="card-body ">
                    <h4 class="card-title" style="font-size: 145%;"><span class="">ZABAWA</span></h4>
                    <div style="color: rgb(70, 70, 70);  " class="card-text">
                        Bardzo ważne jest odpowiednie zbalansowanie treningu i zabawy.
                        U nas poprzez ćwiczenia w formie zabawy nauczy się pokonywania własnych słabości i umiejętności współpracy z rówieśnikami.
                        Dzięki ćwiczeniom ogólnorozwojowym połączonym z zabawami i elementami kickboxingu oraz boksu dzieci usprawniają koordynację ruchową,
                        wzmacniają wszystkie partie mięśni, zwiększają zakres ruchów, nabywają odporności tak ważnej w obecnych czasach.
                    </div>
                </div>
            </div>
            <div class="card col-lg-3">
                <img title="Sport, kolonie sportowe" class="card-img-top" src="./img/site/kolonie-sportowe.jpg" alt="Sport, kolonie sportowe">
                <div class="card-body">
                    <h4 class="card-title " style="font-size: 145%;"><span class="">INTEGRACJA</span></h4>

                    <div style="color: rgb(70, 70, 70);" class="card-text">
                        Duży nacisk kładziemy na integrację i wspólne spędzanie czasu poza salą treningową.
                        Organizujemy spotkania, np. imprezy okolicznościowe (m.in. mikołajki, bal karnawałowy) w sali zabaw Złoty Smoczek czy spotkania integracyjne z rodzicami
                        - spływy kajakowe, rodzinne pikniki czy kuligi. Szansą na naukę samodzielności może być pierwsza nocka poza domem,
                        zielona szkoła czy kolonie sportowe organizowane przez nasz klub.
                    </div>

                </div>
            </div>
        </div>
        <br>
    </div>
    <br>
    <section id="Trener">
    </section>
    <div>
        <div class="container ">
            <div class="row justify-content-center no-gutters">
                <div class="col-lg-12 ">
                    <h2 class="author" style="font-weight: 900; font-size: 150%; ">TRENER MICHAŁ GRABAREK </h2>
                    <!-- <h2 id="data" style=" font-size: 140%;">01.04.2020</h2> -->
                    <p></p>
                </div>
            </div>
        </div>
        <div id="club-back">
            <div class="container ">
                <div class="row justify-content-center ">
                    <div class="col-lg-3 col-md-6  " style=" margin:auto">
                        <img title="Trener sportów walki" src="img/Profil/Trener-Michał-Grabarek.JPG" class="img-fluid  border border-secondary  " alt="Trener sportów walki">
                    </div>
                    <div class="col-lg-9" style=" margin-top:-5px">
                        <!-- <h2 id="data" style=" font-size: 140%;">01.04.2020</h2> -->
                        <h3 class="author-desc" style="font-size: 115%; ">Moje doświadczenie i lata praktyki pozwoliły mi na wypracowanie skutecznej oraz efektywnej metodyki prowadzenia zajęć dla dzieci.</h3>
                        <p></p>
                        <h5 style="font-size: 111%;" class="desc">
                            <label class="desc left-line">
                                Przez 12 lat trenował karate SHOTOKAN, zdobywając w tej dyscyplinie kilkanaście medali Mistrzostw i Pucharu Polski. W 2003 roku zaczął trenować nowy styl Muay Thai, dwukrotnie sięgnął po tytuł Mistrza i Puchar Polski oraz Puchar Europy Muay Thai i K-1 rules. Jest medalistą wielu międzynarodowych i ogólnopolskich turniejów oraz uczestnikiem gal zawodowych i amatorskich. Od 2009 roku prowadzi treningi z zakresu Muay Thai, i Kick-boxingu. Prowadzenia zajęć uczył się m.in. na obozach we Francji, Tajlandii i Holandii od najlepszych zawodników na świecie. Posiada państwową licencję instruktora kick-boxingu wydaną przez Polski Związek Kick-boxingu oraz licencje instruktora boksu.
                            </label>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <section id="treningi">
        <div class="container-fluid padding justify-content-center">
            
            <br><br>
            <div class="row text-center padding w-75 " style="margin: auto;">
                <div class="col-lg-4">
                    <i class="fas fa-street-view img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Treningi dla każdego </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Trenują zarówno chłopcy, jak i dziewczynki, dzieci w różnym wieku i o odmiennej sprawności fizycznej. Trenerzy zwracają uwagę na możliwości dzieci i dążą do optymalnego rozwoju każdego podopiecznego, natomiast dzieci dostrzegają, że nie wszyscy radzą sobie tak samo i należy sobie pomagać.
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 ">
                    <i class="fa fa-balance-scale img-fluid " style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <p></p>
                    <h2 class="header-info " style="font-weight: 900;   font-size: 170%;">Kontrola emocji i cierpliwość</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Dzieci zdobywają zdolność kontrolowania emocji i pożytkowania tych negatywnych, a wciąż powtarzane ćwiczenia i sekwencje uświadomiają im, że trening czyni mistrza, a na efekty działań należy czekać, nie tracąc przy tym zapału do osiągnięcia zamierzonego celu.
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-lightbulb img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Logiczne myślenie</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Sztuki walki wymagają szybkiego i analitycznego myślenia, należy zapamiętać sekwencje układów, a w dalszym etapie przewidywać ruchy przeciwników. Sporty walki umożliwiają wszechstronny rozwój dziecka, to dowód na to, iż podopieczni trenują nie tylko ciało
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="treningi2">
        <div class="container-fluid padding justify-content-center">
            <div class="col">
            </div>
            <br><br>
            <div class="row text-center padding w-75 " style="margin: auto;">
                <div class="col-lg-4">
                    <i class="fas fa-star img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Świadomość siły fizycznej</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Dzieci zyskują wiedzę dotyczącą swojej siły, a trenerzy kładą nacisk na przekazanie jak z tej siły korzystać, aby nikomu nie zrobić krzywdy.</h5>
                    </div>
                </div>

                <div class="col-lg-4">
                    <i class="fas fa-users img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Integracja z grupą</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Wyjazdy i dodatkowe atrakcje w postaci nocek czy obozów wpływają pozytywnie na zacieśnienie więzi między grupą i pozwalają połączyć rozwój dzieci z zabawą. </h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-child img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Pewność siebie </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Dzieci uczą się pokonywania własnych słabości i współpracy z rówieśnikami, a każdy sukces i motywacja ze strony trenera i grupy skutkuje zwiększeniem pewności siebie.</h5>
                        </h5>
                    </div>
                </div>
            </div>
    </section>
    <section id="Kontakt"></section>
    <br>
    <div class="container">
        <div class="row text-dark">

            <div class="col-lg-12">

                <section id="FAQ" style=" ">
                    <h2 class="header-info text-dark w-100 text-justify text-center " style="font-weight: 900; font-size: 170%;">Skontaktuj się z nami</h2><br>
                   

                    <section class="text-dark contact-us-section">

                        <!--Section heading-->
                        <!-- <h4 class=" font-weight-bold text-center my-2 title-contact-us">Skontaktuj się z nami</h4> -->
                        <!--Section description-->
                        <!-- <p class="text-center  mx-auto mb-4">Twojego pytania nie ma na liście? Wyślij wiadomość!</p> -->

                        <?php
                        if ($message_sent == '1') :
                        ?>
                            <h4 class=" font-weight-bold text-center my-2 title-contact-us">wysłano</h4>
                        <?php
                        elseif ($message_sent == '0') :
                        ?>
                            <h4 class=" font-weight-bold text-center my-2 title-contact-us" id="errorMessage"></h4>
                        <?php
                        else :
                        ?>
                            <h4 class=" font-weight-bold text-center my-2 title-contact-us">nie wysłano wiadomości!<br> Niepoprawna CAPTCHA</h4>
                        <?php
                        endif;
                        ?>
                        <div class="row"> 
                            <div class="w-100 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="" method="POST">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6 style="font-weight:bold;">
                                                <div class="md-form mb-0 form-field">
                                                    <input type="text" id="name" name="name" class="form-control">
                                                    <label for="name" class="">Imie</label>
                                                </div>

                                            </h6>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 style="font-weight:bold;">
                                                <div class="md-form mb-0 form-field">

                                                    <input type="text" id="surname" name="surname" class="form-control">
                                                    <label for="surname" class="">Nazwisko</label>

                                                </div>
                                            </h6>
                                        </div>
                                        <div class="col-md-4">
                                            <h6 style="font-weight:bold;">
                                                <div class="md-form mb-0 form-field">
                                                    <input type="text" id="email" name="email" class="form-control">
                                                    <label for="email" class="">Twój email</label>
                                                </div>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 style="font-weight:bold;">
                                                <div class="md-form mb-0 form-field">
                                                    <input type="text" id="subject" name="subject" class="form-control">
                                                    <label for="subject" class="">Temat wiadomości</label>
                                                </div>
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h6 style="font-weight:bold;">
                                                <div class="md-form form-field">
                                                    <textarea type="text" id="message" name="message" rows="3" class="form-control md-textarea"></textarea>
                                                    <label for="message">Wiadomość</label>
                                                </div>
                                            </h6>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-3 text-justify  text-center">
                                            <h6 style="font-weight:bold; ">


                                                <div class="g-recaptcha" style="transform: scale(0.75); -webkit-transform: scale(0.72); transform-origin: 0 0; -webkit-transform-origin: 0 0;" data-sitekey="6LdpmNsaAAAAAGuFRbe1HO4vfrRdZDeACzMz2Dy1"></div>



                                            </h6>
                                        </div>
                                        <div class="col-md-9 text-justify  text-center">
                                            <h6 style="font-weight:bold;">

                                                <input class="btn-send  text-center text-dark" onclick="return checkform()" type="submit" name="submit" value="Wyślij">


                                            </h6>
                                        </div>

                                    </div>


                                </form>

                                <div class="status"></div>
                            </div>
                        </div>
                    </section><br>
                </section>
            </div>
        </div>
    </div>

    <?php include('./footer.php'); ?>

</body>

</html>