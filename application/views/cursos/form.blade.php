@extends('app')

@section('content')
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de curso</h5>
                <form action="{{ base_url('cursos/form') }}" method="POST">
                    <input type="hidden" name="id" value="{{ !empty($curso->id) ? $curso->id : ''}}">
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" name="nome" id="nome" value="{{ !empty($curso->nome) ? $curso->nome : ''}}" required>
                    </div>

                    <div class="form-group">
                        <label for="periodicidade">Periodicidade</label>
                        <input type="text" class="form-control" name="periodicidade" id="periodicidade" value="{{ !empty($curso->periodicidade) ? $curso->periodicidade : ''}}" required>
                    </div>

                    <div class="form-group">
                        <label for="disciplina">Disciplina</label>
                        <select name="disciplina_id" id="disciplina_id" class="form-control" required>
                            @foreach ($disciplinas as $d)
                                <option value="{{$d->id}}" {{ (!empty($c->disciplina_id) && $c->disciplina_id == $d->id) ? 'selected' : ''}}>{{$d->nome}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea type="text" class="form-control" name="descricao" id="descricao" rows="5">{{ !empty($curso->descricao) ? $curso->descricao : ''}}</textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

