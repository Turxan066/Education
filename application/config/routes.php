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
$route['default_controller']                       = 'UsCon';

// Wep sehifeler start
       $route['index']                             ='UsCon/index';
       $route['about']                             ='UsCon/about';
       $route['blog' ]                             ='UsCon/blog';
       $route['contact']                           ='UsCon/contact';
       $route['course']                            ='UsCon/course';
       $route['event']                             ='UsCon/event';
       $route['single/(.*)']                       ='UsCon/single/$1';
       $route['t_single/(.*)']                     ='UsCon/teacher_single/$1';
       $route['teacher']                           ='UsCon/teacher';
 // Wep sehifeler end



// ADMIN Dashboard start

 // Admin login 
      $route['admin_login']                        ='AdminCon/index';
      $route['admin_loginAct']                     ='AdminCon/loginAct';
      $route['admin_logOut']                       ='AdminCon/logOut';


 // Admin dashboard 
      $route['AdminDashboard']                     ='AdminCon/dashboard';
      
      
// Admin News
      $route['Admin_Newslist']                     ='AdminCon/newslist';
      $route['Admin_Addnews']                      ='AdminCon/Addnews';
      $route['Admin_Addnews_action']               ='AdminCon/addnews_action';
      $route['Admin_deletePost/(:any)']            ='AdminCon/deletePost/$1';
      $route['Admin_postInfo/(:any)']              ='AdminCon/postInfo/$1';
      $route['Admin_updatePost/(:any)']            ='AdminCon/updatePost/$1';
      $route['Admin_updatePostAct/(:any)']         ='AdminCon/updatePostAct/$1';


// TeacherList start
      $route['teacher_list']                       ='AdminCon/teacherList';
      $route['add_Teacher']                        ='AdminCon/addTeacher';
      $route['add_Teacher_action']                 ='AdminCon/addTeacherAction';
      $route['teacher_listDelete/(:any)']          ='AdminCon/teacherDelete/$1';
      $route['teacher_update/(:any)']              ='AdminCon/teacherUpdate/$1';
      $route['teacher_Update_Act/(:any)']          ='AdminCon/teacherUpdateAct/$1';
      $route['teacher_info/(:any)']                ='AdminCon/teacherInfo/$1';
// TeacherList end
      


 // AdminList section
      $route['Admin_list']                         ='AdminCon/adminList';
      $route['Add_Admin']                          ='AdminCon/addAdmin';
      $route['admin_Action']                       ='AdminCon/addAdmin_Action';
      $route['Admin_delete/(:any)']                ='AdminCon/adminDelete/$1';
      


// UpdateAdmin start
      $route['Admin_Update/(:any)']                ='AdminCon/adminUpdate/$1';
      $route['Admin_adminUpdate_Action/(:any)']    ='AdminCon/adminUpdateAction/$1';  
       // UpdateAdmin end
      


// UpdateChangePassword start
      $route['Admin_changePassword/(:any)']        ='AdminCon/changePassword/$1';
 // UpdateChangePassword end

// ChangePasswordAction
      $route['Admin_ChangePassword_Action/(:any)'] ='AdminCon/ChangePasswordAction/$1';
 // ADMIN Dashboard end 


            
// About List start
      $route['about_List']                          ='AdminCon/aboutList';
      $route['add_About']                           ='AdminCon/addAbout';
      $route['addAbout_Action']                     = 'AdminCon/AddAbout_Action';
      $route['AboutDelete/(:any)']                  ='AdminCon/AboutDelete/$1';
      $route['AboutUpdate/(:any)']                  ='AdminCon/AboutUpdate/$1';
      $route['About_Info/(:any)']                   ='AdminCon/AboutInfo/$1';
      $route['aboutUpdate_act/(:any)']              ='AdminCon/AboutUpdate_Action/$1';
// About List end      


// Social Youtube_Video Start
      $route['video_Page']                           ='AdminCon/videoPage';
      $route['Add_video']                            ='AdminCon/AddVideo';
      $route['AddVideo_Act']                         ='AdminCon/AddVideoAct';
      $route['Video_Delete/(:any)']                  ='AdminCon/VideoDelete/$1';
      $route['Video_Update/(:any)']                  ='AdminCon/VideoUpdate/$1';
      $route['VideoUpdate_Act/(:any)']               ='AdminCon/VideoUpdateAct/$1';
        
// Social Youtube_Video End


// Contact Form start
      $route['Contact_List']                         ='UsCon/ContactList';
      $route['Contact_Add']                          ='UsCon/ContactAdd';
      $route['Contact_AddAct']                       ='UsCon/Contact_AddAct';
      $route['Contact_Delete/(:any)']                ='AdminCon/ContactDelete/$1';
      $route['Contact_Update/(:any)']                ='AdminCon/ContactUpdate/$1';
      $route['Contact_UpdateAct/(:any)']             ='AdminCon/ContactUpdate_Act/$1';
// Contact Form End


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
