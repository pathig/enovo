<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gpathi
 * Date: 5/11/13
 * Time: 9:02 AM
 * To change this template use File | Settings | File Templates.
 */

class Project extends CI_Controller{



    function __construct(){

        parent::__construct();
        $this->load->library('session');
        $this->load->model('project_model');
        $this->load->helper('form');

    }

    public function index(){

        $baseurl = $this->config->item('base_url');
        $data['baseurl'] = $baseurl;

        $this->load->view('project_view.php',$data);
    }

    public function building_information() {

       // echo ("Enter building information");

        $baseurl = $this->config->item('base_url');

        $newdata = array ('project_name' => $this->input->post('project_name'));
        $this->session->set_userdata($newdata);

        $data['baseurl'] = $baseurl;

        $this->load->view('project_view.php',$data);
    }
    public function save_building_info() {

        //echo ("save building info ");
        //var_dump($this->input->post());

        // Save partner entered building information into enovo DB

        $this->project_model->create_project();

        $baseurl = $this->config->item('base_url');
        $data['baseurl'] = $baseurl;
        $this->load->view('project_view.php',$data);

    }

    public  function display_energy_efficiency_upgrade()  {

        $baseurl = $this->config->item('base_url');
        $data['baseurl'] = $baseurl;
        $this->load->view('project_view.php',$data);
    }
    public function save_energy_efficiency_upgrade(){

        $this->project_model->save_energy_efficiency();
        $baseurl = $this->config->item('base_url');
        $data['baseurl'] = $baseurl;
        $this->load->view('project_view.php',$data);

    }
    public function  save_existing_equipment(){


        $this->project_model->save_existing_equipment_DB();
        $baseurl = $this->config->item('base_url');
        $data['baseurl'] = $baseurl;
        $this->load->view('project_view.php',$data);
    }

}