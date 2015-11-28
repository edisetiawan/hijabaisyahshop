<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Products extends Admin_Controller                   //menggunakan turunan class admin
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('products_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $content= 'content/product/products_list';    
        $products = $this->products_model->get_all();  

        $data = array(
            'content'=>$content,
            'products_data' => $products
            
        );
        $this->load->view('admin/app', $data);    
    }

    public function read($id) 
    {
        $row = $this->products_model->get_by_id($id);
        if ($row) {
            $data = array(
		'serial' => $row->serial,
		'name' => $row->name,
		'description' => $row->description,
		'price' => $row->price,
		'picture' => $row->picture,
	    );
            $this->load->view('products_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('products'));
        }
    }
    
    public function create() 
    {
        $content= 'content/product/products_form';    
        $data = array(
        'content'=>$content,
            'button' => 'Create',
            'action' => site_url('products/create_action'),
	    'serial' => set_value('serial'),
	    'name' => set_value('name'),
	    'description' => set_value('description'),
	    'price' => set_value('price'),
	    'picture' => set_value('picture'),
	);
        $this->load->view('admin/app', $data);
    }
    
    public function create_action() 
    {
          //$this->_rules();
/*
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {                */
         // config upload
            $config['upload_path'] = 'assets/home/images/';
            $config['allowed_types'] = 'jpg|png|gif|bmp';
            $config['max_size'] = '100999';
            $this->load->library('upload', $config);
 
           if ( ! $this->upload->do_upload('picture')) {
                // jika validasi file gagal, kirim parameter error ke index
                $error = array('error' => $this->upload->display_errors());
                $this->index($error);
            } else { 
                // jika berhasil upload ambil data dan masukkan ke database
                $upload_data = $this->upload->data();
                 //echo print_r($upload_data);
                $gambar=$this->upload->file_name;  
           //echo $gambar; exit;
        
        $data = array(
		'name' => $this->input->post('name',TRUE),
		'description' => $this->input->post('description',TRUE),
		'price' => $this->input->post('price',TRUE),
		'picture' => 'images/'.$gambar,
	    );

            $this->products_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('products'));
      }   
    }
    
    public function update($id) 
    {
        $row = $this->products_model->get_by_id($id);
          
        if ($row) {
            $content= 'content/product/products_form';  
            $data = array(
            'content'=> $content,
                'button' => 'Update',
                'action' => site_url('products/update_action'),
		'serial' => set_value('serial', $row->serial),
		'name' => set_value('name', $row->name),
		'description' => set_value('description', $row->description),
		'price' => set_value('price', $row->price),
		'picture' => set_value('picture', $row->picture),
	    );
            $this->load->view('admin/app', $data);
     
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('products'));
        } 
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('serial', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'description' => $this->input->post('description',TRUE),
		'price' => $this->input->post('price',TRUE),
		'picture' => $this->input->post('picture',TRUE),
	    );

            $this->products_model->update($this->input->post('serial', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('products'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->products_model->get_by_id($id);

        if ($row) {
            $this->products_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('products'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('products'));
        }
    }

    function _rules() 
    {
	$this->form_validation->set_rules('name', ' ', 'trim|required');
	$this->form_validation->set_rules('description', ' ', 'trim|required');
	$this->form_validation->set_rules('price', ' ', 'trim|required');
	$this->form_validation->set_rules('picture', ' ', 'trim|required');

	$this->form_validation->set_rules('serial', 'serial', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Products.php */
/* Location: ./application/controllers/Products.php */