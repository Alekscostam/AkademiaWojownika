<!DOCTYPE html>

<html lang="en">

<head>
  <link href="CSS/main.css" rel="stylesheet">
  <link src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">

  <style>
    <?php include './CSS/main.css'; ?>
  </style>
  <style>
    .navbar-fixed-top.scrolled {

      background-color: #fff !important;
      opacity: 1;

      text-shadow: 0px 0px 0px #000 !important;
      color: #cab80e !important;
      /* padding: 5px 10px; */
    }

    /* NAVBAR */
    #hr-navbar {
      height: 3px;
      border: 0;
      box-shadow: inset 0 2px 4px -2px rgba(0, 0, 0, 0.5);

    }

    .navbar {

      justify-content: center;
      width: 100%;
      top: 0;
      transition: 1s;
      z-index: 100000;
      position: fixed;
      padding: 7px 7px;
      box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.4);
      color: #cab80e !important;
      background-color: #fff;

    }

    .bookmarks {
      font-size: 0.9rem;
      letter-spacing: 1.2px;
      padding-left: 1.1rem;
      font-weight: 600;
      padding-top: 0.2rem;
      color: #000 !important;
      text-transform: uppercase;
      justify-content: center;
      display: inline-block;
      min-height: 3.4vh;
      max-height: 3.4vh;
    }

    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
      outline: none;
      box-shadow: none;
    }

    .navbar-toggle {
      width: 100%;
      float: none;
      margin-right: 0;
    }

    .bookmarks::after {
      border-spacing: 15px;
      text-decoration: none;
      content: "";
      height: 2px;
      max-width: 200px;
      width: 1.5s;
    }

    .bookmarks:hover::after {
      width: 100%;
      transition: width 0.5s;
    }

    .bookmarks:hover {
      color: #ffe600;
      text-shadow: 0px 0px 0px #000;
      transition: 0.5s;
    }

    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      transition: 0.6s;
      z-index: 100000;
      ;
    }

    header ul {
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    header ul li {
      position: relative;
      list-style: none;
    }

    header ul li a {
      position: relative;
      text-decoration: none;
      color: #fff;
      letter-spacing: 2px;
    }

    header.sticky {
      padding: 26px 100px;
      background: #fff;
    }

    header.sticky ul li a {
      color: #292b2c !important;
    }

    .nav-link {
      display: inline-block;
      color: #000;
      text-decoration: none;
    }

    .nav-link::after {
      content: '';
      display: block;
      width: 0;
      height: 2px;
      background: rgb(231, 208, 0);
      /* background: #ffe600; */
      transition: width .3s;
    }

    .nav-link:hover::after {
      width: 100%;
      /* transition: width .3s; */
    }
  </style>
</head>


<body>
  <script>
    //     window.addEventListener("scroll",function(){
    //       var header = document.querySelector("header");
    //       header.classList.toggle("sticky",window.scrollY>0)
    //     })
    //     $('.navbar-nav>li>a').on('click', function(){
    //     $('.navbar-collapse').collapse('hide');
    // });
  </script>
  <header>
    <nav class="navbar navbar-light  navbar-expand-lg scrolling-navbar navbar-fixed-top ">

      <a class="text-logo navbar-brand" href="http://www.awzlotysmok.pl/"><span style="font-size:90%; color: rgb(231, 208, 0);
  text-shadow: 0px 1px 1px #000;;">AKADEMIA WOJOWNIKÓW</span></a>
      <button class="navbar-toggler mx-auto" type="button" style="margin:15px" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="fas fa-bars mx-auto" style="color:#cab80e; font-size:1.1rem; "></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <hr id="hr-navbar">
        </hr>
        <ul class="navbar-nav ml-auto " style="">


          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="http://www.awzlotysmok.pl/#Akademia"><span data-toggle="collapse" data-target="#navbarNav">&nbsp;AKADEMIA&nbsp;</span></a> </li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks " href="http://www.awzlotysmok.pl/#Zajęcia">&nbsp;ZAJĘCIA&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="http://www.awzlotysmok.pl/#Trener">&nbsp;Trener&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="Zapisy.php">&nbsp;Zapisy&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="Zapisy.php#Treningi-personalne">&nbsp;TRENING PERSONALNY&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="https://www.youtube.com/channel/UCUVy3lb-YnbOMu4leinyQcQ">&nbsp;YouTube&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="http://www.awzlotysmok.pl/#Kontakt">&nbsp;Kontakt&nbsp;</a></li>

        </ul>
      </div>
    </nav>


    <!-- <nav class="navbar navbar-light  navbar-expand-lg scrolling-navbar navbar-fixed-top ">

      <a class="text-logo navbar-brand" href="https://akademiawojownika.herokuapp.com/"><span style="font-size:90%; color: rgb(231, 208, 0);
text-shadow: 0px 1px 1px #000;;">AKADEMIA WOJOWNIKÓW</span></a>
      <button class="navbar-toggler mx-auto" type="button" style="margin:15px" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
        <span class="fas fa-bars mx-auto" style="color:#cab80e; font-size:1.1rem; "></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <hr id="hr-navbar">
        </hr>
        <ul class="navbar-nav ml-auto " style="">


          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="https://akademiawojownika.herokuapp.com/#Akademia"><span data-toggle="collapse" data-target="#navbarNav">&nbsp;AKADEMIA&nbsp;</span></a> </li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks " href="https://akademiawojownika.herokuapp.com/#Zajęcia">&nbsp;ZAJĘCIA&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="https://akademiawojownika.herokuapp.com/#Trener">&nbsp;Trener&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="Zapisy.php">&nbsp;Dołącz do nas&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="Zapisy.php#Treningi-personalne">&nbsp;TRENING PERSONALNY&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="https://www.youtube.com/channel/UCUVy3lb-YnbOMu4leinyQcQ">&nbsp;YouTube&nbsp;</a></li>
          <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="https://akademiawojownika.herokuapp.com/#Kontakt">&nbsp;Kontakt&nbsp;</a></li>

        </ul>
      </div>
    </nav> -->




  </header>
</body>

</html>