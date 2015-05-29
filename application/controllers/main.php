<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Main extends CI_Controller { 
	 
	function __construct() {
		parent::__construct();
		$this->load->model('model');	 	
	}

/* ###########################           Para abrir las vistas   #####################################           */
	public function index() {
		$this->load->view('headers/librerias'); 
		$this->load->view('principal');
		$this->load->view('footer');
	}
public function inde(){
	if ($this->tank_auth->is_logged_in()){
		$data['provincias'] = $this->model->provincias();
		$this->load->view('agregar',$data);
		}else{
			echo "No tienes permisos para entrar";
		}
	}
	public function agregar() {
		if ($this->tank_auth->is_logged_in()){
			$this->load->view('headers/librerias');
			$data['provincias'] = $this->model->provincias();
			$this->load->view('agregar',$data);
			
		    
			$this->load->view('footer');
		}else{
			echo "No tienes permisos para entrar";
		}
	}
public function agregarauto() {
		if ($this->tank_auth->is_logged_in()){
			$this->load->view('headers/librerias');
			$this->load->view('agregarauto');
			$this->load->view('footer');
		}else{ 
			echo "No tienes permisos para entrar";
		}
	}
public function abrirvista() {
		if ($this->tank_auth->is_logged_in()){
			$this->load->view('headers/librerias');
			$this->load->view('gestiongeneraralerta');
			$this->load->view('footer');
		}else{ 
			echo "No tienes permisos para entrar";
		}
	}
	

    public function validaciones(){
		$this->load->view('headers/librerias');
		$this->load->view('validaciones');
		$this->load->view('footer');
	}

 
	/*  ##############################                cierre                   ###############################  */


	/*  ##############################       funciones guardar                  ###############################  */
	public function guardar() {
		$data = array(
			'nombre'   => $this->input->post('nombre',TRUE),
			'apellidos'      => $this->input->post('apellidos', TRUE), 
			'rut'   => $this->input->post('rut',TRUE),
			'fechanacimiento'      => $this->input->post('fechanacimiento', TRUE),
			'nacionalidad'   => $this->input->post('nacionalidad',TRUE),
			'direccion'      => $this->input->post('direccion', TRUE),
			'empresa'   => $this->input->post('empresa',TRUE),
			'tarjetabancaria'      => $this->input->post('tarjetabancaria', TRUE),
			'telefono'   => $this->input->post('telefono',TRUE),
			'estado'      => $this->input->post('estado', TRUE),
			'fecha_arriendo' => date('Y/m/d h:m') 
		);

		$this->model->guardar($data);
		redirect('main/agregar');
	}
	public function guardarauto() {
		$data = array(
			'marca'   => $this->input->post('marca',TRUE),
			'modelo'      => $this->input->post('modelo', TRUE),
			'patente'      => $this->input->post('patente', TRUE),
			'nchasis'   => $this->input->post('nchasis',TRUE),
			'anio'      => $this->input->post('anio', TRUE),
			'color'      => $this->input->post('color', TRUE),
			'foto'   => $this->input->post('foto',TRUE),
			'nasientos'      => $this->input->post('nasientos', TRUE),
			'capacidadcarga'      => $this->input->post('capacidadcarga', TRUE),
			'tipocombustible'   => $this->input->post('tipocombustible',TRUE),
			'traccion'      => $this->input->post('traccion', TRUE),
			'estadofisico'      => $this->input->post('estadofisico', TRUE),
			'categoria'   => $this->input->post('categoria',TRUE),
			'estado'   => $this->input->post('estado',TRUE) 
			
		);

		$this->model->guardarauto($data);
		redirect('main/agregarauto');
	}
    
/*  ##############################                 cierre            ###############################  */


/*  ##############################       funciones  ver    todo                  ###############################  */
	public function ver(){		
		$data = array(
			'enlaces' => $this->model->verTodo(),
			'dump'    => 0
		);

		$this->load->view('headers/librerias');
		$this->load->view('ver', $data);
		$this->load->view('footer');
	}
public function verauto(){		
		$data = array(
			'enlaces' => $this->model->verTodoauto(),
			'dump'    => 0
		);

		$this->load->view('headers/librerias');
		$this->load->view('verauto', $data);
		$this->load->view('footer');
	}
public function verautoalquiler(){		
		$data = array(
			'enlaces' => $this->model->verTodoauto(),
			'dump'    => 0
		);

		$this->load->view('headers/librerias');
		$this->load->view('gestionalquilarautomovil', $data);
		$this->load->view('footer');
	}
/*  ##############################      cierre               ###############################  */	


/*  ##############################       funciones buscar               ###############################  */

	public function buscar() {
		$data = array();

		$query = $this->input->get('query', TRUE);

		if ($query) {
			$result = $this->model->buscar(trim($query));
			$total = $this->model->totalResultados(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}

		$this->load->view('headers/librerias');
		$this->load->view('buscar', $data);
		$this->load->view('footer');
	}
	public function buscaralquiler() {
		$data = array();

		$query = $this->input->get('query', TRUE);

		if ($query) {
			$result = $this->model->buscaralquiler(trim($query));
			$total = $this->model->totalResultadosalquiler(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}

		$this->load->view('headers/librerias');
		$this->load->view('gestionalquilarautomovil', $data);
		$this->load->view('footer');
	}
	public function buscarauto() {
		$data = array();

		$query = $this->input->get('query', TRUE);

		if ($query) {
			$result = $this->model->buscarauto(trim($query));
			$total = $this->model->totalResultadosauto(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}

		$this->load->view('headers/librerias');
		$this->load->view('buscarauto', $data);
		$this->load->view('footer');
	}

public function buscargestionalquiler() {   
		$data = array();

		$query = $this->input->get('query', TRUE);

		if ($query) {
			$result = $this->model->buscargestionalquiler(trim($query));
			$total = $this->model->totalResultadosalquiler(trim($query));
			if ($result != FALSE){
				$data = array(
					'result' => $result,
					'total'  => $total
				);
			}else {
				$data = array('result' => '', 'total' => $total);
			}	
		}else{
			$data = array('result' => '', 'total' => 0);
		}

		$this->load->view('headers/librerias');
		$this->load->view('gestionalquilarautomovil', $data);
		$this->load->view('footer');
	}

/*  ##############################       cerrar                ###############################  */


/*  ##############################       funciones  editar                  ###############################  */

	public function editar(){
	$id = $this->uri->segment(3);
	$obtenerEnlace = $this->model->obtenerEnlace($id);

        if ($obtenerEnlace != FALSE) {
        	foreach ($obtenerEnlace->result() as $row ) {
        		$nombre = $row->nombre;
        		$apellidos = $row->apellidos;
        		$rut = $row->rut;
        		$fechanacimiento = $row->fechanacimiento;
        		$nacionalidad = $row->nacionalidad;
        		$direccion = $row->direccion;
        		$empresa = $row->empresa;
        		$tarjetabancaria = $row->tarjetabancaria;
        		$telefono = $row->telefono;
        		$estado = $row->estado;
        	}
        	$data = array(
        		'id' => $id,
        		'nombre' => $nombre,
        		'apellidos' => $apellidos,
        		'rut' => $rut,
        		'fechanacimiento' => $fechanacimiento,
        		'nacionalidad' => $nacionalidad,
        		'direccion' => $direccion,
        		'empresa' => $empresa,
        		'tarjetabancaria' => $tarjetabancaria,
        		'telefono' => $telefono,
        		'estado' => $estado
        	);

        }else{
        	$data = '';
            return FALSE;
        }


	        $this->load->view('headers/librerias');
			$this->load->view('editar',$data);
			$this->load->view('footer');

}
public function editarauto(){
	$id = $this->uri->segment(3);
	$obtenerEnlaceauto = $this->model->obtenerEnlaceauto($id);

        if ($obtenerEnlaceauto != FALSE) {
        	foreach ($obtenerEnlaceauto->result() as $row ) {
        		$marca = $row->marca;
        		$modelo = $row->modelo;
        		$patente = $row->patente;
        		$nchasis = $row->nchasis;
        		$anio = $row->anio;
        		$color = $row->color;
        		$foto = $row->foto;
        		$nasientos = $row->nasientos;
        		$capacidadcarga = $row->capacidadcarga;
        		$tipocombustible = $row->tipocombustible;
        		$traccion = $row->traccion;
        		$estadofisico = $row->estadofisico;
        		$categoria = $row->categoria;
        		$estado = $row->estado;
        	}
        	$data = array(
        		'id' => $id,
        		'marca' => $marca,
        		'modelo' => $modelo,
        		'patente' => $patente,
        		'nchasis' => $nchasis,
        		'anio' => $anio,
        		'color' => $color,
        		'foto' => $foto,
        		'nasientos' => $nasientos,
        		'capacidadcarga' => $capacidadcarga,
        		'tipocombustible' => $tipocombustible,
        		'traccion' => $traccion,
        		'estadofisico' => $estadofisico,
        		'categoria' => $categoria,
        		'estado' => $estado
        	);

        }else{
        	$data = '';
            return FALSE;
        }


	        $this->load->view('headers/librerias');
			$this->load->view('editarauto',$data);
			$this->load->view('footer');

}
function editarEnlace(){
	$id = $this->uri->segment(3);
	$data = array(
            'nombre'   => $this->input->post('nombre',TRUE),
			'apellidos'      => $this->input->post('apellidos', TRUE), 
			'rut'   => $this->input->post('rut',TRUE),
			'fechanacimiento'      => $this->input->post('fechanacimiento', TRUE),
			'nacionalidad'   => $this->input->post('nacionalidad',TRUE),
			'direccion'      => $this->input->post('direccion', TRUE),
			'empresa'   => $this->input->post('empresa',TRUE),
			'tarjetabancaria'      => $this->input->post('tarjetabancaria', TRUE),
			'telefono'   => $this->input->post('telefono',TRUE),
			'estado'      => $this->input->post('estado', TRUE)
		);
	$this->model->editarEnlace($id,$data);
	redirect('main/ver');
}
function editarEnlaceauto(){
	$id = $this->uri->segment(3);
	$data = array(
            'marca'   => $this->input->post('marca',TRUE),
			'modelo'      => $this->input->post('modelo', TRUE),
			'patente'      => $this->input->post('patente', TRUE),
			'nchasis'   => $this->input->post('nchasis',TRUE),
			'anio'      => $this->input->post('anio', TRUE),
			'color'      => $this->input->post('color', TRUE),
			'foto'   => $this->input->post('foto',TRUE),
			'nasientos'      => $this->input->post('nasientos', TRUE),
			'capacidadcarga'      => $this->input->post('capacidadcarga', TRUE),
			'tipocombustible'   => $this->input->post('tipocombustible',TRUE),
			'traccion'      => $this->input->post('traccion', TRUE),
			'estadofisico'      => $this->input->post('estadofisico', TRUE),
			'categoria'   => $this->input->post('categoria',TRUE),
			'estado'   => $this->input->post('estado',TRUE) 

		);
	$this->model->editarEnlaceauto($id,$data);
	redirect('main/verauto');
}


/*  ##############################             cerrar              ###############################  */

/*  ##############################       funciones eliminar                ###############################  */
	public function eliminar(){	
		$this->load->model('model');
		$id = $this->uri->segment(3);
		if ($id){
			$this->model->eliminarId($id);
			redirect('main/ver');
		}
		
	}
	public function eliminarauto(){	
		$this->load->model('model');
		$id = $this->uri->segment(3);
		if ($id){
			$this->model->eliminarIdauto($id);
			redirect('main/verauto');
		}
		
	}

/*  ##############################             cerrar              ###############################  */	
	
	
	public function backup(){ 

        
        
        $this->load->dbutil();
        $prefs = array(
                'format'      => 'zip',
                'filename'    => 'backup'.date('d-m-Y').'.sql'
              );

        $backup =& $this->dbutil->backup($prefs);

        $this->load->helper('file');
        write_file(base_url().'backup/backup.zip', $backup);

        $this->load->helper('download');
        force_download('backup'.date('d-m-Y H:m:s').'.zip', $backup);
    }	
	
}

/* End of file main.php */
/* Location: ./application/controllers/main.php */