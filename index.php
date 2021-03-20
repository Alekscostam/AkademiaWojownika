
<?php

// echo "<pre>";

//     print_r($_POST);
// echo"</pre>";


$message_sent = '0';

if(isset($_POST['email']) && $_POST['email']!=''){

    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){

    
        

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        if(empty($name)){
            echo "Variable 'a' is empty.<br>";
        }



        $to="kowalski.al@wp.pl";
        $body = "";

     
    
        $body .= "From: ".$name. "\r\n";
    
        $body .= "Email: ".$email. "\r\n";
    
        $body .= "Message: ".$message. "\r\n";

        $headers = 'From: webmaster@example.com' . "\r\n" .
        'Reply-To: webmaster@example.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
   
    
        mail($to,$subject,$body,$headers);
        $message_sent = '1';
        echo "<script type='text/javascript'>alert('$message');</script>";
        print_r($_POST);
        header("Location: index.php");
    }
    else{
        $message_sent =  '2';
    }
    
}




?>


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
    <link href="style.css" rel="stylesheet">
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

    <nav class="navbar navbar-light  navbar-expand-lg scrolling-navbar navbar-fixed-top ">
        <a class="text-logo navbar-brand " href="#"><span style="font-size:90%; color: #cab80e;;">AKADEMIA WOJOWNIKÓW</span></a>
        <button class="navbar-toggler mx-auto" style="" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span class="fas fa-bars mx-auto" style="color:#cab80e; font-size:1.5rem;"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                    <a  class="nav-link" href="#akademia"  ><span  data-toggle="collapse" data-target="#navbarNav" class="bookmarks">AKADEMIA</span></a></li>
    
                <!-- <li class="nav-item"> -->
                    <!-- <a class="nav-link"  href="#grafik"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">Grafik</span></a></li> -->
                <li class="nav-item">
                    <a class="nav-link"  href="#Zajęcia"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">ZAJĘCIA</span></a></li>
                <li class="nav-item">
                    <a class="nav-link"  href="#Dlaczego-akademia"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">Dlaczego akademia?</span></a></li>
                <!-- <li class="nav-item">
                    <a class="nav-link"  href="#galeria"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">Dlaczego akademia?</span></a></li> -->
                <li class="nav-item">
                    <a class="nav-link"  href="#"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">ZAPISY</span></a></li>
                <li class="nav-item">
                    <a class="nav-link"  href="#Kontakt"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">Kontakt</span></a></li>
            </ul>
        </div>
    </nav>
                <script>
                      $(function () {
            $(document).scroll(function () {
                var $nav = $(".navbar-fixed-top");
                $nav.toggleClass('scrolled', $(this).scrollTop() > 1);
            });
            });
                </script>
    <!--- Image Slider -->
   
    <div class="jumbotron text-center  container-fluid ">
    
        <div class="intro " id="">
            <div class="container">
                <div class="row d-flex flex-row justify-content-center">
                
                    <div class="col-18">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="5000">
                            <div class="carousel-inner">
                              <div class="carousel-item active border-left-content">
                                <h1 class="cytat w-100">AKADEMIA WOJOWNIKÓW RUSZYŁA! </h1>
                                <p><h3>
                                Zapraszamy wszystkich zainteresowanych na zajęcia juz teraz.
                                </h3>
                              </div>
                              <!-- <div class="carousel-item">
                                <h1 class="cytat  w-100">Zapisz swoje dziecko już dziś.</h1>
                              </div> -->
                              <!-- <div class="carousel-item">
                                <h1 class="cytat pb-3 w-100">Szacunek</h1>
                              </div> -->
                            </div>
                          </div>
                        
                        <br>
                        <a href="#nabory" class="btn btn-primary btn-sm" >ZAPISY <br> </a>
                    </div>
               
                </div>
            </div>
           
        </div>
       
        
    </div>
    <section id="akademia" ></section> 
  
    <div id="club-back">
        <div class="container ">
            <div class="row justify-content-center ">
                
                <div class="col-lg-4 col-md-6 mb-4 text-center">
                    <br><br><br>
                    <img src="./img/site/mlodsza.jpg" class="img-fluid my-4 border border-secondary img-start "><br><br>
                    <img src="./img/site/mieszana.jpg"  class="img-fluid my-4 border border-secondary img-start"><br><br>
                    <img src="./img/site/starsza.jpg"  class="img-fluid my-4 border border-secondary img-start">
                    
                </div>
                <div class="col-lg-8">
                    
                    <h1 class="text-dark pb-3 h2-responsive header-panel" style="font-weight: 900; font-size: 250%;">AKADEMIA WOJOWNIKÓW </h1><p>
                    
                    <h4 class="content-text  pb-3 h4-responsive my-py-2" > Założycielem Akademii jest trener <B>Michał Grabarek</B> z wieloletnim doświadczeniem w pracy z dziećmi.
                        Treningi organizowane są na Fordonie, Osowej Górze i Wyżynach. <p></p>
                        <B>Akademia Wojowników</B> powstała z pasji do sportu oraz chęci zarażenia nią najmłodszych. Efektywne treningi zapewniają nasi wykwalifikowani trenerzy, a także przeszkoleni trenerzy z wykształceniem pedagogicznym, którzy <b>zajęcia prowadzić będą w szkołach.</b><p></p>
                        <B>Akademia Wojowników</B> to miejsce, w którym zadbamy o prawidłowy rozwój Twojego dziecka, uczymy pokonywania własnych słabości i współpracy. Zajęcia sportowe z elementami sportów walki są idealnym sposobem na wypełnienie wolnego czasu, a także budowanie sprawności fizycznej i pewności siebie u dzieci. 
                        <p></p><B>Obalamy mity</B> - sztuki walki mogą być i są bezpieczne, dzięki specjalnej formule bezkontaktowej, która pozwala podopiecznym na trening "bez siniaków" przy zachowaniu szeregu korzyści z ćwiczeń.
                        Od dawna wiadomo, że sztuki walki to wyjątkowa forma aktywności ucząca wytrwałości, zwinności i radzenia sobie ze stresem, a także pomagająca korygować wady postawy.
                        Zwłaszcza w dobie koronawirusa i spadku aktywności wśród dzieci, naszym celem jest stworzenie bezpiecznego miejsca, w którym podopieczni poprawią koordynację, zrzucą zbędne kilogramy, a także nauczą się cierpliwości i kontrolowania swoich emocji.<p></p>
                        Zajęcia prowadzone są w oparciu o najnowsze metody treningowe przez doświadczonych trenerów. Dodatkowym atutem są niewielkie grupy, dzięki czemu podchodzimy indywidualnie do każdego Wojownika.  Ponadto stale obserwujemy rozwój naszych podopiecznych poprzez cykliczne testy sprawnościowe, które obrazują ich rozwój i wskazują nad czym należy jeszcze popracować. 
                        <p></p>Zachęcamy także rodziców do czynnego udziału w naszych treningach, co jest nie tylko świetną formą spędzania czasu z dzieckiem, ale także szansą na obserwowanie postępów swojej pociechy. Udział rodzica w treningu pozwala na lepszą kontrolę nad poprawnością wykonywanych ćwiczeń oraz zwiększa motywację u dzieci, które są wtedy bardziej skupione na wykonywanych zadaniach. Dodatkowo Wojownicy biorą udział w zawodach, gdzie uczą się zdrowej rywalizacji i jest to szansa na sprawdzenie siebie oraz swoich umiejętności.
                        <p></p>Ponadto szeregi naszej kadry zasilają specjaliści, z którymi nawiązaliśmy współpracę:
                        <b>
                        <ul style="margin-left:3rem;"><p>
                         <li> psycholog dziecięcy,</li>
                        
                         <li> dietetyk,</li>
                        
                         <li> fizjoterapeuta.</li>
                        </ul>
                        </p>
                      
                    </h4> 
                </div>
            </div>
        </div>

        <section id="Zajęcia"></section>
        <br><br>
        <!--- Welcome Section -->
       
        </div>
         
    </div>
    <section id="Zajecia" >
        <div class="container " >
            <div class="row justify-content-center ">
                
                <div class="col-lg-4 col-md-6 mb-4 text-center">
                
                    <img src="./img/site/3-1-400x284.jpg" class="img-fluid my-2 border border-secondary img-start">
                    <img src="./img/site/4.jpg" class="img-fluid my-2 border border-secondary img-start">
                    
                </div>
                <div class="col-lg-8">
                    <h3 class="text-dark my-py-2 border-under-text text-center w-100 header-panel">ZAJĘCIA OGÓLNOROZWOJOWE</h3><br>
                    
                    <h6 class=" text-dark pb-3 h4-responsive my-py-2 content-text-without-border" > Jedyna taka sekcja w Bydgoszczy! Ogólnorozwojowe zajecia sportowe z elementami boksu i kick-boxingu przeznaczone dla
                        dzieci w wieku od 4 do 9 lat. Na treningach w Akademii nie zabraknie:<br><br>
                        <ul  style="margin-left:3rem;">
                        <li>bezkontaktowej nauki technik bokserskich i kick-bokserskich,</li>
                        <li>gier i zabaw ruchowych,</li>
                        <li>gimnastyki korekcyjnej,</li>
                        <li>nauki koncentracji, kontrolowania ruchów i samodyscypliny,</li>
                        <li>nauki pokonywania własnych słabości,</li>
                        <li>współpracy z rówieśnikami.</li> 
                        </ul >
                        Dzięki zabawom i ćwiczeniom ogólnorozwojowym z elementami kickboxingu i boksu dzieci usprawniają koordynację ruchową, 
                        wzmacniają wszystkie partie mięśni, zwiększają zakres ruchów, nabywają odporności tak ważnej w obecnych czasach. Ponadto poprawiają kondycję i stymulują ogólny rozwój fizyczny. 
                        Stosujemy najnowsze metody treningowe, a odpowiednie podejście trenerów do dzieci skutkuje przyjazną atmosferą i zauważalnymi efektami treningów. <p></p>

                    </h6> 
                </div>
            </div>
        </div>
    </section>
    <section id="Zajecia" >
        <div class="container " >
            <div class="row justify-content-center ">
                
                <div class="col-lg-8  ">
                
                   
                    <h4 class="text-dark my-py-2 border-under-text text-center w-100 header-panel">ZAJĘCIA Z ELEMENTAMI POSZCZEGÓLNYCH DYSCYPLIN</h4><br>
                    
                    <h6 class=" text-dark pb-3 h4-responsive my-py-2 content-text-without-border" > 
                        <b>Zapasy</b> - sport, którego postawą są chwyty i rzuty, rywalizacja odbywa się na macie, a zawodnicy muszą przestrzegać ściśle określonych zasad. Dyscyplina wymaga sprytu, szybkości i siły.<br><br>
                        <b>Boks</b>  - dyscyplina, w której używa się jedynie pięści. Wymaga bardzo dobrej techniki i cierpliwości. Zawodnik musi być szybki i pewnie wymierzać ciosy z zachowaniem reguł. Uczy szacunku do przeciwnika i czystej, zdrowej rywalizacji.<br><br>
                        <b>Kick-boxing light</b>  - połączenie boksu i kopnieć, dyscyplina wpływająca na wszechstronny rozwój, zwiększa zakres ruchów i pozwala na wypracowanie zwinności. Sport uczący szybkiej reakcji i przemyślanych ruchów. Zajęcia prowadzone są w formie bezkontaktowej (light contact), podobnie jak karate, zapewnione jest więc bezpieczeństwo podopiecznych.<br><br>
                        <b> Ju-jitsu</b> - dosłowne tłumaczenie to "sztuka łagodności", uczy jak zdobyć przewagę sprytem, a niekoniecznie siłą. Dyscyplina pokazująca jak wykorzystać swoje słabości, pomimo przewagi przeciwnika. Trenujący przyswaja wiedzę jak wykorzystywać szanse i działać logicznie w przemyślany sposób. Sport wymagający skupienia i konsekwencji.<br><br>
                    </h6> 
                </div>
                <div class="col-lg-4 text-center col-md-6 mb-4"><br><br>
                    <img src="./img/site/6-1.jpg"  class="img-fluid my-2 border border-secondary img-start">         
                    
                    <img src="./img/site/5.jpg" class="img-fluid my-2 border border-secondary img-start">   
                </div>
            </div>
        </div>
    </section>
<br><br><br>


    <section id="team" >
        <div class="card-deck  container-fluid justify-content-center ">
            <div class="card">
                <div class="card-body">
                    <!-- class=" rounded-circle mb-1"  -->
                    <img src="img/Profil/MG.JPG" class=" rounded-circle mb-1">
                    <h3 class="person-name"  style="font-size: 200%;">Michał Grabarek</h3><br>
                    <h5 style="font-size: 150%;">BOKS I KICK-BOXING</h5><br>
                    <h7 style="font-size: 100%;">
                        <p class="text-dark" style="font-size: 100%;"> Były zawodnik, zdobył kilkanaście medali Pucharu i Mistrzostw Polski oraz Europy. Prowadzenia zajęć nauczył się między innymi na obozach w Tajlandii, Holandii i Francji. Ukończył kurs instruktora sportu - ogólny oraz specjalistyczny z zakresu: Muay Thai, K-1, Kick-Boxing. </h7>
                </div>    
            </div>

            <div class="card">
                <div class="card-body">
                    <!-- class=" rounded-circle mb-1"  -->
                    <img src="img/Profil/NS.JPG" class=" rounded-circle mb-1">
                    <h3 class="person-name" style="font-size: 200%;" >Norbet Świerblewski</h3><br>
                    <h5 style="font-size: 150%;">ZAPASY</h5><br>
                    <h7 style="font-size: 100%;">
                        <p class="text-dark" style="font-size: 100%;">Doświadczony trener z wieloletnim stażem, były zawodnik, zdobywca wielu medali.</p>
                    </h7>
                </div>

            </div>             
        </div>
    </section> 



    </section> <section id="Dlaczego-akademia"></section>



    <div class="back-card">
        
        <div  class="container-fluid justify-content-center" style="padding-top: 40px;">
            <h1 class="header-panel my-2 w-100 text-light text-center" style="font-weight: 900; font-size: auto;" >DLACZEGO AKADEMIA?</h1>
        </div>
        <br>
        <div class="  card-deck w-75 text-center justify-content-center" style="margin: auto;">
        <div class="card col-lg-3" style="min-width:220px;">
          <img class="card-img-top" src="./img/site/kolonie-sportowe.jpg" alt="Card image cap">
          <div class="card-body " >
            <h4 class="card-title " style="font-size: 150%;"> OBOZY</h4>
            <h7 style="font-size: 100%; "><p style="color: rgb(70, 70, 70); font-weight: 500;" style="font-size: 80%;">Organizujemy także dłuższe wyjazdy, np. 3 dniowy wyjazd Zielona Szkoła lub Moje Pierwsze Kolonie - 7dniowy wyjazd nad morze. To szansa dla dzieci na naukę samodzielności i poznanie grupy.</p></h7>
            
          </div>
        </div>
        <div class="card col-lg-3" style="min-width:220px;">
          <img class="card-img-top" src="./img/site/Impreza-integracyjana.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" style="font-size: 150%;">WYJŚCIA INTEGRACYJNE</h4>
            <h7 style="font-size: 100%; "><p style="color: rgb(70, 70, 70); font-weight: 500;" style="font-size: 80%;">Duży nacisk kładziemy na integrację i wspólne spędzanie czasu poza salą treningową.  Organizujemy spotkania, np. imprezy okolicznościowe w sali zabaw Złoty Smoczek czy spotkania integracyjne z rodzicami - spływy kajakowe, rodzinne pikniki czy kuligi. Szansą na naukę samodzielności może być pierwsza nocka poza domem. Proponujemy udział w nocce w Sali Zabaw Złoty Smoczek pełnej atrakcji i pod okiem wykwalifikowanej kadry.</p></h7>
           
          </div>
        </div>
        <div class="card col-lg-3" style="min-width:220px;">
          <img class="card-img-top" src="./img/site/5.jpg" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title" style="font-size: 150%;">ZAWODY</h4>
            <h7 style="font-size: 100%; "><p style="color: rgb(70, 70, 70); font-weight: 500;" style="font-size: 80%;">Akademia Wojowników jest środowiskiem idealnym do rozwoju dziecka, które składa się nie tylko z treningów, ale także pozwala na integrację z grupą i udział w szeregu dodatkowych aktywności, jak wyjazdy czy zawody sportowe.</p></h7>
            
          </div>
        </div>
      </div>
    
    </div>
    
    <section id="treningi">
        <div class="container-fluid padding justify-content-center">
            <div class="col">
                <h1 class=" header-panel " style="font-weight: 900;  margin: auto;  font-size: auto;">  </h1>

            </div>
            <br><br> 
            <div class="row text-center padding w-75 " style="margin: auto;">
                <div class="col-lg-4">
                    <i class="fas fa-hand-rock   img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i><p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Samoobrona  </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                        Niezwykle ważny aspekt treningów, to zdobycie wiedzy jak się obronić i wykorzystać spryt oraz zwinność do obrony przed nawet silniejszym i wiekszym napastnikiem                    </div>
                </div>
               


                <div class="col-lg-4">
                    <i class="fas fa-lightbulb img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i><p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Logiczne myślenie</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Sztuki walki wymagają szybkiego i analitycznego myślenia, należy zapamiętać sekwencje układów, a w dalszym etapie przewidywać ruchy przeciwników, sporty walki umożliwiają wszechstronny rozwój dziecka, to dowód na to, iż podopieczni trenują nie tylko ciało.
                    </h5>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <i class="fas fa-child img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i><p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Pewność siebie </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Dzieci uczą się pokonywania własnych słabości i współpracy z rówieśnikami, a każdy sukces i motywacja ze strony trenera i grupy skutkuje zwiększeniem pewności siebie                        
                        </h5>
                    </div>
                </div>
               
        </div>
            
           
    </section>
    <section id="treningi2">
        <div class="container-fluid padding justify-content-center">
            <div class="col">
                <!-- <h1 class="shadow-effect-text my-2" style="font-weight: 900;  margin: auto;"> Co oferujemy? </h1> -->

            </div>
            <br><br> 
            <div class="row text-center padding w-75 " style="margin: auto;">
                
                <div class="col-lg-4">
                    <i class="fa fa-exclamation img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i><p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Dyscyplina</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Sporty walki wymagają skupienia i powtarzania sekwencji aż "do znudzenia", nasi doświadczeni trenerzy potrafią zdobyć zaufanie trenujących i sprawić, aby dzieci chętnie słuchały poleceń oraz mimo powtórzeń zaangażowały się w trening. 
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4">
                    <i class="fas fa-street-view img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i><p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Treningi dla każdego </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Trenują zarówno chłopcy, jak i dziewczynki, dzieci w różnym wieku i o odmiennej sprawności fizycznej, trenerzy zwracają uwagę na możliwości dzieci i dążą do optymalnego rozwoju każdego podopiecznego, natomiast dzieci dostrzegają, że nie wszyscy radzą sobie tak samo i należy sobie pomagać                    </h5>
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <i class="fas fa-arrow-up img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i><p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Zauważalny progres</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Na początku wykonujemy test sprawnościowy i co dwa miesiące je powtarzamy, co motywuje uczestników i pozwala na obserwowanie postępów oraz pozwala zauważyć na co należy zwrócić szczególną uwagę u poszczególnych podopiecznych                    </h5>
                    </div>
                </div>
                
                
            
            </div>
            
           
    </section>


    <section id="treningi">
        <div class="container-fluid padding justify-content-center">
            <div class="col">
                <!-- <h1 class="shadow-effect-text my-2" style="font-weight: 900;  margin: auto;"> Co oferujemy? </h1> -->

            </div>
            <br><br> 
            <div class="row text-center padding w-75 " style="margin: auto;">
                <div class="col-lg-4">
                    <i class="fas fa-star img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i><p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Świadomość siły fizycznej, ruchów i koordynacji </h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Dzieci zyskują wiedzę dotyczącą swojej siły, a trenerzy kładą nacisk na przekazanie jak z tej siły korzystać, aby nikomu nie zrobić krzywdy.
                            Zabawy ruchowe z elementami sztuk walki uczą zwinności, dziecko z każdym treningiem zwiększa świadomość swoich ruchów, a zróżnicowane ćwiczenia przeplecione zabawą wpływają pozytywnie na koordynację podopiecznych. 
                             </div>
                </div>
        
                <div class="col-lg-4 ">
                    <i class="fa fa-balance-scale img-fluid " style="font-size: 400%; color: #cab80e;"></i><p></p><p></p><br>
                    <h2 class="header-info " style="font-weight: 900; margin: auto;  font-size: 170%;">Kontrola emocji i cierpliwość</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Wbrew stereotypom sztuki walki nie uczą brutalności, przeciwnie - trenujący zdobywa zdolność kontrolowania emocji i pożytkowania tych negatywnych, a wciąż powtarzane ćwiczenia i sekwencje uświadomią dzieciom, że trening czyni mistrza, a na efekty działań należy czekać, nie tracąc przy tym zapału do osiągnięcia zamierzonego celu. 
                        </h5>
                    </div>
                </div>
               
                
                <div class="col-lg-4">
                    <i class="fas fa-users img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i><p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Integracja z grupą oraz współzawodnictwo</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Wyjazdy i dodatkowe atrakcje w postaci nocek czy obozów wpływają pozytywnie na zacieśnienie więzi między grupą i pozwalają połączyć rozwój dzieci z zabawą. 
                            Rywalizacja z rówieśnikami motywuje do osiągania sukcesów i trenowania, dzieci chętniej się rozwijają, aby doścignąć resztę grupy, forma zabawy stwarza odpowiednie środowisko do rozwoju tego aspektu.                   </div>
                </div>
            </div>
            
            <section id="Kontakt"></section>
    </section> 
    </section>

    <!-- PLAN TRENINGOWY -->
 

    <!-- END PLAN TRENINGOWY -->
    <!-- START -->
    <!-- END GALERIA -->



    <!-- START NOWE NABORY -->
    


    <!--- Cards -->
   
   
    <section id="FAQ"><br><br>
    <h1 class="header-panel w-100 text-justify text-center "  >Skontaktuj się z nami</h1><br>
        <h5 class="text-center my-2 text-justify mx-auto text-dark w-50" style="font-size:110%;vertical-align: middle;">Jeśli masz pytania odnośnie treningów lub chcesz podjąć bezpośrednią współprace, zapraszmay do wypełnienia formualrza kontaktowego.</h5>
        <br>
    <section class="mb-4 text-dark contct-us-section">
    
                        <!--Section heading-->
                        <!-- <h4 class=" font-weight-bold text-center my-2 title-contact-us">Skontaktuj się z nami</h4> -->
                        <!--Section description-->
                        <!-- <p class="text-center  mx-auto mb-4">Twojego pytania nie ma na liście? Wyślij wiadomość!</p> -->
                       
                        <?php
                        if($message_sent=='1'):
                        ?>
                         <h4 class=" font-weight-bold text-center my-2 title-contact-us">wysłano</h4> 
                         <?php
                         elseif ($message_sent=='0'):
                         ?>
                        <h4 class=" font-weight-bold text-center my-2 title-contact-us" id="errorMessage"></h4> 
                        <?php
                        else:
                        ?>
                          <h4 class=" font-weight-bold text-center my-2 title-contact-us">nie wysłano wiadomości!<br> Email nieprawidłowy</h4> 
                        <?php
                        endif;
                        ?>
                        <div class="row">
                    
                            <!--Grid column-->
                            <div class="w-100 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" action="" method="POST">
                    
                                    <!--Grid row-->
                                    <div class="row">
                    
                                        <!--Grid column-->
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
                                        <!--Grid column-->
                    
                                        <!--Grid column-->
                                        <div class="col-md-4">
                                        <h6 style="font-weight:bold;">
                                            <div class="md-form mb-0 form-field">
                                                <input type="text" id="email" name="email" class="form-control">
                                                <label for="email" class="">Twój email</label>
                                            </div>
                                            </h6>
                                        </div>
                                        <!--Grid column-->
                    
                                    </div>
                                    <!--Grid row-->
                    
                                    <!--Grid row-->
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
                                    <!--Grid row-->
                    
                                    <!--Grid row-->
                                    <div class="row">
                                        <div class="col-md-12">
                                        <h6 style="font-weight:bold;">
                                            <div class="md-form form-field">
                                                <textarea type="text" id="message" name="message" rows="4" class="form-control md-textarea"></textarea>
                                                <label for="message">Wiadomość</label>
                                            </div>
                                        </h6>
                                        </div>
                                    </div>
                    
                                    <h6 style="font-weight:bold;">
                                        <div class="text-justify  text-center">
                                            <div class="md-form form-field text-justify  text-center">
                                             <input class="btn  btn-send  text-center text-dark" onclick="return checkform()" type="submit" value="Wyślij">
                                            </div>
                                        </div>
                                    </h6>
                            </form>
                                
                        <div class="status"></div>
                    </div>
                            <!--Grid column-->
                </div>
            </section><br>
            </section>

    <script>
        const accordingItemHeaders = document.querySelectorAll(".according-item-header");
        accordingItemHeaders.forEach(accordingItemHeaders=>{
            accordingItemHeaders.addEventListener("click",event=>{

                accordingItemHeaders.classList.toggle("active");
            });
        });

        function checkform(){
            const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var name = document.getElementById('name').value;
            
            var surname = document.getElementById('surname').value;
            
            var email = document.getElementById('email').value;
            
            var message = document.getElementById('message').value;
            
            var subject = document.getElementById('subject').value;


            if(/^[A-z ]+$/.test(name) && /^[A-z ]+$/.test(surname) && re.test(String(email).toLowerCase())  && /^[A-z ]+$/.test(message) && /^[A-z ]+$/.test(subject))
            {

                return true;
            }
            else{
                document.getElementById('errorMessage').textContent="Uzupełnij prawidłowo wszytskie informacje!";
                return false;
            }
            

            
        }
    </script>



    <!--- Two Column Section -->
    <div class="footer-sponsorzy text-center">
        <div class="container">
            <div class="row  d-flex align-items-center ">
                <div class="col  text-center">
                     <img src="./img/Loga/zanit.png" width="80px" class="img-fluid">
                     <img src="./img/Loga/takeaway.png" width="90px" class="img-fluid">
                     <img src="./img/Loga/sport lab.png" width="100px"  class="img-fluid">
                     <img src="./img/Loga/octa.png" width="70px" class="img-fluid">
                     <img src="./img/Loga/glad.png" width="70px" class="img-fluid">
                     <img src="./img/Loga/athleticomed_lowgo-1.png" width="150px" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
    <footer class = "page-footer bg-dark" id="">
        
            
        
        <div class="container text-center text-md-left mt-2">
            <div class="row">
               

                <div class="col-md-2 mx-auto mb-4 text-center">
                    <h6 class="text-uppercase font-weight-bold  foot-header " style="font-size: 100%"> Social media</h6>
                    <div class="my-3"></div>
                    <!-- <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height:2px;"> --> 
                    <a class="btn btn-social" href="https://www.facebook.com/GoldenDragon.bdg"> <i class="fab fa-facebook-f "></i></a>
                    <a class="btn btn-social" href="https://www.instagram.com/golden_dragon_gym/"><i class="fab fa-instagram "></i></a>
                    <!-- <a class="btn btn-social" href="#"><i class="fab fa-youtube  "></i></a> -->
                   
                </div>
               
               
                <div class="col-md-4 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold foot-header" style="font-size: 100%"> kontakt</h6>
                    <!-- <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width:310px; height:2px;"> --> 
                    
                    <h7  style="font-size: 85%">
                    <ul class="list-unstyled my-4">
                    
                        
                        <li class="my-2"><i class="fas fa-home "></i>&nbsp;Stowarzyszenie Szkoła Walki Golden Dragon</li>
                        <li class="my-2"><i class="fas fa-map-marker"></i>&nbsp;sp.47 ul. Czartoryskiego 18,</li>
                        <li class="my-2"><i class="fas fa-envelope"></i>&nbsp;golden.dragon@spoko.pl</li>
                        <li class="my-2"><i class="fas fa-phone-square"></i>&nbsp;+48 796 751 818</li>
                        
                    </ul>
                    </h7>
                </div>
                <div class="col-md-4 mx-auto mb-4 text-center">
                    <h6 class="text-uppercase font-weight-bold  foot-header" style="font-size: 100%">Nasi Partnerzy</h6>
                    <!-- <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width: 85px; height:2px;"> -->
                    <div class="my-3"></div>
                    <img src="./img/Loga/alm.png" width="80px" class="img-fluid">
                    <img src="./img/Loga/pzb.png" width="100px" class="img-fluid">
                    <img src="./img/Loga/pzkb.png" width="80px" class="img-fluid">
                    <img src="./img/Loga/pzmsw.png" width="80px" class="img-fluid">
                   
                    <img src="./img/Loga/pzz.png" width="80px" class="img-fluid">
                   
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-1 bg-dark ">
                    <p><small>Copyright &copy; <span id="currentYear"></span> 
                        Akademia wojowników,</h7> All Rights Reserved </small>
                            <small>| 
                                <a  href="https://www.instagram.com/aleksanderr_kowalski/" id="AK"><h7>Author <i
                                    class="fab fa-instagram"></i> Aleksander Kowalski  </h7></a></small>
                    </p>
                    
        </div>
            
    </footer>

    <script>
       
            var date = new Date(); 
            year = date .getFullYear();
            document.getElementById("currentYear").textContent=year;
        
    </script>

</body>

</html>