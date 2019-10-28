<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bebas extends CI_Controller
{
   function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
   }
   public function index()
   {
      $this->load->view('bebasView');
   }

   public function next()
   {
      $this->load->view('V_pageLain');
   }
}
