<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nilai_model extends CI_Model {
  public function getAll($id_jadwal)
  {
    $q = "SELECT * FROM `persentase_penilaian` WHERE `id_jadwal` = '$id_jadwal' ORDER BY `id_nilai` DESC";
    return $this->db->query($q)->result_array();
  }

  public function insert($id_jadwal, $deskripsi, $persentase)
  {
    $q = "INSERT INTO `persentase_penilaian`(`id_nilai`, `id_jadwal`, `deskripsi`, `persentase`) VALUES (NULL,'$id_jadwal','$deskripsi','$persentase')";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function delete($id_nilai)
  {
    $q = "DELETE FROM `persentase_penilaian` WHERE `id_nilai` = '$id_nilai'";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }
}