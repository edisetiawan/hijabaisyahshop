<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Contact extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $content= 'content/contact/contact_list';    
        $contact = $this->contact_model->get_all();  

        $data = array(
            'content'=>$content,
            'contact_data' => $contact
            
        );
        $this->load->view('admin/app', $data); 
       /*
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'contact/index/';
        $config['total_rows'] = $this->contact_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'contact.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $contact = $this->contact_model->index_limit($config['per_page'], $start);

        $data = array(
            'contact_data' => $contact,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('contact_list', $data); */
    }
      
    public function update($id) 
    {   
        $content= 'content/contact/contact_form';    
        $row = $this->contact_model->get_by_id($id);

        if ($row) {
            $data = array(
                'content'=>$content,
                'button' => 'Update',
                'action' => site_url('contact/update_action'),
		'id' => set_value('id', $row->id),
		'email' => set_value('email', $row->email),
		'phone' => set_value('phone', $row->phone),
		'address' => set_value('address', $row->address),
	    );
             $this->load->view('admin/app', $data); 
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('contact'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'email' => $this->input->post('email',TRUE),
		'phone' => $this->input->post('phone',TRUE),
		'address' => $this->input->post('address',TRUE),
	    );

            $this->contact_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('contact'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->contact_model->get_by_id($id);

        if ($row) {
            $this->contact_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('contact'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('contact'));
        }
    }

    function _rules() 
    {
	$this->form_validation->set_rules('email', ' ', 'trim|required');
	$this->form_validation->set_rules('phone', ' ', 'trim|required');
	$this->form_validation->set_rules('address', ' ', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Contact.php */
/* Location: ./application/controllers/Contact.php */