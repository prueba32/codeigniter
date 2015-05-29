<?=$this->load->view('headers/menu');?>

	<div class="clearfix">&nbsp;</div>
	<div class="clearfix">&nbsp;</div>

	<div class="container">
		<div class="col-md-8">
		<center>
			<h2>Ver todos los automoviles</h2>
			</center>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12">
			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Marca</th>
						<th>Modelo</th>
						<th>Patente</th>
						<th>Nº chasis</th>
						<th>Año</th>
						<th>Color</th>
						<th>Foto</th>
						<th>Nº asientos</th>
						<th>Capacidad carga</th>
						<th>Tipo combustible</th>
						<th>Traccion</th> 
						<th>Estado fisico</th>
						<th>Categoria</th>
						<th>Estado</th>
						<th>Acciones</th>
					</tr>	
				</thead>
				<tbody>
				<?php 
					if ($enlaces != FALSE){
						foreach ($enlaces->result() as $row){
							echo "<tr>";
								echo "<td>".$row->marca."</td>";
								echo "<td>".$row->modelo."</td>";
								echo "<td>".$row->patente."</td>";
								echo "<td>".$row->nchasis."</td>";
								echo "<td>".$row->anio."</td>";
								echo "<td>".$row->color."</td>";
								echo "<td>".$row->foto."</td>";
								echo "<td>".$row->nasientos."</td>";
								echo "<td>".$row->capacidadcarga."</td>";
								echo "<td>".$row->tipocombustible."</td>";
								echo "<td>".$row->traccion."</td>";
								echo "<td>".$row->estadofisico."</td>";
								echo "<td>".$row->categoria."</td>";
								echo "<td>".$row->estado."</td>";
								echo "<td>";
								//	echo "<a href='".base_url()."main/editarauto/".$row->id."' class='label label-success'>";
									//	echo "<span class='glyphicon glyphicon-pencil'></a></span>";
								
									//echo "<a href='".base_url()."index.php/main/eliminarauto/".$row->id."' class='label label-danger'>";
									//	echo "<span class='glyphicon glyphicon-minus'></a></span>";


								echo "</tr>";
								

						}	
					}				
				?>
				</tbody>
			</table>	
		</div>
	</div>	

</div>
