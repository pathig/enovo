-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 07, 2013 at 10:37 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enovo`
--

-- --------------------------------------------------------

--
-- Table structure for table `building_info`
--

CREATE TABLE IF NOT EXISTS `building_info` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `project_id` mediumint(9) NOT NULL,
  `property_name` varchar(64) DEFAULT NULL,
  `property_id` int(10) DEFAULT NULL,
  `building_type` enum('SMALLCOMMERCIAL','LARGECOMMERCIAL','INDUSTRIAL','RETAIL','MULTIHOUSING','HOSPITAL’,’SCHOOL’,’PRIVATEUNIVERSITY','PUBLICUNIVERSITY','COMMUNITYCOLLEGE','OFFICEBUILDIN','OTHER') DEFAULT NULL,
  `gross_sqft` double DEFAULT NULL,
  `heated_cooled_sqft` double DEFAULT NULL,
  `address_1` varchar(128) DEFAULT NULL,
  `address_2` varchar(128) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(32) DEFAULT NULL,
  `zipcode` varchar(6) DEFAULT NULL,
  `natural_gas_company` varchar(32) DEFAULT NULL,
  `natural_gas_annual_cost` double DEFAULT NULL,
  `natural_gas_wholesale_rate_therms` float DEFAULT NULL,
  `natural_gas_trans_fee_therms` float DEFAULT NULL,
  `natural_gas_bill_upload` varchar(64) DEFAULT NULL,
  `electric_company_wholesale_rate_therms` float DEFAULT NULL,
  `electricity_company` varchar(32) DEFAULT NULL,
  `electricity_base_rate_kwh` float DEFAULT NULL,
  `electricity_annual_cost` double DEFAULT NULL,
  `electricity_peak` float DEFAULT NULL,
  `electricity_off_peak` float DEFAULT NULL,
  `electricity_demand_rate` int(11) DEFAULT NULL,
  `electricity_bill_upload` varchar(64) DEFAULT NULL,
  `operating_hrs_days` int(11) DEFAULT NULL,
  `operating_units` varchar(5) DEFAULT NULL,
  `images_uploaded` varchar(64) DEFAULT NULL,
  `property_contact` varchar(32) DEFAULT NULL,
  `property_contact_title` varchar(32) DEFAULT NULL,
  `property_contact_email` varchar(32) DEFAULT NULL,
  `property_contact_phone_number` varchar(12) DEFAULT NULL,
  `current_energy_cost_per_sqft` float DEFAULT NULL,
  `current_energy_type` enum('ELECTRICITY','NATURALGAS','DIESEL','PROPANE') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cooling_source`
--

CREATE TABLE IF NOT EXISTS `cooling_source` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `cooling_type` enum('CENTRAL','CUSTOM','DISTRIBUTED','REFRIGERATION') DEFAULT NULL,
  `sub_type` enum('absorption_chiller','compressive_chiller','district_chiller','packaged_roof_unit','packaged_terminal_air_unit','split_system','thermal_storage','air_cooled_condenser','compressor','cooling_tower','evaporative_condenser','evaporative_cooler','evaporator','heat_pump_unit','unitary_air_conditioner','water_cooler_condenser','window_unit','freezer','ice_machine','refrigerator','refrigeration_freezer') DEFAULT NULL,
  `make` varchar(32) DEFAULT NULL,
  `model` varchar(32) DEFAULT NULL,
  `serial_number` varchar(32) DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `new_node` int(11) DEFAULT NULL,
  `number_of_units` int(11) DEFAULT NULL,
  `tonnage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `energy_efficiency_upgrade`
--

CREATE TABLE IF NOT EXISTS `energy_efficiency_upgrade` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `project_id` mediumint(9) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `preliminary_analysis` varchar(512) DEFAULT NULL,
  `preliminary_construction_schedule` varchar(512) DEFAULT NULL,
  `general_contractor_name` varchar(64) DEFAULT NULL,
  `general_contractor_licence` varchar(64) DEFAULT NULL,
  `mechanical_contractor_name` varchar(32) DEFAULT NULL,
  `mechanical_contractor_licence` varchar(64) DEFAULT NULL,
  `plumbing_contractor_name` varchar(32) DEFAULT NULL,
  `plumbing_contractor_licence` varchar(64) DEFAULT NULL,
  `electrical_contractor_name` varchar(32) DEFAULT NULL,
  `electrical_contractor_licence` varchar(64) DEFAULT NULL,
  `mechanical_permit_required` varchar(32) DEFAULT NULL,
  `electrical_permit_required` varchar(32) DEFAULT NULL,
  `plumbing_permit_required` varchar(32) DEFAULT NULL,
  `total_system_cost_electrical` float DEFAULT NULL,
  `total_systerm_cost_mechanical` float DEFAULT NULL,
  `total_system_cost_civil` float DEFAULT NULL,
  `total_system_cost_general` float DEFAULT NULL,
  `est_savings_per_sqft` float DEFAULT NULL,
  `est_savings_total_annual` float DEFAULT NULL,
  `est_savings_percent` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `heating_source`
--

CREATE TABLE IF NOT EXISTS `heating_source` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `heating_type` enum('CUSTOM','CENTRAL_HEATING','DISTRIBUTED_HEATING','DOMESTIC_HOT_WATER') DEFAULT NULL,
  `sub_type` enum('BOILER','FURNACE','BURNER_UNIT','ELECTRIC_BASEBOARD','ELECTRIC_HEATING_CALL','RADIANT_UNIT','SOLAR_THERMAL','SOLID_FUEL_HEATER','SPACE_HEATER','UNIT_HEATER','ELECTRIC_SERVICE_WATER_HEATER','NATURAL_GAS_SERVICE_HEATER','DIESEL_SERVICE_HEATER','PROPANE_SERVICE_HEATER') DEFAULT NULL,
  `model` varchar(32) DEFAULT NULL,
  `serial_number` varchar(32) DEFAULT NULL,
  `installation_date` date DEFAULT NULL,
  `total_hp` float DEFAULT NULL,
  `number_of_units` int(11) DEFAULT NULL,
  `total_output` int(11) DEFAULT NULL,
  `total_input` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `partner_name` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `city` varchar(32) DEFAULT NULL,
  `state` varchar(32) DEFAULT NULL,
  `zip` varchar(6) DEFAULT NULL,
  `executive_contact` varchar(32) DEFAULT NULL,
  `email` varchar(32) NOT NULL,
  `phone_number` varchar(32) DEFAULT NULL,
  `who_they_are` varchar(1024) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `locations` varchar(1024) DEFAULT NULL,
  `login_type` enum('ADMIN','OTHER') DEFAULT 'OTHER',
  PRIMARY KEY (`id`),
  UNIQUE KEY `index_partner_email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `partner_name`, `password`, `address`, `city`, `state`, `zip`, `executive_contact`, `email`, `phone_number`, `who_they_are`, `company_website`, `locations`, `login_type`) VALUES
(1, 'HP', 'test123', '3192 Cortona dr', 'san jose', 'ca', '95135', NULL, 'test@test.com', NULL, NULL, NULL, NULL, 'OTHER'),
(2, 'Company Admin', 'admin', NULL, NULL, NULL, NULL, NULL, 'admin@admin.com', NULL, NULL, NULL, NULL, 'ADMIN');

-- --------------------------------------------------------

--
-- Table structure for table `partner_project`
--

CREATE TABLE IF NOT EXISTS `partner_project` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `project_id` mediumint(9) NOT NULL,
  `partner_id` mediumint(9) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `INDEX_PARTNER_PROJECT` (`project_id`,`partner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
