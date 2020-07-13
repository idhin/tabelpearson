<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kuisioner extends CI_Controller {

    function __construct(){
		parent::__construct();		
        $this->load->model('MKuisioner','k');

        if(!$this->session->userdata('pelangganLogin')){
            echo '<script>alert("Maaf, anda tidak diizinkan mengakses halaman ini, silahkan login dulu")</script>';
            echo'<script>window.location.href="'.base_url().'user/masuk";</script>';
            // redirect('user/masuk','refresh');
         }

    }
    
	public function index()
	{
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
    }
    
    public function tambahKuisioner(){
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $this->load->view('kuisioner');
    }

    public function tambahPertanyaan(){
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $this->load->view('tambahPertanyaan');
    }

    public function tambahKuisionerr(){
        $id = $this->uri->segment(3);
        
        $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        // print_r($id); die;
        $data['kuisioner'] = $this->k->getKuisionerByID($id,$idCustomer);

        // print_r ($data); die;
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $this->load->view('kuisionerr',$data);
    }

    public function prosesEditKuisioner(){
        $kodeKuisioner = $this->input->post('kodeKuisioner');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $pertanyaan = $this->input->post('pertanyaan');
        $jawaban1 = $this->input->post('jawaban1');
        $jawaban2 = $this->input->post('jawaban2');
        $jawaban3 = $this->input->post('jawaban3');
        $jawaban4 = $this->input->post('jawaban4');
        $bobotA = $this->input->post('bobotA');
        $bobotB = $this->input->post('bobotB');
        $bobotC = $this->input->post('bobotC');
        $bobotD = $this->input->post('bobotD');
        $id = $this->input->post('iniID');

        $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        // print_r($idCustomer); die;

        $data = array(
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'kodeKuisioner' => $kodeKuisioner,
            'pertanyaan' => $pertanyaan,
            'jawabanA' => $jawaban1,
            'jawabanB' => $jawaban2,
            'jawabanC' => $jawaban3,
            'jawabanD' => $jawaban4,
            'judul' => $judul,
            'bobotA' => $bobotA,
            'bobotB' => $bobotB,
            'bobotC' => $bobotC,
            'bobotD' => $bobotD
        );

        // print_r($id); die; 

        $this->k->editKuisioner($data,$id);

        $message = "Sukses Edit Pertanyaan";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('Kuisioner/listKuisioner','refresh');
    }
    
    public function hapus(){
        $id = $this->uri->segment(3);

        $this->k->hapusKuisioner($id);
        redirect('Kuisioner/listKuisioner','refresh');
    }

    public function hapusIsiKuisioner(){
        $id = $this->uri->segment(3);

        // print_r ($id); die;

        $this->k->hapusIsiKuisioner($id);
        redirect('kuisioner/lihatKuisioner/','refresh');
    }

    
    
    public function prosesKuisioner(){
      
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $idCustomer = $this->session->userdata['pelangganLogin']['id'];

        $data = array(
            'idUser' => $idCustomer,
            'judul_kuisioner' => $judul,
            'deskripsi' => $deskripsi
        );

        // $cekPearson = $this->k->cekPearson($kode);

        // if ($cekPearson){
        //     $statusPearson = "ada";
        // }else{
        //     $statusPearson ="tidak ada";
        // }

        // if ($statusPearson=="tidak ada"){
        //     $this->pearsonSdhAda($kode);
        // }
        
        $this->k->tambahKuisioner($data);
        $idTerakhir = $this->db->insert_id();

        // echo $idTerakhir; die;
       

        $message = "Sukses Menambahkan Pertanyaan";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('Kuisioner/tambahPertanyaan/'.$idTerakhir,'refresh');

    }

    public function prosesPertanyaan(){
      
        $idKuisioner = $this->input->post('idKuisioner');
        $pertanyaan = $this->input->post('pertanyaan');
        $jawaban1 = $this->input->post('jawaban1');
        $jawaban2 = $this->input->post('jawaban2');
        $jawaban3 = $this->input->post('jawaban3');
        $jawaban4 = $this->input->post('jawaban4');
        $bobotA = $this->input->post('bobotA');
        $bobotB = $this->input->post('bobotB');
        $bobotC = $this->input->post('bobotC');
        $bobotD = $this->input->post('bobotD');

        $data = array(
            'idKuisioner' => $idKuisioner,
            'pertanyaan' => $pertanyaan,
            'jawabanA' => $jawaban1,
            'jawabanB' => $jawaban2,
            'jawabanC' => $jawaban3,
            'jawabanD' => $jawaban4,
            'bobotA' => $bobotA,
            'bobotB' => $bobotB,
            'bobotC' => $bobotC,
            'bobotD' => $bobotD
        );

       
        // print_r($data);

        // $cekPearson = $this->k->cekPearson($kode);

        // if ($cekPearson){
        //     $statusPearson = "ada";
        // }else{
        //     $statusPearson ="tidak ada";
        // }

        // if ($statusPearson=="tidak ada"){
        //     $this->pearsonSdhAda($kode);
        // }

        $this->k->tambagPertanyaan($data);

        $message = "Sukses Menambahkan Pertanyaan";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('Kuisioner/tambahPertanyaan/'.$idKuisioner,'refresh');

    }

    public function listKuisioner(){
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        // $data['listPerson'] = $this->k->getListPerson($idCustomer);

        $data['listKuisioner'] = $this->k->getListKodeKuisioner($idCustomer)->result();
        // $listKuisioner = $this->k->getListKodeKuisioner($idCustomer)->result();
        // $totalListKuisioner = count ($listKuisioner);

        // print_r ($listKuisioner); die;
        

        // $data['pearson'] = $this->k->getDataPearson();

        // print_r($dataa); die;

        // for ($x=0; $x<$totalListKuisioner; $x++){
        //     $nilai = $listKuisioner[$x]->kodeKuisioner;

        //     $rhitung = $this->pearson($nilai);
        //     // return true;

        //     echo $rhitung; 
        // }

    
        $this->load->view('listKuisioner',$data);
    }

    public function pearsonSdhAda($nilai){
        $kode = $nilai;

        $orangKe = 1;
        $total1 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang1 = $total1['pilihan'];

        $orangKe = 2;
        $total2 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang2 = $total2['pilihan'];

        $orangKe = 3;
        $total3 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang3 = $total3['pilihan'];

        $orangKe = 4;
        $total4 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang4 = $total4['pilihan'];

        $orangKe = 5;
        $total5 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang5 = $total5['pilihan'];

        $orangKe = 6;
        $total6 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang6 = $total6['pilihan'];

        $orangKe = 7;
        $total7 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang7 = $total7['pilihan'];

        $orangKe = 8;
        $total8 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang8 = $total8['pilihan'];
        
        $orangKe = 9;
        $total9 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang9 = $total9['pilihan'];
        
        $orangKe = 10;
        $total10 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang10 = $total10['pilihan'];

        $skorItemX = $totalNilaiOrang1+$totalNilaiOrang2+$totalNilaiOrang3+$totalNilaiOrang4+$totalNilaiOrang5+$totalNilaiOrang6+$totalNilaiOrang7+$totalNilaiOrang8+$totalNilaiOrang9+$totalNilaiOrang10;

        // ----- batas soal -------
        
        $soalKe = 1;
        $totalItem1 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem1 = $totalItem1['pilihan'];

        $soalKe = 2;
        $totalItem2 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem2 = $totalItem2['pilihan'];

        $soalKe = 3;
        $totalItem3 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem3 = $totalItem3['pilihan'];

        $soalKe = 4;
        $totalItem4 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem4 = $totalItem4['pilihan'];

        $soalKe = 5;
        $totalItem5 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem5 = $totalItem5['pilihan'];

        $soalKe = 6;
        $totalItem6 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem6 = $totalItem6['pilihan'];

        $soalKe = 7;
        $totalItem7 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem7 = $totalItem7['pilihan'];

        $soalKe = 8;
        $totalItem8 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem8 = $totalItem8['pilihan'];

        $soalKe = 9;
        $totalItem9 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem9 = $totalItem9['pilihan'];

        $soalKe = 10;
        $totalItem10 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem10 = $totalItem10['pilihan'];


        // totalSkorItemX
        $skorTotalY = $getTotalItem1+$getTotalItem2+$getTotalItem3+$getTotalItem4+$getTotalItem5+$getTotalItem6+$getTotalItem7+$getTotalItem8+$getTotalItem9+$getTotalItem10;


        $totalSubject = count($this->k->getTotalSubject($kode)->result());
        // $getTotalSubject = $totalSubject['pilihan'];


        // kita buat xy
        $xy1 = $totalNilaiOrang1 * $getTotalItem1;
        $xy2 = $totalNilaiOrang2 * $getTotalItem2;
        $xy3 = $totalNilaiOrang3 * $getTotalItem3;
        $xy4 = $totalNilaiOrang4 * $getTotalItem4;
        $xy5 = $totalNilaiOrang5 * $getTotalItem5;
        $xy6 = $totalNilaiOrang6 * $getTotalItem6;
        $xy7 = $totalNilaiOrang7 * $getTotalItem7;
        $xy8 = $totalNilaiOrang8 * $getTotalItem8;
        $xy9 = $totalNilaiOrang9 * $getTotalItem9;
        $xy10 = $totalNilaiOrang10 * $getTotalItem10;

        $totalxy = $xy1+$xy2+$xy3+$xy4+$xy5+$xy6+$xy7+$xy8+$xy9+$xy10;

        // menghitung x2

        $x21 = pow($totalNilaiOrang1,2);
        $x22 = pow($totalNilaiOrang2,2);
        $x23 = pow($totalNilaiOrang3,2);
        $x24 = pow($totalNilaiOrang4,2);
        $x25 = pow($totalNilaiOrang5,2);
        $x26 = pow($totalNilaiOrang6,2);
        $x27 = pow($totalNilaiOrang7,2);
        $x28 = pow($totalNilaiOrang8,2);
        $x29 = pow($totalNilaiOrang9,2);
        $x30 = pow($totalNilaiOrang10,2);


        $totalx2 = $x21+$x22+$x23+$x24+$x25+$x26+$x27+$x28+$x29+$x30;
        $sigmatotalx2 = pow($totalx2,2);


        // menghitung y2
        $y21 = pow($getTotalItem1,2);
        $y22 = pow($getTotalItem2,2);
        $y23 = pow($getTotalItem3,2);
        $y24 = pow($getTotalItem4,2);
        $y25 = pow($getTotalItem5,2);
        $y26 = pow($getTotalItem6,2);
        $y27 = pow($getTotalItem7,2);
        $y28 = pow($getTotalItem8,2);
        $y29 = pow($getTotalItem9,2);
        $y30 = pow($getTotalItem10,2);

        $totaly2 = $y21+$y22+$y23+$y24+$y25+$y26+$y27+$y28+$y29+$y30;
        $sigmatotaly2 = pow($totaly2,2);
        // print_r ($sigmatotaly2); die;


        // kalkulasi sigma
        $sigmax = $skorItemX;

        $sigmay = $skorTotalY;

        // $totalSubject = 20;
        // $totalxy = 101908;
        // $sigmax = 1339;
        // $sigmay = 1483;
        // $totalx2 = 92659;
        // $totaly2 = 113211;
        // $sigmatotalx2 = 1792921;
        // $sigmatotaly2 = 2199289;
        
        // masuk kerumus

        // print_r($totaly2); die;
        $hasil = ($totalSubject*$totalxy-($sigmax*$sigmay)) / sqrt(($totalSubject*$totalx2-$sigmatotalx2)*($totalSubject*$totaly2-$sigmatotaly2));
        // $hasil = ($totalSubject*$totalxy-($skorItemX*$skorTotalY)) / sqrt(($totalSubject*$totalx2-$sigmatotalx2)*($totalSubject*$totaly2-$sigmatotaly2));

        // sqrt(pow($totalSubject*$sigmax-($skorItemX)*($totalSubject*$skorTotalY))) ;

        
        $rhitung = number_format($hasil, 3, '.', '');

        if ($totalSubject<=3){
            $rtable=0.997;
        }elseif($totalSubject==4){
            $rtable=0.950;
        }elseif($totalSubject==5){
            $rtable=0.878;
        }elseif($totalSubject==6){
            $rtable=0.811;
        }elseif($totalSubject==7){
            $rtable=0.754;
        }elseif($totalSubject==8){
            $rtable=0.707;
        }elseif($totalSubject==9){
            $rtable=0.666;
        }elseif($totalSubject==10){
            $rtable=0.632;
        }

        if ($rhitung>=$rtable){
            $status = "valid";
        }else{
            $status = "tidak valid";
        }

        $dataa = array(
            'kodeKuisioner' => $kode,
            'status' => $status,
            'rhitung' => $rhitung,
            'rtable' => $rtable
        );

        $this->k->addPearson($dataa);

    }

    public function pearson($nilai){
        $kode = $nilai;
        
        $orangKe = 1;
        $total1 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang1 = $total1['pilihan'];

        $orangKe = 2;
        $total2 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang2 = $total2['pilihan'];

        $orangKe = 3;
        $total3 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang3 = $total3['pilihan'];

        $orangKe = 4;
        $total4 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang4 = $total4['pilihan'];

        $orangKe = 5;
        $total5 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang5 = $total5['pilihan'];

        $orangKe = 6;
        $total6 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang6 = $total6['pilihan'];

        $orangKe = 7;
        $total7 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang7 = $total7['pilihan'];

        $orangKe = 8;
        $total8 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang8 = $total8['pilihan'];
        
        $orangKe = 9;
        $total9 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang9 = $total9['pilihan'];
        
        $orangKe = 10;
        $total10 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang10 = $total10['pilihan'];

        $skorItemX = $totalNilaiOrang1+$totalNilaiOrang2+$totalNilaiOrang3+$totalNilaiOrang4+$totalNilaiOrang5+$totalNilaiOrang6+$totalNilaiOrang7+$totalNilaiOrang8+$totalNilaiOrang9+$totalNilaiOrang10;

        // ----- batas soal -------
        
        $soalKe = 1;
        $totalItem1 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem1 = $totalItem1['pilihan'];

        $soalKe = 2;
        $totalItem2 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem2 = $totalItem2['pilihan'];

        $soalKe = 3;
        $totalItem3 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem3 = $totalItem3['pilihan'];

        $soalKe = 4;
        $totalItem4 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem4 = $totalItem4['pilihan'];

        $soalKe = 5;
        $totalItem5 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem5 = $totalItem5['pilihan'];

        $soalKe = 6;
        $totalItem6 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem6 = $totalItem6['pilihan'];

        $soalKe = 7;
        $totalItem7 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem7 = $totalItem7['pilihan'];

        $soalKe = 8;
        $totalItem8 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem8 = $totalItem8['pilihan'];

        $soalKe = 9;
        $totalItem9 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem9 = $totalItem9['pilihan'];

        $soalKe = 10;
        $totalItem10 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem10 = $totalItem10['pilihan'];

        // totalSkorItemX
        $skorTotalY = $getTotalItem1+$getTotalItem2+$getTotalItem3+$getTotalItem4+$getTotalItem5+$getTotalItem6+$getTotalItem7+$getTotalItem8+$getTotalItem9+$getTotalItem10;

        $totalSubject = count($this->k->getTotalSubject($kode)->result());
        // $getTotalSubject = $totalSubject['pilihan'];


        // kita buat xy
        $xy1 = $totalNilaiOrang1 * $getTotalItem1;
        $xy2 = $totalNilaiOrang2 * $getTotalItem2;
        $xy3 = $totalNilaiOrang3 * $getTotalItem3;
        $xy4 = $totalNilaiOrang4 * $getTotalItem4;
        $xy5 = $totalNilaiOrang5 * $getTotalItem5;
        $xy6 = $totalNilaiOrang6 * $getTotalItem6;
        $xy7 = $totalNilaiOrang7 * $getTotalItem7;
        $xy8 = $totalNilaiOrang8 * $getTotalItem8;
        $xy9 = $totalNilaiOrang9 * $getTotalItem9;
        $xy10 = $totalNilaiOrang10 * $getTotalItem10;

        $totalxy = $xy1+$xy2+$xy3+$xy4+$xy5+$xy6+$xy7+$xy8+$xy9+$xy10;

        // menghitung x2

        $x21 = pow($totalNilaiOrang1,2);
        $x22 = pow($totalNilaiOrang2,2);
        $x23 = pow($totalNilaiOrang3,2);
        $x24 = pow($totalNilaiOrang4,2);
        $x25 = pow($totalNilaiOrang5,2);
        $x26 = pow($totalNilaiOrang6,2);
        $x27 = pow($totalNilaiOrang7,2);
        $x28 = pow($totalNilaiOrang8,2);
        $x29 = pow($totalNilaiOrang9,2);
        $x30 = pow($totalNilaiOrang10,2);


        $totalx2 = $x21+$x22+$x23+$x24+$x25+$x26+$x27+$x28+$x29+$x30;
        $sigmatotalx2 = pow($totalx2,2);


        // menghitung y2
        $y21 = pow($getTotalItem1,2);
        $y22 = pow($getTotalItem2,2);
        $y23 = pow($getTotalItem3,2);
        $y24 = pow($getTotalItem4,2);
        $y25 = pow($getTotalItem5,2);
        $y26 = pow($getTotalItem6,2);
        $y27 = pow($getTotalItem7,2);
        $y28 = pow($getTotalItem8,2);
        $y29 = pow($getTotalItem9,2);
        $y30 = pow($getTotalItem10,2);

        $totaly2 = $y21+$y22+$y23+$y24+$y25+$y26+$y27+$y28+$y29+$y30;
        $sigmatotaly2 = pow($totaly2,2);
        // print_r ($sigmatotaly2); die;


        // kalkulasi sigma
        $sigmax = $skorItemX;

        $sigmay = $skorTotalY;

        // $totalSubject = 20;
        // $totalxy = 101908;
        // $sigmax = 1339;
        // $sigmay = 1483;
        // $totalx2 = 92659;
        // $totaly2 = 113211;
        // $sigmatotalx2 = 1792921;
        // $sigmatotaly2 = 2199289;
        
        // masuk kerumus

        // print_r($totaly2); die;
        $hasil = ($totalSubject*$totalxy-($sigmax*$sigmay)) / sqrt(($totalSubject*$totalx2-$sigmatotalx2)*($totalSubject*$totaly2-$sigmatotaly2));
        // $hasil = ($totalSubject*$totalxy-($skorItemX*$skorTotalY)) / sqrt(($totalSubject*$totalx2-$sigmatotalx2)*($totalSubject*$totaly2-$sigmatotaly2));

        // sqrt(pow($totalSubject*$sigmax-($skorItemX)*($totalSubject*$skorTotalY))) ;

        // print_r ($hasil);
        
        $rhitung = number_format($hasil, 3, '.', '');
        

        if ($totalSubject<=3){
            $rtable=0.997;
        }elseif($totalSubject==4){
            $rtable=0.950;
        }elseif($totalSubject==5){
            $rtable=0.878;
        }elseif($totalSubject==6){
            $rtable=0.811;
        }elseif($totalSubject==7){
            $rtable=0.754;
        }elseif($totalSubject==8){
            $rtable=0.707;
        }elseif($totalSubject==9){
            $rtable=0.666;
        }elseif($totalSubject==10){
            $rtable=0.632;
        }

        if ($rhitung>=$rtable){
            $status = "valid";
        }else{
            $status = "tidak valid";
        }

        $dataa = array(
            // 'kodeKuisioner' => $kode,
            'status' => $status,
            'rhitung' => $hasil,
            'rtable' => $rtable
        );

        // echo "Total Subject: " . $totalSubject."<br>";  
        // echo "Sigma X: ".($sigmax)."<br>";
        // echo "Sigma X: ".($sigmay)."<br>";
        // echo "Sigma Total X: ".($sigmatotalx2)."<br>";
        // echo "Sigma Total Y: ".($sigmatotaly2)."<br>";
        // echo "R Table: ".($hasil)."<br>"; die;
        // echo "Status: ".($status); die;

        $cekPearson = $this->k->cekPearson($kode);

        if ($cekPearson){
            $statusPearson = "ada";
        }else{
            $statusPearson ="tidak ada";
        }

        if ($statusPearson=="ada"){
            $this->k->updatePearson($dataa,$kode);
        }

        // print_r($statusPearson); die;    

        

    }

    public function lihatHasil(){
        $kode = $this->uri->segment(3);

        // $atas = $totalSubject*

        $dataNama = $this->k->personDatNama($kode)->result();
        $jumlahDataNama = count($this->k->personDatNama($kode)->result());

      

        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        // $this->load->view('lihatKuisioner');

       
        $data['listKuisioner'] = $this->k->getPertanyaan($kode);
        // $total

        $this->load->view('lihatHasilResponden',$data);
    }

    public function lihatKuisioner(){
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        // $this->load->view('lihatKuisioner');

        $kode = $this->uri->segment(3);

        $data['listKuisioner'] = $this->k->getPertanyaan($kode);
        // $data['pearson'] = $this->k->getPearson($kode);

        // print_r($data); die;

        $this->load->view('listKuisionerIsi',$data);
    }

    public function share(){
        $kode = $this->uri->segment(3);

        $data['pertanyaan'] = $this->k->getKuisionerByIDDD($kode);

        $this->load->view('header');
        $this->load->view('isiKuisioner',$data);
    }

    public function editKuisioner(){
       
        $kode = $this->uri->segment(3);
        $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        $data['editKuisioner'] = $this->k->getKuisioner($kode,$idCustomer);

        // print_r($data); die;

        $this->load->view('header');
        // $this->load->view('sider');
        // // $this->load->view('sideBarKiri');
        $this->load->view('editKuisioner',$data);
    }

    public function jawab(){
        $id = $this->input->post('idPertanyaan');

        $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        $totalKuisioner = $this->k->getKuisionerByID($id,$idCustomer);
        $hitung = count($totalKuisioner)+1;
        // print_r($hitung); die;

        // $data['pertanyaan'] = $this->k->getKuisionerByID($kode); 
        $kode = $this->input->post('idPertanyaan');

        // $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        $kuisionerr =  $this->k->NewgetKuisionerByID($kode,$idCustomer)->row(0,'array');
        $h = $kuisionerr['id'];
        // print_r($h); die;

        // $jawaban1= $this->input->post('jawaban');
        // $jawaban2= $this->input->post('jawaban');
        // $jawaban3= $this->input->post('jawaban');
        // $jawaban4= $this->input->post('jawaban');

        // print_r($hitung); die;   
 
        for ($x=0; $x<$hitung; $x++){

            $jawab = "jawaban".$h;
            $jawaban = $this->input->post($jawab);

            $idCustomers = $this->input->post('idPertanyaan');
            $namaLengkap = $this->input->post('namaLengkap');
            $email = $this->input->post('email');
            // $ah = "pertanyaan".$h;
            
            $ah = "pertanyaan".$h;
            // print_r ($ah); die;
            $pertanyaan = $this->input->post($ah);
            // print_r ($pertanyaan); die;
            // $totalKuisioner = $this->k->getKuisionerByID($id,$idCustomer);
            // $hitung = count($totalKuisioner)+1;


            // print_r ($hitung); die; 

            $data = [
                'namaLengkap' =>$namaLengkap,
                'email' => $email,
                'pertanyaan' => $pertanyaan,
                'kodeKuisioner' => $id,
                'idPertanyaan' => $h,
                'pilihan' => $jawaban
            ];
            $this->k->respondd($data);
         
            $h = $h+1;
            // print_r ($ah); die;
        }

        // print_r ($data); die;

        $message = "Sukses Menjawab Pertanyaan ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('Kuisioner/share/'.$id,'refresh');

     

    }
    

  
}
