//смена темы
//код после прогрузки страницы

window.onload = () => {
    function change_theme_add() {
        const boxes = document.querySelectorAll('.card');
        boxes.forEach(box => {
            box.classList.add("dark-theme");
        });
        a1.classList.add("dark-theme");
        const element = document.querySelectorAll('.sss');
        element.forEach(elem => {
            elem.classList.add("dark-theme");
        });
    }
    function change_theme_remove() {
        const boxes = document.querySelectorAll('.card');
        boxes.forEach(box => {
            box.classList.remove("dark-theme");
        });
        a1.classList.remove("dark-theme");
        const element = document.querySelectorAll('.sss');
        element.forEach(elem => {
            elem.classList.remove("dark-theme");
        });
    }

    const theme = localStorage.getItem("theme");
    const darkModeToggle = document.getElementById("themeToggle");

 
    if (theme === "dark-theme") {
        document.body.classList.add("dark-theme");
        change_theme_add();
    } else {
        document.body.classList.remove("dark-theme");
        change_theme_remove();
    }
  
    darkModeToggle.addEventListener("click", function () {
        document.body.classList.toggle("dark-theme");

        if (document.body.classList.contains("dark-theme")) {
            localStorage.setItem("theme", "dark-theme");
            change_theme_add();
        } else {
            localStorage.setItem("theme", "light-theme");
            change_theme_remove();
      }
    });
    
//линия в блоке пунктов меню
const points = document.querySelectorAll(".menu li a");
for(let point of points){
 if(point.href == document.location){
  point.classList.add('line', 'menu__item--style','line-text');
 }
}
}