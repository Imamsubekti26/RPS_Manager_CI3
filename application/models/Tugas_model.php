<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas_model extends CI_Model{

  public function getAll($id_jadwal)
  {
    $q = "SELECT * FROM `tugas` WHERE `id_jadwal` = '$id_jadwal'";
    return $this->db->query($q)->result_array();
  }

  public function getOne($id_tugas)
  {
    $q = "SELECT * FROM `tugas` WHERE `id_tugas` = '$id_tugas'";
    return $this->db->query($q)->row_array();
  }
  
  public function insert($id_jadwal, $judul, $tugas, $kemampuan, $kriteria_pen, $indikator_pen, $lama_waktu, $bobot_nilai)
  {
    $q = "INSERT INTO `tugas`(`id_tugas`, `id_jadwal`, `judul`, `tugas`, `kemampuan`, `kriteria_pen`, `indikator_pen`, `lama_waktu`, `bobot_nilai`) VALUES (NULL,'$id_jadwal','$judul','$tugas','$kemampuan','$kriteria_pen','$indikator_pen','$lama_waktu','$bobot_nilai')";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function update($id_tugas, $id_jadwal, $judul, $tugas, $kemampuan, $kriteria_pen, $indikator_pen, $lama_waktu, $bobot_nilai)
  {
    $q = "UPDATE `tugas` SET `id_jadwal`='$id_jadwal',`judul`='$judul',`tugas`='$tugas',`kemampuan`='$kemampuan',`kriteria_pen`='$kriteria_pen',`indikator_pen`='$indikator_pen',`lama_waktu`='$lama_waktu',`bobot_nilai`='$bobot_nilai' WHERE `tugas`.`id_tugas` = $id_tugas";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function delete($id_tugas)
  {
    $q = "DELETE FROM `tugas` WHERE `id_tugas` = '$id_tugas'";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

}