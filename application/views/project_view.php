<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Enovo Energy Project</title>
    <style type="text/css">
        <!--
        body {
            font: 100%/1.4 Verdana, Arial, Helvetica, sans-serif;
            background: #42414C;
            margin: 0;
            padding: 0;
            color: #000;
        }

            /* ~~ Element/tag selectors ~~ */
        ul, ol, dl { /* Due to variations between browsers, it's best practices to zero padding and margin on lists. For consistency, you can either specify the amounts you want here, or on the list items (LI, DT, DD) they contain. Remember that what you do here will cascade to the .nav list unless you write a more specific selector. */
            padding: 0;
            margin: 0;
        }
        h1, h2, h3, h4, h5, h6, p {
            margin-top: 0;	 /* removing the top margin gets around an issue where margins can escape from their containing div. The remaining bottom margin will hold it away from any elements that follow. */
            padding-right: 15px;
            padding-left: 15px; /* adding the padding to the sides of the elements within the divs, instead of the divs themselves, gets rid of any box model math. A nested div with side padding can also be used as an alternate method. */
        }
        a img { /* this selector removes the default blue border displayed in some browsers around an image when it is surrounded by a link */
            border: none;
        }
            /* ~~ Styling for your site's links must remain in this order - including the group of selectors that create the hover effect. ~~ */
        a:link {
            color: #42413C;
            text-decoration: underline; /* unless you style your links to look extremely unique, it's best to provide underlines for quick visual identification */
        }
        a:visited {
            color: #6E6C64;
            text-decoration: underline;
        }
        a:hover, a:active, a:focus { /* this group of selectors will give a keyboard navigator the same hover experience as the person using a mouse. */
            text-decoration: none;
        }

            /* ~~ this fixed width container surrounds the other divs ~~ */
        .container {
            width: 960px;
            background: #eeeeee;
            margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
        }

            /* ~~ the header is not given a width. It will extend the full width of your layout. It contains an image placeholder that should be replaced with your own linked logo ~~ */
        .header {
            background: #FFFFFF;

        }

        .content {

            padding: 10px 0;
        }

            /* ~~ The footer ~~ */
        .footer {
            padding: 10px 0;
            background: #FFFFFF;
        }

            /* ~~ miscellaneous float/clear classes ~~ */
        .fltrt {  /* this class can be used to float an element right in your page. The floated element must precede the element it should be next to on the page. */
            float: right;
            margin-left: 8px;
        }
        .fltlft { /* this class can be used to float an element left in your page. The floated element must precede the element it should be next to on the page. */
            float: left;
            margin-right: 8px;
        }
        .clearfloat { /* this class can be placed on a <br /> or empty div as the final element following the last floated div (within the #container) if the #footer is removed or taken out of the #container */
            clear:both;
            height:0;
            font-size: 1px;
            line-height: 0px;
        }
        -->
    </style>
    <script src= <?php echo $baseurl ; ?>SpryAssets/SpryTabbedPanels.js type="text/javascript"></script>

    <link href= <?php echo $baseurl ; ?>SpryAssets/SpryTabbedPanels.css rel="stylesheet" type="text/css">
    <script src= <?php echo $baseurl ; ?>SpryAssets/SpryCollapsiblePanel.js type="text/javascript"></script>
    <link href= <?php echo $baseurl ; ?>SpryAssets/SpryCollapsiblePanel.css rel="stylesheet" type="text/css">
</head>

<body>

<div class="container">
    <div class="header"><a href=""><img src="/images/logo.jpg" alt="Insert Logo Here" name="Insert_logo" width="300" height="161" id="Insert_logo" style="background: #C6D580; display:block;" /></a>
        <div id="TabbedPanels1" class="TabbedPanels">
            <ul class="TabbedPanelsTabGroup">
                <li class="TabbedPanelsTab" tabindex="0">Step 1 (Building Information)</li>
                <li class="TabbedPanelsTab" tabindex="0">Step 2 (Energy Efficiency Upgrade)</li>
                <li class="TabbedPanelsTab" tabindex="0">Step 3 (Existing Equipment)</li>
            </ul>
            <div class="TabbedPanelsContentGroup">
                <div class="TabbedPanelsContent">

                    <form action = <?php echo $baseurl ; ?>project/save_building_info method="post" name="save_building_info">

                        <div id="CollapsiblePanel1" class="CollapsiblePanel">
                            <div class="CollapsiblePanelTab" tabindex="0"> <h2>Property Details</div>
                            <div class="CollapsiblePanelContent">

                               <h5> Property Name <input name="property_name" type="text" size="32" maxlength="64">  <br>
                                Property ID <input name="property_id" type="text" size="10"> <br>
                                 <?php $btypes = array( 'SMALLCOMMERCIAL' => "Small Commercial",'LARGECOMMERCIAL' => 'Large Commercial',
                                'INDUSTRIAL' => 'Industrial',
                                'RETAIL' => 'Retail',
                                'MULTIHOUSING' => 'Multi-Housing',
                                'HOSPITAL' => 'Hospital',
                                'SCHOOL' => 'School',
                                'PRIVATEUNIVERSITY' => 'Private University',
                                'PUBLICUNIVERSITY' => 'Public University',
                                'COMMUNITYCOLLEGE' => 'Community College',
                                'OFFICEBUILDING' => 'Office Building',
                                'OTHER' => 'Other'); ?>
                                Building Type <?php echo form_dropdown('building_type',$btypes,'OTHER'); ?> <br>

                                Gross Sqft <input name="gross_sqft" type="text" size="10"> <br>
                                Heated Cooled Sqft <input name="heated_cooled_sqft" type="text" size="10"> <br>
                                Address_1 <input name="address_1" type="text" size="64"> <br>
                                Address_2 <input name="address_2" type="text" size="64"> <br>
                                City <input name="city" type="text" size="32"> <br>
                                State <input name="state" type="text" size="32"> <br>
                                Zipcode <input name="zipcode" type="text" size="6">


                            </div>
                        </div> <!-- end of CollapsiblePanel1 -->

                        <div id="CollapsiblePanel2" class="CollapsiblePanel">
                            <div class="CollapsiblePanelTab" tabindex="0"> <h2>Current Energy Rates</div>
                            <div class="CollapsiblePanelContent"; align="center">

                            <h4>Natural Gas </h4>
                           <h5> Company <input name="natural_gas_company" type="text" size="32"> <br>
                            Wholesale Rate <input name="natural_gas_wholesale_rate_therms" type="text" size="10"> <br>
                            Transportation Fee <input name="natural_gas_trans_fee_therms" type="text" size="10"> <br>
                            Annual Cost <input name="natural_gas_annual_cost" type="text" size="10"> <br>

                            <h4>Electricity </h4>
                            <h5>Company <input name="electricity_company" type="text" size="32"> <br>
                            Peak Rate <input name="electricity_peak" type="text" size="10"> <br>
                            Off-Peak Rate <input name="electricity_off_peak" type="text" size="10"> <br>
                            Demand Rate <input name="electricity_demand_rate" type="text" size="10"> <br>
                            Base Rate <input name="electricity_base_rate_kwh" type="text" size="10"> <br>
                            Annual Cost <input name="electricity_annual_cost" type="text" size="10"> <br>

                            Operating (hrs/day) <input name="operating_hrs_days" type="text" size="10"> <br>
                            Current Energy Cost (per sqft) <input name="current_energy_cost_per_sqft" type="text" size="10"> <br>


                            </div>


                </div> <!-- end of CollapsiblePanel2 -->

                <div id="CollapsiblePanel3" class="CollapsiblePanel">
                    <div class="CollapsiblePanelTab" tabindex="0"> <h2>Property Contact Information</div>
                    <div class="CollapsiblePanelContent">

                        <h4>Property Contact</h4>
                        <h5>Name <input name="property_contact" type="text" size="32"> <br>
                        Title <input name="property_contact_title" type="text" size="32"> <br>
                        Email <sssinput name="property_contact_email" type="text" size="32"> <br>
                        Phone  <input name="property_contact_phone_number" type="text" size="12">


                    </div>
                </div> <!-- end of CollapsiblePanel3 -->

                <input name="back_dashboard" type="submit" value="Back">
                <input name="submit" type="submit" value="Next">
                </form>

            </div>
            <div class="TabbedPanelsContent">


                <form action=<?php echo $baseurl ; ?>project/save_energy_efficiency_upgrade method="post" target="_self">

                    <div id="CollapsiblePanel4" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab" tabindex="0"> <h2>Description</div>
                        <div class="CollapsiblePanelContent">

                          <h5>  Description	<textarea name="description" cols="" rows=""></textarea> <br>
                            General Contractor Name   <input name="general_contractor_name" type="text" size="32">
                            General Contractor licence <input name="general_contractor_licence" type="text" size="32"> <br>
                            Mechanical Contractor Name  <input name="mechanical_contractor_name" type="text" size="32">
                            Mechanical Contractor License <input name="mechanical_contractor_licence" type="text" size="32"> <br>
                            Plumbing Contractor Name  <input namme="plumbing_contractor_name" type="text" size="32">
                            Plumbing Contractor License  <input name="plumbing_contractor_licence" type="text" size="32"> <br>
                            Electrical Contractor name    <input namme="electrical_contractor_name" type="text" size="32">
                            Electrical Contractor Lincese  <input name="electrical_contractor_licence" type="text" size="32"><br>
                            Mechanical Permit Required  <input name="mechanical_permit_required" type="text" size="32">
                            Electrical Permit Required  <input name="electrical_permit_required" type="text" size="32"> <br>
                            Plumbing Permit Required    <input name="plumbing_permit_required" type="text" size="32">

                        </div>
                    </div> <!-- CollapsiblePanel4 -->
                    <div id="CollapsiblePanel5" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab" tabindex="0"> <h2>Cost Savings</div>
                        <div class="CollapsiblePanelContent">

                          <h5> Total System Cost Electrical <input name="total_system_cost_electrical" type="text" size="10">
                            Total System Cost Mechanical <input name="total_system_cost_mechanical" type="text" size="10"> <br>
                            Total System Cost Civil<input name="total_system_cost_civil" type="text" size="10">
                            Total System Cost General  <input name="total_system_cost_general" type="text" size="10"> <br>
                            Estimated Savings per sqft  <input name="est_savings_per_sqft" type="text" size="10">
                            Estimated Annual Savings  <input name="est_savings_total_amount" type="text" size="10"> <br>
                            Estimated Savings Percent  <input name="est_savings_percent" type="text" size="10">

                        </div>
                    </div>   <!-- CollapsiblePanel5 -->
                    <input name="back_building_info" type="submit" value="Back">
                    <input name="save" type="submit" value="Next">
                </form>

            </div>
            <div class="TabbedPanelsContent">

                <form action="project/" method="post" target="_self">

                    <div id="CollapsiblePanel6" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab" tabindex="0"> <h2>Heating Source</div>
                        <div class="CollapsiblePanelContent">

                            <?php $heating_types = array( 'CUSTOM' => "Custom",
                                'CENTRAL_HEATING' => 'Central Heating',
                                'DISTRIBUTED_HEATING' => 'Distributed Heating',
                                'DOMESTIC_HOT_WATER' => 'Domestic Hot Water'); ?>

                            <?php $heating_sub_types = array(
                                'BOILER' => 'Boiler' ,
                                'FURNACE'=>  'Furnace' ,
                                'BURNER_UNIT' =>  'Burner Unit',
                                'ELECTRIC_BASEBOARD' =>  'Electric Baseboard',
                                'ELECTRIC_HEATING_CALL' => 'Electric Heating Call' ,
                                'RADIANT_UNIT' => 'Radiant Unit' ,
                                'SOLAR_THERMAL' => 'Solar Thermal' ,
                                'SOLID_FUEL_HEATER' => 'Solid Fuel Heater' ,
                                'SPACE_HEATER' =>  'Space Heater',
                                'UNIT_HEATER' =>  'Unit Heater',
                                'ELECTRIC_SERVICE_WATER_HEATER' => 'Electric Service Water Heater' ,
                                'NATURAL_GAS_SERVICE_HEATER' =>  'Natural Gas Service Heater',
                                'DIESEL_SERVICE_HEATER' =>  'Diesel Service Heater' ,
                                'PROPANE_SERVICE_HEATER' => 'Propane Service Heater'

                            );  ?>
                          <h5>  Type  <?php echo form_dropdown('heating_type',$heating_types,'CENTRAL_HEATING'); ?>
                            Sub Type <?php echo form_dropdown('sub_type',$heating_sub_types,'BOILER'); ?>  <br>
                             Model  <input name="model" type="text" size="32">
                            Serial  <input name="serial" type="text" size="32">  <br>
                            Installation Date <input name="installation_date" type="text" size="32">
                            Total Hp <input name="total_hp" type="text" size="32">   <br>
                            Number of Units <input name="number_of_units" type="text" size="32">
                            Total Output <input name="total_output" type="text" size="32">   <br>
                            Total Input <input name="total_input" type="text" size="32">



                        </div>
                    </div>    <!--  end of CollapsiblePanel6 -->
                    <div id="CollapsiblePanel7" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab" tabindex="0"> <h2>Cooling Source</div>
                        <div class="CollapsiblePanelContent">

                            <?php $cooling_types = array( 'CENTRAL' => "Central",
                                'CUSTOM' => 'Custom',
                                'DISTRIBUTED' => 'Distributed',
                                'REFRIGERATION' => 'Refrigeration'); ?>


                            <?php $cooling_sub_types = array( 'absorption_chiller' => "Absorption Chiller",
                                'compressive_chiller' => 'Compressive Chiller',
                                'district_chiller' => 'District Chiller',
                                'packaged_roof_unit' => 'Packaged Roof Unit',
                                'packaged_terminal_air_unit' => 'Packaged Terminal Air Unit',
                                'split_system' => 'Split System',
                                'thermal_storage' => 'Thermal Storage',
                                'air_cooled_condenser' => 'Air Cooled Condenser',
                                'compressor' => 'Compressor',
                                'cooling_tower' => 'Cooling Tower',
                                'evaporative_condenser' => 'Evaporative Condenser',
                                'evaporative_cooler' => 'Evaporative Cooler',
                                'evaporator' => 'Evaporator',
                                'heat_pump_unit'=> 'Heat Pump Unit',
                                'unitary_air_conditioner'=> 'Unitary Air Conditioner',
                                'water_cooler_condenser'=> 'Water Cooler Condenser',
                                'window_unit'=> 'Window Unit',
                                'freezer'=> 'Freezer',
                                'ice_machine'=> 'Ice Machine',
                                'refrigerator'=> 'Refrigerator',
                                'refrigeration_freezer'=> 'Refrigeration Freezer'); ?>
                            <h5>   Type  <?php echo form_dropdown('cooling_type',$cooling_types,'CENTRAL'); ?>
                            Sub Type <?php echo form_dropdown('sub_type',$cooling_sub_types,'absorption_chiller'); ?> <br>
                            Make <input name="make" type="text" size="32">
                            Model <input name="model" type="text" size="32">   <br>
                            Serial <input name="serial_number" type="text" size="32">
                            Installation Date <input name="installation_date" type="text" size="32">  <br>
                            New Node  <input name="new_node" type="text" size="32">
                            Number of Units <input name="number_of_units" type="text" size="32">  <br>
                            Tonnage <input name="tonnage" type="text" size="32">


                        </div>
                    </div>  <!-- end of CollapsiblePanel7 -->
                    <div id="CollapsiblePanel8" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab" tabindex="0"> <h2>Ventilation And Thermal Distribution</div>
                        <div class="CollapsiblePanelContent">


                            <?php $dist_types = array( 'AIR_DISTRIBUTION' => "Air Distribution",
                                'THERMAL_TRANSFER_DEVICE' => 'Thermal Transfer Device',

                                'CONDITIONING_FILTRATION' => 'Conditioning Filteration',
                                'THERMAL_UNIT' => 'Thermal Unit'); ?>
                            <?php $dist_sub_types = array( 'AIR_HANDLING_UNIT' => "Air Handling Unit",
                                'CENTRAL_EXHAUST'   => 'Central Exhaust',
                                'DEDICATED_EQIP_EXHAUST' => 'Dedicated Equipment Exhaust',
                                'DUCTWORK'  => 'Ductwork',
                                'EXHAUST_DAMPER'     => 'Exhaust Damper',
                                'MIXED_PLENUM'      => 'Mixed Plenum',
                                'RELIEF_DAMPER'        => 'Relief Damper',
                                'RELIEF_LOUVER'          => 'Relief Louver',
                                'RETURN_DAMPER'            => 'Return Damper',
                                'RETURN_LOUVER'              => 'Return Louver',
                                'RETURN_PLENUM'               => 'Return Plenum',
                                'SMOKE_FIRE_DAMPER'                 => 'Smoke Fire Damper',
                                'SPACE_EXHAUST'                    => 'Space Exhaust',
                                'SUPPLY_DAMPER'   => 'Supply Damper',
                                'SUPPLY_LOUVER'    => 'Supply Louver',
                                'SUPPLY_PLENUM'   => 'Supply Plenum',
                                'ZONE_DAMPER'      => 'Zone Damper',
                                'BOOSTER_COIL'     => 'Booster Coil',
                                'CONDENSER_COIL'    => 'Condenser Coil',
                                'COOLING_COIL'      => 'Cooling Coil',
                                'DEHUMIDIFICATION_COIL'   => 'Dehumidification Coil',
                                'ECONOMIZER_COIL'     => 'Economizer Coil',
                                'HEAT_EXCHANGER'    => 'Heat Exchanger',
                                'HEATING_COIL'     => 'Heating Coil',
                                'RELIANT_TUBE'     => 'Reliant Tube',
                                'WASTE_HEAT_BOILER'    => 'Waste Heat Boiler');  ?>




                            <h5>  Distribution Type <?php echo form_dropdown('distribution_type',$dist_types,'AIR_DISTRIBUTION'); ?>
                            Type <?php echo form_dropdown('sub_types',$dist_sub_types,'AIR_HANDLING_UNIT'); ?> <br>
                            Name  <input name="name" type="text" size="32">
                            Control Tech   <input name="control_tech" type="text" size="32"> <br>
                            Valve Type  <input name="valve_type" type="text" size="6">
                            Make  <input name="make" type="text" size="10">   <br>
                            Model   <input name="model" type="text" size="32">
                            Serial  <input name="serial_number" type="text" size="32">   <br>
                            Installation Date  <input name="installation_date" type="text" size="32">
                            Rated Life   <input name="rated_life" type="text" size="32">          <br>
                            Volume Supply   <input name="volume_supply" type="text" size="32">
                            Volume Return     <input name="volume_return" type="text" size="32">            <br>
                            Air Filtration  <input name="air_filtration" type="text" size="32">
                            Dehumidification   <input name="dehumidification" type="text" size="32">                  <br>
                            Fluid Filtration   <input name="fluid_filtration" type="text" size="32">
                            Humidifier     <input name="humidifier" type="text" size="32">                            <br>
                            Vibration Isolation   <input name="vibration_isolation" type="text" size="32">
                            Air Register     <input name="air_register" type="text" size="32">                               <br>
                            Chilled Beam  <input name="chilled_beam" type="text" size="32">
                            Fan Coil Unit   <input name="fan_coil_unit" type="text" size="32">                                  <br>
                            Power Induction Unit   <input name="power_induction_unit" type="text" size="32">
                            Radiant Baseboard     <input name="radiant_baseboad" type="text" size="32">                            <br>
                            Radiator     <input name="radiator" type="text" size="32">
                            Unit Ventilator  <input name="unit_ventilator" type="text" size="32">                                 <br>
                            VAV Box        <input name="vav_box" type="text" size="32">


                        </div>
                    </div> <!-- end of CollapsiblePanel8 -->
                    <div id="CollapsiblePanel9" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab" tabindex="0"> <h2>Controls</div>
                        <div class="CollapsiblePanelContent">

                            <?php $control_types = array( 'CUSTOM' => 'Custom',
                                'EQUIPMENT' => 'Equipment',
                                'SPACE' => 'Space',
                                'SYSTEM' => 'System'); ?>


                            <?php $control_sub_types = array(
                                'CHILLER' => 'Chiller',
                                'COOLING_TOWER' => 'Cooling Tower',
                                'DC_VOLTAGE' => 'DC Voltage',
                                 'FAN'=> 'Fan',
                                'HEAT_PUMP' => 'Heat Pump',
                                'HOT_WEAR' => 'Hot Wear',
                                'PUMP' => 'Pump',
                                'STEAM' => 'Steam',
                                'THERMAL_UNIT' => 'Thermal Unit',
                                'VENTILATION' => 'Ventilation',
                                'VFD' => 'VFD',
                                'CO' => 'CO',
                                 'CO2'=> 'CO2',
                                'HUMIDITY' => 'Humidity',
                                'LIGHTNING' => 'Lightning',
                                'TEMPERATURE' => 'Temperature',
                                'BUILDING_AUTOMATION_SYSTEM'=> 'Building Automation System',
                                'HVAC_SYSTEM'=> 'HVAC System',
                                'LIGHTNING_SYSTEM' => 'Lightning System',
                                'POWER'=> 'Power',
                                'POWER_FACTOR' => 'Power Factor'); ?>
                            <h5>  Type <?php echo form_dropdown('control_type',$control_types,'EQUIPMENT'); ?>
                            Sub Type <?php echo form_dropdown('sub_types',$control_sub_types,'CHILLER'); ?> <br>
                            Control Tech <input name="control_technology" type="text" size="32">
                            Make <input name="make" type="text" size="32"> <br>
                            Model  <input name="model" type="text" size="32">
                            Serial <input name="serial_number" type="text" size="32"> <br>
                            Installation Date <input name="installation_date" type="text" size="32">
                            Rate Life <input name="rated_life" type="text" size="32">   <br>
                            Rate Voltages <input name="rated_voltages" type="text" size="32">
                            Rated Full Load Amperages <input name="rated_full_load_amperages" type="text" size="32">

                        </div>
                    </div> <!-- end of CollapsiblePanel9 -->
                    <div id="CollapsiblePanel10" class="CollapsiblePanel">
                        <div class="CollapsiblePanelTab" tabindex="0"><h2>Motor Driven Equipment</div>
                        <div class="CollapsiblePanelContent">
                            <?php $motor_types = array( 'AIR_DISTRIBUTION_FAN' => 'Air Distribution Fan',
                                'MOTORS_COMPRESSORS' => 'Motor Compressors',
                                'FLUID_DISTRIBUTION_PUMP' => 'Fluid Distribution Pump'); ?>

                            <?php $motor_sub_types = array( 'CEILING_FAN' => 'Ceiling Fan',
                                'DEDICATED_EQUIPMENT'  => 'Dedicated Equipment',
                                'EXHAUST_FAN'=> 'Exhaust Fan',
                                'PORTABLE_FAN' => 'Portable Fan',
                                'RETURN_FAN' => 'Return Fan',
                                'SMOKE_EXHAUST_FAN'=> 'Smoke Exhaust Fan',
                                'SUPPLY_FAN' => 'Supply Fan',
                                'AIR_COMPRESSOR' => 'Air Compressor',
                                'ELECTRIC_MOTOR' => 'Electric Motor',
                                'HYDRAULIC_EQUIPMENT'=> 'Hydraulic Equipment',
                                'VACCUM_EQUIPMENT'=> 'Vaccum Equipment',
                                'BOOSTER_PUMP'=> 'Booster Pump',
                                'CIRCULATION_PUMP'=> 'Circulation Pump',
                                'DEDICATED_EQUIPMENT_PUMP'=> 'Dedicated Equipment Pump',
                                'ENGINE_DRIVEN_PUMP'=> 'Engine Driven Pump',
                                'RETURN_PUMP'=> 'Return Pump',
                                'SUPPLY_PUMP'=> 'Supply Pump',
                                'WATER_WATER'=> 'Water'); ?>
                            <h5>    Type <?php echo form_dropdown('type',$control_types,'EQUIPMENT'); ?>
                            Sub Type <?php echo form_dropdown('sub_type',$control_sub_types,'CHILLER'); ?> <br>
                            Motor Type <input name="motor_type" type="text" size="32">
                            Control Tech <input name="control_technology" type="text" size="32"> <br>
                            VFD Type <input name="vfd_type" type="text" size="32">
                            Installation Date <input name="installation_date" type="text" size="32"> <br>
                            Rate Life <input name="rated_life" type="text" size="32">
                            Rated Voltage <input name="rated_voltage" type="text" size="32"> <br>
                            Rate Full Load Amperage <input name="rate_full_load_amperage" type="text" size="32">

                        </div>
                    </div> <!-- end of CollapsiblePanel10 -->

                    <input name="submit" type="submit" value="Save">
                </form>





            </div>
        </div>  <!-- TabbedPanelsContentGroup     -->
    </div>    <!-- TabbedPanels1 -->
    <!-- end .header --></div>

    <div class="footer">
        <p>Footer</p>
        <!-- end .footer --></div>
    <!-- end .container --></div>
<script type="text/javascript">
    var TabbedPanels1 = new Spry.Widget.TabbedPanels("TabbedPanels1");
    var CollapsiblePanel1 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel1" ,{ contentIsOpen: false });
    var CollapsiblePanel2 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel2", { contentIsOpen: false });
    var CollapsiblePanel3 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel3" ,{ contentIsOpen: false });
    var CollapsiblePanel4 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel4" ,{ contentIsOpen: false });
    var CollapsiblePanel5 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel5" ,{ contentIsOpen: false });
    var CollapsiblePanel6 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel6" ,{ contentIsOpen: false });
    var CollapsiblePanel7 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel7" ,{ contentIsOpen: false });
    var CollapsiblePanel8 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel8" ,{ contentIsOpen: false });
    var CollapsiblePanel9 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel9" ,{ contentIsOpen: false });
    var CollapsiblePanel10 = new Spry.Widget.CollapsiblePanel("CollapsiblePanel10" ,{ contentIsOpen: false });
</script>
</body>
</html>
