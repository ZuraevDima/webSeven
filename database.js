const getData = require('./parser.js');
const mysql = require('mysql');

//Данные нашей базы данных
const dbConfig = {
host: 'host',
user: 'user',
password: 'password',
database: 'database'
};

//подключение к базе данных
function createDbConnection() {
return mysql.createConnection(dbConfig);
}

//SQL-запрос
function executeQuery(connection, query) {
connection.query(query, (error, results) => {
if (error) {
console.error('Ошибка выполнения SQL-запроса:', error);
}
});
}
//парсинг данных 
async function parseToDb() {
try {  
  const connection = createDbConnection();
  let books  = getData.books();
  books.then(result=>{
    for(let i=0; i<result.length; i++){
      const query = `INSERT INTO \`table\` (title, price) VALUES ('${result[i][1]}', ${result[i][0]})`; 
      console.log(query);       
      executeQuery(connection, query);
    }  
  });
} catch (error) {
console.error('Ошибка при запросе', error.message);
}
}
parseToDb();