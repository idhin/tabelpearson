<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKuisioner extends CI_Model {

    public function tambagPertanyaan($data){
        $this->db->insert('pertanyaan',$data);
    }

    public function tambahKuisioner($data){
        $this->db->insert('kuisioner',$data);
    }
    
    public function getListKuisioner($idCustomer){
        $this->db->distinct();
        $this->db->select('judul,deskripsi,kodeKuisioner');
        $this->db->where('idUser',$idCustomer);
        $this->db->from('kuisioner');
        // $this->db->order_by('kodeKuisioner');
        // $this->db->group_by('kuisioner');
        return $this->db->get()->result();
    }   

    public function getNamaResponden($idKuisioner){
        $this->db->distinct();
        $this->db->select('r.orangKe,r.nama');
        $this->db->from('responden r');
        $this->db->join('pertanyaan p','p.id=r.idpertanyaan');
        $this->db->where('p.idKuisioner',$idKuisioner);
        
        // $this->db->order_by('kodeKuisioner');
        // $this->db->group_by('kuisioner');
        return $this->db->get()->result();
    }

    public function getListPerson($idCustomer){
        $this->db->distinct();
        $this->db->select('k.judul,k.deskripsi,k.kodeKuisioner,p.rhitung,p.rtable,p.status');
        $this->db->from('kuisioner k');
        $this->db->join('pearson p','p.kodeKuisioner=k.kodeKuisioner','right');
        $this->db->where('k.idUser',$idCustomer);
        
        // $this->db->order_by('k.kodeKuisioner');
        return $this->db->get()->result();
    }   

    public function getListKodeKuisioner($idCustomer){
        $this->db->distinct();
        $this->db->select('*');
        $this->db->where('idUser',$idCustomer);
        $this->db->from('kuisioner');
        // $this->db->order_by('kodeKuisioner');
        // $this->db->group_by('kuisioner');
        return $this->db->get();
    }   

    public function getDataPearson(){
        $this->db->select('*');
        $this->db->from('pearson');
        return $this->db->get()->result();
    }

    public function getPertanyaanAja(){
        $this->db->distinct();
        $this->db->select('idKuisioner');
        // $this->db->where('idKuisioner',$kode);
        $this->db->from('pertanyaan');
        return $this->db->get()->result();
    }

    

    public function getPertanyaan($kode){
        // $this->db->distinct();
        $this->db->select('*');
        $this->db->where('idKuisioner',$kode);
        $this->db->from('pertanyaan');
        return $this->db->get()->result();
    }

    public function hapusKuisioner($id){
        $this->db->where('id',$id);
        $this->db->delete('kuisioner');
    }

    public function hapusIsiKuisioner($id){
        $this->db->where('id',$id);
        $this->db->delete('pertanyaan');
    }

    public function personDat($kode){
        $this->db->select('*');
        $this->db->from('kuisioner k');
        $this->db->join('respon r','k.kodeKuisioner=r.kodeKuisioner');
        $this->db->where('k.kodeKuisioner',$kode);
        return $this->db->get();
    }

    public function getSkorYTotal($idPertanyaan,$idKuisioner){
        $this->db->select_sum('nilai');
        $this->db->from('responden');
        // $this->db->join('pertanyaan p','r.idpertanyaan=p.id');
        $this->db->where('idPertanyaan',$idPertanyaan);
        // $this->db->where('orangKe',$orangKe);
        return $this->db->get();
    }

    public function getSkorByIDSoal($idPertanyaan,$orangKe,$idKuisioner){
        $this->db->select('nilai');
        $this->db->from('responden');
        // $this->db->join('pertanyaan p','r.idpertanyaan=p.id');
        $this->db->where('idPertanyaan',$idPertanyaan);
        $this->db->where('orangKe',$orangKe);
        $this->db->where('idKuisioner',$idKuisioner);
        return $this->db->get();
    }

    public function getJumlahPertanyaan($orangKe,$idKuisioner){
        $this->db->select('nilai');
        $this->db->from('responden');
        // $this->db->join('pertanyaan p','r.idpertanyaan=p.id');
        // $this->db->where('idPertanyaan',$idPertanyaan);
        $this->db->where('orangKe',$orangKe);
        $this->db->where('idKuisioner',$idKuisioner);
        return $this->db->get();
    }

    public function getJawabanResponden($idKuisioner){
        $this->db->select('*');
        $this->db->from('responden');
        $this->db->where('idKuisioner',$idKuisioner);
        return $this->db->get();
    }

    

    public function cekEmailTerdaftar($email){
        $this->db->select('*');
        $this->db->where('email',$email);
        $this->db->from('user');
        return $this->db->get()->result();
    }


    public function getOrangKe($idKuisioner){
        $this->db->distinct();
        $this->db->select('orangKe');
        $this->db->where('idKuisioner',$idKuisioner);
        $this->db->from('responden');
        return $this->db->get()->result();
    }

    public function getNilaiResponden($orangKeBerapa,$idKuisioner,$idPertanyaan){
        $this->db->distinct('idPertanyaan');
        $this->db->select('nilai');
        $this->db->where('orangKe',$orangKeBerapa);
        $this->db->where('idKuisioner',$idKuisioner);
        $this->db->where('idPertanyaan',$idPertanyaan);
        $this->db->from('responden');
        return $this->db->get();
    }

    public function getIdPertanyaan($orangKeBerapa,$idKuisioner){
        $this->db->select('idPertanyaan');
        $this->db->where('orangKe',$orangKeBerapa);
        $this->db->where('idKuisioner',$idKuisioner);
        $this->db->from('responden');
        return $this->db->get();
    }

    public function getOrangTerakhir($id){
        $this->db->select('r.orangKe');
        $this->db->from('responden r');
        $this->db->join('pertanyaan p','p.id=r.idpertanyaan');
        $this->db->where('p.idKuisioner',$id);
        $this->db->order_by('r.orangKe',"DESC");
        $this->db->limit(1);

        return $this->db->get();
    }

    public function getTotalItem($kode,$soalKe){
        $this->db->select_sum('r.nilai');
        $this->db->from('responden r');
        $this->db->join('pertanyaan p','p.id=r.idpertanyaan');
        $this->db->where('p.idKuisioner',$kode);
        $this->db->where('r.soalKe',$soalKe);
        return $this->db->get();
    }

    public function getTotalSubject($kode){
        $this->db->distinct();
        $this->db->select('r. nama');
        $this->db->from('responden r');
        $this->db->join('pertanyaan p','p.id=r.idpertanyaan');
        $this->db->where('p.idKuisioner',$kode);
        // $this->db->where('soalKe',$soalKe);
        return $this->db->get();
    }


    public function personDatNama($kode){
        $this->db->distinct();
        $this->db->select('namaLengkap');
        $this->db->from('kuisioner k');
        $this->db->join('respon r','k.kodeKuisioner=r.kodeKuisioner');
        $this->db->where('k.kodeKuisioner',$kode);
        return $this->db->get();
    }
    
    public function getKuisionerByID($id,$idCustomer){
        $this->db->distinct();
        $this->db->select('*');
       
        $this->db->from ('kuisioner k');
        $this->db->join('pertanyaan p','k.id=p.idKuisioner');
        $this->db->where('k.id',$id);
        $this->db->where('k.idUser',$idCustomer);
        return $this->db->get()->result();
    }

    public function getKuisionerByIDDD($id){
        // $this->db->distinct();
        $this->db->select('*');
        $this->db->from ('kuisioner k');
        $this->db->join('pertanyaan p','k.id=p.idKuisioner');
        $this->db->where('k.id',$id);
        return $this->db->get()->result();
    }

    public function getJudulKuisioner($kode){
        $this->db->select('judul_kuisioner,deskripsi');
        $this->db->from('kuisioner');
        $this->db->where('id',$kode);
        return $this->db->get()->row();
    }

    public function NewgetKuisionerByID($kode,$idCustomer){
        $this->db->select('*');
        $this->db->from ('kuisioner k');
        $this->db->join('pertanyaan p','k.id=p.idKuisioner');
        $this->db->where('k.idUser',$idCustomer);
        $this->db->where('k.id',$kode);
        return $this->db->get();
    }

    public function getNilaiA($jawaban,$idKuisionerrrr){
        $this->db->select('*');
        $this->db->where('jawabanA',$jawaban);
        $this->db->where('idKuisioner',$idKuisionerrrr);
        $this->db->from('pertanyaan');
        return $this->db->get();
    }

    public function getNilaiB($jawaban,$idKuisionerrrr){
        $this->db->select('*');
        $this->db->where('jawabanB',$jawaban);
        $this->db->where('idKuisioner',$idKuisionerrrr);
        $this->db->from('pertanyaan');
        return $this->db->get();
    }

    public function getNilaiC($jawaban,$idKuisionerrrr){
        $this->db->select('*');
        $this->db->where('jawabanC',$jawaban);
        $this->db->where('idKuisioner',$idKuisionerrrr);
        $this->db->from('pertanyaan');
        return $this->db->get();
    }

    public function getNilaiD($jawaban,$idKuisionerrrr){
        $this->db->select('*');
        $this->db->where('jawabanD',$jawaban);
        $this->db->where('idKuisioner',$idKuisionerrrr);
        $this->db->from('pertanyaan');
        return $this->db->get();
    }

    public function TotalPertanyaan($kode){
        $this->db->select('*');
        $this->db->where('kodeKuisioner',$id);
        $this->db->from ('kuisioner');
        return $this->db->get()->result();
    }

    public function cekPearson($kode){
        $this->db->select('*');
        $this->db->from ('pearson pe');
        $this->db->join('pertanyaan p','pe.idkuesioner=p.idKuisioner');
        $this->db->where('p.idKuisioner',$kode);
        return $this->db->get()->result();
    }

    
    public function respondd($data){
        $this->db->insert('responden',$data);
    }

    public function addPearson($dataa){
        $this->db->insert('pearson',$dataa);
    }

    public function updatePearson($dataa,$kode){
        $this->db->where('kodeKuisioner',$kode);
        $this->db->update('pearson',$dataa);
        
        return TRUE;
    }

    public function editKuisioner($data,$id){
        $this->db->where('id',$id);
        $this->db->update('pertanyaan',$data);
        return TRUE;
    }

    public function getKuisioner($kode,$idCustomer){
        $this->db->select('*');
        $this->db->where('id',$kode);
        // $this->db->where('idKuisione',$idCustomer);
        $this->db->from('pertanyaan');
        return $this->db->get()->result();
    }

    public function listResponden($idOrang,$idKuisioner){
        $this->db->select('*');
        
        // $this->db->where('idKuisione',$idCustomer);
        $this->db->from('pertanyaan p');
        $this->db->join('responden r','r.idpertanyaan=p.id');
        $this->db->where('r.orangKe',$idOrang);
        $this->db->where('p.idKuisioner',$idKuisioner);
        return $this->db->get()->result();
    }

    // public function getListKuisionerLewatID($id){
    //     $this->db->select('*');
    //     $this->db->where('id',$id);
    //     $this->db->from ('kuisioner');
    //     return $this->db->get()->result();
    // }
  
}
