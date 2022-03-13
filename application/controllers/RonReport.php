<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RonReport extends CI_Controller {

	public function __construct()	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('my_model');
		$this->load->model('data_model');
	} 
	
	public function index()
	{
		if($this->session->userdata('islogin') != 1)
		{
			redirect('login');
		}
		
		//kebutuhan data banner
		$data['total_berita'] = $this->data_model->total_berita();
		
		/*
		get first and last date of the month
		*/
		$query_date = date('Y-m-d');

		// First day of the month.
		$awal = date('Y-m-01', strtotime($query_date));

		// Last day of the month.
		$akhir = date('Y-m-t', strtotime($query_date));
		
		$data['total_berita_bulan'] = $this->data_model->total_berita_bulan($awal, $akhir);
		$data['total_hit'] = $this->data_model->total_hit();
		$data['total_hit_bulan'] = $this->data_model->total_hit_bulan($awal, $akhir);
		$data['artikel_hit'] = $this->data_model->artikel_hit();
		$data['artikel_hit_bulan'] = $this->data_model->artikel_hit_bulan($awal);
		
		$data['view'] = 'laporan/index';
		$this->load->view('laporan/theme', $data);
	}
	
	public function report_editor()
	{
		if($this->session->userdata('islogin') != 1)
		{
			redirect('login');
		}
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('pilihan', 'Pilihan', 'required');
		
		if($this->form_validation->run()==FALSE)
		{
			$data['view'] = 'laporan/laporan-editor';
			$this->load->view('laporan/theme', $data);
		}else{
			$tanggal = $this->input->post('tanggal');
			$pilihan = $this->input->post('pilihan');
			
			$tanggal = str_replace("/", "-", $tanggal);
			$tanggal = explode(" - ", $tanggal);
			
			//ubah posisi ke Y-m-d manual wkwk
			$tanggal_awal = explode("-",$tanggal[0]);
			$tanggal_awal_ = $tanggal_awal[2]."-".$tanggal_awal[0]."-".$tanggal_awal[1];
			
			$tanggal_akhir = explode("-",$tanggal[1]);
			$tanggal_akhir_ = $tanggal_akhir[2]."-".$tanggal_akhir[0]."-".$tanggal_akhir[1];
			
			//tanggal di laporan cetak
			$data['awal'] = tanggal($tanggal_awal_);
			$data['akhir'] = tanggal($tanggal_akhir_);
			
			if($pilihan == 2)
			{
				$data['list'] = $this->my_model->report($tanggal_awal_, $tanggal_akhir_);
			}
			$data['counter'] = $this->my_model->counter($tanggal_awal_, $tanggal_akhir_);
			$data['pilihan'] = $pilihan;
			
			$this->load->view('laporan/cetak', $data);
		}
	}
	
	public function report_wartawan()
	{
		if($this->session->userdata('islogin') != 1)
		{
			redirect('login');
		}
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
		$this->form_validation->set_rules('pilihan', 'Pilihan', 'required');
		
		if($this->form_validation->run()==FALSE)
		{
			$data['view'] = 'laporan/laporan-wartawan';
			$this->load->view('laporan/theme', $data);
		}else{
			$tanggal = $this->input->post('tanggal');
			$pilihan = $this->input->post('pilihan');
			
			$tanggal = str_replace("/", "-", $tanggal);
			$tanggal = explode(" - ", $tanggal);
			
			//ubah posisi ke Y-m-d
			$tanggal_awal = explode("-",$tanggal[0]);
			$tanggal_awal_ = $tanggal_awal[2]."-".$tanggal_awal[0]."-".$tanggal_awal[1];
			
			$tanggal_akhir = explode("-",$tanggal[1]);
			$tanggal_akhir_ = $tanggal_akhir[2]."-".$tanggal_akhir[0]."-".$tanggal_akhir[1];
			
			$data['awal'] = tanggal($tanggal_awal_);
			$data['akhir'] = tanggal($tanggal_akhir_);			
			
			if($pilihan == 2)
			{
				$data['list'] = $this->my_model->wartawan($tanggal_awal_, $tanggal_akhir_);
			}
			$data['counter'] = $this->my_model->counter_wartawan($tanggal_awal_, $tanggal_akhir_);
			$data['pilihan'] = $pilihan;
			
			$this->load->view('laporan/cetak_wartawan', $data);
		}
		
		//$this->load->view('laporan/theme');
	}
	
	public function login(){
		//print_r($_POST);
		//$this->load->helper('form');
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Kata Sandi', 'required');
		
		if($this->form_validation->run()==FALSE)
		{
			//$this->session->set_flashdata('gagal', 'lala');
			$this->load->view('laporan/login');
		}else{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			
			$login = $this->my_model->login($username);
			
			if(password_verify($password, $login['password'])){
				$sessdata = [
					'username' => $username,
					'islogin' => 1
				];
				
				$this->session->set_userdata($sessdata);
				
				redirect();
			}else{
				$this->session->set_flashdata('gagal', 'Gagal login, cek kembali username dan password');
				redirect('login');
			}			
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('https://riauonline.co.id', 'refresh');
	}

	public function poll($id = FALSE)
	{
		if($id == FALSE)
		{
			$data['view'] = 'laporan/polling';
			$data['polling'] = $this->my_model->get_polling();
		}else{
			$data['view'] = 'laporan/polling_detail';
			$data['opsi'] = $this->my_model->get_options($id);
		}

		$this->load->view('laporan/theme', $data);
	}

	public function e_paper()
	{
		if($this->session->userdata('username') == 'rizalrizwan')
		{
			$this->load->library('form_validation');

			$this->form_validation->set_rules('link', 'Link', 'required|max_length[255]',
			[
				'max_length' => '
				<div class="alert bg-red alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					Link maksimal 100 karakter
				</div>'
			]
			);

			if ($this->form_validation->run() == FALSE)
			{
				$data['view'] = 'laporan/e-paper';
				
				$this->load->view('laporan/theme', $data);
			}
			else
			{
				//konfigurasi upload
				//nama asli file
				$fileName = $_FILES['foto']['name'];
				//ganti nama file
				$namaFile = $fileName;

				$config['upload_path']          = './../ads/'; //folder simpan file setelah upload
				$config['allowed_types']        = 'jpg|jpeg'; //file yang boleh diupload
				$config['max_size']             = 10240; //Maks 10MB
				$config['file_name']            = $namaFile;

				
				$this->load->library('upload', $config);

				if($this->upload->do_upload('foto'))
				{
					$data_ = [
						'nama_file' => $namaFile,
						'link' => $this->input->post('link'),
						'waktu_upload' => date('Y-m-d H:i:s')
					];

					if($this->data_model->insert_ePaper($data_))
					{
						$this->session->set_flashdata("flash", "input");
						redirect('');
					}else{
						$this->session->set_flashdata("flash", "gagal");
						redirect('e-paper');
					}
				}else{
					$errorMessage = $this->upload->display_errors();
					$this->session->set_flashdata('gagal', $errorMessage);
					redirect('e-paper');
				}
			}
		}else{
			exit('Hanya untuk Rizal');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */