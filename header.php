

<!DOCTYPE html>

<html lang="en">
<head>
<link href="CSS/main.css" rel="stylesheet">
<link src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
<style><?php include './CSS/main.css'; ?></style>
<style>
  
.navbar-fixed-top.scrolled {
  transition: 0.6s;
  background-color: #fff !important;
  transition: background-color 200ms linear;
  opacity: 1;
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
  padding: 5px 10px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.4);
}

.bookmarks {
  font-size: 0.9rem;
  letter-spacing: 1.2px;
  padding-left: 1.1rem;
  font-weight: 600;
  padding-top: 0.2rem;
  color: #cab80e;
  text-transform: uppercase;
  justify-content: center;
  display: inline-block;
  min-height: 3.2vh;
  max-height: 3vh;
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
  background: #cab80e;
  width: 1.5s;
}

.bookmarks:hover::after {
  width: 100%;
  transition: width 0.5s;
}

.bookmarks:hover {
  color: #ffe600;
  text-shadow: 0px 1px 1px #000;
  transition: 0.5s;
}



</style>
</head>


<body>
<script>
       
       $(function() {
           $(document).scroll(function() {
               var $nav = $(".navbar-fixed-top");
               $nav.toggleClass('scrolled', $(this).scrollTop() > 1);
           });
       });

   </script>
    <nav class="navbar navbar-light  navbar-expand-lg scrolling-navbar navbar-fixed-top ">
   
        <a class="text-logo navbar-brand" href="https://akademiawojownika.herokuapp.com/" ><span style="font-size:90%; font-weight:600 ;color: #cab80e;" >AKADEMIA WOJOWNIKÓW</span></a>
        <button class="navbar-toggler mx-auto" type="button" style="margin:15px" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span  class="fas fa-bars mx-auto" style="color:#cab80e; font-size:1.2rem; "></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        <hr id="hr-navbar"></hr>
            <ul class="navbar-nav ml-auto "  style="color: #cab80e; ">
               <!-- https://akademiawojownika.herokuapp.com/ -->
                    <a class="nav-link" href="#Akademia"><span data-toggle="collapse"  data-target="#navbarNav"  class="bookmarks">AKADEMIA</span></a>
                     
                    <a class="nav-link" href="https://akademiawojownika.herokuapp.com/#Zajęcia"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">ZAJĘCIA</span></a>
                    <!-- https://akademiawojownika.herokuapp.com/ -->
                    <a class="nav-link" href="https://akademiawojownika.herokuapp.com/#Trener"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">Trener</span></a>

                    <!-- <a class="nav-link" href="Trener.php"><span data-toggle="collapse" data-target="#navbarNav"  class="bookmarks">TRENINGI personalne</span></a> -->
               
                    <a class="nav-link" href="https://activenow.io/funkcje/?fbclid=IwAR0VqhMvxcQ8c7lcW0gDD1iSzkA5JrYeAjj9Y-otVEjuzJgTFa7m-RM_jS0"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">ZAPISY</span></a>
                
                    <a class="nav-link" href="https://akademiawojownika.herokuapp.com/#Kontakt"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">Kontakt</span></a>
                
            </ul>
        </div>
    </nav>
</body>

</html>