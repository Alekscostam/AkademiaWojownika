<!DOCTYPE html>

<html lang="en">
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
       
   
        <a class="text-logo " href="https://akademiawojownika.herokuapp.com/"><span style="font-size:90%; font-weight:600 ;color: #cab80e;">AKADEMIA WOJOWNIKÓW</span></a>
        <button class="navbar-toggler mx-auto" type="button" style="margin:20px" data-toggle="collapse"  data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
            <span  class="fas fa-bars mx-auto" style="color:#cab80e; font-size:1.4rem; "></span>
        </button>
   
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto " style="color: #cab80e;">
                <li class="nav-item active">
                    <a class="nav-link" href="https://akademiawojownika.herokuapp.com/#Akademia"><span data-toggle="collapse"  data-target="#navbarNav"  class="bookmarks">AKADEMIA</span></a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="TreningiOnline.php"><span data-toggle="collapse" data-target="#navbarNav"  class="bookmarks">TRENINGI ONLINE</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://akademiawojownika.herokuapp.com/#Zajęcia"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">ZAJĘCIA</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://akademiawojownika.herokuapp.com/#Dlaczego-akademia"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">Dlaczego akademia?</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://activenow.io/funkcje/?fbclid=IwAR0VqhMvxcQ8c7lcW0gDD1iSzkA5JrYeAjj9Y-otVEjuzJgTFa7m-RM_jS0"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">ZAPISY</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://akademiawojownika.herokuapp.com/#Kontakt"><span data-toggle="collapse" data-target="#navbarNav" class="bookmarks">Kontakt</span></a>
                </li>
            </ul>
        </div>
    </nav>
</body>

</html>