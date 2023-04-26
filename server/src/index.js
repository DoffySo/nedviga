const express = require('express')
const cors = require('cors')
const morgan = require('morgan')
const bodyParser = require('body-parser')

const app = express()
app.use(morgan('combined'))
app.use(bodyParser.json())
app.use(cors())
app.get('/register', (req, res) => {
  res.send({
    message: `Hello, ${req.body.name}!`
  })
})

app.listen(process.env.PORT || 8081)