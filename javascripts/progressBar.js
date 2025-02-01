//полоса прогресса

function progressBar() {
    // Узнаём, на сколько страница прокручена
    let scroll = document.body.scrollTop || document.documentElement.scrollTop;
    // Узнаём высоту всей страницы
    let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    // Получаем в%, на сколько прокручена страница
    let scrolled = scroll / height * 100;
    // Подставляем % прокрутки в ширину полосы прогресса
    document.getElementById('progressBar').style.width = scrolled + '%';
  }
  
  // Запускаем функцию, когда пользователь скролит
  window.addEventListener('scroll', progressBar);