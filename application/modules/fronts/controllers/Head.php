<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Head extends My_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Moduless');
        $this->allow_group_access(array('admin','members'));
        
    }

   
   public function edit_header( $id){
       $this->data['headerz'] = $this->Moduless->module_get_one('headerz', $id);
       $this->load_admin('edit_header');
   }


   public function update_header(){
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('slug', 'slug', 'required');
       
        $this->form_validation->set_error_delimiters('', '<br/>');

        $data = array();

            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = 4096;
            $config['max_width'] = 20000;
            $config['max_height'] = 20000;
           $file = $_FILES['logo']['name'];
          if (!empty($_FILES['logo']['name'])) {
              $this->load->library('upload', $config);

              $this->upload->initialize($config);

            if (!$this->upload->do_upload('logo')) {
                $error = $this->upload->display_errors();
                $this->session->set_flashdata('message', $error);
                redirect('head/edit_header');
            }
            else{
                $post_image = array();
                $post_image = $this->upload->data();
                $data['logo'] = $post_image['file_name'];
            }

      } else 
        
        $data['title'] = $this->input->post('title');
        $data['slug'] = $this->input->post('slug');

      if ($this->form_validation->run() == true) {
                    
            
            $result = $this->Moduless->save_module($data,'headerz');

            if ($result) {
                $this->session->set_flashdata('message', 'Contact Inserted Sucessfully');
                redirect('fronts/module');
            } else {
                $this->session->set_flashdata('message', 'Contact Insert Failed');
                redirect('fronts/module');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('fronts/module/edit_header');
        }

   }


}
