<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MKuisioner extends CI_Model {

    public function tambagPertanyaan($data){
        $this->db->insert('pertanyaan',$data);
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

    public function getPertanyaan($kode){
        // $this->db->distinct();
        $this->db->select('*');
        $this->db->where('idKuisioner',$kode);
        $this->db->from('pertanyaan');
        return $this->db->get()->result();
    }

    public function hapusKuisioner($id){
        $this->db->where('kodeKuisioner',$id);
        $this->db->delete('kuisioner');
    }

    public function hapusIsiKuisioner($id){
        $this->db->where('id',$id);
        $this->db->delete('kuisioner');
    }

    public function personDat($kode){
        $this->db->select('*');
        $this->db->from('kuisioner k');
        $this->db->join('respon r','k.kodeKuisioner=r.kodeKuisioner');
        $this->db->where('k.kodeKuisioner',$kode);
        return $this->db->get();
    }

    public function getSkorByIDSoal($kode,$orangKe){
        $this->db->select_sum('pilihan');
        $this->db->from('respon');
        $this->db->where('kodeKuisioner',$kode);
        $this->db->where('orangKe',$orangKe);
        return $this->db->get();
    }

    public function getOrangTerakhir($kode){
        $this->db->select('orangKe');
        $this->db->from('respon');
        $this->db->where('kodeKuisioner',$kode);
        $this->db->order_by('orangKe',"DESC");
        $this->db->limit(1);

        return $this->db->get();
    }

    public function getTotalItem($kode,$soalKe){
        $this->db->select_sum('pilihan');
        $this->db->from('respon');
        $this->db->where('kodeKuisioner',$kode);
        $this->db->where('soalKe',$soalKe);
        return $this->db->get();
    }

    public function getTotalSubject($kode){
        $this->db->distinct();
        $this->db->select('namaLengkap');
        $this->db->from('respon');
        $this->db->where('kodeKuisioner',$kode);
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
        $this->db->select('judul,deskripsi,kodeKuisioner');
        $this->db->where('kodeKuisioner',$id);
        $this->db->where('idUser',$idCustomer);
        $this->db->from ('kuisioner');
        return $this->db->get()->result();
    }

    public function getKuisionerByIDDD($id){
        // $this->db->distinct();
        $this->db->select('*');
        $this->db->where('id',$id);
        $this->db->from ('pertanyaan');
        return $this->db->get()->result();
    }

    public function NewgetKuisionerByID($kode,$idCustomer){
        $this->db->select('*');
        $this->db->where('idUser',$idCustomer);
        $this->db->where('kodeKuisioner',$kode);
        $this->db->from ('kuisioner');
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
        $this->db->where('kodeKuisioner',$kode);
        $this->db->from('pearson');
        return $this->db->get()->result();
    }

    
    public function respondd($data){
        $this->db->insert('respon',$data);
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
        $this->db->update('kuisioner',$data);
        return TRUE;
    }

    public function getKuisioner($kode,$idCustomer){
        $this->db->select('*');
        $this->db->where('id',$kode);
        $this->db->where('idUser',$idCustomer);
        $this->db->from('kuisioner');
        return $this->db->get()->result();
    }

    // public function getListKuisionerLewatID($id){
    //     $this->db->select('*');
    //     $this->db->where('id',$id);
    //     $this->db->from ('kuisioner');
    //     return $this->db->get()->result();
    // }
  
}
