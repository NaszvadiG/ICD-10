<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller for ICD-10 Web Application
 */
class Icd10 extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('Icd10_model', 'Model');
  }

  function index()
  {
    $data['content'] = "main_content/home";
    $this->load->view('core/wrapper', $data);
  }

  function getTable($option)
  {
    $data['hasil'] = $this->Model->getdata($option);

    echo json_encode([
      "data" => $data['hasil']
    ]);
  }

  function initTable()
  {
    ob_start();
      $this->load->view("main_content/table");
      $html = ob_get_contents();
    ob_end_clean();

    echo $html;
  }
}
