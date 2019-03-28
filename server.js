let express = require('express')

let app = express()

let bodyParser = require('body-parser')

let  session = require('express-session')



// moteur de template

app.set('view engine', 'ejs')




// midlleware

app.use('/assets' , express.static('public'))

app.use(bodyParser.urlencoded({ extended: false }))

app.use(bodyParser.json())

app.use(session({

  secret: 'magara',

  resave: false,

  saveUninitialized: true,

  cookie: { secure: false }
}))

app.use(require('./middlewares/flash'))


//routes

app.get('/', (request, response) => {

  let Message = require('./models/message')

  Message.all(function (messages) {

    response.render('pages/index', {messages : messages})

  })

})

app.post('/', (request, response) => {

  if (request.body.message === undefined || request.body.message === '') {

    request.flash('error' , "Vous n'avez pas posté  de massage")

    response.redirect('/')

  }else {

    let Message = require('./models/message')

    Message.create(request.body.message, function() {

      request.flash('success', "Merci  !")

      response.redirect('/')
    })
  }

})


app.listen(8090)
