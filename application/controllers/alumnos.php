<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumnos extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Alumno');
	}

	public function index()
	{
		//$alumnos = $this->getAlumnos();
		//$alumno = $this->getAlumnos(1);
		//$data['alumnos'] = $alumnos;
		//$data['alumno'] = $alumno;
		$data['message'] = "Alumnos index";
		$this->load->view('alumnos/index', $data, FALSE);
	}

	public function getAlumno()
	{		
			$id = $this->input->post('id');
			$result = $this->Alumno->getAlumno($id);
			echo json_encode($result);
	}

}

/* End of file alumnos.php */
/* Location: ./application/controllers/alumnos.php */