const mysql = require("mysql2");
  
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
  connection.execute(query, function(error, result, field) {
    console.log(error);
    console.log(result);
    console.log(result[1]['id']);
    //console.log(field);
  });

  connection.end((error) => {
    if (error) {
        console.error('Error closing MySQL connection:', error);
        return;
      }
  
      console.log('MySQL connection закрыто.');
  });
