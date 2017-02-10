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
        $field = "id, descriptions";
        $orderby = "id";
        break;
      case 'chapters':
        $table = "icd10chapter";
        $field = "id, descriptions";
        $orderby = "id";
        break;
      case 'blocks':
        $table = "icd10section";
        $field = "id, descriptions";
        $orderby = "id";
        break;
      case 'categories':
        $table = "icd10";
        $field = "id, descriptions";
        $orderby = "id";
        break;
      default:
        # code...
        break;
    }

    if($option=="categories") {
      $sqlstr = "SELECT $field FROM $table WHERE id NOT LIKE '%.%' ORDER BY $orderby ASC";
    }
    else {
      $sqlstr = "SELECT $field FROM $table ORDER BY $orderby ASC";
    }

    $hasil = $this->db->query($sqlstr);

    return $hasil;
  }

  function getheading($option)
  {
    switch ($option) {
      case 'codes':
        $heading = array("ID", "Descriptions");
        break;
      case 'chapters':
        $heading = array("ID", "Descriptions");
        break;
      case 'blocks':
        $heading = array("ID", "Descriptions");
        break;
      case 'categories':
        $heading = array("ID", "Descriptions");
        break;
      default:
        # code...
        break;
    }

    return $heading;
  }
}
