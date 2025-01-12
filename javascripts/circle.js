//let counter = document.getElementById("card_btn_1"); 
    //counter.onclick = function() { 
        //let number = document.getElementById('circle_1'); 
        //number++:
        //document.getElementById('circle_1').number = number; 
    //}

function myFunction(){
    const numberElement = document.getElementById("circle_1");
    const number = parseInt(numberElement.innerText, 10) + 1;
    numberElement.innerText = number;
    }