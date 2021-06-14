<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CursosController extends CI_Controller
{
    public $tabela = 'cursos';
    public $alerta = '';

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Default_model', 'default');
    }

    public function index()
    {
        $data = [
            'cursos' => $this->default->get_all_cursos($this->tabela),
            'alerta' => $this->alerta
        ];
        return $this->blade->view('cursos/index', $data);
    }

    public function form()
    {
        $data['disciplinas'] = $this->default->get_all('disciplinas');

        if ($this->input->post()) {
            $dados = $this->input->post();

            //insert
            if (empty($this->input->post('id'))) {
                unset($dados['id']);

                $r = $this->default->insert($this->tabela, $dados);
                if ($r) {
                    redirect('cursos');
                }
            } else {
                //update
                $id = $dados['id'];
                unset($dados['id']);
                $r = $this->default->update($this->tabela, $id, $dados);
                if ($r) {
                    redirect('cursos');
                }
            }
        } elseif (!empty($this->uri->segment(3))) {
            $id = $this->uri->segment(3);
            $data['curso'] = $this->default->get($this->tabela, $id);
        }


        return $this->blade->view('cursos/form', $data);
    }

    public function excluir()
    {
        if (!empty($this->uri->segment(3))) {
            $id = $this->uri->segment(3);
            $r = $this->default->delete($this->tabela, ['id' => $id]);
        }

        redirect('cursos');
    }
}
