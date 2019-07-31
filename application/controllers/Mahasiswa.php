<?php 

	class Mahasiswa extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('Mahasiswa_model');
			$this->load->library('form_validation');

		}

		public function index(){
			$data['judul'] = 'Daftar Mahasiswa';
			$data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
			if($this->input->post('keyword')){
				$data['mahasiswa'] = $this->Mahasiswa_model->cariDataMahasiswa();
			}
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/index', $data);
			$this->load->view('templates/footer');
		}

		public function tambah(){

			$data['judul'] = 'Form tambah mahasiswa';
			$data['jurusan'] = $this->Mahasiswa_model->getAllJurusan();
			$this->form_validation->set_rules('nim','NIM','required|numeric');
			$this->form_validation->set_rules('nama','Nama','required');
			
			if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/tambah');
			$this->load->view('templates/footer');
			}else{
				$this->Mahasiswa_model->tambahDataMahasiswa();
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('mahasiswa');
			}
		}

		public function hapus($nim){
			$this->Mahasiswa_model->hapusDataMahasiswa($nim);
			$this->session->set_flashdata('flash', 'Dihapus');
			redirect('mahasiswa');
		}

		public function detail($nim){
			$data['judul'] = 'Detail Data Mahasiswa';
			$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByNim($nim);
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/detail', $data);
			$this->load->view('templates/footer');
		}

		public function ubah($nim){

			$data['judul'] = 'Form ubah mahasiswa';
			$data['mahasiswa'] = $this->Mahasiswa_model->getMahasiswaByNim($nim);
			$data['jurusan'] = $this->Mahasiswa_model->getAllJurusan();
			$this->form_validation->set_rules('nim','NIM','required|numeric');
			$this->form_validation->set_rules('nama','Nama','required');
			
			if($this->form_validation->run() == FALSE){
			$this->load->view('templates/header', $data);
			$this->load->view('mahasiswa/ubah', $data);
			$this->load->view('templates/footer');
			}else{
				$this->Mahasiswa_model->ubahDataMahasiswa();
				$this->session->set_flashdata('flash', 'Diubah');
				redirect('mahasiswa');
			}
		}
	}
 ?>