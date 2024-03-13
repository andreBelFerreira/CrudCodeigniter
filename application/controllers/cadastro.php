<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cadastro extends CI_Controller
{
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('v_cadastro');
        $this->load->view('includes/footer');
    }

    public function cadastrar()
    {
        $teste = $this->input->post();

        echo "<pre>";
        print_r($teste);
        echo "</pre>";
        exit;

        $this->load->model('M_cadastrar');
        $retorno = $this->m_cadastrar->cadastrar();
        echo json_encode($retorno);
    }
}
