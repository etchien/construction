let connection = require('../config/db')

class Message{


static create (content,nom,prenom,pays,ville,email,cb) {

  connection.query('INSERT INTO messages SET content=?, create_at = ?, nom=?, prenom=?, pays=?, ville=?, email=?',  [content, Date, nom, prenom, pays, ville, email],  (err, result) => {

    if (err) throw err

      cb(result)


  })

}

  static all (cb) {

    connection.query('SELECT content, nom, prenom FROM messages', (err, rows) => {

      if(err) throw err

        cb(rows)

    })
  }

}


module.exports = Message
