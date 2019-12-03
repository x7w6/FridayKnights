const express = require('express');
const app = express();
const router = express.Router();


router.get('/', function (req, res) {
    res.setHeader('Content-Type', 'text/plain; charset=utf-8');
    res.send('Hello World!')
  })



module.exports = router;