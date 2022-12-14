<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendaftaran extends CI_Model{

    public function getDataPendaftar(){
        return $this->db->get('pendaftaran')->result_array();
    }

    public function getDataProdi(){
        return $this->db->get('prodi')->result_array();
    }

    public function getDataPrestasi(){
        return $this->db->get('p_prestasi')->result_array();
    }

    public function getDataBank(){
        return $this->db->get('bank')->result_array();
    }

    public function getDataJalur(){
        return $this->db->get('jalur')->result_array();
    }

    public function getDataPayment(){
        return $this->db->get('payment')->result_array();
    }

    public function getJ1(){

        $this->db->select('CONCAT (Jenjang_prodi, " " , p.nama_prodi) as nama_prodi, count(f.id_prodi1) as jumlah');
        $this->db->from('pendaftaran f');
        $this->db->join('prodi p', 'p.id_prodi = f.id_prodi1');
        $this->db->group_by('p.id_prodi');



        return $this->db->get()->result_array();
    }

    public function getJ2(){

        $this->db->select('CONCAT (Jenjang_prodi, " " , p.nama_prodi) as nama_prodi, count(f.id_prodi1) as jumlah');
        $this->db->from('pendaftaran f');
        $this->db->join('prodi p', 'p.id_prodi = f.id_prodi2');
        $this->db->group_by('p.id_prodi');

        return $this->db->get()->result_array();
    }

    public function getJ3(){
 
        $this->db->select('p.tingkat_prestasi,count(tingkat_prestasi) as jumlah');
        $this->db->from('p_prestasi p');
        $this->db->join('pendaftaran f', 'p.id_pendaftar = f.id_pendaftaran');
        $this->db->group_by('tingkat_prestasi');

        return $this->db->get()->result_array();
    }

    public function getJ4(){

        $this->db->select('j.id_jalur, j.nama_jalur, count(f.id_jalur) as jumlah');
        $this->db->from('jalur j');
        $this->db->join('pendaftaran f','j.id_jalur = f.id_jalur');
        $this->db->group_by('id_jalur');

        return $this->db->get()->result_array();
    }

    public function getJ5(){

        $this->db->select('b.nama_bank, sum(p.nominal_pembayaran) as jumlah');
        $this->db->from('bank b');
        $this->db->join('pendaftaran f','f.id_bank = b.id_bank');
        $this->db->join('payment p','p.id_pendaftar = f.id_pendaftaran');
        $this->db->where('p.status' ,'Lunas');
        $this->db->group_by('b.nama_bank');

        return $this->db->get()->result_array();
    }

    public function getJ6(){

        $this->db->select('b.nama_bank,status, count(status) as jumlah');
        $this->db->from('bank b');
        $this->db->join('pendaftaran f','f.id_bank = b.id_bank');
        $this->db->join('payment p','p.id_pendaftar = f.id_pendaftaran');
        $this->db->group_by('status,nama_bank');

        return $this->db->get()->result_array();
    }

}
