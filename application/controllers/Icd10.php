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
    $this->load->view('core/wrapper');
  }
}
