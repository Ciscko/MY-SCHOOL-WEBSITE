<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Module extends My_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Moduless');
        $this->allow_group_access(array('admin','members'));
        
    }

    public function index(){
        $modules = array();
        $modules = $this->Moduless->module_get_list();
       
        $this->data['contacts'] = $this->Moduless->module_get('contacts');
        $this->data['achievements'] = $this->Moduless->module_get_m('achievements');
        $this->data['services'] = $this->Moduless->module_get_m('services');
        $this->data['about'] = $this->Moduless->module_get('about');
        $this->data['courses'] = $this->Moduless->module_get_m('courses');
        $this->data['joinUs'] = $this->Moduless->module_get('joinUs');
        $this->data['gallery'] = $this->Moduless->module_get_m('gallery');
        $this->data['insiders'] = $this->Moduless->module_get_m('insiders');
        $this->data['headerz'] = $this->Moduless->module_get('headerz');
        $this->data['clients'] = $this->Moduless->module_get_m('clients');
        $this->data['team'] = $this->Moduless->module_get_m('team');
        
    $this->load_admin('modules_list');
    }


  
  
}
