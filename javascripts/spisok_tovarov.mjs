import connect from './dbconnection.mjs';

async function fetchData() {
  const db = await connect();
  try {
    // Query to get all users
    const [rows, fields] = await db.execute('SELECT * FROM tovar');
    console.log('All tovar:', rows);
    
  } catch (error) {
    console.error('Error fetching data:', error);
  } finally {
    db.end();
  }
}

fetchData();