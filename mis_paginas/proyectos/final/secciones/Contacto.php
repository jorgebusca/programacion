<section class="container">
<div id="contacto">
 <div id="contacto">

        <form action="index.php?s=Gracias" method="post"  enctype="multipart/form-data">
                   <h2>No Dude en Contactarnos</h2>
                    
                    <div class="form-group">
                        <label for="nombre2">Nombre</label>
                        <input type="text" name="nombre" class="form-control form-control-sm" id="nombre" placeholder="Nombre..." required>
                    </div>
                    
					 <div class="form-group">
                        <label for="apellido2">Apellido</label>
                        <input type="text" name="apellido"  class="form-control form-control-sm" id="apellido" placeholder="Apellido..." required>
                    </div>
					
					<div class="form-group">
                        <label for="mail">Email</label>
						<input type="email" class="form-control" id="mail" placeholder="Mail..." required>
                    </div>               
	               <div class="form-group">
                        <label for="Telefono">Telefono</label>
						<input type="Telefono" class="form-control" id="Telefono" placeholder="Telefono..." required>
                    </div>               
                    <div class="form-group">
                        <label for="colores">Selecciona una opcion</label>
                        <select id="colores" class="form-control">
							<option value="r">Seleccione la consulta</option>
                            <option value="r">Consulta de Productos</option>
                            <option value="v">Pedido de Presupuesto</option>
                            <option value="v">Reclamo</option>
                            <option value="a">Otro</option>
                        </select>
                    </div>
                 

                    <div class="form-group">
                        <label for="comentario">Mensaje</label>
                        <textarea id="comentario" class="form-control" cols="30" rows="5"></textarea>
                    </div>
                

	
                    <input type="reset" value="Limpiar" class="btn btn-danger">
                    <input type="submit" value="Enviar" class="btn btn-success">
</form>


   
</div>

</section>
