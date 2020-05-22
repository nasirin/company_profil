<?php

class Auth extends CI_Controller{
    
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('M_auth');   
    }

    public function login()
    {
        $post = $this->input->post(null, true);
        $query = $this->M_auth->login($post);

        if ($query->num_rows() > 0) {
            $row = $query->row();
            $data = array(
                'nama' => $row->nama_customer
            );

            $this->session->set_userdata($data);
            redirect('welcome');
        }else {
            redirect('dashboard');
        }
    }

    public function daftar()
    {
        $post = $this->input->post(null, true);
        $this->M_auth->daftar($post);

        if ($this->db->affected_rows()>0) {
            redirect('welcome');
        }else{
            redirect('welcome');
        }
    }

    public function logout()
    {
        $data = array('nama');
        $this->session->unset_userdata($data);
        redirect(base_url());
    }
}