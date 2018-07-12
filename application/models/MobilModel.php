<?php

class MobilModel extends CI_Model{

    public function __construct(){
        parent::__construct();

    }

    public function getAll(){

        return $this->db->get('tb_mobil')->result();

    }

    public function getOne($id){
        $this->db->where('id_mobil', $id);
        $hasil = $this->db->get('tb_mobil');
        if($hasil->num_rows()>0){
            return $hasil->row();
        }
        return null;
    }


    public function save($values){
        return $this->db->insert('tb_mobil', $values);
    }

    public function change($id, $values){
        $this->db->where('id_mobil', $id);
        return $this->db->update('tb_mobil', $values);
        
    }

    public function remove($id){
        $this->db->where('id_mobil', $id);
        return $this->db->delete('tb_mobil');
        
    }

  

}