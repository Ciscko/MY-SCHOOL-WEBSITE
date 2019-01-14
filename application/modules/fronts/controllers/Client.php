<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends My_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Moduless');
        $this->allow_group_access(array('admin','members'));
        
    }

   
  
public function edit_client( $id){
       $this->data['client'] = $this->Moduless->module_get_one('clients', $id);
       $this->load_admin('edit_client');
   }


  
public function update_client(){
        $this->form_validation->set_rules('name', 'name', 'required');
        $this->form_validation->set_rules('state', 'state', 'required');
        $this->form_validation->set_rules('body', 'body', 'required');
       // $this->form_validation->set_rules('location', 'location', 'required');
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
                redirect('edit_client');
            }
            else{
                $post_image = array();
                $post_image = $this->upload->data();
                $data['img'] = $post_image['file_name'];
            }

      } else 
        
        $data['name'] = $this->input->post('name');
        $data['state'] = $this->input->post('state');
        $data['body'] = $this->input->post('body');
       // $data['location'] = $this->input->post('location');

      if ($this->form_validation->run() == true) {
                    
            
            $result = $this->Moduless->save_module($data,'clients');

            if ($result) {
                $this->session->set_flashdata('message', 'Contact Inserted Sucessfully');
                redirect('fronts/module');
            } else {
                $this->session->set_flashdata('message', 'Contact Insert Failed');
                redirect('fronts/module');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('fronts/module/edit_client');
        }

   }


}
