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

//login routes
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['logout'] = "login/logout";
// dashboard routes
$route['dashboard'] = "dashboard";
$route['login/dashboard'] = "dashboard";

// order related routes
$route['order'] = "welcome/myorders";
$route['showorder'] = "welcome/showorder";
$route['addorderdetails']="welcome/insertorderdetails";
$route['showfulldetails/(:any)']="welcome/fetchFullOrderDetails/$1";
$route['showarehouseforflags']="flags";
// Inventory related routes
$route['addparts']="parts";
$route['addpart']="parts/addpart";
$route['showallparts']="parts/showparts";
$route['editparts/(:any)']="parts/editparts/$1";
$route['updatepart/(:any)']="parts/updateparts/$1";
$route['delpart/(:any)']="parts/deleteparts/$1";

// users related routes
$route['showuser']="users/showuser";
$route['adduser']="users/newuser";
$route['showallusers']="users/showallusers";
$route['users/update_entry/(:any)']="users/edituser/$1";
$route['users/update_user/(:any)']="users/updateuser/$1";
$route['users/del_entry/(:any)']="users/deleteuser/$1";

// warehouse related routes
$route['warehouse']="warehouse";
$route['warehouse/wareinfo/(:any)']="warehouse/wareinfo/$1";
$route['new_warehouse']="warehouse/newhouse";
$route['show_warehouse']="warehouse/showwarehouse";
$route['modiwarehouse/(:any)']="warehouse/editwarehouse/$1";
$route['update/(:any)']="warehouse/updatewarehouse/$1";
$route['delwarehouse/(:any)']="warehouse/delwarehouse/$1";

//palced order with warehouse details
$route['showplacedorder']="warehouse/showorderplaced";
$route['warehouse/editwarehouseinfo/(:any)']="warehouse/editwarehouseinfo/$1";
$route['showordersforexecution']="warehouse/fetchorderdetails";
$route['order/updateorders/(:any)']="order/updateorders/$1";


//card info routes
$route['card']="bank";
$route['showcardinfo']="bank/showinfo";
$route['addcard']="bank/addcardinfo";
$route['modifycard/(:any)']="bank/editcardinfo/$1";
$route['modifycardinfo/(:any)']="bank/updatecardinfo/$1";
$route['delcard/(:any)']="bank/delcardinfo/$1";


//part listing routes
$route['addlistpart']="partlist";
$route['showlistedpart']="partlist/showpartlisted";
$route['editpartlisting/(:any)']="partlist/editpartlisted/$1";
$route['updatepartlisted/(:any)']="partlist/updatepartlisted/$1";

//flags and followups related routes
$route['showordersforfollowups']='flags/showflags';

