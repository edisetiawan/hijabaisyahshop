<?php defined('BASEPATH') OR exit('Forbbiden');

$this->load->view('admin/base/header');

$this->load->view('admin/base/menu');

$this->load->view('admin/'.$content);

$this->load->view('admin/base/footer');