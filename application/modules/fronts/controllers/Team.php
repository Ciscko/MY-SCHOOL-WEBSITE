<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Team extends My_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Moduless');
        $this->allow_group_access(array('admin','members'));
        
    }

   
  
 public function edit_team( $id){
       $this->data['team'] = $this->Moduless->module_get_one('team', $id);
       $this->load_admin('edit_team');
   }
  
public function update_team(){
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('descr', 'descr', 'required');
        $this->form_validation->set_rules('link', 'link', 'required');
        $this->form_validation->set_error_delimiters('', '<br/>');

        $data = array();

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 4096;
            $config['max_width'] = 20000;
            $config['max_height'] = 20000;

           $file = $_FILES['img']['name'];
          if (!empty($_FILES['img']['name'])) {
              $this->load->library('upload', $config);

              $this->upload->initialize($config);

            if (!$this->upload->do_upload('img')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
                redirect('team/edit_team');
            }
            else{
                $post_image = array();
                $post_image = $this->upload->data();
                $data['img'] = $post_image['file_name'];
            }

      } else 
        
        $data['name'] = $this->input->post('name');
        $data['descr'] = $this->input->post('descr');
        $data['link'] = $this->input->post('link');
        

      if ($this->form_validation->run() == true) {
                    
            
            $result = $this->Moduless->save_module($data,'team');

            if ($result) {
                $this->session->set_flashdata('message', 'Contact Inserted Sucessfully');
                redirect('fronts/module');
            } else {
                $this->session->set_flashdata('message', 'Contact Insert Failed');
                redirect('fronts/module');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('fronts/module/edit_team');
        }

   }


}
