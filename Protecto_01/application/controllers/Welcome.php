<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("usuario");
    }

    public function pagina1() {
        $this->load->view('Usuario/pagina1');
    }

    public function login() {

        $rut = $this->input->post("rut");
        $clave = $this->input->post("clave");
        $user = $this->usuario->login($rut, $clave);

        if (count($user) > 0) {
            $this->session->set_userdata("usuario", $user);
            echo json_encode(array("msg" => "pagina1"));
        } else {
            echo json_encode(array("msg" => "0"));
        }
    }

    public function index() {
        $this->load->view('navbar');
        $this->load->view('login');
        $this->load->view('footer');
    }

    public function perfiles() {
        echo json_encode($this->usuario->perfiles());
    }

}
