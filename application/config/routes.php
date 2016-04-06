
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

///////Admin//////////
//user//
$route['login'] = 'User_Controller/verify_login';
$route['dashboard'] = 'Admin_Controller';


/*department*/

$route['dashboard/department'] = 'Department_Controller';
$route['dashboard/add department'] = 'Admin_Controller/add_department';

/*staff*/
//$route['dashboard/view_staff/(:num)'] = 'Staff_Controller/view/$1';
$route['dashboard/add_staff']='Admin_Controller/add_staff';
$route['dashboard/staff']='Admin_Controller/view_staffs';


/*exam*/
$route['dashboard/exam'] = 'Admin_Controller/add_exam';

/*attendence*/
$route['dashboard/attendence'] = 'Admin_Controller/add_attendence';

/*semester*/
$route['dashboard/semester'] = 'Admin_Controller/add_semester';

/*subject*/
$route['dashboard/subject'] = 'Admin_Controller/add_subject';

/*payroll*/
$route['dashboard/payroll'] = 'Admin_Controller/Add_payroll';
//$route['dashboard/payroll/add/submit'] = 'Payroll_Controller/add';
//$route['dashboard/payroll'] = 'Payroll_Controller/view';


/*application routes*/
$route['default_controller'] = 'Home_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;



?>


