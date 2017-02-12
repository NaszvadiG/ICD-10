<?php

defined('BASEPATH') OR exit ('No direct script access allowed');

/**
 * Model for ICD-10 Web Application
 */
class Icd10_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }

  function getdata($option)
  {
    switch ($option) {
      case 'codes':
        $table = "icd10";
        break;
      case 'chapters':
        $table = "icd10chapter";
        break;
      case 'blocks':
        $table = "icd10section";
        break;
      case 'categories':
        $table = "icd10";
        break;
      default:
        # code...
        break;
    }

    if($option=="categories") {
      $sqlstr = "SELECT id, descriptions FROM $table WHERE id NOT LIKE '%.%' ORDER BY id ASC";
    }
    else {
      $sqlstr = "SELECT id, descriptions FROM $table ORDER BY id ASC";
    }

    $hasil = $this->db->query($sqlstr);

    return $hasil;
  }

  function getheading($option)
  {
    $heading = array("ID", "Descriptions");

    return $heading;
  }
}
