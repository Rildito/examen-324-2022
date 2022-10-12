<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class personaModelo extends CI_Model {

	public function guardarPersona($data) {
        $this->db->insert("persona", $data);
    }

    public function actualizarPersona($data, $id) {
        $this->db->where("ci",$id);
        $this->db->update("persona", $data);
    }

    public function eliminarPersona($ci) {
        $this->db->where("ci",$ci);
        $this->db->delete("persona");
    }

    public function obtenerPersonas() {
        $this->db->select("*");
        $this->db->from("persona");
        $resultado=$this->db->get();
        return $resultado->result_array();
    }

    public function obtenerPersona($ci) {
        $this->db->select("*");
        $this->db->from("persona");
        $this->db->where("ci",$ci);
        $resultado=$this->db->get();
        return $resultado->row();
    }

}
