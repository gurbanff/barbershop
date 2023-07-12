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
|	https://codeigniter.com/userguide3/general/routing.html
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
$route['default_controller']       = 'User_Controller/z';
$route['Home']                     = 'User_Controller/index';
$route['About']                    = 'User_Controller/about';
$route['Services']                 = 'User_Controller/services';
$route['Gallery']                  = 'User_Controller/gallery';
$route['Contact']                  = 'User_Controller/contact';
// Admin Controller ////////////////////////////////////////////////
$route['Login']                    = 'Admin_Controller/index';
$route['Login_Act']                = 'Admin_Controller/login_act';
$route['Login_Out']                = 'Admin_Controller/log_out';
$route['Dashboard']                = 'Admin_Controller/dashboard';
// Navbar   
$route['Navbar_List']              = 'Admin_Controller/navbar_list';
$route['Navbar_Create']            = 'Admin_Controller/navbar_create';
$route['Navbar_Create_Act']        = 'Admin_Controller/navbar_create_act';
$route['Navbar_Delete/(.*)']       = 'Admin_Controller/navbar_delete/$1';
$route['Navbar_Edit/(.*)']         = 'Admin_Controller/navbar_edit/$1';
$route['Navbar_Edit_Act/(.*)']     = 'Admin_Controller/navbar_edit_act/$1';
$route['Nav_Logo_Create']          = 'Admin_Controller/nav_logo_create';
$route['Nav_Logo_Create_Act']      = 'Admin_Controller/nav_logo_create_act';
$route['Nav_Logo_Edit']            = 'Admin_Controller/nav_logo_edit';
$route['Nav_Logo_Edit_Act']        = 'Admin_Controller/nav_logo_edit_act';
$route['Nav_Logo_Delete']          = 'Admin_Controller/nav_logo_delete';
// Slider List
$route['Slider_List']              = 'Admin_Controller/slider_list';
$route['Slider_Create']            = 'Admin_Controller/slider_create';
$route['Slider_Create_Act']        = 'Admin_controller/slider_create_act';
$route['Slider_Edit']              = 'Admin_Controller/slider_edit';
$route['Slider_Edit_Act']          = 'Admin_Controller/slider_edit_act';
$route['Slider_Delete']            = 'Admin_Controller/slider_delete';
// About //////////////////////////////////////////////////////////////
$route['About_Create']             = 'Admin_Controller/about_create';
$route['About_Create_Act']         = 'Admin_Controller/about_create_act';
$route['About_Edit']               = 'Admin_Controller/about_edit';
$route['About_Edit_Act']           = 'Admin_Controller/about_edit_act';
$route['About_Delete']             = 'Admin_Controller/about_delete';
// Services /////////////////////////////////////////////////////////////
$route['Service_List']                  = 'Admin_Controller/service_list';
$route['Service_Header_Create']         = 'Admin_Controller/service_header_create';
$route['Service_Header_Create_Act']     = 'Admin_Controller/service_header_create_act';
$route['Service_Header_Edit']           = 'Admin_Controller/service_header_edit';
$route['Service_Header_Edit_Act']       = 'Admin_Controller/service_header_edit_act';
$route['Service_Header_Delete/(.*)']    = 'Admin_Controller/service_header_delete/$1';
$route['Service_Create']                = 'Admin_Controller/service_list_create';
$route['Service_List_Create_Act']       = 'Admin_Controller/service_list_create_act';
$route['Service_List_Update/(.*)']      = 'Admin_Controller/service_list_update/$1';
$route['Service_List_Update_Act/(.*)']  = 'Admin_Controller/service_list_update_act/$1';
$route['Service_List_Delete/(.*)']      = 'Admin_Controller/service_list_delete/$1';
// Price /////////////////////////////////////////////////////////////////
$route['Price_Create']             = 'Admin_Controller/price_create';
$route['Price_Create_Act']         = 'Admin_Controller/price_create_act';
$route['Price_Edit']               = 'Admin_Controller/price_edit';
$route['Price_Edit_Act']           = 'Admin_Controller/price_edit_act';
$route['Price_Delete']             = 'Admin_Controller/price_delete';
// Working Hours //////////////////////////////////////////////////
$route['Working_Hours_List']            = 'Admin_Controller/working_hours_list';
$route['Working_Hours_Create']          = 'Admin_Controller/working_hours_create';
$route['Working_Hours_Create_Act']      = 'Admin_Controller/working_hours_create_act';
$route['Working_Hours_Edit']            = 'Admin_Controller/working_hours_edit';
$route['Working_Hours_Edit_Act']        = 'Admin_Controller/working_hours_edit_act';
$route['Working_Hours_Edit_Act']        = 'Admin_Controller/working_hours_edit_act';
$route['Working_Hours_Delete/(.*)']     = 'Admin_Controller/working_hours_delete/$1';
$route['Wh_Time_Create']                = 'Admin_Controller/wh_time_create';
$route['Wh_Time_Create_Act']            = 'Admin_Controller/wh_time_create_act';
$route['Wh_Time_Edit/(.*)']             = 'Admin_Controller/wh_time_edit/$1';
$route['Wh_Time_Edit_Act/(.*)']         = 'Admin_Controller/wh_time_edit_act/$1';
$route['Wh_Time_Delete/(.*)']           = 'Admin_Controller/wh_time_delete/$1';
// Product ////////////////////////////////////////////////////////
$route['Staff_List']               = 'Admin_Controller/staff_list';
$route['Staff_Create']             = 'Admin_Controller/staff_create';
$route['Staff_Create_Act']         = 'Admin_Controller/staff_create_act';
$route['Staff_Details/(.*)']       = 'Admin_Controller/staff_details/$1';
$route['Staff_Delete/(.*)']        = 'Admin_Controller/staff_delete/$1';
$route['Staff_Edit/(.*)']          = 'Admin_Controller/staff_edit/$1';
$route['Staff_Edit_Act/(.*)']      = 'Admin_Controller/staff_edit_act/$1';
// Carousel /////////////////////////////////////////////////////////////
$route['Carousel_List']            = 'Admin_Controller/carousel_list';
$route['Carousel_List']            = 'Admin_Controller/carousel_list';


$route['testfile']                 = 'Admin_Controller/testfile';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
