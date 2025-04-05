$(document).ready(function() {
    let currentPage = 1;
  
    function loadCards() {
      $.ajax({
        url: `pagination.php?page=${currentPage}`,
        method: 'GET',
        success: function(data) {
          $('#catalog').append(data);
          currentPage++;
        }
      });
    }
  
    // Загрузка первой страницы постов при загрузке страницы
    loadCards();
  
    // Загрузка следующей страницы постов при клике на кнопку "Загрузить еще"
    $('#load-more').click(function() {
        loadCards();
    });
  
    // Загрузка дополнительных постов при прокрутке страницы
    //$(window).scroll(function() {
      //if ($(window).scrollTop() + $(window).height() >= $('#post-container').height()) {
        //loadCards();
      //}
    //});
  });