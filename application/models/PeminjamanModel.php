<?php

class PeminjamanModel extends CI_Model {

	public function __construct(){
		parent::__construct();
	}

	public function getAll(){

			$this->db->select("tb_peminjaman.*,tb_mobil.merk_mobil, tb_mobil.no_polisi, tb_pelanggan.nama_pelanggan,
			tb_pelanggan.no_hp");	
			
			$this->db->from("tb_peminjaman");
			
			$this->db->join("tb_mobil", "tb_peminjaman.id_mobil = tb_mobil.id_mobil");
			
			$this->db->join("tb_pelanggan", "tb_peminjaman.id_pelanggan = tb_pelanggan.id_pelanggan");
			
			$this->db->where("tb_peminjaman.tgl_kembali=DATE('0000-00-00')");

			return $this->db->get()->result();
	}

	public function getAllKembali(){
		//return $this->db->get('tb_peminjaman')->result();
		$this->db->select("tb_peminjaman.*,tb_mobil.merk_mobil, tb_mobil.no_polisi,tb_customer.nama_customer,tb_customer.nohp");

		$this->db->from("tb_peminjaman");

		$this->db->join("tb_mobil", "tb_peminjaman.mobil = tb_mobil.id_mobil");

		$this->db->join("tb_customer", "tb_peminjaman.pelanggan = tb_customer.id_customer");

		$this->db->where("tb_peminjaman.tgl_kembali!=DATE('0000-00-00')");

		return $this->db->get()->result();

	}


//mengambil 1 data
	public function getOne($id){
		$this->db->where('id_peminjaman',$id);
		$hasil = $this->db->get('tb_peminjaman');
		if($hasil->num_rows()>0){
			return $hasil->row();
		}
		return null;
	}

	public function save($values){
		return $this->db->insert('tb_peminjaman',$values);
	}


	public function change($id, $values){
		$this->db->where('id_peminjaman',$id);
		return $this->db->update('tb_peminjaman',$values);
	}

	public function remove($id){
		$this->db->where('id_peminjaman',$id);
		return $this->db->delete('tb_peminjaman');
	}

	
}