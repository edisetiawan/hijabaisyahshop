<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Inbox extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('inbox_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
       
        $content= 'content/inbox/inbox_list';    
        $inbox = $this->inbox_model->get_all();  

        $data = array(
            'content'=>$content,
            'inbox_data' => $inbox
            
        );
        $this->load->view('admin/app', $data); 
        /*
        $keyword = '';
        $this->load->library('pagination');

        $config['base_url'] = base_url() . 'inbox/index/';
        $config['total_rows'] = $this->inbox_model->total_rows();
        $config['per_page'] = 10;
        $config['uri_segment'] = 3;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'inbox.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(3, 0);
        $inbox = $this->inbox_model->index_limit($config['per_page'], $start);

        $data = array(
            'inbox_data' => $inbox,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );

        $this->load->view('inbox_list', $data);
        */
    }
    
    public function search() 
    {
        $keyword = $this->uri->segment(3, $this->input->post('keyword', TRUE));
        $this->load->library('pagination');
        
        if ($this->uri->segment(2)=='search') {
            $config['base_url'] = base_url() . 'inbox/search/' . $keyword;
        } else {
            $config['base_url'] = base_url() . 'inbox/index/';
        }

        $config['total_rows'] = $this->inbox_model->search_total_rows($keyword);
        $config['per_page'] = 10;
        $config['uri_segment'] = 4;
        $config['suffix'] = '.html';
        $config['first_url'] = base_url() . 'inbox/search/'.$keyword.'.html';
        $this->pagination->initialize($config);

        $start = $this->uri->segment(4, 0);
        $inbox = $this->inbox_model->search_index_limit($config['per_page'], $start, $keyword);

        $data = array(
            'inbox_data' => $inbox,
            'keyword' => $keyword,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('inbox_list', $data);
    }

    public function read($id) 
    {
        $row = $this->inbox_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'name' => $row->name,
		'email' => $row->email,
		'message' => $row->message,
	    );
            $this->load->view('inbox_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('inbox'));
        }
    }
    
    public function create() 
    {
        /*
         $content = 'content/contact';
        $data = array(
            'content'=>$content,
            'contact_data' => $contact
            
        ); */
	    $content = 'content/contact'; 
		
        $data = array(
           // 'button' => 'Create',
         //   'action' => site_url('inbox/create_action'),
	  //  'id' => set_value('id'),
        'content'=>$content,
	    'name' => set_value('name'),
	    'email' => set_value('email'),
	    'message' => set_value('message'),
	);
        $this->load->view('home/app',$data);
        //redirect('home/contact');
        //$this->load->view('inbox_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'message' => $this->input->post('message',TRUE),
	    );

            $this->inbox_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('home/contact'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->inbox_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('inbox/update_action'),
		'id' => set_value('id', $row->id),
		'name' => set_value('name', $row->name),
		'email' => set_value('email', $row->email),
		'message' => set_value('message', $row->message),
	    );
            $this->load->view('inbox_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('inbox'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'email' => $this->input->post('email',TRUE),
		'message' => $this->input->post('message',TRUE),
	    );

            $this->inbox_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('inbox'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->inbox_model->get_by_id($id);

        if ($row) {
            $this->inbox_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('inbox'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('inbox'));
        }
    }

    function _rules() 
    {
	$this->form_validation->set_rules('name', ' ', 'trim|required');
	$this->form_validation->set_rules('email', ' ', 'trim|required');
	$this->form_validation->set_rules('message', ' ', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file Inbox.php */
/* Location: ./application/controllers/Inbox.php */