	
	<?=$this->load->view('headers/menu');?>
	

	<div class="container">
		<div class="row">
			<div class="col-md-8"> 
			<center>   
	    	<h3>editar clientes</h3>
	    	</center>
				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>index.php/main/editarEnlace/<?=$id?>" method="POST">
					<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese los nombres">
				    </div>
				<!-- <div> <input type="file" id="exampleInputFile"> </div>  -->
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Rut</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="rut" name="rut" placeholder="Ingrese el rut">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Fecha nacimiento</label> 
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="fechanacimiento" name="fechanacimiento" placeholder="Ingresa fecha nacimiento">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nacionalidad</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Ingresa la nacionalidad">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Direccion</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="direccion" name="direccion" placeholder="direccion">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Empresa</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="empresa" name="empresa" placeholder="Ingresa una empresa">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nº tarjeta bancaria</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="tarjetabancaria" name="tarjetabancaria" placeholder="Ingresa nº tarjeta ">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nº telefono</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingresa un telefono">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Estado</label> 
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="estado" name="estado" placeholder="Ingresa un telefono">
				    </div>
			  	</div>
			  	<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-ttc" id="editar" name="editar enlace">editar</button>      				
    				</div>
  				</div>
				</form>
			</div>
    </div>
  </div>

	