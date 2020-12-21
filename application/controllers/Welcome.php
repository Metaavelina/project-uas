<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
function __construct(){
	parent::__construct();
}

	public function index()
	{
		$this->load->view('login');
	}

	public function login(){
		$username = $this->input->post('admin_username');
		$password = md5($this->input->post('admin_password'));
		$this->form_validation->set_rules('admin_username','Username','trim|required');
		$this->form_validation->set_rules('admin_password','Password','trim|required');

		if($this->form_validation->run() != false){
			$admin = array('username'=>$username, 'password'=>$password);
			$anggota = array('email'=>$username, 'password'=>$password);

			$data = $this->M_perpus->edit_data($admin,'admin');
			$d = $this->M_perpus->edit_data($admin,'admin')->row();
			$cek = $data->num_rows();

			if($cek > 0)
			{
				$session = array(
					'id' => $d->id_admin,
					'nama' => $d->nama_admin,
					'username' => $d->username,
					'status' =>'login'
				);
				$this->session->set_userdata($session);
				redirect(base_url().'admin');
			}
			else
			{
				$dt = $this->M_perpus->edit_data($anggota, 'anggota');
				$hasil = $this->M_perpus->edit_data($anggota, 'anggota')->row();
				$proses = $dt->num_rows();

				if($proses > 0){
					$session = array(
						'id_anggota' => $hasil->id_anggota,
						'alamat' => $hasil->alamat,
						'no_telp' => $hasil->no_telp,
						'nama_anggota' => $hasil->nama_anggota, 
						'gambar' => $hasil->gambar,
						'email' => $hasil->email,
						'status' => 'login'
					);
					$this->session->set_userdata($session);
					redirect(base_url().'member');
				}else{
				$this->session->set_flashdata('alert','Login Gagal! Username atau Password Salah');
				redirect(base_url());
			}
		}
		}else{
				$this->session->set_flashdata('alert','Anda Belum mengisi username atau password');
				$this->load->view('login');
		}
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function register_act()
	{
		$nama = $this->input->post('nama_admin');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$data = array(
			'nama_admin' => $nama,
			'username' => $username,
			'password' => $password
		);

		if($data > 0)
		{
			$this->M_perpus->register('admin', $data);
			redirect('welcome');
		}
	}
}
