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
<header>
    <?php include('./header.php'); ?>
</header>
    <!--- Image Slider -->

   

    
        

   
    <section id="treningi">
        <div class="container-fluid padding justify-content-center"><br><br><br><br>
            <div class="col">

            <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Zapisy do akademii wojowników</h2>

            </div>
            <br><br>
            <div class="row text-center padding w-75 " style="margin: auto;">

                <div class="col-lg-12">
                <a href="#" style="font-size:100%;  padding: 0.8rem 2rem;  color: #f4f4f4;  text-transform: uppercase; border: 1px; border-style: solid; border-color: #ffe600;" class="btn">Zapisy</a>
               
                    <p></p><br><br>
                    <div>
                        <h5 class="header-content">
                            Tutaj będzie isntrukcja dla uzytkownika, dotycząca systemu służącego do zapisów 
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
            <br>
            <div class="row text-center padding w-75 " style="margin: auto;">
                <div class="col-lg-6">
                    <i class="fas fa-star img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Treningi personalne dla dzieci</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Dzieci zyskują wiedzę dotyczącą swojej siły, a trenerzy kładą nacisk na przekazanie jak z tej siły korzystać, aby nikomu nie zrobić krzywdy.</h5>
                    </div>
                </div>

                <div class="col-lg-6">
                    <i class="fas fa-users img-fluid my-2" style="font-size: 400%; color: #cab80e;"></i>
                    <p></p>
                    <h2 class="header-info" style="font-weight: 900; font-size: 170%;">Something here</h2>
                    <p></p>
                    <div>
                        <h5 class="header-content">
                            Wyjazdy i dodatkowe atrakcje w postaci nocek czy obozów wpływają pozytywnie na zacieśnienie więzi między grupą i pozwalają połączyć rozwój dzieci z zabawą. </h5>
                    </div>
                </div>
                
            </div>
    </section>
   





    <?php include('./footer.php'); ?>

</body>

</html>