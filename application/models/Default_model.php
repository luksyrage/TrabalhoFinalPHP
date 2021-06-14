<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Default_model extends CI_Model
{

	function get_all($tabela)
	{
		return $this->db->get($tabela)->result();
		// $this->db->join('disciplinas d', 'd.id = c.disciplina_id');
		// return $this->db->get('cursos c')->result();
	}

	function get_by($tabela, $by)
	{
		return $this->db->get_where($tabela, $by)->result();
	}

	function count_all($tabela, $by)
	{
		$this->db->from($tabela);
		$this->db->where($by);
		return $this->db->count_all_results();
	}

	function get($tabela, $id, $id_tabela = "id")
	{
		return $this->db->get_where($tabela, [$id_tabela => $id])->first_row();
	}

	function insert($tabela, $dados)
	{
		return $this->db->insert($tabela, $dados);
	}

	function last_id($tabela)
	{
		$this->db->select_max('id');
		return $this->db->get($tabela)->first_row();
	}

	function update($tabela, $id, $dados, $id_tabela = "id")
	{
		$this->db->where($id_tabela, $id);
		return $this->db->update($tabela, $dados);
	}

	function delete($tabela, $where)
	{
		if ($where != '')
			$this->db->where($where);
		return $this->db->delete($tabela);
	}

	function deleteAll($tabela)
	{
		return $this->db->query('DELETE FROM ' . $tabela);
	}

	// Turmas
	function get_all_turmas()
	{
		$this->db->select('t.*, c.nome as nome_curso');
		$this->db->join('cursos c', 'c.id = t.curso_id');
		return $this->db->get('turmas t')->result();
	}

	//Alunos
	function get_all_alunos()
	{
		$this->db->select('a.*, t.descricao as turma');
		$this->db->join('turmas t', 't.id = a.turma_id');
		return $this->db->get('alunos a')->result();
	}

	//Cursos
	function get_all_cursos()
	{
		$this->db->select('c.*, d.nome as disciplina');
		$this->db->join('disciplinas d', 'd.id = c.disciplina_id');
		return $this->db->get('cursos c')->result();
	}
}
