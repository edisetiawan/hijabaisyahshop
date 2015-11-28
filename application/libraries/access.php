<?php
class Access
 {
 public $user;

/**
 * Constructor
 */
 function __construct()
 {
 $this->CI =& get_instance();
 $auth = $this->CI->config->item('auth');
 $this->CI->load->helper('cookie');
 $this->CI->load->model('admin_model');    //menggunakan model
 $this->admin_model =& $this->CI->admin_model;
  }

 /**
   * Cek login user
   */

 function login($username, $password) {

        $result = $this->admin_model->get_login_info($username);

        if ($result) // Result Found
        {
            $password = md5($password);
            if ($password === $result->admin_password){
 
 // Start session
             $this->CI->session->set_userdata('id', $result->admin_id);   //menentukan session dengan set_userdata
             return TRUE;
         }
         }  
         return FALSE; 
         }


 /**
  * cek apakah udah login
  */
        function is_login (){ 
        return (($this->CI->session->userdata('id')) ? TRUE : FALSE);     //cek session
        }

 /**
  * Logout
  *
  */
        function logout ()
        {
            $this->CI->session->unset_userdata('id');                  //unset / penghancuran session
        }

 }