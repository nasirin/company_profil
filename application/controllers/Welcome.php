<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('M_auth');
	}

	public function index()
	{
		$data = $this->M_auth->get()->result(); 
		$this->template->load('dashboard','menu/home',$data);
	}

	public function about()
	{
		$this->template->load('dashboard','menu/about');
	}

	public function harga()
	{
		$this->template->load('dashboard','menu/harga');
	}

	public function blog()
	{
		$this->template->load('dashboard','menu/blog');
	}

	public function contact()
	{
		$this->template->load('dashboard','menu/contact');
	}

	public function blog_single()
	{
		$this->template->load('dashboard','menu/blog-single');
	}
}
