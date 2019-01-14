<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moduless extends CI_Model{

	function module_get_list(){
		$this->db->select('module');
		$this->db->from('modules');
		$modules = $this->db->get();
		return $modules->row();
	}
    function module_get($module){
    	$this->db->select("*");
    	$this->db->from($module);
    	$val = $this->db->get();
    	return $val->row_array();
    }

    function module_get_m($module){
    	$this->db->select("*");
    	$this->db->from($module);
    	$value = $this->db->get();
    	return $value->result_array();
    }
	function module_get_one($module, $id){
		$this->db->select('*');
		$this->db->from($module);
		$this->db->where('id', $id);
		$value = $this->db->get();
		return $value->row_array();
	}

	function module_delete($id){
		$this->db->delete($id);
	}

	function save_module($contact, $module){
		
		$this->db->update($module, $contact);
	}


}