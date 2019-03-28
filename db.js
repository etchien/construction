

let mysql = require('mysql');

// create the connection to database

let connection = mysql.createConnection ({

  host: 'localhost',

  user: 'root',

  password: '',

  database: 'reccette'

});

connection.connect();

module.exports = connection
