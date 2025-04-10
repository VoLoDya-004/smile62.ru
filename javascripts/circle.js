//кружок с цифрой для корзины
function myFunction(){
    const numberElement = document.getElementById("circle");
    const number = parseInt(numberElement.innerText, 10) + 1;
    numberElement.innerText = number;
    }

