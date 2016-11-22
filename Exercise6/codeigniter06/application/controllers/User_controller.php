<?php 
   class User_controller extends CI_Controller {
   
      function __construct() { 
         parent::__construct(); 
         $this->load->helper('url'); 
         $this->load->database(); 
      } 
  
      public function index() { 
         $query = $this->db->get("user"); 
         $data['records'] = $query->result(); 
         
         $this->load->helper('url'); 
         $this->load->view('User_view',$data); 
      } 
  
      public function add_student_view() { 
         $this->load->helper('form'); 
         $this->load->view('User_add'); 
      } 
  
      public function add_student() { 
         $this->load->model('User_Model');
         
         $data = array( 
            'user_id' => $this->input->post('user_id'), 
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'midname' => $this->input->post('midname'),
            'nickname' => $this->input->post('nickname'),
            'email' => $this->input->post('email'),
            'homeadd' => $this->input->post('homeadd'),
            'gender' => $this->input->post('gender'),
            'cellno' => $this->input->post('cellno')
         ); 
         
         $this->User_Model->insert($data); 
   
         $query = $this->db->get("user"); 
         $data['records'] = $query->result(); 
         $this->load->view('User_view',$data); 
      } 
  
      public function update_student_view() { 
         $this->load->helper('form'); 
         $user_id = $this->uri->segment('3'); 
         $query = $this->db->get_where("user",array("user_id"=>$user_id));
         $data['records'] = $query->result(); 
         $data['old_user_id'] = $user_id; 
         $this->load->view('User_edit',$data); 
      } 
  
      public function update_student(){ 
         $this->load->model('User_Model');
         
         $data = array( 
            'user_id' => $this->input->post('user_id'), 
            'firstname' => $this->input->post('firstname'),
            'lastname' => $this->input->post('lastname'),
            'midname' => $this->input->post('midname'),
            'nickname' => $this->input->post('nickname'),
            'email' => $this->input->post('email'),
            'homeadd' => $this->input->post('homeadd'),
            'gender' => $this->input->post('gender'),
            'cellno' => $this->input->post('cellno')
         ); 
         
         $old_user_id = $this->input->post('old_user_id'); 
         $this->User_Model->update($data,$old_user_id); 
         
         $query = $this->db->get("user"); 
         $data['records'] = $query->result(); 
         $this->load->view('User_view',$data); 
      } 
  
      public function delete_student() { 
         $this->load->model('User_Model'); 
         $user_id = $this->uri->segment('3'); 
         $this->User_Model->delete($user_id); 
   
         $query = $this->db->get("user"); 
         $data['records'] = $query->result(); 
         $this->load->view('User_view',$data); 
      } 
   } 
?>