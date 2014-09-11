<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Alumno extends CI_Model {

	public function getAlumnos()
	{		
		$query = $this->db->get('alumnos');
		return $query->result();
	}

	public function getAlumno($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('alumnos');
		return $query->result();

	}
}

/* End of file alumno.php */
/* Location: ./application/models/alumno.php */