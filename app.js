const express = require('express');
const app = express();
const home = require('./routes/home');
const dotenv = require('dotenv');


app.use(express.static('public'));

app.use('/', home);

// set environment variables PORT
const port = process.env.PORT || 3000;
//dynamically set port with variable
app.listen(port, () => console.log(`Listening on Port ${port}...`));