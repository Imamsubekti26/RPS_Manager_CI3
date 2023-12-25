<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Matkul_model extends CI_Model {
  public function getAll($search)
  {
    $q = "SELECT * FROM `matkul` WHERE `nama_matkul` LIKE '%$search%'";
    return $this->db->query($q)->result_array();
  }

  public function insert($namaMatkul)
  {
    $q = "INSERT INTO `matkul`(`id_matkul`, `nama_matkul`) VALUES (NULL,'$namaMatkul')";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function searchOrAdd($namaMatkul)
  {
    $ada = $this->getAll($namaMatkul);
    if(count($ada) <= 0){
      $this->insert($namaMatkul);
      $ada = $this->searchOrAdd($namaMatkul);
    }
    return $ada[0]["id_matkul"];
  }
}