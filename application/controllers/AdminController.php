<?php

class AdminController extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/admin/head');
        $this->load->view('templates/admin/navbar');
        $this->load->view('templates/admin/sidebar');
        $this->load->view('admin/index');
        $this->load->view('templates/admin/footer');
        $this->load->view('templates/admin/js');
		
	}
}
