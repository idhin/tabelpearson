<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();		
        $this->load->model('MKuisioner','k');

    }

	public function daftar()
	{
		
		$this->load->view('register');
	}
	
	public function masuk()
	{
		$this->load->view('login');
    }
    
    public function create()
	{
		$this->load->view('create');
	}

	public function tambahAkun()
	{
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$data = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $password
		);

		$cekEmail = $this->k->cekEmailTerdaftar($email);

		if ($cekEmail){
			echo "<script>alert('Email ini telah terdaftar! Silahkan gunakan email lain');</script>";
			redirect('user/daftar','refresh');
		}else{
			// print_r($data); die;
			$this->load->model('MUser');
			$this->MUser->tambahAkun($data);

			echo "<script>alert('Pendaftaran Berhasil, Silahkan Login');</script>";
			redirect('user/masuk','refresh');
		}

		
	}

	public function share(){
        $kode = $this->uri->segment(3);

		$data['pertanyaan'] = $this->k->getKuisionerByIDDD($kode);
		$data['judul'] = $this->k->getJudulKuisioner($kode);

		$this->load->view('header');

		// print_r ($data); die;
		$this->load->view('jawab',$data);
        // $this->load->view('isiKuisioner',$data);
    }

	public function masukDashboard(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$this->load->model('MUser');

		$cek = $this->MUser->cekAkun($email,$password)->row(0,'array');
		// print_r($cek); die;


		$hasil = count($cek);
           if($cek){
               $object= array(
                           'id'=>$cek['id'],
                           'nama'=>$cek['nama'],
                           'email' =>$cek['email']
           		);
               $this->session->set_userdata('pelangganLogin',$object);
				// echo print_r($_SESSION);	die;				
			   redirect('Kuisioner','refresh');
            //    redirect('Dashboard','refresh');
           }else{
			echo '<script>alert("Username atau Password anda salah");window.location.href = "'.base_url().'user/masuk";</script>';
            //  echo '<script>alert("Username atau Password anda salah");window.location.href = "'.base_url().'Login";</script>';;
            //   redirect('Login','refresh');
		   }
	}

	public function logout(){
		$this->session->sess_destroy();
		echo '<script>alert("Anda telah logout");window.location.href = "'.base_url().'";</script>';
	}


	public function tambahForm()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$pertanyaan = $this->input->post('pertanyaan');
		$pilihanPertama = $this->input->post('pilihanPertama');
		$pilihanKedua = $this->input->post('pilihanKedua');
		$pilihanKetiga = $this->input->post('pilihanKetiga');
		$pilihanKeempat = $this->input->post('pilihanKeempat');
		$pilihanKelima = $this->input->post('pilihanKelima');


		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'pertanyaan' => $pertanyaan,
			'pilihanPertama' => $pilihanPertama,
			'pilihanKedua' => $pilihanKedua,
			'pilihanKetiga' => $pilihanKetiga,
			'pilihanKeempat' => $pilihanKeempat,
			'pilihanKelima' => $pilihanKelima
		);

		// print_r($data); die;
		$this->load->model('MForm');
		$this->MForm->create($data);

		echo "<script>alert('Sukses Menambahkan Form');</script>";
		redirect('Dashboard/listForm','refresh');
	}

	public function editForm()
	{
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$pertanyaan = $this->input->post('pertanyaan');
		$pilihanPertama = $this->input->post('pilihanPertama');
		$pilihanKedua = $this->input->post('pilihanKedua');
		$pilihanKetiga = $this->input->post('pilihanKetiga');
		$pilihanKeempat = $this->input->post('pilihanKeempat');
		$pilihanKelima = $this->input->post('pilihanKelima');


		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'pertanyaan' => $pertanyaan,
			'pilihanPertama' => $pilihanPertama,
			'pilihanKedua' => $pilihanKedua,
			'pilihanKetiga' => $pilihanKetiga,
			'pilihanKeempat' => $pilihanKeempat,
			'pilihanKelima' => $pilihanKelima
		);

		// print_r($data); die;
		$this->load->model('MForm');
		$this->MForm->update($data);

		echo "<script>alert('Sukses Update Form');</script>";
		redirect('Dashboard/listForm','refresh');
	}

	public function prosesJawab(){
		$id = $this->input->post('idPertanyaan');
		$idCustomer = $this->input->post('idUser');
		$namaLengkap = $this->input->post('namaLengkap');
		$email = $this->input->post('email');
		
		$totalKuisioner = $this->k->getKuisionerByID($id,$idCustomer);
		$hitung = count($totalKuisioner);

		$kuisionerer =  $this->k->NewgetKuisionerByID($id,$idCustomer)->row(0,'array');
		$kuisionerr =  $this->k->NewgetKuisionerByID($id,$idCustomer)->result();
		
		$idKuisionerrrr = $kuisionerer['idKuisioner'];
		// print_r($h); die;

		$orangTerakhir = $this->k->getOrangTerakhir($id)->row(0,'array');
		$getOrangTerakhir = $orangTerakhir['orangKe'];

		// $getOrangTerakhir = 2;

		if ($getOrangTerakhir==null){
			$orangKe=1;
		}else{
			$orangKe=$getOrangTerakhir+1;
		}
		
		$soalKe = 0;

		foreach ($kuisionerr as $xx){
			$h = $xx->id;
			$bobotAA = "bobotA".$h;
			$bobotBB = "bobotB".$h;
			$bobotCC = "bobotC".$h;
			$bobotDD = "bobotD".$h;

			$bobotA = $this->input->post($bobotAA);
			$bobotB = $this->input->post($bobotBB);
			$bobotC = $this->input->post($bobotCC);
			$bobotD = $this->input->post($bobotDD);

			if ($bobotA){
				$nilai = $bobotA;
			}elseif($bobotB){
				$nilai = $bobotB;
			}elseif($bobotC){
				$nilai = $bobotC;
			}elseif($bobotD){
				$nilai = $bobotD;
			}

            $jawab = "jawaban".$h;
			$jawaban = $this->input->post($jawab);

			$nilaiOlahA = $this->k->getNilaiA($jawaban,$idKuisionerrrr)->row('0','array');
			$nilaiA = $nilaiOlahA['bobotA'];
			$jawabanA = $nilaiOlahA['jawabanA'];

			$nilaiOlahB = $this->k->getNilaiB($jawaban,$idKuisionerrrr)->row('0','array');
			$nilaiB = $nilaiOlahB['bobotB'];
			$jawabanB = $nilaiOlahB['jawabanB'];

			$nilaiOlahC = $this->k->getNilaiC($jawaban,$idKuisionerrrr)->row('0','array');
			$nilaiC = $nilaiOlahC['bobotC'];
			$jawabanC = $nilaiOlahC['jawabanC'];

			$nilaiOlahD = $this->k->getNilaiD($jawaban,$idKuisionerrrr)->row('0','array');
			$nilaiD = $nilaiOlahD['bobotD'];
			$jawabanD = $nilaiOlahD['jawabanD'];

			// print_r ($jawabanB); die;

			if ($jawabanA!=null){
				$nilai = $nilaiA;
			}elseif($jawabanB!=null){
				$nilai = $nilaiB;
			}elseif($jawabanC!=null){
				$nilai = $nilaiC;
			}elseif($jawabanD!=null){
				$nilai = $nilaiD;
			}

			// print_r($nilai); die;

			$soalKe = $soalKe+1;

			$data = [
                'nama' =>$namaLengkap,
                'email' => $email,
				'jawaban' => $jawaban,
				'orangKe' => $orangKe,
				'soalKe' => $soalKe,
                'idKuisioner' => $id,
                'idPertanyaan' => $h,
                'nilai' => $nilai
            ];
            $this->k->respondd($data);
			
		}

		$message = "Sukses Menjawab Pertanyaan ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('user/share/'.$id,'refresh');	

		
		
		// print_r($jawaban); die;
		

	}

	public function jawab(){
        $id = $this->input->post('idPertanyaan');

		$idCustomer = $this->input->post('idUser');

		// print_r ("Sementara Di Buat Bagian ini"); die;
	
        $totalKuisioner = $this->k->getKuisionerByID($id,$idCustomer);
        $hitung = count($totalKuisioner);
       
		$kode = $this->input->post('idPertanyaan');
		
		// print_r ($kode); die;

        // $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        $kuisionerr =  $this->k->NewgetKuisionerByID($kode,$idCustomer)->row(0,'array');
        $h = $kuisionerr['id'];
        // print_r($idCustomer); die;

		// $orangTerakhir = $this->k->getOrangTerakhir($kode)->row(0,'array');
		// $getOrangTerakhir = $orangTerakhir['orangKe'];

		// print_r ($getOrangTerakhir); die;
		// $orangKe = $getOrangTerakhir+1;
		// $soalKe = 0;

        for ($x=0; $x<=$hitung; $x++){

			$bobotAA = "bobotA".$h;
			$bobotBB = "bobotB".$h;
			$bobotCC = "bobotC".$h;
			$bobotDD = "bobotD".$h;

			$bobotA = $this->input->post($bobotAA);
			$bobotB = $this->input->post($bobotBB);
			$bobotC = $this->input->post($bobotCC);
			$bobotD = $this->input->post($bobotDD);

			if ($bobotA){
				$nilai = $bobotA;
			}elseif($bobotB){
				$nilai = $bobotB;
			}elseif($bobotC){
				$nilai = $bobotC;
			}elseif($bobotD){
				$nilai = $bobotD;
			}



            $jawab = "jawaban".$h;
			$jawaban = $this->input->post($jawab);
			print_r($jawaban); die;


            $idCustomers = $this->input->post('idPertanyaan');
            $namaLengkap = $this->input->post('namaLengkap');
			$email = $this->input->post('email');
			
		
			
			// $soalKe = $soalKe+1;
         
			$ah = "pertanyaan".$h;

			// print_r ($ah); die;

			$pertanyaannnnn = $this->input->post($ah);
			// print_r ($pertanyaannnnn); die;
			

            $data = [
                'nama' =>$namaLengkap,
                'email' => $email,
				// 'pertanyaan' => $pertanyaannnnn,
				// 'orangKe' => $orangKe,
				// 'soalKe' => $soalKe,
                // 'kodeKuisioner' => $id,
                'idPertanyaan' => $h,
                'nilai' => $jawaban
            ];
            $this->k->respondd($data);
            $h = $h+1;
          
        }

        $message = "Sukses Menjawab Pertanyaan ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('user/share/'.$id,'refresh');

     

    }

	public function listForm(){
		$this->load->model('MForm');
		$data['form'] = $this->MForm->getForm();

		// print_r ($data); die;

		$this->load->view('list',$data);
	}

	public function delete(){
		echo "lagi dibuat";
	}

	public function edit(){
		$this->load->model('MForm');
		$id = $this->uri->segment(3);

		$data['form'] = $this->MForm->getFormByID($id);

		$this->load->view('editForm',$data);

		// print_r ($data); die;
	}


}
