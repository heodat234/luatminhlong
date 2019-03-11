<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Handling extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');

		$t_data['index'] 		= 'active';
		$this->data['toolbar'] 	= $this->load->view('portal/home/v_toolbar',$t_data,true);
		$this->data['footer'] 	= $this->load->view('portal/home/v_footer',null,true);
	}
	public function index()
	{
        $data_1['slide'] 		= $this->load->view('portal/page/v_slide',null,true);
		$data_1['khoinghiep'] 	= $this->load->view('portal/page/v_khoinghiep',null,true);
		$data_1['contact'] 		= $this->load->view('portal/page/v_contact',null,true);

		$this->data['content'] 	= $this->load->view('portal/page/index',$data_1,true);
		$this->load->view('portal/home/master',$this->data);
	}
	
}
