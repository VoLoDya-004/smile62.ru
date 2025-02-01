//кружок с цифрой для корзины
function myFunction(){
    const numberElement = document.getElementById("circle_1");
    const number = parseInt(numberElement.innerText, 10) + 1;
    numberElement.innerText = number;
    }