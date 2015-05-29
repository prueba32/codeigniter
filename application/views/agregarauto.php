	
	<?=$this->load->view('headers/menu');?>  
	
	<div class="container">
		<div class="row">
			<div class="col-md-8"> 
			<center>   
	    	<h3>Agregar Automovil</h3> </center>
				<form class="form-horizontal" role="form" id="form" name="form" action="<?=base_url()?>index.php/main/guardarauto" method="POST">
					<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Marca</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="marca" name="marca" placeholder="Ingrese un marca">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Modelo</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="modelo" name="modelo" placeholder="Ingrese un modelo">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Patente</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="patente" name="patente" placeholder="Ingrese una patente">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nº chasis</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nchasis" name="nchasis" placeholder="Ingrese un nº chasis">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Año</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="anio" name="anio" placeholder="Ingrese un año">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Color</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="color" name="color" placeholder="Ingrese un color">
				    </div>
			  	</div>
			  	<!--
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="foto" name="foto" placeholder="Ingrese una foto">
				    </div>
			  	</div>
                -->
                <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Foto</label>
    					<div class="col-sm-10">	
    						<input type="file" id="foto" name="foto" >
    						
  					</div>
                  </div>

			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Nº asientos</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nasientos" name="nasientos" placeholder="Ingrese nº asientos">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Capacidad de carga</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="capacidadcarga" name="capacidadcarga" placeholder="Ingresa una capacidad de carga">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Tipo de combustible</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="tipocombustible" name="tipocombustible" placeholder="Ingrese tipo combustible">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Traccion</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="traccion" name="traccion" placeholder="Ingrese traccion vehiculo">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Estado fisico</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="estadofisico" name="estadofisico" placeholder="Ingrese estado fisico vehiculo">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Categoria</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingresa una categoria">
				    </div>
			  	</div>
			  	<div class="form-group">
			    	<label for="inputEmail3" class="col-sm-2 control-label">Estado</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="estado" name="estado" placeholder="Ingrese estado">
				    </div>
			  	</div>
			  	
			  	<div class="form-group">
    				<div class="col-sm-offset-2 col-sm-10">
      				<button type="submit" class="btn btn-ttc" id="guardar" name="guardar">Guardar</button>       				
    				</div>
  				</div>
				</form>
			</div>
    </div>
  </div>

	