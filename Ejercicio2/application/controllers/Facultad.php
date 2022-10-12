<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Facultad extends CI_Controller {
    public function index()
	{
		$data['titulo'] = 'Facultad de Ciencias Puras y Naturales';
		$this->load->view('components/header', $data);
		$this->load->view('facultad/index');
		$this->load->view('components/footer');
	}
	public function informatica()
	{
        $data['titulo'] = 'Carrera de Informática';
		$this->load->view('components/header', $data);
		$this->load->view('facultad/INF/index');
		$this->load->view('components/footer');
	}
	public function fisica()
	{
		$data['titulo'] = 'Carrera de Física';
		$this->load->view('components/header', $data);
		$this->load->view('facultad/FIS/index');
		$this->load->view('components/footer');
	}
	public function matematica()
	{
		$data['titulo'] = 'Carrera de Matemática';
		$this->load->view('components/header', $data);
		$this->load->view('facultad/MAT/index');
		$this->load->view('components/footer');
	}
}