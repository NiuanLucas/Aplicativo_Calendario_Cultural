<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MainController
 *
 * @author matheus
 */
class Main extends CI_Controller
{
    public function __construct() 
    {
        parent::__construct();
        $this->load->model('regioes');
        $this->load->model('evento');
        $this->load->library('session');

    }
    
    public function index()
    {
        $data['eventos'] = array_slice($this->evento->pegar_todos_param(array()), -5, 5);
        $data['regioes'] = $this->regioes->pegar_todas();
        $data['cidades'] = $this->regioes->pegar_cidades();
        
        foreach($data['cidades'] as $cidade) {
            $cidade->regiao = $this->regioes->pegar_todas(array('id' => $cidade->regiao))[0];
        }
        //$data['user'] = $this->session->userdata('usuario');
        //$data['regioes'] = $this->regioes->pegar_todas();
        $this->load->view('header');
        $this->load->view('home', $data);        
        $this->load->view('footer');
    }
    
    public function regioes()
    {
        $data["regioes"] = $this->regioes->pegar_todas();
        $data["prefix"] = 'regioes/';
        $this->load->view('header');
        $this->load->view('menu_regioes', $data);        
        $this->load->view('footer');
    }
    
    public function cidades_regiao($regiao)
    {
        $data["cidades"] = $this->regioes->pegar_cidades_regiao($regiao);
        $this->load->view('header');
        $this->load->view('menu_cidades', $data);        
        $this->load->view('footer');
    }
    
    
    public function tipos($cidade)
    {
        $data["tipos"] = $this->evento->pegar_tipos_disponiveis($cidade);
        $data["cidade"] = $cidade;
        
        $this->load->view('header');
        $this->load->view('menu_tipos', $data);        
        $this->load->view('footer');
    }
    
    
    public function eventos($cidade, $tipo)
    {
        $data['eventos'] = $this->evento->pegar_todos_param(array('cidade' => $cidade, 'tipo' => $tipo));
        $data['relacionados'] = $this->evento->eventos_regiao($cidade);
        $this->load->view('header');
        $this->load->view('menu_eventos', $data);        
        $this->load->view('footer');
    }
    
    
    public function cidades()
    {
        $data['cidades'] = $this->regioes->pegar_cidades();
        
        $this->load->view('header');
        $this->load->view('menu_cidades', $data);        
        $this->load->view('footer');
    }
    
    public function busca()
    {
        $data['cidades'] = $this->regioes->pegar_cidades_like(array('nome' => $_GET['cidade']));
        
        $this->load->view('header');
        $this->load->view('menu_cidades', $data);        
        $this->load->view('footer');
    }
    
    public function erro()
    {
        $this->load->view('header');
        $this->load->view('error_evento');        
        $this->load->view('footer');
    }
}
