
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

/////PUBLIC ROUTE///////////

$route['index'] = 'Home_Controller/index';
$route['scholarship'] = 'Home_Controller/scholarship';
$route['contact'] = 'Home_Controller/contact';
$route['registration'] = 'Home_Controller/registration';


///////Admin//////////
//user//

$route['login'] = 'Admin_Controller/login';

$route['dashboard/login'] = 'User_Controller/verify_login';

$route['dashboard/logout'] = 'User_Controller/logout';

$route['dashboard/login'] = 'Admin_Controller/login';
$route['dashboard'] = 'Department_Controller';

$route['dashboard/logout'] = 'User_Controller/logout';
$route['dashboard/test'] = 'User_Controller/test';


/*department*/

$route['dashboard/department'] = 'Department_Controller';
$route['dashboard/department/view/(:num)'] = 'Department_Controller/view/$1';
$route['dashboard/department/delete/(:num)'] = 'Department_Controller/delete/$1';
$route['dashboard/department/add'] = 'Department_Controller/add';

/*course*/
$route['dashboard/department/view/(:num)/course/add'] = 'Course_Controller/add';
$route['dashboard/department/course/(:num)'] = 'Course_Controller/view/$1';
$route['dashboard/department/course/delete/(:num)'] = 'Course_Controller/delete/$1';

/*subject*/
$route['dashboard/department/course/subject/add'] = 'Semester_Subject_Controller/add';
$route['dashboard/department/course/semester/subject/delete/(:num)'] = 'Semester_Subject_Controller/delete/$1';

/*semester*/
$route['dashboard/semester'] = 'Admin_Controller/add_semester';
$route['dashboard/department/course/semester/add'] = 'Semester_Controller/add';
$route['dashboard/department/course/semester/delete/(:num)'] = 'Semester_Controller/delete/$1';
$route['dashboard/department/course/semester/view/(:num)'] = 'Semester_Controller/view/$1';

///////////////

/*staff*/
//$route['dashboard/view_staff/(:num)'] = 'Staff_Controller/view/$1';
$route['dashboard/add_staff']='Admin_Controller/add_staff';
$route['dashboard/staff']='Admin_Controller/view_staffs';
$route['dashboard/staff/add']='Staff_Controller/add';
$route['dashboard/staff/delete/(:num)']='Staff_Controller/delete/$1';


/*exam*/
$route['dashboard/exam'] = 'Admin_Controller/view_exam';

/*attendence*/
$route['dashboard/attendence'] = 'Admin_Controller/add_attendence';



/*subject*/
$route['dashboard/subject'] = 'Admin_Controller/add_subject';

/*payroll*/
$route['dashboard/payroll'] = 'Admin_Controller/Add_payroll';
//$route['dashboard/payroll/add/submit'] = 'Payroll_Controller/add';
//$route['dashboard/payroll'] = 'Payroll_Controller/view';

/*student_details*/
$route['dashboard/students/view'] = 'Admin_Controller/view_student_details';
$route['dashboard/students'] = 'Student_Details_Controller';
//$route['dashboard/payroll/add/submit'] = 'Payroll_Controller/add';
//$route['dashboard/payroll'] = 'Payroll_Controller/view';


/*application routes*/
$route['default_controller'] = 'Home_Controller';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;




