<?php

class Dashboard extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('session');

        $this->load->model('project_model');
        $this->proj_names = array();

       // $this->check_isvalidated();
    }

    public function index(){
        // If the user is validated, then this function will run

        $baseurl = $this->config->item('base_url');
        $this->search_projects();
        $data['baseurl'] = $baseurl;
        $data['proj_names'] = $this->proj_names;
       // $file_array = $this->
        $this->load->view('dashboard_view.php',$data);
    }



    public function do_upload(){


        $config['upload_path'] = $this->config->item('document_path');
     //   $config['allowed_types'] = 'txt|jpg|msword|doc';
        $config['allowed_types'] ='*';
        $config['max_size']	= '100';
        $config['max_width']  = '1024';
        $config['max_height']  = '768';
        $config['remove_spaces'] = TRUE;
        $config['overwrite'] = TRUE;

        $this->load->library('upload', $config);

        $this->upload->do_upload();

        if ($this->upload->display_errors()) {

            log_message(1,($this->upload->display_errors()));
            var_dump($this->upload->display_errors());
            $error = array('error' => $this->upload->display_errors());
        }

        $data = array('upload_data' => $this->upload->data());
        date_default_timezone_set("America/Los_Angeles");

        foreach($data as $item=>$value) {

          //  var_dump($value['file_ext']);
            // Renaming the file by appending partner id and date of upload.


            $fname = substr($value['file_name'],0, strlen($value['file_name']) - strlen($value['file_ext'])   );
            $new_filename = $fname . '_' . $this->session->userdata('partner_id') . '_' . date('Ymd') . $value['file_ext'];

          //  var_dump($value);

            rename ($value['full_path'],$value['file_path'] . $new_filename);


        }
        $baseurl = $this->config->item('base_url');
        $data1['baseurl'] = $baseurl;
        $this->load->view('dashboard_view.php',$data1);

    }

    private function check_isvalidated(){
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }

    public function search_projects() {


        $proj_names = $this->project_model->get_projects();


        $baseurl = $this->config->item('base_url');
        $data1['baseurl'] = $baseurl;
        $data1['proj_names'] = $proj_names;
        $this->load->view('dashboard_view.php',$data1);


    }


}
?>