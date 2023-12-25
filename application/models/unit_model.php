<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit_model extends CI_Model {

  public function getAll($id_jadwal)
  {
    $q = "SELECT * FROM `unit_pembelajaran` WHERE `id_jadwal` = '$id_jadwal'";
    return $this->db->query($q)->result_array();
  }

  public function getOne($id_unit)
  {
    $q = "SELECT * FROM `unit_pembelajaran` WHERE `id_unit` = '$id_unit'";
    return $this->db->query($q)->row_array();
  }
  
  public function insert($id_jadwal, $judul, $kemampuan, $indikator, $bahan_kajian, $metode_pem, $metode_pen, $lama_waktu)
  {
    $q = "INSERT INTO `unit_pembelajaran` (`id_unit`, `id_jadwal`, `judul`, `kemampuan`, `indikator`, `bahan_kajian`, `metode_pem`, `metode_pen`, `lama_waktu`, `bahan_ajar`) VALUES (NULL, '$id_jadwal', '$judul', '$kemampuan', '$indikator', '$bahan_kajian', '$metode_pem', '$metode_pen', '$lama_waktu', '1')";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function update($id_unit, $id_jadwal, $judul, $kemampuan, $indikator, $bahan_kajian, $metode_pem, $metode_pen, $lama_waktu)
  {
    $q = "UPDATE `unit_pembelajaran` SET `id_jadwal` = '$id_jadwal', `judul` = '$judul', `kemampuan` = '$kemampuan ', `indikator` = '$indikator ', `bahan_kajian` = '$bahan_kajian', `metode_pem` = '$metode_pem', `metode_pen` = '$metode_pen ', `lama_waktu` = '$lama_waktu', `bahan_ajar` = '1' WHERE `unit_pembelajaran`.`id_unit` = $id_unit";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

  public function delete($id_unit)
  {
    $q = "DELETE FROM `unit_pembelajaran` WHERE `id_unit` = '$id_unit'";
    $this->db->query($q);
    return $this->db->affected_rows() > 0;
  }

}