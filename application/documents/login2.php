<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gpathi
 * Date: 5/4/13
 * Time: 8:19 AM
 * To change this template use File | Settings | File Templates.
 */

class Login extends CI_Controller{

    function __contruct(){
        parent::__contruct();
    }
    public function index($msg = NULL){
        // load view
        $data['msg'] = $msg;
        $this->load->view('login_view',$data);
    }
    public function process() {

        // load model
        $this->load->model('login_model');
        $result = $this->login_model->validate();



        if (!$result){

            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }
        else{
            // if logged in send to dashboard controller !
            if ($this->session->userdata('login_type') == 'OTHER')
                redirect('dashboard');
            elseif ($this->session->userdata('login_type') ==  'ADMIN')
                redirect ('admin');
        }
    }
}
?>