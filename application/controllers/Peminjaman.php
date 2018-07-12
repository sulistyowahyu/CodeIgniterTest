<?php

class Peminjaman extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if(!$this->session->userdata('isLogin')){
			redirect('login');
		}
		$this->load->model('PeminjamanModel');
	}

	/*public function index(){
		$this->load->model('PeminjamanModel');

		print_r($this->PeminjamanModel->getAll());
		$data['menu'] = "peminjaman";
		$data['halaman'] = "peminjaman";
		$data['peminjaman'] = $this->PeminjamanModel->getAll();
		$this->load->view('template',$data);
	}*/

	public function index(){
		$data['menu'] = "peminjaman";
		$data['halaman'] = "peminjaman";
		$data['peminjaman'] = $this->PeminjamanModel->getAll();
		$this->load->view('template',$data);
	}

	public function hapus($nama_pelanggan=null){
		if($nama_pelanggan!=null){
			if($this->PeminjamanModel->remove($id)){
				$this->showNotif('success','Data berhasil dihapus');
				redirect('peminjaman');
			}
		}
		$this->showNotif('danger','Data gagal dihapus');
		redirect('peminjaman');
	}

	private function showNotif($type, $pesan){
		$dataFlash['notif']=true;
		$dataFlash['type']=$type;
		$dataFlash['pesan']=$pesan;
		$this->session->set_flashdata($dataFlash);
	}

	public function tambah(){
		$data['menu'] = "peminjaman";
		$data['halaman'] = "form-peminjaman";
		$this->load->view('template',$data);
	}

	public function ubah($nama_pelanggan=null){
		if($nama_pelanggan!=null){
			$data['menu'] = "peminjaman";
			$data['halaman'] = "form-peminjaman";
			$data['value'] = $this->PeminjamanModel->getOne($nama_pelanggan);
			$this->load->view('template',$data);
		}
		else{
			redirect('peminjaman');
		}
	}

	public function simpan(){
		$values['tgl_pinjam'] 	= $this->input->post('tgl_pinjam');
		$values['id_mobil'] 		= $this->input->post('id_mobil');
		$values['id_pelanggan'] 	= $this->input->post('id_pelanggan');
		$values['biaya'] 		= $this->input->post('biaya');
		$values['lama_sewa'] 	= $this->input->post('lama_sewa');

 		if($nama_pelanggan==null){
			if($this->PeminjamanModel->save($values)){
				$this->showNotif('success','Data Berhasil Disimpan');
				redirect('peminjaman');
			}
	
		else{
				$this->showNotif('danger','Data Gagal Disimpan');
				redirect('peminjaman/tambah');
		}
	}
		else{
			if($this->PeminjamanModel->change($nama_pelanggan, $values)){
				$this->showNotif('success','Data Berhasil Diubah');
				redirect('peminjaman');
			}
			else{
				$this->showNotif('danger','Data Gagal Diubah');
				redirect('peminjaman/ubah'.$nama_pelanggan);
		}
		}
	}
}