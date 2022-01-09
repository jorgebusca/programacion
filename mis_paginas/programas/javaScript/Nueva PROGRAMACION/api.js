let db = require('/dbcategoria');
const dbocategoria =  require('./dbcategorias');
//Requerido en todos
let express = require('express');
let bodyParser = require('body-parser');
let cors =require('cors');
const { request, response } = require('express');

let app = express();
let router = express.Router();

app.use(bodyParser.urlencoded({extended : true}));
app.use(bodyParser.json);
app.use(cors());
app.use('/api', router);//Ruta principal

router.route('/categoria').get((request, response)=>{
    dbocategoria.getCategoria().then(result =>{
        response.json(result[0]);
    })
})

let port = process.env.PORT || 8090;
app.listen(port);
console.log('Categoria api iniciado en el puerto : ' + port);//Mensaje de inicio de servicio
