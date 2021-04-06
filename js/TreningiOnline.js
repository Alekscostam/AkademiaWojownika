

function changeTraining()
    {
        const training_type= document.getElementById('training-type').innerText;
        const training_desc= document.getElementById('training-desc').innerText;
        const training_data= document.getElementById('training-data').innerText;
        const training_author= document.getElementById('training-author').innerText;
        const training_time= document.getElementById('training-time').innerText;
        const training_level= document.getElementById('training-level').innerText;
        const training_film= document.getElementById('training-film').innerText;

       

        document.getElementById('type').innerText=training_type;
        document.getElementById('desc').innerText=training_desc;
        document.getElementById('data').innerText=training_data;
        document.getElementById('author').innerText=training_author;
        document.getElementById('time').innerText=training_time;
        document.getElementById('level').innerText=training_level;
        document.getElementById('film').setAttribute("src",training_film);


       
    }