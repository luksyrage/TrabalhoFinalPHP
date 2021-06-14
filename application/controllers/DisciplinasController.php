<?php
defined('BASEPATH') or exit('No direct script access allowed');

class DisciplinasController extends CI_Controller
{
    public $tabela = 'disciplinas';
    public $alerta = '';

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Default_model', 'default');
    }

    public function index()
    {
        $data = [
            'disciplinas' => $this->default->get_all($this->tabela),
            'alerta' => $this->alerta
        ];
        return $this->blade->view('disciplinas/index', $data);
    }

    public function form()
    {
        $data = [];

        if ($this->input->post()) {
            $dados = $this->input->post();

            if (empty($this->input->post('id'))) {
                unset($dados['id']);

                $r = $this->default->insert($this->tabela, $dados);
                if ($r) {
                    redirect('disciplinas');
                }
            } else {
                $id = $dados['id'];
                unset($dados['id']);
                $r = $this->default->update($this->tabela, $id, $dados);
                if ($r) {
                    redirect('disciplinas');
                }
            }
        } elseif (!empty($this->uri->segment(3))) {
            $id = $this->uri->segment(3);
            $data['d'] = $this->default->get($this->tabela, $id);
        }


        return $this->blade->view('disciplinas/form', $data);
    }

    public function excluir()
    {
        if (!empty($this->uri->segment(3))) {
            $id = $this->uri->segment(3);
            $r = $this->default->delete($this->tabela, ['id' => $id]);
        }

        redirect('disciplinas');
    }
}
