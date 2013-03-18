<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Find extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
         $this->load->helper('url');
         $this->load->model("search_model");
    }
 
     
public function index()
{
    $this->load->view('header');
    $this->load->view('user_nav');
    $this->load->view('index');
    $this->load->view('footer');
} 
    
    public function findemp()
{            
    
       // $this->load->view('empLogin_view');
       $name =$this->input->get('firstname');
       $lastname =$this->input->get('lastname');
       $department =$this->input->get('dept');
     //  $school =$this->input->get('school');
       
       $name = $this->search_model->getsearch($name,$lastname,$department); //$school
       echo json_encode($name);
} 
 
   
}