<?php 

	class Mahasiswa_model extends CI_model{
		public function getAllMahasiswa(){
			return $query = $this->db->get('mhs')->result_array();
		}

		public function getAllJurusan(){
			// $query = $this->db->query('SELECT jur FROM mhs');
			return $query = $this->db->get('jurusan')->result_array();
		}



		public function tambahDataMahasiswa(){
			$data = [
				"nim" => $this->input->post('nim',true),
				"nama" => $this->input->post('nama',true),
				"jur" => $this->input->post('jur',true)
			];

			$this->db->insert('mhs', $data);
		}

		public function hapusDataMahasiswa($nim){
			// CARA PERTAMA
			// $this->db->where('nim', $nim);
			// $this->db->delete('mhs');

			//  CARA KEDUA
			$this->db->delete('mhs', ['nim' => $nim]);

		}

		public function getMahasiswaByNim($nim){
			return $this->db->get_where('mhs', ['nim' => $nim])->row_array();
		}

		public function ubahDataMahasiswa(){
			$data = [
				"nama" => $this->input->post('nama',true),
				"jur" => $this->input->post('jur',true)
			];
			$this->db->where('nim', $this->input->post('nim'));
			$this->db->update('mhs', $data);
		}

		public function cariDataMahasiswa(){
			$keyword = $this->input->post('keyword', true);
			$this->db->like('nama', $keyword);
			return $this->db->get('mhs')->result_array();
		}
	}
 ?>