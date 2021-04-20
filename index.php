<?php

$message_sent = '0';

if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {


        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if (empty($name)) {
            echo "Variable 'a' is empty.<br>";
        }

        $to = "kowalski.al@wp.pl";


        $headers = "Wiadomość od: " . $name . " " . $surname . " Email: " . $email;


        if (mail($to, $subject, $message, $headers)) {
        } else {
        }
        $message_sent = '1';
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

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akademia Wojowników</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <link href="CSS/style.css" rel="stylesheet">

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

    <?php include('./header.php'); ?>

    <!--- Image Slider -->

    <div class="jumbotron text-center  container-fluid ">

        <div style=" padding-top: 330px;">
            <div class="container">
                <div class="row d-flex flex-row justify-content-center">

                    <div class="col-18">

                        <!-- <a href="https://activenow.io/funkcje/?fbclid=IwAR0VqhMvxcQ8c7lcW0gDD1iSzkA5JrYeAjj9Y-otVEjuzJgTFa7m-RM_jS0" class="btn btn-primary ">ZAPISY <br> </a> -->
                    </div>
                </div>
            </div>

        </div>
    </div>

    <section id="Akademia"></section>
    <div id="club-back">
        <div class="container ">

    
            <div class="row justify-content-center ">


                <div class="col-lg-4 col-md-6 mb-4 text-center hide-this " style="margin-top:70px;">
                    <div class="image-akademia-left-one img-fluid  border border-secondary ">
                    </div>
                    <img class="image-akademia-left-two img-fluid  border border-secondary moreText"><br>
                    </img>

                </div>
                <div class="col-lg-8">
                    <h1 class="text-dark pb-3 h2-responsive header-panel text-center" style="font-weight: 900; font-size: 170%;">
                        SPORT &nbsp; ZABAWA &nbsp; INTEGRACJA
                    </h1>
                    <br>
                    <div class="content-text   h4-responsive ">

                        <div style="font-size: 120%;">
                            Założycielem Akademii jest trener <B>Michał Grabarek</B> z wieloletnim doświadczeniem w pracy z dziećmi.<br><br>
                        </div>
                        <B> Akademia Wojowników</B> powstała z pasji do sportu oraz chęci zarażenia nią najmłodszych, to miejsce, w którym zadbamy o prawidłowy rozwój Twojego dziecka, uczymy pokonywania własnych słabości i współpracy z rówieśnikami . Zajęcia sportowe z elementami sportów walki są idealnym sposobem na wypełnienie<B> wolnego czasu</B>, a także budowanie sprawności fizycznej i pewności siebie u dzieci. Zajęcia prowadzone są w oparciu o najnowsze metody treningowe przez doświadczonych trenerów.
                        <div class="my-3"> Obecnie dzieci szybko się<B> nudzą</B> i niełatwo je zainteresować na dłuższy czas, ciężko im także dostrzec <b>cel</b> w systematycznych treningach. Opracowany przez trenera Michała Grabarka system motywacji i nagradzania, zachęca dzieci do większego skupienia i wysiłku na treningach.</div>
                       
                            Jeżeli Twoje dziecko jest <B>nadpobudliwe</B> i ma ciągłą potrzebę ruchu w akademii nauczy się koncentracji, kontrolowania ruchów i samodyscypliny. Będzie miało możliwości rozładowania swoich emocji w pozytywny sposób <p></p>

                            <B>Obalamy mity</B> - sztuki walki mogą być i są bezpieczne dzięki specjalnej formule bezkontaktowej (4-6 lat) oraz formule light-contact (+7 lat). Formuły te pozwalają podopiecznym na bezpieczny trening przy zachowaniu szeregu korzyści z ćwiczeń. <p></p>
                            <span class="moreText">
                            Od dawna wiadomo, że sztuki walki to wyjątkowa forma aktywności ucząca wytrwałości, zwinności i radzenia sobie ze stresem, a także pomagająca korygować wady postawy.<p></p>
                            W obecnej sytuacji epidemicznej w kraju i spadku aktywności wśród dzieci naszym celem jest stworzenie bezpiecznego miejsca, w którym podopieczni poprawią koordynację, zrzucą zbędne kilogramy, a także nauczą się cierpliwości i kontrolowania swoich emocji.

                            <p></p>Dodatkowym atutem są niewielkie grupy(max 16 os.), dzięki czemu podchodzimy indywidualnie do każdego Wojownika. Ponadto stale obserwujemy rozwój naszych podopiecznych poprzez cykliczne testy sprawnościowe, które obrazują ich rozwój.
                            <p></p>Zachęcamy także rodziców do czynnego udziału w naszych treningach, co jest nie tylko świetną formą spędzania czasu z dzieckiem, ale także szansą na obserwowanie postępów swojej pociechy. Udział rodzica w treningu pozwala na lepszą kontrolę nad poprawnością wykonywanych ćwiczeń oraz zwiększa motywację u dzieci, które są wtedy bardziej skupione na wykonywanych zadaniach.
                        </span>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div id="btn-div" style="text-align:center;">
        <button class="read-more-btn" onclick="ShowOrHideTxt();"><i class="fas fa-chevron-down"></i></button>
    </div>
   

    <section id="Zajęcia"></section>

    <section id="Zajecia no-gutters">
        <div class="row no-gutters">
            <div class="col-md-5 hide-this">
                <div class="leftside no-gutters"></div>
            </div>
            <div class="col-md-7 no-gutters">

                <div class="rightside no-gutters">
                    <div class="no-gutters rightside-margin"><br><br>
                        <h3 class=" my-py-2  text-dark w-100 type" style="font-size: 180%; font-weight:700; ">Zajęcia prowadzone w akademii</h3><br>
                        <h6 class=" text-dark pb-2 h4-responsive my-py-2 desc">
                            <b>Zajęcia ogólnorozwojowe</b> z elementami boksu i kickboxingu prowadzimy w trzech grupach wiekowych 4-6lat , 7-9 lat i + 9 lat.<p></p>
                            <b>Boks olimpijski</b> - dyscyplina, w której używa się jedynie pięści. Wymaga bardzo dobrej techniki i cierpliwości. Zawodnik musi być szybki i pewnie wymierzać ciosy z zachowaniem reguł. Uczy szacunku do przeciwnika i czystej, zdrowej rywalizacji.<p></p>
                            <b>Kick-boxing light </b> -połączenie boksu i kopnieć, dyscyplina wpływająca na wszechstronny rozwój, zwiększa zakres ruchów i pozwala na wypracowanie zwinności. Sport uczący szybkiej reakcji i przemyślanych ruchów. Zajęcia prowadzone są w formie bezkontaktowej (light contact), podobnie jak karate, zapewnione jest więc bezpieczeństwo podopiecznych.<p></p>

                            Stosujemy najnowsze metody treningowe, a odpowiednie podejście do dzieci skutkuje przyjazną atmosferą i zauważalnymi efektami treningów. <p></p>
                            Na treningach w Akademii nie zabraknie:<p></p>
                            <ul style="margin-left:2rem;">
                                <li>bezkontaktowej nauki technik bokserskich i kick-bokserskich,</li>
                                <li>treningów formie light-contaktu, </li>
                                <li>ćwiczeń ogólnorozwojowych całego ciała,</li>
                                <li>ćwiczeń rozciągających,</li>
                                <li>ćwiczeń koordynacyjnych, </li>
                                <li>praca na refleksem i pamięciom, </li>
                                <li>gier i zabaw ruchowych,</li>
                                <li>gimnastyki korekcyjnej,</li>
                                <li>nauki koncentracji, kontrolowania ruchów i samodyscypliny,</li>
                                <li>nauki pokonywania własnych słabości,</li>
                                <li>testów sprawnościowych,</li>
                                <li>współpracy z rówieśnikami.</li>
                            </ul>
                        </h6>


                    </div>
                </div>
            </div>
           
        </div>
        <br>
    </section>

    <div id="trener" style=" ">
        <div class="container ">


            <div class="row justify-content-center no-gutters">


                <div class="col-lg-12 ">
                    <h2 class="type" style="font-weight: 900; font-size: 150%; ">TRENER MICHAŁ GRABAREK </h2>
                    <!-- <h2 id="data" style=" font-size: 140%;">01.04.2020</h2> -->
                    <p></p>
                    <h3 class="author" style="font-size: 110%; ">Moje doświadczenie i lata praktyki pozwoliły mi na wypracowanie skutecznej oraz efektywnej metodyki prowadzenia zajęć dla dzieci.</h3>
                    <br>
                    <div>
                        <h5 style="font-size: 105%;">
                            <label class="desc"> Przez 12 lat trenował karate SHOTOKAN , zdobywając w tej dyscyplinie kilkanaście medali Mistrzostw i Pucharu Polski.W 2003 roku zaczął trenować nowy styl Muay Thai , dwukrotnie sięgnął po tytuł Mistrza i Puchar Polski oraz Puchar Europy Muay Thai i K-1 rules. Jest medalistą wielu międzynarodowych i ogólnopolskich turniejów oraz uczestnikiem gal zawodowych i amatorskich. Od 2009 roku prowadzi treningi z zakresu Muay Thai, i Kick-boxingu. Prowadzenia zajęć uczył się m.in. na obozach we Francji, Tajlandii i Holandii od najlepszych zawodników na świecie. Na zaproszenie naszego klubu przyjechali do Bydgoszczy: legenda muaythai Ramon Dekkers, mistrz K-1 Remy Bonyaski oraz pierwszy Polak UFC Tomasz Drwal i zawodowy bokser Rafał Jackiewicz.
                            </label>
                        </h5>
                        <br>

                    </div>
                </div>
            </div>


        </div>
        <div id="club-back">
            <div class="container ">


                <div class="row justify-content-center ">

                    <div class="col-lg-3 col-md-6 mb-4 text-center " style="margin-top:0px;">
                        <img src="img/Profil/MG.JPG" class="img-fluid my-1 border border-secondary  ">
                    </div>
                    <div class="col-lg-4">
                        <h2 class="type" style="font-weight: 900; font-size: 130%; ">Ukończone kursy:</h2>
                        <!-- <h2 id="data" style=" font-size: 140%;">01.04.2020</h2> -->
                        <p></p>

                        <ul style="font-size: 100%;" class=" list-unstyled">
                            <li><i class="fas fa-circle img-fluid desc-i"></i> <label class="time"> Muay Thai,</label></li>
                            <li><i class="fas fa-circle img-fluid desc-i"></i> <label class="time"> K-1,</label></li>
                            <li><i class="fas fa-circle img-fluid desc-i"></i> <label class="time"> Kick-Boxing,</label></li>
                            <li><i class="fas fa-circle img-fluid desc-i"></i> <label class="time"> Boks.</label></li>
                        </ul>
                    </div>
                    <div class="col-lg-5">
                        <h2 class="type" style="font-weight: 900; font-size: 130%; ">Organizator zawodów i gal zawodowych:</h2>
                        <!-- <h2 id="data" style=" font-size: 140%;">01.04.2020</h2> -->
                        <p></p>

                        <ul class=" list-unstyled">
                            <li><i class="fas fa-circle img-fluid desc-i"></i> <label class="time"> Gala Envio Fight Night,</label></li>
                            <li><i class="fas fa-circle img-fluid desc-i"></i> <label class="time"> Akademicki Mistrzostwa Polski MMA,</label></li>
                            <li><i class="fas fa-circle img-fluid desc-i"></i> <label class="time"> Młodzieżowe Mistrzostwa Polski MMA,</label></li>
                            <li><i class="fas fa-circle img-fluid desc-i"></i> <label class="time"> Bydgoski Wieczór Sportów Waki MMA K-1.</label></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <br>
    <section id="treningi">
        <div class="container-fluid padding justify-content-center">
            <div class="col">
                <h1 class=" header-panel " style="font-weight: 900;  margin: auto;  font-size: auto;"> </h1>

            </div>
            <br><br>
            <div class="row text-center padding w-75 " style="margin: auto;">

                <div class="col-lg-4">
                    <i class="fas fa-street-view img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Treningi dla każdego </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Trenują zarówno chłopcy, jak i dziewczynki, dzieci w różnym wieku i o odmiennej sprawności fizycznej, trenerzy zwracają uwagę na możliwości dzieci i dążą do optymalnego rozwoju każdego podopiecznego, natomiast dzieci dostrzegają, że nie wszyscy radzą sobie tak samo i należy sobie pomagać </h5>
                    </div>
                </div>


                <div class="col-lg-4">
                    <i class="fas fa-lightbulb img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Logiczne myślenie</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Sztuki walki wymagają szybkiego i analitycznego myślenia, należy zapamiętać sekwencje układów, a w dalszym etapie przewidywać ruchy przeciwników, sporty walki umożliwiają wszechstronny rozwój dziecka, to dowód na to, iż podopieczni trenują nie tylko ciało.
                        </h5>
                    </div>
                </div>

                <div class="col-lg-4">
                    <i class="fas fa-child img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Pewność siebie </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Dzieci uczą się pokonywania własnych słabości i współpracy z rówieśnikami, a każdy sukces i motywacja ze strony trenera i grupy skutkuje zwiększeniem pewności siebie
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
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Świadomość siły fizycznej, ruchów i koordynacji </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Dzieci zyskują wiedzę dotyczącą swojej siły, a trenerzy kładą nacisk na przekazanie jak z tej siły korzystać, aby nikomu nie zrobić krzywdy.
                            Zabawy ruchowe z elementami sztuk walki uczą zwinności, dziecko z każdym treningiem zwiększa świadomość swoich ruchów, a zróżnicowane ćwiczenia przeplecione zabawą wpływają pozytywnie na koordynację podopiecznych.
                    </div>
                </div>

                <div class="col-lg-4 ">
                    <i class="fa fa-balance-scale img-fluid " style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <p></p><br>
                    <h2 class="header-info " style="font-weight: 900; margin: auto;  font-size: 170%;">Kontrola emocji i cierpliwość</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Wbrew stereotypom sztuki walki nie uczą brutalności, przeciwnie - trenujący zdobywa zdolność kontrolowania emocji i pożytkowania tych negatywnych, a wciąż powtarzane ćwiczenia i sekwencje uświadomią dzieciom, że trening czyni mistrza, a na efekty działań należy czekać, nie tracąc przy tym zapału do osiągnięcia zamierzonego celu.
                        </h5>
                    </div>
                </div>


                <div class="col-lg-4">
                    <i class="fas fa-users img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Integracja z grupą</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Wyjazdy i dodatkowe atrakcje w postaci nocek czy obozów wpływają pozytywnie na zacieśnienie więzi między grupą i pozwalają połączyć rozwój dzieci z zabawą.
                            Rywalizacja z rówieśnikami motywuje do osiągania sukcesów i trenowania, dzieci chętniej się rozwijają, aby doścignąć resztę grupy, forma zabawy stwarza odpowiednie środowisko do rozwoju tego aspektu.
                    </div>
                </div>
            </div>
    </section>
    <section id="FAQ" style=" padding-top: 40px;">
        <h1 class="header-panel w-100 text-justify text-center ">Skontaktuj się z nami</h1><br>

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
                <h4 class=" font-weight-bold text-center my-2 title-contact-us">nie wysłano wiadomości!<br> Email nieprawidłowy</h4>
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

                        <h6 style="font-weight:bold;">
                            <div class="text-justify  text-center">
                                <div class="md-form form-field text-justify  text-center">
                                    <input class="btn-send  text-center text-dark" onclick="return checkform()" type="submit" value="Wyślij">
                                </div>
                            </div>
                        </h6>
                    </form>

                    <div class="status"></div>
                </div>
            </div>
        </section><br>
    </section>



    <?php include('./footer.php'); ?>

</body>

</html>