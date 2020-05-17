<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$this->load->view('home');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function harga()
	{
		$this->load->view('harga');
	}

	public function blog()
	{
		$this->load->view('blog');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function blog_single()
	{
		$this->load->view('blog-single');
	}
}
