<?php 



class AdminCon extends CI_Controller{
    // Admin DashBoard Start
    public function index(){
        $this->load->view('admin/LoginForm');
    }
    public function loginAct(){
                $username = $_POST['username'];
                $password = $_POST['password'];
       

        if(!empty($username) && !empty($password)){
            $data = [
                'a_username' => $username,
                'a_password' => md5($password),
            ];
            
            $data = $this->security->xss_clean($data);

            
            
            $result = $this->db->select('a_id')->where($data)->get('admin')->row_array();

           
           if($result){

                
            $_SESSION['admin_id'] = $result['a_id'];
            redirect(base_url('AdminDashboard')); 

           }else{
            $this->session->set_flashdata('error',"Username və ya password səhvdir");
            redirect(base_url('admin_login'));
           }


        }else{
            $this->session->set_flashdata('error',"Boşluq buraxmayın!");
            redirect(base_url('admin_login'));
        }

    }
    public function logOut(){
        unset($_SESSION['admin_id']);
        $this->session->set_flashdata('success','Yeni Görüşlərədək)');
        redirect(base_url('admin_login'));
    }
    public function dashboard(){
       $this->load->view('admin/index');
    }
    // Admin DashBoard End

    
    //   Courses start
    public function newslist(){

       $data['allNews'] = $this->db->order_by('id','DESC')
       ->join('teacher_list','teacher_list.teacher_list_id = news.teacher')
       ->get('news')->result_array();

       

        $this->load->view('admin/news_list', $data);
   }
    public function Addnews(){
       $data['allTeacher'] = $this->db->select('teacher_list_id,teacher_list_name,teacher_list_surname,teacher_list_profession')->order_by('teacher_list_id','DESC')->get('teacher_list')->result_array();


      
       $this->load->view('admin/addnews',$data);
       
   }
    public function Addnews_action(){
       $title        = $_POST['title'];
       $description  = $_POST['description'];
       $date         = $_POST['date'];
       $status       = $_POST['status'];
       $teacher      = $_POST['teacher'];

        if(!empty($title)&& !empty($description) && !empty($date) && !empty($status) && !empty($teacher)){

            $config['upload_path']    = './upload/news/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg|';
            // $config['max_size']       = '100';
            // $config['max_width']      = '1024';
            // $config['max_height']     = '768';

        
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')){

                $img = $this->upload->data('file_name');
            
                $data =[
                    'title'         =>$title,
                    'description'   =>$description,
                    'date'          =>$date,
                    'status'        =>$status,
                    'images'        =>$img,
                    'teacher'       => $teacher,
                ];
                $data = $this->security->xss_clean($data);
                

                $this->db->insert('news',$data);
                $this->session->set_flashdata('success','Təbriklər! Məlumat Uğurla Əlavə Olundu!');
                redirect(base_url('Admin_Newslist'));

        
            }else{
                $this->session->set_flashdata('error','Şəkil yüklənmədi!');
                redirect(base_url('Admin_Addnews'));

            }

        }else{
            $this->session->set_flashdata('error','Boşluq buraxmayın!');
            redirect(base_url('Admin_Addnews'));
        }

       
      
      
   }
   public function deletePost($id){
       $this->db->where('id',$id)->delete('news');
       $this->session->set_flashdata('success','Məlumat Uğurla Silindi');
       redirect(base_url('Admin_Newslist'));
   }
   public function postInfo($id){
       $data['singleNews']=$this->db
       ->join('teacher_list','teacher_list.teacher_list_id = news.teacher')
       ->where('id',$id)->get('news')->row_array();
       $this->load->view('admin/info',$data);

   }
   public function updatePost($id){
       $data['singleNews'] = $this->db->where('id',$id)->get('news')->row_array();
       $data['allTeacher'] = $this->db->select('teacher_list_id,teacher_list_name,teacher_list_surname,teacher_list_profession')->order_by('teacher_list_id','DESC')->get('teacher_list')->result_array();
       $this->load->view('admin/updateNews',$data);

   }
    public function updatePostAct($id){

        $title        = $_POST['title'];
        $description  = $_POST['description'];
        $date         = $_POST['date'];
        $status       = $_POST['status'];
        $teacher       = $_POST['teacher'];
 
        if(!empty($title)&& !empty($description) && !empty($date) && !empty($status) && !empty($teacher)){
 
            $config['upload_path']    = './upload/news/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg|';
            // $config['max_size']       = '100';
            // $config['max_width']      = '1024';
            // $config['max_height']     = '768';
 
            $this->upload->initialize($config);
 
            if($this->upload->do_upload('user_file')){
 
                $img = $this->upload->data('file_name');
             
                $data =[
                    'title'         =>$title,
                    'description'   =>$description,
                    'date'          =>$date,
                    'status'        =>$status,
                    'images'        =>$img,
                    'teacher'       =>$teacher,
                ];
                $data = $this->security->xss_clean($data);
     
                $this->db->where('id',$id)->update('news',$data);
                $this->session->set_flashdata('success','Təbriklər! Məlumat uğurla Yeniləndi');
                redirect(base_url('Admin_Newslist'));
 
            }else{
        
                $data =[
                    'title'         =>$title,
                    'description'   =>$description,
                    'date'          =>$date,
                    'status'        =>$status,
                    'teacher'       =>$teacher,    
                ];
                $data = $this->security->xss_clean($data);
                
                $this->db->where('id',$id)->update('news',$data);
                $this->session->set_flashdata('success','Təbriklər! Məlumat uğurla Yeniləndi');
                redirect(base_url('Admin_Newslist'));
            }
 
        }else{
            $this->session->set_flashdata('error','Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
     
   }
   //    Courses end




    //    Admin  start
    public function adminList(){
        $data['getAdmins'] = $this->db->order_by('a_id','DESC')->get('admin')->result_array();

        $this->load->view('admin/adminListPage',$data);
   }
   public function addAdmin(){
       $this->load->view('admin/AddAdmin');
   }
   public function addAdmin_Action(){
        $name     = $_POST['name'];
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        if(!empty($name) && !empty($username)  && !empty($password)){

            $dataCheck = $this->db->where('a_username',$username)->get('admin')->row_array();
            
            
            if(!$dataCheck){

                $config['upload_path']    = './upload/admin/';
                $config['allowed_types']  = 'gif|jpg|png|jpeg|';

                $this->upload->initialize($config);
                if($this->upload->do_upload('user_file')){

                    $img = $this->upload->data('file_name');

                    $data=[
                        'a_name'      =>  $name,
                        'a_username'  =>  $username,
                        'a_img'       =>  $img,
                        'a_password'  =>  md5($password),
                    ];
                    $data = $this->security->xss_clean($data);         

                    $this->db->insert('admin',$data);
                    $this->session->set_flashdata('Success','Təbriklər Admin Uğurla Əlavə Olundu');
                    redirect(base_url('Admin_list'));
                }else{
                    $this->session->set_flashdata('error','Səkil Yüklənmədi');
                    redirect('Add_Admin');      
                }

            }else{
                $this->session->set_flashdata('error','Başqa istifadəçi adı istifadə edin!');
                redirect('Add_Admin'); 
            }

        }else{
            $this->session->set_flashdata('error','Boşluq Buraxmayın');
            redirect('Add_Admin');
        }

   

   }
    public function adminDelete($id){

        $adminData = $this->db->select('a_id')->where('a_id',$id)->get('admin')->row_array();
        $sessionIdAdmin = $_SESSION['admin_id'];
       
        if($sessionIdAdmin == $adminData['a_id']){
            $this->session->set_flashdata('err','Admin Özünü Silə Bilməz!');
            redirect(base_url('Admin_list'));
            // $this->db->where('a_id',$id)->delete('admin');
        
            // unset($_SESSION['admin_id']);
            // $this->session->set_flashdata('success','Yeni gorusleredek :)');
            // redirect(base_url('admin_login'));
        }else{
            $this->db->where('a_id',$id)->delete('admin');
            $this->session->set_flashdata('success','Məlumat Uğurla Silindi!');
            redirect(base_url('Admin_list'));
        }
        
   }
    public function adminUpdate($id){
        $data['getSingleAdmin'] = $this->db->where('a_id',$id)->get('admin')->row_array();
       
        $this->load->view('admin/UpdateAdmin',$data);


   }
    public function adminUpdateAction($id){
            $name = $_POST['name'];
            $username =$_POST['username'];

            if(!empty($name) && !empty($username)){
                
                $config['upload_path']    = './upload/admin/';
                $config['allowed_types']  = 'gif|jpg|png|jpeg|';
                // $config['max_size']       = '100';
                // $config['max_width']      = '1024';
                // $config['max_height']     = '768';
     
                $this->upload->initialize($config);
     
                if($this->upload->do_upload('user_file')){
     
                    $img = $this->upload->data('file_name');
                 
                    $data =[
                        'a_name' => $name,
                        'a_username' => $username,
                        'a_img' => $img,
                    ];
                    $data = $this->security->xss_clean($data);
         
                    $this->db->where('a_id',$id)->update('admin',$data);
                    $this->session->set_flashdata('success','Təbriklər! Məlumat Uğurla Yeniləndi');
                    redirect(base_url('Admin_list'));

                }else{
                    $data =[
                        'a_name'     => $name,
                        'a_username' => $username,
                    ];
                    $data = $this->security->xss_clean($data);
         
                    $this->db->where('a_id',$id)->update('admin',$data);
                    $this->session->set_flashdata('success','Təbriklər! Məlumat Uğurla Yeniləndi');
                    redirect(base_url('Admin_list'));
                }



            }else{
                $this->session->set_flashdata('error','Boşluq Buraxmayın!');
                redirect($_SERVER['HTTP_REFERER']);
            }
   }
   //    Admin  end


   
    //  Change Password start
    public function changePassword($id){
        $data['getSingleAdmin'] = $this->db->where('a_id',$id)->get('admin')->row_array();
        
        $this->load->view('admin/ChangePassword',$data);
   }
    public function ChangePasswordAction($id){
        $password = strip_tags($_POST['password']);
        if(!empty($password)){

            $data = [
                'a_password' => md5($password),
            ];
            $this->db->where('a_id',$id)->update('admin',$data);
            $this->session->set_flashdata('success','Təbriklər! Məlumat uğurla Yenilədi');
            redirect(base_url('Admin_list'));
        }else{
            $this->session->set_flashdata('error','Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
        }
    
   }
   //  Change Password end


   
    // teacher  start
    public function teacherList(){
        $data['teacherList']= $this->db->order_by('teacher_list_id',"DESC")->get('teacher_list')->result_array();
        //         print_r('<pre>');
        //         print_r($data['teacherList']);
        //         die();
                $this->load->view ('admin/teacherListPage',$data);
   }
    public function teacherDelete($id){
        $this->db->where('teacher_list_id',$id)->delete('teacher_list');
        $this->session->set_flashdata('success','Məlumat Uğurla Silindi');
        redirect(base_url('teacher_list'));

   }
   public function teacherUpdate($id){
        $data['getSingleTeacher'] = $this->db->where('teacher_list_id',$id)->get('teacher_list')->row_array();
        
        $this->load->view('admin/teacherUpdate',$data);   
   }
   public function teacherUpdateAct($id){
        $name           =$_POST['name'];
        $surname        =$_POST['surname'];
        $profession     =$_POST['profession'];
        $information    =$_POST['description'];
        $fb             =$_POST['fb'];
        $wp             =$_POST['wp'];
        $ins            =$_POST['ins'];

    if(!empty($name) && !empty($surname) && !empty($profession) && !empty($information)){

        $config['upload_path']    = './upload/teacher/';
        $config['allowed_types']  = 'gif|jpg|png|jpeg|';
        // $config['max_size']       = '100';
        // $config['max_width']      = '1024';
        // $config['max_height']     = '768';

        $this->upload->initialize($config);

        if($this->upload->do_upload('user_file')){

            $img = $this->upload->data('file_name');
         
            $data =[
                'teacher_list_name'           =>$name,
                'teacher_list_surname'        =>$surname,
                'teacher_list_profession'     =>$profession,
                'teacher_list_img'            =>$img,
                'teacher_list_info'           =>$information,
                't_fb'                        => $fb,
                't_wp'                        => $wp,
                't_ins'                       => $ins,
            ];
            $data = $this->security->xss_clean($data);

 
            $this->db->where('teacher_list_id',$id)->update('teacher_list',$data);
            $this->session->set_flashdata('success','Təbriklər! Məlumat uğurla Yeniləndi');
            redirect(base_url('teacher_list'));

        }else{
    
            $data =[
                 'teacher_list_name'            =>  $name,
                 'teacher_list_surname'         =>  $surname,
                 'teacher_list_profession'      =>  $profession,
                 'teacher_list_info'            =>  $information,
                 't_fb'                         => $fb,
                 't_wp'                         => $wp,
                 't_ins'                        => $ins,
            ];
            $data = $this->security->xss_clean($data);
            
            
            $this->db->where('teacher_list_id',$id)->update('teacher_list',$data);
            $this->session->set_flashdata('success','Təbriklər! Məlumat uğurla Yeniləndi');
            redirect(base_url('teacher_list'));
        }

    }else{
        $this->session->set_flashdata('error','Boşluq buraxmayın!');
        redirect($_SERVER['HTTP_REFERER']);
        }
   }
   public function addTeacher(){
         $this->load->view('admin/AddTeacher');
   }
    public function addTeacherAction(){
        $name           =$_POST['name'];
        $surname        =$_POST['surname'];
        $profession     =$_POST['profession'];
        $information    =$_POST['description'];
        $fb             =$_POST['fb'];
        $wp             =$_POST['wp'];
        $ins            =$_POST['ins'];

        if(!empty($name) && !empty($surname) && !empty ($profession) && !empty($information)){
            $config['upload_path']    = './upload/teacher/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg|';
            // $config['max_size']       = '100';
            // $config['max_width']      = '1024';
            // $config['max_height']     = '768';

            
            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')){


                $img = $this->upload->data('file_name');

             $data=[
                 'teacher_list_name'      =>  $name,
                 'teacher_list_surname'   =>  $surname,
                 'teacher_list_profession'=>  $profession,
                 'teacher_list_info'      =>  $information,
                 'teacher_list_img'       =>  $img,
                 't_fb'                        => $fb,
                 't_wp'                        => $wp,
                 't_ins'                       => $ins,
             ]; 
             $data = $this->security->xss_clean($data);

             $this->db->insert('teacher_list',$data);
             $this->session->set_flashdata('Success','Təbriklər Məlumat Uğurla Əlavə Olundu');
             redirect(base_url('teacher_list'));
             
             

                

            }else{
                   $this->session->set_flashdata('error','Səkil Yüklənmədi');
                   redirect($_SERVER['HTTP_REFERER']);      
            }
        }else{
            $this->session->set_flashdata('error','Boşluq Buraxmayın');
            redirect($_SERVER['HTTP_REFERER']);
            }
            
             
        
           

   }
   public function teacherInfo($id){
       $data['singleTeacher'] = $this->db->where('teacher_list_id',$id)->get('teacher_list')->row_array();
       $this->load->view('admin/teacherInfo',$data);
    }
   // teacher  end

   


   // About List start 
    public function aboutList(){
      $data['about'] =$this->db->get('about')->result_array();
      $this->load->view('admin/AboutList',$data);

    }
    public function addAbout(){
      $this->load->view('admin/AddAbout');
    }
    public function AddAbout_Action(){

        $title        = $_POST['title'];
        $description  = $_POST['description'];
    
        if(!empty($title)&& !empty($description)){

            $config['upload_path']    = './upload/about/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg|';


            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')){

                $img = $this->upload->data('file_name');
                        
                $data =[
                    'about_title'         =>$title,
                    'about_description'   =>$description,
                    'about_img'           =>$img,
                ];
                $data = $this->security->xss_clean($data);
                
                $this->db->insert('about',$data);
                $this->session->set_flashdata('success','Təbriklər! Məlumat Uğurla Əlavə olundu!');
                redirect(base_url('about_List'));

                    
            }else{
                $data =[
                    'about_title'         =>$title,
                    'about_description'   =>$description,
                    
                ];
                $data = $this->security->xss_clean($data);
                
                $this->db->insert('about',$data);
                $this->session->set_flashdata('success','Təbriklər! Məlumat Uğurla Əlavə olundu!');
                redirect(base_url('about_List'));
                
            }
            
        }else{
            $this->session->set_flashdata('error','Boşluq Buraxmayın!');
            redirect(base_url('add_About'));
        }


    }
    public function AboutDelete($id){
        $this->db->where('about_id',$id)->delete('about');
        $this->session->set_flashdata('Success','Məlumat Uğurla Silindi');
        redirect(base_url('about_List'));

    }
    public function AboutUpdate($id){
        $data['about'] =$this->db->where('about_id',$id)->get('about')->row_array();
        $this->load->view('admin/AboutUpdate',$data);
    }
    public function AboutUpdate_Action($id){
        
        $title               =$_POST['title'];
        $description         =$_POST['description'];    

        if(!empty($title) && !empty($description)){

            $config['upload_path']    = './upload/about/';
            $config['allowed_types']  = 'gif|jpg|png|jpeg|';
            // $config['max_size']       = '100';
            // $config['max_width']      = '1024';
            // $config['max_height']     = '768';

            $this->upload->initialize($config);

            if($this->upload->do_upload('user_file')){

                $img = $this->upload->data('file_name');
            
                $data =[
                    'about_title'       =>$title,
                    'about_description' =>$description,
                    'about_img'         =>$img,
                ];
                $data = $this->security->xss_clean($data);
                
                $this->db->where('about_id',$id)->update('about',$data);
                $this->session->set_flashdata('success','Təbriklər! Məlumat Uğurla Yeniləndi');
                redirect(base_url('about_List'));

            }else{
        
                $data =[
                    'about_title'       =>$title,
                    'about_description' =>$description,
                ];
                $data = $this->security->xss_clean($data);
                
                $this->db->where('about_id',$id)->update('about',$data);
                $this->session->set_flashdata('success','Təbriklər! Məlumat Uğurla Yeniləndi');
                redirect(base_url('about_List'));
                
            }

        }else{
            $this->session->set_flashdata('error','Boşluq Buraxmayın!');
            redirect(base_url('add_About'));
        }
    }
    public function AboutInfo($id){
            $data['about'] = $this->db->where('about_id',$id)->get('about')->row_array();
            $this->load->view('admin/AboutInfo',$data);

        }
    // About List End 

        

    

        //  Social Youtube Videos Start
        public function videoPage(){
            $data['videolist'] =$this->db->order_by('s_id','DESC')->get('social_video' )->result_array();
            $this->load->view('admin/Video',$data);
        }
        public function AddVideo(){
            $this->load->view('admin/AddVideo');
        }
        public function AddVideoAct(){
            $video        = $_POST['video'];
            
        
            if(!empty($video)){
    
                $config['upload_path']    = './upload/video/';
                $config['allowed_types'] = 'avi|mp4|3gp|mpeg|mpg|mov|mp3|flv|wmv';

                $this->upload->initialize($config);
    
                if($this->upload->do_upload('user_file')){
    
                    $img = $this->upload->data('file_name');
                            
                    $data =[
                        's_video'         =>$video,
                        ];


                    $data = $this->security->xss_clean($data);
                    
                    $this->db->insert('social_video',$data);
                    $this->session->set_flashdata('success','Təbriklər! Video Uğurla Yukləndi!');
                    redirect(base_url('video_Page'));
    
                        
                }else{
                    $data =[
                        's_video'         =>$video,
                        
                    ];
                    $data = $this->security->xss_clean($data);
                    
                    $this->db->insert('social_video',$data);
                    $this->session->set_flashdata('success','Təbriklər! Video Uğurla Yukləndi!');
                    redirect(base_url('video_Page'));
                    
                    }
                
            }else{
                $this->session->set_flashdata('error','Boşluq Buraxmayın!');
                redirect(base_url('Add_video'));
            }
        }
        public function VideoDelete($id){
            $this->db->where('s_id',$id)->delete('social_video');
            $this->session->set_flashdata('Success','Məlumat Uğurla Silindi');
            redirect(base_url('video_Page'));

        }    
        public function VideoUpdate($id){
            $data['videolist'] =$this->db->where('s_id',$id)->get('social_video')->row_array();
           
            $this->load->view('admin/VideoUpdate',$data);
        }
        public function VideoUpdateAct($id){
            $video        = $_POST['video'];
            
        
            if(!empty($video)){
    
                $config['upload_path']    = './upload/video/';
                $config['allowed_types'] = 'avi|mp4|3gp|mpeg|mpg|mov|mp3|flv|wmv';

                $this->upload->initialize($config);
    
                if($this->upload->do_upload('user_file')){
    
                    $img = $this->upload->data('file_name');
                            
                    $data =[
                        's_video'         =>$video,
                        ];


                    $data = $this->security->xss_clean($data);
                    
                    $this->db->where('s_id',$id)->update('social_video',$data);
                    $this->session->set_flashdata('success','Təbriklər! Video Uğurla Yükləndi!');
                    redirect(base_url('video_Page'));
    
                        
                }else{
                    $data =[
                        's_video'         =>$video,
                        
                    ];
                    $data = $this->security->xss_clean($data);
                    
                    $this->db->where('s_id',$id)->update('social_video',$data);
                    $this->session->set_flashdata('success','Təbriklər! Video Uğurla Yeniləndi!');
                    redirect(base_url('video_Page'));
                    
                    }
                
            }else{
                $this->session->set_flashdata('error','Boşluq buraxmayın!');
                redirect(base_url('Add_video'));
            }
        }
        //  Social Youtube Videos End
        

        
        

        // Contact User start
        public function ContactDelete($id){
            $this->db->where('c_id',$id)->delete('contact');
            $this->session->set_flashdata('Success','Mesajınız  Uğurla Silindi');
            redirect(base_url('Contact_List'));
        }
        public function ContactUpdate($id){
            $data['contactList'] =$this->db->where('c_id',$id)->get('contact')->row_array();
           
            $this->load->view('admin/ContactUpdate',$data);
        }
        public function ContactUpdate_Act($id){
            $name             = $_POST['name'];
            $email            = $_POST['email'];
            $subject          = $_POST['subject'];
            $message          = $_POST['message'];

            if(!empty($name)&& !empty($email) && !empty($subject) && !empty($message)){

                $data =[
                    'c_name'          =>$name,
                    'c_email'         =>$email,
                    'c_subject	'     =>$subject,
                    'c_message'       =>$message,
                    
                ];
            
                
                $data = $this->security->xss_clean($data);
                

                $this->db->where('c_id',$id)->update('contact',$data);
                
                $this->session->set_flashdata('success','Təbriklər! Məlumat Uğurla Yeniləndi');
                redirect(base_url('Contact_List'));

        
            }else{
            $this->session->set_flashdata('error','Boşluq buraxmayın!');
            redirect($_SERVER['HTTP_REFERER']);
            }
            }

        // Contact User End
        }


