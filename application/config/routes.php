<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Rest_server';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['users/all'] = 'users/fetch_all_users';
$route['users/add'] = 'users/insert';
$route['users/remove'] = 'users/remove_user';
$route['users/update'] = 'users/update_user';

/*-----------hotel Details---------------------------*/
$route['hotel/fetch/(:any)'] = 'hotel_controller/hoteldetails_fetch/$1';
$route['hotel/fetch'] = 'hotel_controller/hoteldetails_fetch';
$route['hotel/insert'] = 'hotel_controller/hoteldetails_add';
$route['hotel/delete'] = 'hotel_controller/remove_hoteldetails';
$route['hotel/update'] = 'hotel_controller/update_hoteldetails';
/*-----------Sightseeings Details --------------------*/
$route['sightseeings/fetch/(:any)'] = 'sightseeings_controller/sightsee_fetch_get/$1';
$route['sightseeings/fetch'] = 'sightseeings_controller/sightsee_fetch_get';
$route['sightseeings/insert'] = 'sightseeings_controller/sightsee_add_post';
$route['sightseeings/update'] = 'sightseeings_controller/update_sightsee_put';
$route['sightseeings/delete'] = 'sightseeings_controller/remove_sightsee_delete';
/*---------------Tranfer Details --------------------*/
$route['transfer/fetch/(:any)'] = 'transfer_controller/tranfer_fetch_get/$1';
$route['transfer/fetch'] = 'transfer_controller/tranfer_fetch_get';
$route['transfer/insert'] = 'transfer_controller/tranfer_add_post';
$route['transfer/update'] = 'transfer_controller/update_tranfer_put';
$route['transfer/delete'] = 'transfer_controller/remove_tranfer_delete';