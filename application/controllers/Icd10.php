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
    // belum pakai ajax
    $option = "chapters";
    $data['hasil'] = $this->Model->getdata($option);
    $data['heading'] = $this->Model->getheading($option);

    ob_start();
      $this->load->view("main_content/table", $data);
      $data['table'] = ob_get_contents();
    ob_end_clean();

    $data['content'] = "main_content/home";
    $this->load->view('core/wrapper', $data);
  }

  function getTable()
  {
    $option = $this->input->post('option');
    $data['hasil'] = $this->Model->getdata($option);
    $data['heading'] = $this->Model->getheading($option);

    ob_start();
      $this->load->view("main_content/table", $data);
      $data['table'] = ob_get_contents();
    ob_end_clean();

    echo json_encode([
      'hasil' => $data['table']
    ]);
  }
}
