const readMoreBtn = document.querySelector('.read-more-btn');
const text  = document.querySelector('.text-first');

// alert("jol");
function ShowOrHideTxt(){
    var elements = document.getElementsByClassName('moreText');
    for(var i=0; i<elements.length; i++) { 
        if(elements[i].style.display=='none' || elements[i].style.display==''){
            var x = document.getElementById("btn-div");
            elements[i].style.display='inline';
            x.style.display = "none";
        }
        else{
            elements[i].style.display='none';
        }
    }
}

//  var one =   document.getElementById('moreText');
//     if(document.getElementById('moreText').style.display=="none")
//     {
//         document.getElementById('moreText').style.display="inline";
//     }
        
 

