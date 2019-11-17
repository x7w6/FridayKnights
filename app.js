const express = require('express');
const app = express();
const port = 3000;
const nodemon = require('nodemon');

app.get('./docs/index.html');
app.listen(port, () => console.log(`Example app listening on port {$port} !`));