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

    }

    public function index(){
        // If the user is validated, then this function will run
        $this->load->view('project_view.php');
    }
    public function building_information() {

        echo ("Enter building information");
        $this->load->view('project_view.php');
    }

}