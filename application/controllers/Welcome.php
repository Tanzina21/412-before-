<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

		public function __construct()
    {
        parent::__construct();
        

        // if($this->session->userdata('id')){ }else{

        // 	redirect('login');
        // }
    }



	public function index()
	{

 
			
			$this->load->view('include/header');
			$this->load->view('home');
			$this->load->view('include/footer');
	

		 

		 

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
	public function signup()
	{
		
			$this->load->view('signup');

	}
	public function fitness()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('fitness');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function pregnancy()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('pregnancy');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function skincare()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('skincare');
			$this->load->view('include/footer');
	

		 

		 

	}public function depression()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('depression');
			$this->load->view('include/footer');
	

		 

		 

	}
	public function specialist()
	{

 
			
			$this->load->view('include/header2');
			$this->load->view('specialist');
			$this->load->view('include/footer');
	

		 

		 

	}
	
	
	
}
