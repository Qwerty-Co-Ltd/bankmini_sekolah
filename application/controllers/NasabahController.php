<?php

class NasabahController extends CI_Controller {

    public function index() {
        // link templates for UI Nasabah
        $this->load->view('templates/nasabah/head');
        $this->load->view('templates/nasabah/sidebar');
        $this->load->view('templates/nasabah/navbar');
        // End /link templates for UI Nasabah
        
        // link Halaman Index Nasabah
        $this->load->view('nasabah/index');
        // End /link Halaman Index Nasabah

        // link templates for UI Nasabah
        $this->load->view('templates/nasabah/footer');
        $this->load->view('templates/nasabah/scrolltop');
        $this->load->view('templates/nasabah/modal');
        $this->load->view('templates/nasabah/js');
        // End /link templates for UI Nasabah
    }
}