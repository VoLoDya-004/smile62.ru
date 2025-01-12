import mysql from '../node_modules/mysql2/promise.js';

async function connect() {
  try {
    const connection = await mysql.createConnection({
      host: 'localhost',
      user: 'root',
      password: 'Svd5705577',
      database: 'shop',
    });
    console.log('Connection to MySQL established.');
    return connection;
  } catch (error) {
    console.error('Error connecting to MySQL:', error);
    throw error;
  }
}

export default connect;