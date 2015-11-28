<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 class Admin_model extends CI_Model
 {

 public $table = 'admin';
 public $primary_key = 'admin_id';

 function __construct()
 {
 parent::__construct();
 }

 function get_login_info($username)
 {
 $this->db->where('admin_username', $username);
 $this->db->limit(1);
 $query = $this->db->get($this->table);
 return ($query->num_rows() > 0) ? $query->row() : FALSE;  //tepat
 }

 }