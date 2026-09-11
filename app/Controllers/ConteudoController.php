<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\ConteudoModel;

class ConteudoController extends BaseController
{
     public function index(): string 
    {
     $conteudoModel= new ConteudoModel();
     $dados['conteudo'] = $conteudoModel->find(3);
    
    return view ('home',$dados);
    }
 
   
 public function contato(): string 
    {
     $conteudoModel= new ConteudoModel();
     $dados['conteudo'] = $conteudoModel->find(4);
    
    return view ('contato',$dados);
    }
 public function quemsou(): string 
    {
     $conteudoModel= new ConteudoModel();
     $dados['conteudo'] = $conteudoModel->find(5);
    
    return view ('quemsou',$dados);
    }
    
 public function produtos() : string
    {
     $conteudoModel= new ConteudoModel();
     $dados['conteudo'] = $conteudoModel->find(6);
    
    return view ('produtos',$dados);
    }
  
     public function habilidade(): string 
    {
     $conteudoModel= new ConteudoModel();
     $dados['conteudo'] = $conteudoModel->find(7);
    
    return view ('habilidade',$dados);
    }

     public function Falecomigo(): string 
    {
     $conteudoModel= new ConteudoModel();
     $dados['conteudo'] = $conteudoModel->find(8);
    
    return view ('Falecomigo',$dados);
    }
}