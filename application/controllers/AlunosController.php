<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AlunosController extends CI_Controller
{
    public $tabela = 'alunos';

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Default_model', 'default');
    }

    public function index()
    {
        $data = [
            'alunos' => $this->default->get_all_alunos($this->tabela),
        ];
        return $this->blade->view('alunos/index', $data);
    }

    public function form()
    {
        $data['turmas'] = $this->default->get_all('turmas');

        if ($this->input->post()) {
            $dados = $this->input->post();

            if (empty($this->input->post('id'))) {
                unset($dados['id']);

                $r = $this->default->insert($this->tabela, $dados);
                if ($r) {
                    redirect('alunos');
                }
            } else {
                $id = $dados['id'];
                unset($dados['id']);
                $r = $this->default->update($this->tabela, $id, $dados);
                if ($r) {
                    redirect('alunos');
                }
            }
        } elseif (!empty($this->uri->segment(3))) {
            $id = $this->uri->segment(3);
            $data['d'] = $this->default->get($this->tabela, $id);
        }


        return $this->blade->view('alunos/form', $data);
    }

    public function excluir()
    {
        if (!empty($this->uri->segment(3))) {
            $id = $this->uri->segment(3);
            $r = $this->default->delete($this->tabela, ['id' => $id]);
        }

        redirect('alunos');
    }
}
