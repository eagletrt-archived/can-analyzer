const express = require('express');
const app = express();
const path = require('path');
const router = express.Router();

app.set('views', __dirname + '/views');
app.use(express.static(__dirname + '/views/'));
//app.use(express.static(__dirname + '/views/icons/'));
//pp.use(express.static(__dirname + '/views/images/'));
//app.use(express.static(__dirname + '/views/src/'));

router.get('/',function(req,res){
  res.render('index.ejs');
});

router.get('/car_view.ejs',function(req,res){
  res.render('car_view.ejs');
});

//add the router
app.use('/', router);
app.listen(process.env.port || 3000);

console.log('Running at Port 3000');
