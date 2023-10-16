<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


/// ---------------------- Employee ---------
$route['employee'] = 'EmployeeControl/EmployeeController/index';
$route['employee/add'] = 'EmployeeControl/EmployeeController/create';
$route['employee/store'] = 'EmployeeControl/EmployeeController/store';

$route['employee/edit/(:any)'] = 'EmployeeControl/EmployeeController/edit/$1';
$route['employee/update/(:any)'] = 'EmployeeControl/EmployeeController/update/$1';
$route['employee/delete/(:any)'] = 'EmployeeControl/EmployeeController/delete/$1';
