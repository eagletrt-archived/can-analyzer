const express = require('express');
const app = express();
const path = require('path');
const router = express.Router();

app.set('views', __dirname + '/views');

router.get('/',function(req,res){
  res.render('index.ejs');
  //__dirname : It will resolve to your project folder.
});

//Da fare il routing di tutte le foto e i file

//add the router
app.use('/', router);
app.listen(process.env.port || 3000);

console.log('Running at Port 3000');
