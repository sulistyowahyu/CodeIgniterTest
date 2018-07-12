<?php

class Pelanggan extends CI_Controller{

    
    public function __construct(){
        parent::__construct();


        if(!$this->session->userdata('isLogin')){
            redirect('login');
        }

        $this->load->model('PelangganModel');
    }    
    
    public function index(){

        $data['menu']="pelanggan";
        $data['halaman']="pelanggan";
        $data['pelanggan']= $this->PelangganModel->getAll();
        
        $this->load->view('template', $data);

    }


    public function hapus($id=null){
		if($id!=null){
			if($this->PelangganModel->remove($id)){
				$this->showNotif('success','Data berhasil dihapus');
				redirect('pelanggan');
			}
		}
		$this->showNotif('danger','Data gagal dihapus');
		redirect('pelanggan');
	}

	private function showNotif($type, $pesan){
		$dataFlash['notif']=true;
		$dataFlash['type']=$type;
		$dataFlash['pesan']=$pesan;
		$this->session->set_flashdata($dataFlash);
	}

		public function tambah(){
		$data['menu'] = "pelanggan";
		$data['halaman'] = "from-pelanggan";
		$this->load->view('template',$data);
	} 

	public function ubah($id=null){
		if ($id!=null) {
			$data['menu'] = "pelanggan";
			$data['halaman'] = "from-pelanggan";
			$data['value'] = $this->PelangganModel->getOne($id);
			$this->load->view('template',$data);
		}
		else{
			redirect('pelanggan');
		}
	}

	public function simpan($id=null){
        
		$values['nama_pelanggan']     =$this->input->post('nama_pelanggan');
		$values['nik']     			  =$this->input->post('nik');
		$values['alamat']             =$this->input->post('alamat');
		$values['jenis_kelamin']      =$this->input->post('jenis_kelamin');
        $values['no_hp']      		  =$this->input->post('no_hp');

		if ($id==null) {
			if($this->PelangganModel->save($values)){
				$this->showNotif('success','Data pelanggan baru berhasil disimpan');
				redirect('pelanggan');
			}
			else{
				$this->showNotif('danger','Data pelanggan gagal disimpan');
				redirect('pelanggan/tambah');
			}
		}
		else{
			if ($this->PelangganModel->change($id, $values)) {
				$this->showNotif('success','Perubahan berhasil disimpan');
				redirect('pelanggan');
			}
			else{
				$this->showNotif('danger','Perubahan gagal disimpan');
				redirect('pelanggan/ubah/'.$id);
			}
		}
    }

}