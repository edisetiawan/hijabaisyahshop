<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_Controller extends CI_Controller {

 function __construct()
        {
        parent::__construct();
        $this->load->library('access');
        if (!$this->access->is_login())
        {
            redirect('admin/login');
        }
            //bisa dtambahi fungsionalitas lain

        }
        function is_login()
        {
            return $this->access->is_login();
        }

        }

        class MY_Controller extends CI_Controller {
        function __construct()
        {
        parent::__construct();
        }
}