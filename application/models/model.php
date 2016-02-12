<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_Model {

    public function checkAdmin()
    {
        $sql = "SELECT * FROM user_ms WHERE username=? AND pass=?";
        $data = array(
                $this->input->post('username'),
                $this->input->post('pass')
                );
        $query = $this->db->query($sql, $data);
        if($query->num_rows() > 0) return "true";
        else return "false";
    }
    
    
    public function getwilayah()
    {
        $wilayah = $this->input->post('wilayah');
        $dari=$this->input->post('dari');
        $ke=$this->input->post('ke');
        
        $dateawal = str_replace("/","-",$dari);
		//$dari = str_replace(" ","%20",$dateawal);
		$dateakhir = str_replace("/","-",$ke);
		//$akhir = str_replace(" ","%20",$dateakhir);
        
        $sql = "SELECT * FROM tabel_klimatologi WHERE WILAYAH ='$wilayah' AND 
        (WAKTU between '$dateawal' AND '$dateakhir') LIMIT 0,10 ";
        $query = $this->db->query($sql);
        return $query->result();
    }
    
      public function tambahadm()
    {
        $sql = "INSERT INTO user_ms (username,pass,nama,email,hp,jk,alamat)
                VALUES (?,?,?,?,?,?,?)";
        $data = array(
                $this->input->post('username'),
                $this->input->post('password'),
                $this->input->post('nama'),
                $this->input->post('email'),
                $this->input->post('hp'),
                $this->input->post('jk'),
                $this->input->post('alamat')
                );
        $query = $this->db->query($sql, $data);
    }
}