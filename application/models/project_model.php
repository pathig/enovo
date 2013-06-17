<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gpathi
 * Date: 5/4/13
 * Time: 8:30 AM
 * To change this template use File | Settings | File Templates.
 */
class Project_model extends CI_Model{
    function __construct(){
        parent::__construct();

        $this->load->database();
        $this->load->library('session');
    }
    function create_project(){

        $this->db->set('partner_id', $this->session->userdata('partner_id'));
        $this->db->set('project_name', $this->session->userdata('project_name'));
        $this->db->insert('partner_project');


        $this->db->select('id')->from('partner_project')->order_by('id','desc');
        $query = $this->db->get();

        $proj_id = 0;

        foreach ($query->result() as $row)
        {
            $proj_id = $row->id;
            break;
        }

        $data = array(
            'project_id' => $proj_id
        );
        $this->session->set_userdata($data);

        if ($proj_id > 0 ) {
        $this->db->set('project_id',$proj_id);
        $this->db->set('property_name',$this->input->post('property_name'));
        $this->db->set('property_id',$this->input->post('property_id'));
            $this->db->set('building_type',$this->input->post('building_type'));
            $this->db->set('gross_sqft',$this->input->post('gross_sqft'));
            $this->db->set('heated_cooled_sqft',$this->input->post('heated_cooled_sqft'));
            $this->db->set('address_1',$this->input->post('address_1'));
            $this->db->set('address_2',$this->input->post('address_2'));
            $this->db->set('city',$this->input->post('city'));
            $this->db->set('state',$this->input->post('state'));
            $this->db->set('zipcode',$this->input->post('zipcode'));
            $this->db->set('natural_gas_company',$this->input->post('natural_gas_company'));
            $this->db->set('natural_gas_wholesale_rate_therms',$this->input->post('natural_gas_wholesale_rate_therms'));
            $this->db->set('natural_gas_trans_fee_therms',$this->input->post('natural_gas_trans_fee_therms'));
            $this->db->set('natural_gas_annual_cost',$this->input->post('natural_gas_annual_cost'));
            $this->db->set('electricity_company',$this->input->post('electricity_company'));
            $this->db->set('electricity_peak',$this->input->post('electricity_peak'));
            $this->db->set('electricity_off_peak',$this->input->post('electricity_off_peak'));
            $this->db->set('electricity_demand_rate',$this->input->post('electricity_demand_rate'));
            $this->db->set('electricity_base_rate_kwh',$this->input->post('electricity_base_rate_kwh'));
            $this->db->set('electricity_annual_cost',$this->input->post('electricity_annual_cost'));
            $this->db->set('operating_hrs_days',$this->input->post('operating_hrs_days'));
            $this->db->set('current_energy_cost_per_sqft',$this->input->post('current_energy_cost_per_sqft'));
            $this->db->set('property_contact',$this->input->post('property_contact'));
            $this->db->set('property_contact_title',$this->input->post('property_contact_title'));
            $this->db->set('property_contact_email',$this->input->post('property_contact_email'));
            $this->db->set('property_contact_phone_number',$this->input->post('property_contact_phone_number'));

             $this->db->insert('building_info');


        } // if project id positive only

    }
    function save_energy_efficiency(){

        if ($this->session->userdata('project_id') > 0 ) {

            $this->db->set('project_id',$this->session->userdata('project_id'));
            $this->db->set('description',$this->input->post('description'));
            $this->db->set('preliminary_analysis',$this->input->post('preliminary_analysis'));
            $this->db->set('preliminary_construction_schedule',$this->input->post('preliminary_construction_schedule'));
            $this->db->set('general_contractor_name',$this->input->post('general_contractor_name'));
            $this->db->set('general_contractor_licence',$this->input->post('general_contractor_licence'));
            $this->db->set('mechanical_contractor_name',$this->input->post('mechanical_contractor_name'));
            $this->db->set('mechanical_contractor_licence',$this->input->post('mechanical_contractor_licence'));
            $this->db->set('plumbing_contractor_name',$this->input->post('plumbing_contractor_name'));
            $this->db->set('plumbing_contractor_licence',$this->input->post('plumbing_contractor_licence'));
            $this->db->set('electrical_contractor_name',$this->input->post('electrical_contractor_name'));
            $this->db->set('electrical_contractor_licence',$this->input->post('electrical_contractor_license'));
            $this->db->set('mechanical_permit_required',$this->input->post('mechanical_permit_required'));
            $this->db->set('electrical_permit_required',$this->input->post('electrical_permit_required'));
            $this->db->set('plumbing_permit_required',$this->input->post('plumbing_permit_required'));
            $this->db->set('total_system_cost_electrical',$this->input->post('total_system_cost_electrical'));
            $this->db->set('total_system_cost_mechanical',$this->input->post('total_system_cost_mechanical'));
            $this->db->set('total_system_cost_civil',$this->input->post('total_system_cost_civil'));
            $this->db->set('total_system_cost_general',$this->input->post('total_system_cost_general'));
            $this->db->set('est_savings_per_sqft',$this->input->post('est_savings_per_sqft'));
            $this->db->set('est_savings_total_annual',$this->input->post('est_savings_total_annual'));
            $this->db->set('est_savings_percent',$this->input->post('est_savings_percent'));

            $this->db->insert('energy_efficiency_upgrade');
        }
    }


    function save_existing_equipment_DB(){

        if ($this->session->userdata('project_id') > 0 ) {

            // Insert into heating_source
            $this->db->set('project_id',$this->session->userdata('project_id'));
            $this->db->set('heating_type',$this->input->post('heating_type'));
            $this->db->set('sub_type',$this->input->post('sub_type'));
            $this->db->set('model',$this->input->post('model'));
            $this->db->set('serial_number',$this->input->post('serial_number'));
            $this->db->set('installation_date',$this->input->post('installation_date'));
            $this->db->set('total_hp',$this->input->post('total_hp'));
            $this->db->set('number_of_units',$this->input->post('number_of_units'));
            $this->db->set('total_output',$this->input->post('total_output'));
            $this->db->set('total_input',$this->input->post('total_input'));

            $this->db->insert('heating_source');

            // Insert into cooling_source
            $this->db->set('project_id',$this->session->userdata('project_id'));
            $this->db->set('cooling_type',$this->input->post('cooling_type'));
            $this->db->set('sub_type',$this->input->post('sub_type'));
            $this->db->set('make',$this->input->post('make'));
            $this->db->set('serial_number',$this->input->post('serial_number'));
            $this->db->set('installation_date',$this->input->post('installation_date'));
            $this->db->set('new_node',$this->input->post('new_node'));
            $this->db->set('number_of_units',$this->input->post('number_of_units'));
            $this->db->set('tonnage',$this->input->post('tonnage'));
            $this->db->set('model',$this->input->post('model'));

            $this->db->insert('cooling_source');

            // Insert into ventilation_thermal_distribution
            $this->db->set('project_id',$this->session->userdata('project_id'));
            $this->db->set('distribution_type',$this->input->post('distribution_type'));
            $this->db->set('sub_types',$this->input->post('sub_types'));
            $this->db->set('name',$this->input->post('name'));
            $this->db->set('control_tech',$this->input->post('control_tech'));
            $this->db->set('valve_type',$this->input->post('valve_type'));
            $this->db->set('make',$this->input->post('make'));
            $this->db->set('model',$this->input->post('model'));
            $this->db->set('serial_number',$this->input->post('serial_number'));
            $this->db->set('installation_date',$this->input->post('installation_date'));
            $this->db->set('rated_life',$this->input->post('rated_life'));
            $this->db->set('volume_supply',$this->input->post('volume_supply'));
            $this->db->set('volume_return',$this->input->post('volume_return'));
            $this->db->set('air_filtration',$this->input->post('air_filtration'));
            $this->db->set('dehumidification',$this->input->post('dehumidification'));
            $this->db->set('fluid_filtration',$this->input->post('fluid_filtration'));
            $this->db->set('humidifier',$this->input->post('humidifier'));
            $this->db->set('vibration_isolation',$this->input->post('vibration_isolation'));
            $this->db->set('air_register',$this->input->post('air_register'));
            $this->db->set('chilled_beam',$this->input->post('chilled_beam'));
            $this->db->set('fan_coil_unit',$this->input->post('fan_coil_unit'));
            $this->db->set('power_induction_unit',$this->input->post('power_induction_unit'));
            $this->db->set('radiant_baseboad',$this->input->post('radiant_baseboad'));
            $this->db->set('radiator',$this->input->post('radiator'));
            $this->db->set('unit_ventilator',$this->input->post('unit_ventilator'));
            $this->db->set('vav_box',$this->input->post('vav_box'));

            $this->db->insert('ventilation_thermal_distribution');

            // Insert into controls
            $this->db->set('project_id',$this->session->userdata('project_id'));
            $this->db->set('control_type',$this->input->post('control_type'));
            $this->db->set('sub_type',$this->input->post('sub_type'));
            $this->db->set('control_technology',$this->input->post('control_technology'));
            $this->db->set('make',$this->input->post('make'));
            $this->db->set('model',$this->input->post('model'));
            $this->db->set('serial_number',$this->input->post('serial_number'));
            $this->db->set('installation_date',$this->input->post('installation_date'));
            $this->db->set('rate_life',$this->input->post('rate_life'));
            $this->db->set('rate_voltages',$this->input->post('rate_voltages'));
            $this->db->set('rated_full_load_amperages',$this->input->post('rated_full_load_amperages'));

            $this->db->insert('controls');

            // Insert into motor_driven_equipment
            $this->db->set('project_id',$this->session->userdata('project_id'));
            $this->db->set('type',$this->input->post('type'));
            $this->db->set('sub_type',$this->input->post('sub_type'));
            $this->db->set('motor_type',$this->input->post('motor_type'));
            $this->db->set('control_technology',$this->input->post('control_technology'));
            $this->db->set('vfd_type',$this->input->post('vfd_type'));
            $this->db->set('installation_date',$this->input->post('installation_date'));
            $this->db->set('rate_life',$this->input->post('rate_life'));
            $this->db->set('rated_voltage',$this->input->post('rated_voltage'));
            $this->db->set('rate_full_load_amperage',$this->input->post('rate_full_load_amperage'));

            $this->db->insert('motor_driven_equipment');


        } // if project id is created.

    } // save_existing_equipment section


        function get_projects() {

          //  var_dump($this->session());
          $project = $this->input->post('project_search_name');

          if ($project != NULL && strlen($project) > 0 ){

               $this->db->like('project_name',$project);
          }
            else {

                $this->db->where('partner_id',$this->session->userdata('partner_id'));
            }
            $this->db->select('partner_project.project_name','project_project.date_created','partner.partner_name','
               building_info.city');
            $this->db->from('partner_project');
            $this->db->join('building_info','building_info.project_id = partner_project.id');
            $this->db->join('partner','partner.id = partner_project.partner_id');
            $this->db->limit(20);
          //  $this->db->from('partner_project');
         //   echo $this->db->count_all_results();

            $query = $this->db->get();
            $projects = array();
            $i = 0;
            foreach ($query->result() as $row){

                $projects[$i] = array ('project_name' => $row->project_name,
                'partner_name' => $row->partner_name,
                'date_created' => $row->date_created,
                'city' =>     $row->city);

                $i++;
            }

            return $projects;

        }


}

?>