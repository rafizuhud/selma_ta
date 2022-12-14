<?php 

class index extends CI_Controller{

	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pendaftaran');
    }

	public function index() {
		$data['title'] = 'Halaman Utama';

		$this->load->view('template/app_top', $data);
		$this->load->view('index/index');
		$this->load->view('template/app_bottom');

		// $this->render('home/index', $data);
	}

	public function grafikA(){
		$data['title'] = 'Grafik Prodi 1';

		$data['grafik'] = $this->M_pendaftaran->getJ1();
		$this->load->view('template/app_top', $data);
		$this->load->view('index/grafik_satu');
		$this->load->view('template/app_bottom');
	}

	public function grafikB(){
		$data['grafik'] = 'Grafik Prodi 2';

		$data['grafik'] = $this->M_pendaftaran->getJ2();
		$this->load->view('template/app_top', $data);
		$this->load->view('index/grafik_dua');
		$this->load->view('template/app_bottom');
	}

	public function grafikC(){
		$data['title'] = 'Grafik Prestasi';

		$data['grafik'] = $this->M_pendaftaran->getJ3();
		$this->load->view('template/app_top', $data);
		$this->load->view('index/grafik_tiga');
		$this->load->view('template/app_bottom');
	}

	public function grafikD(){
		$data['title'] = 'Grafik Bank';

		$data['grafik'] = $this->M_pendaftaran->getJ4();
		$this->load->view('template/app_top', $data);
		$this->load->view('index/grafik_empat');
		$this->load->view('template/app_bottom');
	}

	public function grafikE(){
		$data['title'] = 'Grafik Pendapatan Per-Bank';

		$data['grafik'] = $this->M_pendaftaran->getJ5();
		$this->load->view('template/app_top', $data);
		$this->load->view('index/grafik_lima');
		$this->load->view('template/app_bottom');
	}

	public function grafikF(){
		$data['title'] = 'Grafik Pendaftar Per-Bank';

		$data['grafik'] = $this->M_pendaftaran->getJ6();
		$this->load->view('template/app_top', $data);
		$this->load->view('index/grafik_enam');
		$this->load->view('template/app_bottom');
	}
	
}



 ?>