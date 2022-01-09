var config = require('./dbconfig');//instanciamos el archivo dbconfig
const sql = require('mssql'); //se necesita paquetes mssql

//fincion Async : Asyncrona esta devuelve un objeto
async function getCategoria(){
    try{
        let pool = await sql.connect(config);
        let categorias =await pool.request().query("SELECT * FROM TM_CATEGORIA");
        return categorias.recordset;

    }catch(error){
    console.log(error);
}

}
module.exports = {
    getCategoria :getCategoria
}