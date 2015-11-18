<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*

*/
$route['default_controller'] = 'Users';
$route['dashboard'] = "Trips/show";
$route['404_override'] = '';
$route['add_travelp'] = "Trips/show2";
$route['trip_view/(:any)'] = "Trips/trip_view/$1";
$route['join/(:any)'] = "Trips/join/$1";
$route['adminlogin'] = "Users/adminlogin";
$route['admindash'] = "Users/show_ad";
$route['Users/admin'] = "Users/admin";

$route['translate_uri_dashes'] = FALSE;