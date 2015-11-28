<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

 class Admin extends CI_Controller
 {
 function __construct()
 {
 parent::__construct();
 $this->load->library('access');
 }

 function index()
 {

 $this->access->logout();
 $this->login();
 }

 function login()
 {
 $this->load->library('form_validation');
 $this->load->helper('form');

 $this->form_validation->set_rules('username', 'Username','trim|required|strip_tags');
 $this->form_validation->set_rules('password', 'Password','trim|required');
 $this->form_validation->set_rules('token', 'token','callback_check_login');
 //$this->output->enable_profiler(1);
 if ($this->form_validation->run() == FALSE)
 {
    $this->load->view('admin/content/login');              //ke folder member/ file login di views
    //redirect('jancuk');           //redirect untuk mengakases controller/ you uderstand that
 }
 else
 {
    //echo "Jancuukk";
    redirect('products');
 }
 }

 function logout()
 {
 $this->access->logout();
 redirect('admin/login');   //rederect ke class controller member function login
 }

 function check_login()  //login_check
 {

 $username = $this->input->post('username',TRUE);
 $password = $this->input->post('password',TRUE);

 $login = $this->access->login($username, $password);
 if($login){
    return TRUE;
 }else
 {
 $this->form_validation->set_message('check_login','Username atau password anda salah.');
 return FALSE;
 }
 }
 }