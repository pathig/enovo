<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gpathi
 * Date: 5/4/13
 * Time: 8:30 AM
 * To change this template use File | Settings | File Templates.
 */
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->library('session');

    }

    public function validate(){
        // grab user input

//        $username = $this->security->xss_clean($this->input->post('username'));
  //      $password = $this->security->xss_clean($this->input->post('password'));

        $username = $this->input->post('username');
        $password = $this->input->post('password');


        // Prep the query
        $query  = $this->db->get_where('partner ',array('email'=> $username,'password'=> $password));


        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                'partner_id' => $row->id,
                'partner_name' => $row->partner_name,
                'email' => $row->email,
                'login_type' => $row->login_type,
                'validated' => true
            );
            $this->session->set_userdata($data);

            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}


?>