<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends My_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Moduless');
        $this->allow_group_access(array('admin','members'));
        
    }

   
  
public function edit_about( $id){
       $this->data['about'] = $this->Moduless->module_get_one('about', $id);
       $this->load_admin('edit_about');
   }

  
public function update_about(){
        $this->form_validation->set_rules('title', 'title', 'required');
        $this->form_validation->set_rules('desc', 'desc', 'required');
        
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
                redirect('about/edit_about');
            }
            else{
                $post_image = array();
                $post_image = $this->upload->data();
                $data['img'] = $post_image['file_name'];
            }

      } else 
        
        $data['title'] = $this->input->post('title');
        $data['desc'] = $this->input->post('desc');
        

      if ($this->form_validation->run() == true) {
                    
            
            $result = $this->Moduless->save_module($data,'about');

            if ($result) {
                $this->session->set_flashdata('message', 'Contact Inserted Sucessfully');
                redirect('fronts/module');
            } else {
                $this->session->set_flashdata('message', 'Contact Insert Failed');
                redirect('fronts/module');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('fronts/module/edit_about');
        }

   }


}
