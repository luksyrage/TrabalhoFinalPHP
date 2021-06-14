@extends('app')

@section('content')
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de alunos</h5>
                <form action="{{ base_url('alunos/form') }}" method="POST">
                    <input type="hidden" name="id" value="{{ !empty($d->id) ? $d->id : ''}}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ !empty($d->nome) ? $d->nome : ''}}" required>
                    </div>

                    <div class="form-group">
                        <label for="turma_id">Turmas</label>
                        <select name="turma_id" id="turma_id" class="form-control" required>
                            @foreach ($turmas as $t)
                                <option value="{{$t->id}}" {{ (!empty($d->turma_id) && $d->turma_id == $t->id) ? 'selected' : ''}}>{{$t->descricao}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

