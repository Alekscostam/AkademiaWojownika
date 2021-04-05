

<style>
<?php include 'CSS/style.css'; ?>

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

    <link rel="stylesheet" href="https://m.w3newbie.com/you-tube.css">
    <link rel="stylesheet" type="text/css" href="./lightbox.css">
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <script src="../TreningiOnline/js/TreningiOnline.js"></script>
    <script src="js/main.js"></script>
    <link href='https://css.gg/add.css' rel='stylesheet'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
<?php include('../header.php'); ?>
        <div class="jumbotron  container-fluid ">
    
            <div class="intro " >
                <div id="kursy">
                       
                   
                    <div class="row  padding w-75 " style="margin: auto;">
                        <div class="col-lg-5">
                            <h2 id="type" style="font-weight: 900; font-size: 200%;">Trening funkcjonalny </h2>
                            <h2 id="data" style=" font-size: 130%;">01.04.2020</h2>
                            <p></p><br>
                            <h3 id="author" style="font-size: 120%;">Michał Grabarek</h3>
                            <div >
                                <h5 style="font-size: 100%;">
                               <label id="desc"> Klasyczne ćwiczenia metody Josepha Pilatesa. Trening pozwoli Ci wzmocnić mięśnie głębokie – brzucha, dna miednicy oraz grzbietu, stanowiących tzw. Centrum. Trening zwiększy Twoją świadomość ciała, uelastyczni mięśnie oraz zwróci uwagę na pracę oddechem. 
                               </label>
                            </div>
                                <br>
                                <ul>
                                    <li><i class="far fa-clock img-fluid "></i> <label id="time">15 min</label></li>  &nbsp;&nbsp;&nbsp;
                                    <li><i class="far fa-star img-fluid "></i> <label id="level">Trudny</label></li>  
                                </ul>
                            
                        </div>
                


                        <div class="col-lg-7">
                           
                            
                            <div>
                                <h5 class="header-content">
                                <iframe  src="https://www.youtube.com/embed/UZwV5q97Xz4" title="YouTube video player" id="film" frameborder="0" scrolling="no" onload='javascript:(function(o){o.style.height=o.contentWindow.document.body.scrollHeight+"px";}(this));' style="min-height:400px;width:100%;border:none;overflow:hidden;" ></iframe>
                                    
                                </h5>
                               
                            </div>
                         
                        </div>
                    
                
               
                    </div>
            
           
                </div>
           
            </div>      
        </div>
        <div class="back-card">
        
            <div  class="container-fluid justify-content-center" style="padding-top: 40px;">
            </div>
            <br>
            <div class="  card-deck  text-center justify-content-center" style="margin:auto;">
            <div class="card col-lg-3" style="min-width:220px;">
            
            <img class="card-img-top" src="./img/site/5.jpg" alt="Card image cap">
            <div class="card-body " >
                <h4 class="card-title " style="font-size: 150%;"> Trening1</h4>
            
            </div>
            </div>
            <div class="card col-lg-3" style="min-width:220px;" onclick="changeTraining()">   
                   
                <img class="card-img-top" src="./img/site/5.jpg" alt="Card image cap">
                <div class="card-body">
                    <h4 id="training-type"  class="card-title" style="font-size: 150%;">Treningabc</h4>
                    <label id="training-desc" style="display:none">desc</label>
                    <label id="training-data" style="display:none">data</label>
                    <label id="training-author" style="display:none">author</label>
                    <label id="training-time" style="display:none">time</label>
                    <label id="training-level" style="display:none">level</label>
                    <label id="training-film" style="display:none">https://www.youtube.com/embed/SDwwG8b5mkA</label>
                    
                </div>
            </div>
            <div class="card col-lg-3" style="min-width:220px;">
            
            <img class="card-img-top" src="./img/site/5.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title" style="font-size: 150%;">Trening2</h4>
                
            </div>
            </div>
            <div class="card col-lg-3" style="min-width:220px;">
            <img class="card-img-top" src="./img/site/5.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title" style="font-size: 150%;">Trening2</h4>
                
            </div>
            </div>
        </div>
    
    </div>
  
<?php include('../footer.php'); ?>

</body>

</html>