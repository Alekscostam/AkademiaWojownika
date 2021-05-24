const readMoreBtn = document.querySelector('.read-more-btn');
const text = document.querySelector('.text-first');
const accordingItemHeaders = document.querySelectorAll(".according-item-header");
accordingItemHeaders.forEach(accordingItemHeaders => {
    accordingItemHeaders.addEventListener("click", event => {

        accordingItemHeaders.classList.toggle("active");
    });
});



function checkform() {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    var name = document.getElementById('name').value;

    var surname = document.getElementById('surname').value;

    var email = document.getElementById('email').value;

    var message = document.getElementById('message').value;

    var subject = document.getElementById('subject').value;


    if (/^[A-z ]+$/.test(name) && /^[A-z ]+$/.test(surname) && re.test(String(email).toLowerCase()) && /^[A-z ]+$/.test(message) && /^[A-z ]+$/.test(subject)) {

        return true;
    } else {
        document.getElementById('errorMessage').textContent = "Uzupełnij prawidłowo wszytskie informacje!";
        return false;
    }

}


function ShowOrHideTxt() {
 
    var x = document.getElementById("right-div-hidden");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "block";
  }
 
  var y = document.getElementById("read-more-btn");
  y.style.display = "none";

 

  document.getElementsByClassName("div-changer");


}

//  var one =   document.getElementById('moreText');
//     if(document.getElementById('moreText').style.display=="none")
//     {
//         document.getElementById('moreText').style.display="inline";
//     }



