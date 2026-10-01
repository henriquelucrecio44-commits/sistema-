<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{

// Em app/Controllers/BaseController.php (ou dentro do seu Controller específico)
protected $helpers = ['url'];

    public function index(): string
    {
      
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(1);

        return view('home', $dados); 
    }

    public function contato(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(2);
        
        return view('contato', $dados); 
    }   

    public function quemsou(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(4);
        
        return view('quemsou', $dados); 
    }   

    public function produtos(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(4); 
        return view('produtos', $dados); 
    }

    public function falecomigo(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(4); 
        return view('falecomigo', $dados); 
    }

    public function habilidade(): string
    {
        $conteudoModel = new ConteudoModel();
        $dados['conteudo'] = $conteudoModel->find(4); 
        return view('habilidade', $dados); 
    }
}

