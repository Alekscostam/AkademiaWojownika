

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

  color: white!important;
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
}

.bookmarks {
  font-size: 0.9rem;
  letter-spacing: 1.2px;
  padding-left: 1.1rem;
  font-weight: 600;
  padding-top: 0.2rem;
  color: #cab80e!important;
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
header{
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  transition: 0.6s;
  z-index: 100000;;
}
header ul {
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
}

header ul li{
  position: relative;
  list-style: none;
}

header ul li a{
  position: relative;
  text-decoration: none;
  color: #fff;
  letter-spacing: 2px;
}
header.sticky{
  padding: 26px 100px;
  background: #fff;
}

header.sticky ul li a{
  color: #292b2c!important;
}

</style>
</head>


<body>
<script>
       
    window.addEventListener("scroll",function(){
      var header = document.querySelector("header");
      header.classList.toggle("sticky",window.scrollY>0)
    })
    $('.navbar-nav>li>a').on('click', function(){
    $('.navbar-collapse').collapse('hide');
});

   </script>
   <header>
    <nav class="navbar navbar-light  navbar-expand-lg scrolling-navbar navbar-fixed-top ">
   
        <a class="text-logo navbar-brand" href="https://akademiawojownika.herokuapp.com/" ><span style="font-size:90%; color: #cab80e;" >AKADEMIA WOJOWNIKÓW</span></a>
        <button class="navbar-toggler mx-auto" type="button" style="margin:15px" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span  class="fas fa-bars mx-auto" style="color:#cab80e; font-size:1.1rem; "></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
        <hr id="hr-navbar"></hr>
            <ul class="navbar-nav ml-auto " >
    

                 <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks"  href="https://akademiawojownika.herokuapp.com/#Akademia"><span data-toggle="collapse" data-target="#navbarNav">&nbsp;&nbsp;AKADEMIA&nbsp;&nbsp;</span></a> </li> 
                 <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks " href="https://akademiawojownika.herokuapp.com/#Zajęcia">&nbsp;&nbsp;ZAJĘCIA&nbsp;&nbsp;</a></li> 
                 <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="https://akademiawojownika.herokuapp.com/#Trener">&nbsp;&nbsp;Trener&nbsp;&nbsp;</a></li> 
                 <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks"  href="Zapisy.php">&nbsp;&nbsp;Dołącz do nas&nbsp;&nbsp;</a></li> 
                 <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show"> <a class="nav-link bookmarks" href="https://www.youtube.com/channel/UCUVy3lb-YnbOMu4leinyQcQ">&nbsp;&nbsp;YouTube&nbsp;&nbsp;</a></li> 
                 <!-- <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">  <a class="nav-link bookmarks" href="Zapisy.php">&nbsp;&nbsp;ZAPISY&nbsp;&nbsp;</a></li>  -->
                 <li class="nav-item" data-toggle="collapse" data-target=".navbar-collapse.show">  <a class="nav-link bookmarks" href="#Kontakt">&nbsp;&nbsp;Kontakt&nbsp;</a></li> 
                
            </ul>
        </div>
    </nav>
    </header>
</body>

</html>