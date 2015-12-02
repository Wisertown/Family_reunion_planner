<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*

*/
$route['default_controller'] = 'Users';
$route['dashboard'] = "Trips/show";
$route['404_override'] = '';
$route['add_travelp'] = "Trips/show2";
$route['trip_view/(:any)'] = "Trips/trip_view/$1";
$route['vote/(:any)'] = "Trips/vote/$1";
$route['adminlogin'] = "Users/adminlogin";
$route['admindash'] = "Users/show_ad";
$route['Users/admin'] = "Users/admin";
$route['Users/delete/(:any)'] = "Users/delete/$1";
$route['edit/(:any)'] = "Users/edit/$1";
$route['user_update/(:any)'] = "Users/user_update/$1";
$route['discuss'] = "Forums/show";
$route['comment_create/(:any)'] = "Forums/comment_create/$1";
$route['translate_uri_dashes'] = FALSE;
?>