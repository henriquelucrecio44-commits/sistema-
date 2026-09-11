<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\contatoModel;

class ContatoController extends BaseController
{
    
     public function index(): string 
    {
     $contatoModel= new ContatoModel();
     $dados['contato'] = $contatoModel->find(4);
    
    return view ('contato',$dados);
    }


    
}
