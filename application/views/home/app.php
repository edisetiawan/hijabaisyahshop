<?php defined('BASEPATH') OR exit('Forbbiden');

$this->load->view('home/base/header');  //public folder view

//$this->load->view('home/base/menu');

$this->load->view('home/'.$content);

$this->load->view('home/base/footer');