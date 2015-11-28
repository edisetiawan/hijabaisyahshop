<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->model('contact_model');
    }
	public function index()
	{
		
        $content= 'content/dashboard';    
        $products = $this->products_model->get_all();  

        $data = array(
            'content'=>$content,
            'products_data' => $products
            
        );
        $this->load->view('home/app-home', $data);    
	}

	public function products()
	{
        $content= 'content/products';    
        $products = $this->products_model->get_all();  

        $data = array(
            'content'=>$content,
            'products_data' => $products
            
        );
        $this->load->view('home/app', $data);    
	}
    
   	public function about()
	{
		$data['content'] = 'content/about';

		$this->load->view('home/app',$data);
	}
    
   	public function contact()
	{      
	    $contact = $this->contact_model->get_all();  
        $content = 'content/contact';
        $data = array(
            'content'=>$content,
            'contact_data' => $contact
            
        );
	
		$this->load->view('home/app',$data);
	}
    
    
    public function detail($id) 
    {
        $content= 'content/detail';   
        $row = $this->products_model->get_by_id($id);
        if ($row) {
            $data = array(
        'content'=>$content,
		'serial' => $row->serial,
		'name' => $row->name,
		'description' => $row->description,
		'price' => $row->price,
		'picture' => $row->picture,
	    );
            $this->load->view('home/app', $data);    
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('home'));
        }
    }
    
  
}
