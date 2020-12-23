<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

		public function __construct()
    {
        parent::__construct();
        

        // if($this->session->userdata('id')){ }else{

        // 	redirect('login');
        // }
    }


public function index()
	{
			$this->load->view('Admin/include/header');
			$this->load->view('Admin/home');
			$this->load->view('Admin/include/footer');
	}
   public function about()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('about');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function services()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('services');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function gallery()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('gallery');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function team()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('team');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function typo()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('typo');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function contact()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('contact');
			$this->load->view('include/footer');
	

		 

		 

	}
	
	
	
}
