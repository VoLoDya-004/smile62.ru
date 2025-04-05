//смена темы
//код после прогрузки страницы

window.onload = () => {
    function change_theme_add() {
        const boxes = document.querySelectorAll('.card');
        boxes.forEach(box => {
            box.classList.add("dark-theme");
        });
        search__line_line.classList.add("dark-theme");
        const element = document.querySelectorAll('.link__item');
        element.forEach(elem => {
            elem.classList.add("dark-theme");
        });
    }
    function change_theme_remove() {
        const boxes = document.querySelectorAll('.card');
        boxes.forEach(box => {
            box.classList.remove("dark-theme");
        });
        search__line_line.classList.remove("dark-theme");
        const element = document.querySelectorAll('.link__item');
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
    for (let point of points) {
        if (point.href == document.location) {
            point.classList.add('line', 'line-text');
        }
    }

const points_mobile = document.querySelectorAll(".menu-mobile a");
    for (let point_mobile of points_mobile) {
        if (point_mobile.href == document.location) {
            point_mobile.classList.add('menu-mobile__item_active');
        }
        else {
            point_mobile.classList.add('menu-mobile__item_passiv');
        }
    }
}