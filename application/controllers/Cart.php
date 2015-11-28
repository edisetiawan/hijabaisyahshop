<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Cart_model');
	}

	public function index()
	{	
		/*
        $content= 'content/cart';    
        $products = $this->products_model->get_all();  

        $data = array(
            'content'=>$content,
            'products_data' => $products
            
        );
        $this->load->view('home/app-home', $data);     
        */
        $this->data['title'] = 'Shopping Carts'; 
        $this->data['content'] = 'content/cart';
		if (!$this->cart->contents()){
			$this->data['message'] = '<p>Your cart is empty!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');
		}

		$this->load->view('home/app', $this->data);
	   
    }

	public function add()
	{
		$this->load->model('Cart_model');
	
		$insert_room = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
            'picture' => $this->input->post('picture'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

		$this->cart->insert($insert_room);
			
		redirect('cart');                  //masuk lagi ke dalam index
	}
	
	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		
		redirect('cart');
	}	

	function update_cart(){                              
 		foreach($_POST['cart'] as $id => $cart)
		{			
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			
			$this->Cart_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
		}
		
		redirect('cart');                       //masuk lagi ke dalam index
	}	
}