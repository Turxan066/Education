<?php

class UsCon extends CI_Controller{

   


    public function index(){
        $data['video'] = $this->db->get('social_video')->row_array();
        $data['courses'] = $this->db
        ->limit(6)
        ->join('teacher_list','teacher_list.teacher_list_id = news.teacher')
        ->get('news')->result_array();
        $data['allTeacher'] = $this->db->limit(6)->order_by('teacher_list_id','DESC')->get('teacher_list')->result_array();
        //        print_r('<pre>');
        //        print_r($data['allTeacher']);
        //        die();
                $this->load->view('user/index',$data);

    }
    public function about(){
                $data['about'] = $this->db->order_by('about_id ','DESC')->get('about')->row_array();
        //        print_r('<pre>');
        //        print_r($data['about']);
        //        die();
                $this->load->view('user/about',$data);
    }

    // public function blog(){

    //     $this->load->view('user/blog');
    // }

    public function contact(){
  
        $this->load->view('user/contact');
    }
    public function ContactList(){
        $data['contactList']= $this->db->get('contact')->result_array();
        $this->load->view('user/ContactList',$data);
        
    }
    public function ContactAdd(){
       $this->load->view('user/ContactAdd');
    }
    public function Contact_AddAct(){
        $name             = $_POST['name'];
        $email            = $_POST['email'];
        $subject          = $_POST['subject'];
        $message          = $_POST['message'];

        if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){

                $data =[
                    'c_name'          =>$name,
                    'c_email'         =>$email,
                    'c_subject'       =>$subject,
                    'c_message'       =>$message, 
                ];

                $data = $this->security->xss_clean($data);
                
                $this->db->insert('contact',$data);
                $this->session->set_flashdata('success','Tebrikler! Mesajiniz ugurla Gonderildi');
                redirect(base_url('contact'));

        }else{
            $this->session->set_flashdata('error','Bosluq buraxmayin!');
            redirect(base_url('contact'));
        }
       
    }
    public function course(){
        $data['courses'] = $this->db
            ->order_by('id','DESC')
            ->join('teacher_list','teacher_list.teacher_list_id = news.teacher')
            ->get('news')->result_array();


        $this->load->view('user/course',$data);
    }

    // public function event(){

    //     $this->load->view('user/event');
    // }

    public function single($id){
        $data['course_single'] = $this->db
            ->where('id',$id)
            ->join('teacher_list','teacher_list.teacher_list_id = news.teacher')
            ->get('news')->row_array();

        $data['courses'] = $this->db
            ->limit(5)
            ->order_by('id','DESC')
            ->join('teacher_list','teacher_list.teacher_list_id = news.teacher')
            ->get('news')->result_array();
        //        print_r('<pre>');
        //        print_r($data['courses']);
        //        die();
                $this->load->view('user/single',$data);
    }
    public function teacher_single($id){
        $data['t_single'] = $this->db->where('teacher_list_id',$id)->get('teacher_list')->row_array();

        $this->load->view('user/teacher-single',$data);

    }
    public function teacher(){
        $data['teacher'] = $this->db
            ->order_by('teacher_list_id ','DESC')
            ->get('teacher_list')->result_array();

        $this->load->view('user/teacher',$data);
    }


    
}