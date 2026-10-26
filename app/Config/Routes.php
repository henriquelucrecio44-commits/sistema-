<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('/home','ConteudoController::index');
$routes->get('/contato','ConteudoController::contato');
$routes->get('/quemsou','ConteudoController::quemsou');
$routes->get('/produtos','ConteudoController::produtos');
$routes->get('/habilidade','ConteudoController::habilidade');
$routes->get('/falecomigo','ConteudoController::Falecomigo');

// Listagem, formulário de edição e atualização
$routes->get('conteudos','ConteudoController::listar');
$routes->get('conteudos/editar/(:num)','ConteudoController::editar/$1');
$routes->post('conteudos/atualizar/(:num)','ConteudoController::atualizar/$1');