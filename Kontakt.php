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
<!DOCTYPE html>

<html lang="en">
<style>
    <?php include 'CSS/styleTO.css'; ?>
</style>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Akademia Wojowników</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <link href="CSS/styleTO.css" rel="stylesheet">

    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <link rel="stylesheet" type="text/css" href="./lightbox.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="js/main.js"></script>
    <link href='https://css.gg/add.css' rel='stylesheet'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <?php include('./header.php'); ?>
   
    <section id="FAQ" ><br><br><br><br><br>
        <h1 class="header-panel w-100 text-justify text-center ">Skontaktuj się z nami</h1><br>
        <h5 class="text-center my-2 text-justify mx-auto text-dark w-50" style="font-size:110%;vertical-align: middle;">Jeśli masz pytania odnośnie treningów lub chcesz podjąć bezpośrednią współprace, zapraszmay do wypełnienia formualrza kontaktowego.</h5>
        <br>
        <section class="mb-4 text-dark contact-us-section">

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
            </div>
        </section><br>
    </section>

    <?php include('./footer.php'); ?>

</body>

</html>