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
    public function hitungP(){
        $id = $this->uri->segment(3);
        $n=  $this->k->getTotalResponden($id);
        $tP = $this->k->totPertanyaan($id);

        for($i=1;$i<=count($tP);$i++){
            $totalX = $this->k->getTotalX($id,$i);
            $totalX2 = $this->k->getTotalX2($id,$i);
            $totalY = $this->k->getTotalY($id);
            $totalY2 = $this->k->getTotalY2($id);
            $totalXY= $this->k->getTotalXY($id,$i);
            $rHitungatas = $n*$totalXY - $totalX*$totalY;
            $rHitungbawahkiri = ($n*$totalX2 - $totalX*$totalX);
            $rHitungbawahkanan = ($n*$totalY2 - $totalY*$totalY);
            $rHitungbawah = sqrt($rHitungbawahkiri*$rHitungbawahkanan);
            if($rHitungatas !=0){
                $rHitung = $rHitungatas/$rHitungbawah;
            }else{
                $rHitung = 0;
            }
            
            $rTabel= array();
            $rTabel[3]=0.997;$rTabel[4]=0.950;$rTabel[5]=0.878;$rTabel[6]=0.811;$rTabel[7]=0.754;$rTabel[8]=0.707;$rTabel[9]=0.666;$rTabel[10]=0.632;
            $rTabel[11]=0.602;$rTabel[12]=0.576;$rTabel[13]=0.553;$rTabel[14]=0.532;$rTabel[15]=0.514;$rTabel[16]=0.497;$rTabel[17]=0.482;$rTabel[18]=0.468;$rTabel[19]=0.456;$rTabel[20]=0.444;
            $rTabel[21]=0.433;$rTabel[22]=0.432;$rTabel[23]=0.413;$rTabel[24]=0.404;$rTabel[25]=0.396;$rTabel[26]=0.388;$rTabel[27]=0.381;$rTabel[28]=0.374;$rTabel[29]=0.367;$rTabel[30]=0.361;
            $rTabel[31]=0.355;$rTabel[32]=0.349;$rTabel[33]=0.344;$rTabel[34]=0.339;$rTabel[35]=0.334;$rTabel[36]=0.329;$rTabel[37]=0.325;$rTabel[38]=0.320;$rTabel[39]=0.316;$rTabel[40]=0.312;
            $rTabel[41]=0.308;$rTabel[42]=0.304;$rTabel[43]=0.301;$rTabel[44]=0.297;$rTabel[45]=0.294;$rTabel[46]=0.291;$rTabel[47]=0.288;$rTabel[48]=0.284;$rTabel[49]=0.281;$rTabel[50]=0.279;
            $rTabel[51]=0.279;$rTabel[52]=0.279;$rTabel[53]=0.279;$rTabel[54]=0.279;$rTabel[55]=0.266;$rTabel[56]=0.266;$rTabel[57]=0.266;$rTabel[58]=0.266;$rTabel[59]=0.266;$rTabel[60]=0.254;
            $rTabel[61]=0.254;$rTabel[62]=0.254;$rTabel[63]=0.254;$rTabel[64]=0.254;$rTabel[65]=0.244;$rTabel[66]=0.244;$rTabel[67]=0.244;$rTabel[68]=0.244;$rTabel[69]=0.244;$rTabel[70]=0.235;
            $rTabel[71]=0.235;$rTabel[72]=0.235;$rTabel[73]=0.235;$rTabel[74]=0.235;$rTabel[75]=0.227;$rTabel[76]=0.227;$rTabel[77]=0.227;$rTabel[78]=0.227;$rTabel[79]=0.227;$rTabel[80]=0.220;
            $rTabel[81]=0.220;$rTabel[82]=0.220;$rTabel[83]=0.220;$rTabel[84]=0.220;$rTabel[85]=0.213;$rTabel[86]=0.213;$rTabel[87]=0.213;$rTabel[88]=0.213;$rTabel[89]=0.213;$rTabel[90]=0.207;
            $rTabel[91]=0.207;$rTabel[92]=0.207;$rTabel[93]=0.207;$rTabel[94]=0.207;$rTabel[95]=0.202;$rTabel[96]=0.202;$rTabel[97]=0.202;$rTabel[98]=0.202;$rTabel[99]=0.202;$rTabel[100]=0.195;
            $rTabel[101]=0.195;$rTabel[102]=0.195;$rTabel[103]=0.195;$rTabel[104]=0.195;$rTabel[105]=0.195;$rTabel[106]=0.195;$rTabel[107]=0.195;$rTabel[108]=0.195;$rTabel[109]=0.195;$rTabel[110]=0.195;
            $rTabel[111]=0.195;$rTabel[112]=0.195;$rTabel[113]=0.195;$rTabel[114]=0.195;$rTabel[115]=0.195;$rTabel[116]=0.195;$rTabel[117]=0.195;$rTabel[118]=0.195;$rTabel[119]=0.195;$rTabel[120]=0.195;
            $rTabel[121]=0.195;$rTabel[122]=0.195;$rTabel[123]=0.195;$rTabel[124]=0.195;$rTabel[125]=0.176;$rTabel[126]=0.176;$rTabel[127]=0.176;$rTabel[128]=0.176;$rTabel[129]=0.176;$rTabel[130]=0.176;
            $rTabel[131]=0.176;$rTabel[132]=0.176;$rTabel[133]=0.176;$rTabel[134]=0.176;$rTabel[135]=0.176;$rTabel[136]=0.176;$rTabel[137]=0.176;$rTabel[138]=0.176;$rTabel[139]=0.176;$rTabel[140]=0.176;
            $rTabel[141]=0.176;$rTabel[142]=0.176;$rTabel[143]=0.176;$rTabel[144]=0.176;$rTabel[145]=0.176;$rTabel[146]=0.176;$rTabel[147]=0.176;$rTabel[148]=0.176;$rTabel[149]=0.176;$rTabel[150]=0.159;
            if($rHitung > $rTabel[$n]){
                $status = "Valid";
            }else{
                $status =  "Tidak Valid";
            }
            $data= array('idKuisioner'=>$id,'idPertanyaan'=>$i,'rtable'=>$rTabel[$n],'thitung'=>$rHitung,'status'=>$status);
            $this->k->tambahPearson($data);
           
        }
        redirect($_SERVER['HTTP_REFERER']);
        // print_r($rTabel[$n]);
        // echo $totalXY[2];
    }
    // public function hitungPA(){
    //     $id = $this->uri->segment(3);
    //     $n=  $this->k->getTotalResponden($id);
    //     $totalX = $this->k->getTotalX($id,1);
    //     $totalX2 = $this->k->getTotalX2($id,1);
    //     $totalY = $this->k->getTotalY($id);
    //     $totalY2 = $this->k->getTotalY2($id);
    //     $totalXY= $this->k->getTotalXY($id,1);
    //     $rHitungatas = $n*$totalXY - $totalX*$totalY;
    //     $rHitungbawahkiri = ($n*$totalX2 - $totalX*$totalX);
    //     $rHitungbawahkanan = ($n*$totalY2 - $totalY*$totalY);
    //     $rHitungbawah = sqrt($rHitungbawahkiri*$rHitungbawahkanan);
    //     $rHitung = $rHitungatas/$rHitungbawah;
    //     $rTabel= array();
    //     $rTabel[3]=0.997;$rTabel[4]=0.950;$rTabel[5]=0.878;$rTabel[6]=0.811;$rTabel[7]=0.754;$rTabel[8]=0.707;$rTabel[9]=0.666;$rTabel[10]=0.632;$rTabel[11]=0.602;$rTabel[12]=0.576;$rTabel[13]=0.553;$rTabel[14]=0.532;$rTabel[15]=0.514;$rTabel[16]=0.497;$rTabel[17]=0.482;$rTabel[18]=0.468;$rTabel[19]=0.456;$rTabel[20]=0.444;
    //     if($rHitung > $rTabel[$n]){
    //         echo "Valid";
    //     }else{
    //         echo "Tidak Valid";
    //     }
   
    //     // print_r($rTabel[$n]);
    //     // echo $totalXY[2];
    // }
    
    public function tambahKuisioner(){
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $this->load->view('kuisioner');
    }

    public function tambahPertanyaan(){
        $id = $this->uri->segment(3);
        $p = $this->k->getTotalPertanyaan($id);
        $data['total']=$p;
        $data['id']=$id;
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $this->load->view('tambahPertanyaan',$data);
    }

    public function tambahPertanyaann(){
        $id = $this->uri->segment(3);
        $p = $this->k->getTotalPertanyaan($id);
        $data['total']=$p;
        $data['id']=$id;
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $this->load->view('tambahPertanyaann',$data);
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
        $this->load->view('kuisioner',$data);
    }

    public function prosesEditKuisioner(){
        // $kodeKuisioner = $this->input->post('kodeKuisioner');
        // $judul = $this->input->post('judul');
        // $deskripsi = $this->input->post('deskripsi');
        $pertanyaan = $this->input->post('pertanyaan');
        $jawaban1 = $this->input->post('jawaban1');
        $jawaban2 = $this->input->post('jawaban2');
        $jawaban3 = $this->input->post('jawaban3');
        $jawaban4 = $this->input->post('jawaban4');
        $bobotA = $this->input->post('bobotA');
        $bobotB = $this->input->post('bobotB');
        $bobotC = $this->input->post('bobotC');
        $bobotD = $this->input->post('bobotD');
        $id = $this->input->post('idPertanyaan');

        $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        // print_r($idCustomer); die;

        $data = array(
            // 'judul' => $judul,
            // 'deskripsi' => $deskripsi,
            // 'kodeKuisioner' => $kodeKuisioner,
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

        // print_r($id); die; 

        $this->k->editKuisioner($data,$id);

        $message = "Sukses Edit Pertanyaan";
        echo "<script type='text/javascript'>alert('$message');</script>";
        $referred_from = $this->session->userdata('referred_from'); 
        redirect($referred_from, 'refresh');

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
        $referred_from = $this->session->userdata('referred_from'); 
        redirect($referred_from, 'refresh');
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

    public function prosesPertanyaann(){
      
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
        redirect('Kuisioner/lihatKuisioner/'.$idKuisioner,'refresh');

    }

    public function listKuisioner(){
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        // $data['listPerson'] = $this->k->getListPerson($idCustomer);

        $data['listKuisioner'] = $this->k->getListKodeKuisioner($idCustomer)->result();
        $listKuisioner = $this->k->getListKodeKuisioner($idCustomer)->result();
        $totalListKuisioner = count ($listKuisioner);
        $data['totalKusioner'] = $totalListKuisioner;

        // print_r ($listKuisioner); die;
        

        // $data['pearson'] = $this->k->getDataPearson();

        // print_r($dataaa); die;

        // for ($x=0; $x<$totalListKuisioner; $x++){
        //     $nilai = $listKuisioner[$x]->id;

        //     $rhitung = $this->pearson($nilai);
        //     // return true;

        //     echo $rhitung; 
        // }

        // die;

    
        $this->load->view('listKuisioner',$data);
    }

    public function lihatResponden(){
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        // $this->load->view('lihatResponden');

        $idOrang = $this->uri->segment(3);
        $idKuisioner = $this->uri->segment(4);
        // print_r($idKuisioner); die;
        $data['listResponden'] = $this->k->listResponden($idOrang,$idKuisioner);
        $this->load->view('lihatResponden',$data);

        // print_r ($data); die;
    }


    public function lihatNamaResponden(){
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        // $this->load->view('lihatResponden');

        $idKuisioner = $this->uri->segment(3);
        $data['listNamaResponden'] = $this->k->getNamaResponden($idKuisioner);

        // print_r($data); die;
        $this->load->view('lihatNamaResponden',$data);
    }

    

    public function pearsonSdhAda($nilai){
        $kode = $nilai;

        $orangKe = 1;
        $total1 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang1 = $total1['nilai'];

        $orangKe = 2;
        $total2 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang2 = $total2['nilai'];

        $orangKe = 3;
        $total3 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang3 = $total3['nilai'];

        $orangKe = 4;
        $total4 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang4 = $total4['nilai'];

        $orangKe = 5;
        $total5 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang5 = $total5['nilai'];

        $orangKe = 6;
        $total6 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang6 = $total6['nilai'];

        $orangKe = 7;
        $total7 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang7 = $total7['nilai'];

        $orangKe = 8;
        $total8 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang8 = $total8['nilai'];
        
        $orangKe = 9;
        $total9 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang9 = $total9['nilai'];
        
        $orangKe = 10;
        $total10 = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
        $totalNilaiOrang10 = $total10['nilai'];

        $skorItemX = $totalNilaiOrang1+$totalNilaiOrang2+$totalNilaiOrang3+$totalNilaiOrang4+$totalNilaiOrang5+$totalNilaiOrang6+$totalNilaiOrang7+$totalNilaiOrang8+$totalNilaiOrang9+$totalNilaiOrang10;

        // ----- batas soal -------
        
        $soalKe = 1;
        $totalItem1 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem1 = $totalItem1['nilai'];

        $soalKe = 2;
        $totalItem2 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem2 = $totalItem2['nilai'];

        $soalKe = 3;
        $totalItem3 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem3 = $totalItem3['nilai'];

        $soalKe = 4;
        $totalItem4 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem4 = $totalItem4['nilai'];

        $soalKe = 5;
        $totalItem5 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem5 = $totalItem5['nilai'];

        $soalKe = 6;
        $totalItem6 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem6 = $totalItem6['nilai'];

        $soalKe = 7;
        $totalItem7 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem7 = $totalItem7['nilai'];

        $soalKe = 8;
        $totalItem8 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem8 = $totalItem8['nilai'];

        $soalKe = 9;
        $totalItem9 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem9 = $totalItem9['nilai'];

        $soalKe = 10;
        $totalItem10 = $this->k->getTotalItem($kode,$soalKe)->row(0,'array');
        $getTotalItem10 = $totalItem10['nilai'];


        // totalSkorItemX
        $skorTotalY = $getTotalItem1+$getTotalItem2+$getTotalItem3+$getTotalItem4+$getTotalItem5+$getTotalItem6+$getTotalItem7+$getTotalItem8+$getTotalItem9+$getTotalItem10;


        $totalSubject = count($this->k->getTotalSubject($kode)->result());
        // $getTotalSubject = $totalSubject['nilai'];


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

    public function pearson(){
        $kode = 3;

        $getTotalOrang = $this->k->getTotalSubject($kode)->result();
        // $totalSubject = count($getTotalOrang);

        // print_r ($totalSubject); die;

        $xOrang = 1;
        
        $skorItemX = 0;
        foreach ($getTotalOrang as $totalOrang){
            
           
            $orangKe = $xOrang;
            
            $getXTotal = ($this->k->getSkorByIDSoal($kode,$orangKe)->row(0,'array'));
            $getYTotal = ($this->k->getSkorYTotal($kode,$orangKe)->row(0,'array'));

            $xTotal = $getXTotal['nilai'];

            // echo $getTotal['nilai'];

            // die;

            
            $totalNilaiOrang = $total->nilai;
            print_r($totalNilaiOrang); die;
            // $xOrangtotalNilaiOrang 
            // $skorItemX = $totalNilaiOrang+$skorItemX;
            // // echo $xOrang."<br>";
           
        }
        die;
        echo $skorItemX;
        die;
        // print_r ($totalSubject); die;
       

        $totalSubject = 20;
        $totalxy = 101908;
        $sigmax = 1339;
        $sigmay = 1483;
        $totalx2 = 92659;
        $totaly2 = 113211;
        $sigmatotalx2 = 1792921;
        $sigmatotaly2 = 2199289;
        
        // masuk kerumus

        // print_r($totaly2); die;
        $hasil = ($totalSubject*$totalxy-($sigmax*$sigmay)) / sqrt(($totalSubject*$totalx2-$sigmatotalx2)*($totalSubject*$totaly2-$sigmatotaly2));
        // $hasil = ($totalSubject*$totalxy-($skorItemX*$skorTotalY)) / sqrt(($totalSubject*$totalx2-$sigmatotalx2)*($totalSubject*$totaly2-$sigmatotaly2));

        // sqrt(pow($totalSubject*$sigmax-($skorItemX)*($totalSubject*$skorTotalY))) ;

        print_r ($hasil); die;
        
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
        // print_r ($cekPearson); die;

        if ($cekPearson){
            $statusPearson = "ada";
        }else{
            $statusPearson ="tidak ada";
        }

        // print_r ($statusPearson); die;

        if ($statusPearson=="ada"){
            $this->k->updatePearson($dataa,$kode);
        }

        // print_r($statusPearson); die;    

        

    }

    public function lihatPearson(){
        $id = $this->uri->segment(3);
        $data['listPearson'] = $this->k->lihatPearson($id);
        $data['id'] = $id;
        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
        $this->load->view('pearson',$data);

        // $idKuisioner = $this->uri->segment(3);
        // $pearson = $this->hitungPearson($idKuisioner);

        // print_r ($pearson); die;

    }

    public function hitungPearson($idKuisioner){
        // print_r($idKuisioner); die;

        $jawabanResponden = $this->k->getJawabanResponden($idKuisioner)->result();
        $getOrangKe = $this->k->getOrangKe($idKuisioner);
        // print_r ($getOrangKe); die;

        foreach ($getOrangKe as $x){
            $orangKeberapa = $x->orangKe;
            $getIdPertanyaan = $this->k->getIdPertanyaan($orangKeberapa,$idKuisioner)->result();
                foreach ($getIdPertanyaan as $z){

                    $idPertanyaan = $z->idPertanyaan;

                    // echo $idPertanyaan;

                    // print_r($idPertanyaan); die;
                    $getXTotal = ($this->k->getSkorByIDSoal($idPertanyaan,$orangKeberapa,$idKuisioner)->row(0,'array'));
                    $getYTotal = ($this->k->getSkorYTotal($idPertanyaan,$idKuisioner)->row(0,'array'));

                    // // $getNilaiPerorang = ($this->k->getSkorByIDSoal($idPertanyaan,$orangKeberapa,$idKuisioner)->row(0,'array'));
                    
                    $xTotal = $getXTotal['nilai'];
                    $yTotal = $getYTotal['nilai'];
                    $totalSubject = count($this->k->getTotalSubject($idKuisioner)->result());
                    $totalxy = ($xTotal*$yTotal);


                    $xkuadrat = pow($xTotal,2);
                    $sigmax = pow($xkuadrat,2);


                    $ykuadrat = pow($yTotal,2);
                    $sigmay = pow($ykuadrat,2);

                    $hasil = ($totalSubject*$totalxy-($xTotal*$yTotal)) / sqrt(($totalSubject*$xkuadrat-$sigmax)*($totalSubject*$ykuadrat-$sigmay));
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
                    }elseif($totalSubject>=10){
                        $rtable=0.632;
                    }
                    if ($rhitung>=$rtable){
                        $status = "valid";
                    }else{
                        $status = "tidak valid";
                    }

                    if ($rhitung>=$rtable){
                        $status = "valid";
                    }else{
                        $status = "tidak valid";
                    }
                    
                    $data = [
                        'idPertanyaan' => $idPertanyaan,
                        'rhitung' => $rhitung,
                        'rtable' => $rtable,
                        'status' => $status
                    ];
                  return $data;
                } 
                
        }


            
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


    
    public function lihatGrafik(){
        // $this->load->view('headerChart');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');

        $idPertanyaan = $this->uri->segment(3);
        // $jawaban = $this->k->getJawaban($idPertanyaan)->row(0,'array');
        // $jawabanA = $jawaban['jawabanA'];
        // $jawabanB = $jawaban['jawabanB'];
        // $jawabanC = $jawaban['jawabanC'];
        // $jawabanD = $jawaban['jawabanD'];

        // $hitungJawabanA = count($this->k->graphJawabanA($idPertanyaan,$jawabanA));
        // $hitungJawabanB = count($this->k->graphJawabanA($idPertanyaan,$jawabanB));
        // $hitungJawabanC = count($this->k->graphJawabanA($idPertanyaan,$jawabanC));
        // $hitungJawabanD = count($this->k->graphJawabanA($idPertanyaan,$jawabanD));

        // $data['graph'] = $this->k->graph($idPertanyaan);
        


        // print_r($hitungJawabanD); die;
        
        $data['graph'] = $this->k->graph($idPertanyaan);

        $this->load->view('lihatGrafik',$data);
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

         $this->session->set_userdata('referred_from', current_url());

        $this->load->view('listKuisionerIsi',$data);
    }

    public function share(){
        $kode = $this->uri->segment(3);

        $data['pertanyaan'] = $this->k->getKuisionerByIDDD($kode);

        $this->load->view('header');
        $this->load->view('isiKuisioner',$data);
    }

    public function preview(){
        $kode = $this->uri->segment(3);

		$data['pertanyaan'] = $this->k->getKuisionerByIDDD($kode);
		$data['judul'] = $this->k->getJudulKuisioner($kode);

		$this->load->view('header');

		// print_r ($data); die;
		$this->load->view('preview',$data);
        // $this->load->view('isiKuisioner',$data);
    }

    public function editKuisioner(){
       
        $kode = $this->uri->segment(3);
        $idCustomer = $this->session->userdata['pelangganLogin']['id'];
        $data['editKuisioner'] = $this->k->getKuisioner($kode,$idCustomer);

        // print_r($data); die;

        $this->load->view('header');
        $this->load->view('sider');
        $this->load->view('sideBarKiri');
        $this->load->view('index');
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
