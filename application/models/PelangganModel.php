<?php

class PelangganModel extends CI_Model{

    public function __construct(){
        parent::__construct();

    }

    public function getAll(){

        return $this->db->get('tb_pelanggan')->result();

    }

    public function getOne($id){
        $this->db->where('id_pelanggan', $id);
        $hasil = $this->db->get('tb_pelanggan');
        if($hasil->num_rows()>0){
            return $hasil->row();
        }
        return null;
    }


    public function save($values){
        return $this->db->insert('tb_pelanggan', $values);
    }

    public function change($id, $values){
        $this->db->where('id_pelanggan', $id);
        return $this->db->update('tb_pelanggan', $values);
        
    }

    public function remove($id){
        $this->db->where('id_pelanggan', $id);
        return $this->db->delete('tb_pelanggan');
        
    }

}