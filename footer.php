<!DOCTYPE html>

<html lang="en">
<link href="CSS/main.css" rel="stylesheet">
<link src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" rel="stylesheet">
<style><?php include './CSS/main.css'; ?></style>
<style>
   footer {
  padding-top: 1rem;
  bottom: 0;
  background-color: #292b2c;
  color: #cfcfcf;
}

hr.light {
  border-top: 1px solid #cfcfcf;
  width: 60%;
  margin-top: 0.8rem;
}

footer a {
  color: #cfcfcf;
}

.styling-footer {
  font-size: 0.1rem;
}
.foot-header {
  font-size: 90%;
  /* color: #cab80e; */
  color: #fff;
}
hr.light-100 {
  border-top: 1px solid #b6b6b6;
  width: 75%;
  margin-top: 0.8rem;
}
.footer-copyright {
  width: 57%;
  margin: auto;
  text-align: center;
  justify-content: center;
  border-top: 0.1rem solid #cfcfcf;
}

.footer-sponsors {
  /* height: 80px; */
  width: 100%;
  text-align: center;
  justify-content: center;
  /* border-bottom: 0.1rem solid #cfcfcf; */
}
</style>
<body></b>
    <!-- <div class="footer-sponsors text-center">
        <div class="container">
            <div class="row  d-flex align-items-center ">
                <div class="col  text-center">
                    <img src="./img/Loga/zanit.png" width="80px" class="img-fluid">
                    <img src="./img/Loga/takeaway.png" width="90px" class="img-fluid">
                    <img src="./img/Loga/sport lab.png" width="100px" class="img-fluid">
                    <img src="./img/Loga/octa.png" width="70px" class="img-fluid">
                    <img src="./img/Loga/glad.png" width="70px" class="img-fluid">
                    <img src="./img/Loga/athleticomed_lowgo-1.png" width="150px" class="img-fluid">
                </div>
            </div>
        </div>
    </div> -->
    <footer class="page-footer bg-dark">
        <div class="container text-center text-md-left mt-2">
            <div class="row">


                <div class="col-md-3 mx-auto mb-4 ">
                    <h6 class="text-uppercase  foot-header " style="font-size: 110%"> Media społecznościowe </h6>
                    <div class="my-4 " >
                    <!-- <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width: 125px; height:2px;"> -->
                    <a class="btn-social" style="font-size: 190%" href="https://www.facebook.com/awzlotysmok"> <i class="fab fa-facebook-square"></i></a>
                    <a class="btn-social"  style="font-size: 190%" href="https://www.instagram.com/fight_club_golden_dragon_/"><i class="fab fa-instagram "></i></a>
                    <a class="btn-social" style="font-size: 190%" href="https://www.youtube.com/channel/UCUVy3lb-YnbOMu4leinyQcQ"><i class="fab fa-youtube  "></i></a>
                    </div>
                </div>


                <div class="col-md-6 mx-auto mb-4">
                    <h6 class="text-uppercase  foot-header" style="font-size: 110%"> Kontakt</h6>
                    <!-- <hr class="bg-warning mb-4 mt-0 d-inline-block mx-auto" style="width:310px; height:2px;"> -->

                    <h7 style="font-size: 90%">
                        <ul class="list-unstyled my-4">
                            <li class="my-2"><i class="fas fa-home "></i>&nbsp;Akademia Wojowników Złoty Smok</li>
                            <li class="my-2"><i class="fas fa-map-marker"></i>&nbsp; Bydgoskie Centrum Finansowe "Drukarnia" poziom -1 ul. Jagielonska 1</li>
                            <li class="my-2"><i class="fas fa-envelope"></i>&nbsp;Akademiawojownikow@o2.pl</li>
                            <li class="my-2"><i class="fas fa-phone-square"></i>&nbsp;+48 796 751 818</li>
                        </ul>
                    </h7>
                </div>
                <div class="col-md-3 mx-auto mb-4 ">
                    
                    <img src="./img/Loga/logo4.png" width="200px" class="img-fluid">
                    
                </div>
            </div>
        </div>
        <div class="footer-copyright text-center py-1 bg-dark ">
            <p><small> &copy; <span id="currentYear"></span>
                    Akademia wojowników,</h7> All Rights Reserved </small>
                <small>|
                    <a href="https://www.instagram.com/aleksanderr_kowalski/" id="AK">
                        <h7 >Author <i class="fab fa-instagram"></i> Aleksander Kowalski </h7>
                    </a></small>
            </p>
        </div>
    </footer>

    <script>
        var date = new Date();
        year = date.getFullYear();
        document.getElementById("currentYear").textContent = year;
    </script>

</body>
</html>