//const mysql = require("mysql2");
//import mysql2 from '../node_modules/mysql2/index.js';
//export default mysql
  
const connection = mysql.createConnection({
  host: "localhost",
  user: "root",
  database: "shop",
  password: "Svd5705577"
});
connection.connect((error) => {
    if (error) {
      console.log(error);
      return;
    }
    console.log('Подключение установлено успешно');
  });

  let query= 'Select * From tovar'
  connection.execute(query, function(error, result) {
    console.log(error);
    console.log(result);
    //console.log(result[1]['id']);

    let cardItem = ''
    let out = document.getElementById('katalog')
    result.forEach(element => {
       cardItem =
       `<div id="card-${element.id}" class="card">
					<div class="card_top">
						<a href="" class="card_image">
							<img src="планшет.jpg" alt="картинка">
						</a>
						<div class="card_label">-5%</div>
					</div>
					<div class="card_bottom">
						<div class="card_prices">
							<div class="card_price card_price--discount">100 000</div>
							<div class="card_price card_price--count">95 000</div>
						</div>
						<a href="" class="card_title">Планшет</a>
						<button class="card_btn">В корзину</button>
					</div>
				</div>
        `
    });

    //console.log(field);
  });
  //out.insertAdjacentHTML('afterbegin', cardItem);

  connection.end((error) => {
    if (error) {
        console.error('Error closing MySQL connection:', error);
        return;
      }
  
      console.log('MySQL connection закрыто.');
  });
