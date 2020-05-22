<?php

class M_auth extends CI_Model
{
    public function get()
    {
        return $this->db->get('user');
    }

    public function login($post)
    {
        $this->db->where('email',$post['email']);
        $this->db->where('password',$post['password']);
        return $this->db->get('user');
    }

    public function daftar($post)
    {
        $data = array(
            'nama_customer' => $post['nama'],
            'email' => $post['email'],
            'password' => $post['password'],
            'alamat' => $post['alamat'],
            'created' => date('ymd')
        );

        $this->db->insert('user',$data);
    }
}