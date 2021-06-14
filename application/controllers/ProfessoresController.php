<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProfessoresController extends CI_Controller
{
    public $tabela = 'professores';

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Default_model', 'default');
    }

    public function index()
    {
        $data = [
            'professores' => $this->default->get_all($this->tabela),
        ];
        return $this->blade->view('professores/index', $data);
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
                    redirect('professores');
                }
            } else {
                $id = $dados['id'];
                unset($dados['id']);
                $r = $this->default->update($this->tabela, $id, $dados);
                if ($r) {
                    redirect('professores');
                }
            }
        } elseif (!empty($this->uri->segment(3))) {
            $id = $this->uri->segment(3);
            $data['d'] = $this->default->get($this->tabela, $id);
        }


        return $this->blade->view('professores/form', $data);
    }

    public function excluir()
    {
        if (!empty($this->uri->segment(3))) {
            $id = $this->uri->segment(3);
            $r = $this->default->delete($this->tabela, ['id' => $id]);
        }

        redirect('professores');
    }
}
