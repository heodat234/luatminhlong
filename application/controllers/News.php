<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		
		$t_data['news'] 		= 'active';
		$this->data['toolbar'] 	= $this->load->view('portal/home/v_toolbar',$t_data,true);
		$this->data['footer'] 	= $this->load->view('portal/home/v_footer',null,true);
	}
	public function index()
	{
        $this->data['content'] = $this->load->view('portal/page/v_news',null,true);
		$this->load->view('portal/home/master',$this->data);
	}
	
}
