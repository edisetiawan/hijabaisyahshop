<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends Admin_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('orders_model');
        $this->load->library('form_validation');
    }

    public function index()
    {   
        $content= 'content/orders/orders_list';    
        $orders = $this->orders_model->get_all();  

        $data = array(
            'content'=>$content,
            'orders_data' => $orders
            
        );
        $this->load->view('admin/app', $data);   
      
    }
    

    
    public function read($id) 
    {   
        $content= 'content/orders/orders_read'; 
        $row = $this->orders_model->get_by_id($id);
        if ($row) {
            $data = array(
        'content'=>$content,
		'serial' => $row->serial,
		'date' => $row->date,
		'customerid' => $row->customerid,
	    );
             $this->load->view('admin/app', $data);   
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('orders'));
        }
    }
    /*
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('serial', TRUE));
        } else {
            $data = array(
		'date' => $this->input->post('date',TRUE),
		'customerid' => $this->input->post('customerid',TRUE),
	    );

            $this->orders_model->update($this->input->post('serial', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('orders'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->orders_model->get_by_id($id);

        if ($row) {
            $this->orders_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('orders'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('orders'));
        }
    }
    */

  
}

/* End of file Orders.php */
/* Location: ./application/controllers/Orders.php */