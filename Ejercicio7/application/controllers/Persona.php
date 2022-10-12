<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Persona extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("personaModelo");
    }

    public function index()
    {
        $data['personas'] = $this->personaModelo->obtenerPersonas();
        $this->load->view('components/header');
        $this->load->view('pages/verPersonas', $data);
        $this->load->view('components/footer');
    }

    
    public function agregar(){
        $this->load->view('components/header');
        $this->load->view('pages/agregarPersona');
        $this->load->view('components/footer');
    }

    public function subir(){
        $ci = $this->input->post("ci");
		$nombreCompleto = $this->input->post("nombreCompleto");
		$fechaNacimiento = $this->input->post("fechaNacimiento");
		$departamento = $this->input->post("departamento");

		$data['ci']=$ci;
		$data['nombreCompleto']=$nombreCompleto;
		$data['fechaNacimiento']=$fechaNacimiento;
		$data['departamento']=$departamento;

        $this->personaModelo->guardarPersona($data);
		redirect(base_url()."index.php/persona");
    }

    public function editar($ci)
    {
        $data['persona'] = $this->personaModelo->obtenerPersona($ci);
        $this->load->view('components/header');
        $this->load->view('pages/editarPersona',$data);
        $this->load->view('components/footer');
    }

    public function actualizar($id)
    {
        $ci = $this->input->post("ci");
		$nombreCompleto = $this->input->post("nombreCompleto");
		$fechaNacimiento = $this->input->post("fechaNacimiento");
		$departamento = $this->input->post("departamento");
		
		$data['ci']=$ci;
		$data['nombreCompleto']=$nombreCompleto;
		$data['fechaNacimiento']=$fechaNacimiento;
		$data['departamento']=$departamento;
	
		$this->personaModelo->actualizarPersona($data, $id);
		redirect(base_url()."index.php/persona");

    }

    public function eliminar($ci) {
        $this->personaModelo->eliminarPersona($ci);
		redirect(base_url()."index.php/persona");
    }

}
