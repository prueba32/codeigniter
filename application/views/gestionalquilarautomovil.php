 <div class="clearfix">&nbsp;</div>
<div class="clearfix">&nbsp;</div>

<div class="container">
  <div class="col-md-8">
  <center>
    <h2>Buscar</h2>
    </center>
  </div>
</div>

<div id="container">  
  <div class="col-md-12">   

    <?=$this->load->view('headers/menu');?>

    <div class="clearfix">&nbsp;</div>

    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <form id="form" method="GET" action="<?=base_url()?>index.php/main/buscaralquiler">
              <input type="text" id="query" name="query" /> 
              <button type="submit" class="btn btn-ttc" id="buscar" value="Buscar">Buscar</button> 
            </form>
            <div class="clearfix">&nbsp;</div>
          </tr>
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Rut</th> 
            <th>Fechanacimiento</th>
            <th>Nacionalidad</th>
            <th>Direccion</th>
            <th>Empresa</th>
            <th>Nº Tarjetabancaria</th>
            <th>Nº Telefono</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr> 
        </thead>
        <tbody>
        <?php 
          if ($result != FALSE){
            foreach ($result->result() as $row){
              echo "<tr>";
                echo "<td>".$row->nombre."</td>";
                echo "<td>".$row->apellidos."</td>";
                echo "<td>".$row->rut."</td>";
                echo "<td>".$row->fechanacimiento."</td>";
                echo "<td>".$row->nacionalidad."</td>";
                echo "<td>".$row->direccion."</td>";
                echo "<td>".$row->empresa."</td>";
                echo "<td>".$row->tarjetabancaria."</td>";
                echo "<td>".$row->telefono."</td>";
                echo "<td>".$row->estado."</td>"; 
                echo "<td>";
                
                               echo "<a href='".base_url()."main/editar/".$row->id."' class='label label-success'>";
                    echo "<span class='glyphicon glyphicon-pencil'></a></span>";

                  //echo "<a href='".base_url()."index.php/control/eliminar/".$row->id."' class='label label-danger'>";
                  //  echo "<span class='glyphicon glyphicon-minus'></a></span>";
                echo "</tr>";
            } 
          }       
        ?>
        </tbody>
      </table>  


    <p>Total de resultados: <b><?php echo $total; ?></b></p>

  </div>
