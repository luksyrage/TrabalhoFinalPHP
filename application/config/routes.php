<?php
defined('BASEPATH') or exit('No direct script access allowed');


$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['default_controller'] = 'CursosController';
$route['cursos'] = 'CursosController';
$route['cursos/form'] = 'CursosController/form';
$route['cursos/form/(:num)'] = 'CursosController/form/$1';
$route['cursos/excluir/(:num)'] = 'CursosController/excluir/$1';

$route['disciplinas'] = 'DisciplinasController';
$route['disciplinas/form'] = 'DisciplinasController/form';
$route['disciplinas/form/(:num)'] = 'DisciplinasController/form/$1';
$route['disciplinas/excluir/(:num)'] = 'DisciplinasController/excluir/$1';

$route['professores'] = 'ProfessoresController';
$route['professores/form'] = 'ProfessoresController/form';
$route['professores/form/(:num)'] = 'ProfessoresController/form/$1';
$route['professores/excluir/(:num)'] = 'ProfessoresController/excluir/$1';

$route['turmas'] = 'TurmasController';
$route['turmas/form'] = 'TurmasController/form';
$route['turmas/form/(:num)'] = 'TurmasController/form/$1';
$route['turmas/excluir/(:num)'] = 'TurmasController/excluir/$1';

$route['alunos'] = 'AlunosController';
$route['alunos/form'] = 'AlunosController/form';
$route['alunos/form/(:num)'] = 'AlunosController/form/$1';
$route['alunos/excluir/(:num)'] = 'AlunosController/excluir/$1';
