@extends('app')

@section('content')
    <div class="container">
        <div class="card" style="max-width: 600px; margin: 0 auto;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de turmas</h5>
                <form action="{{ base_url('turmas/form') }}" method="POST">
                    <input type="hidden" name="id" value="{{ !empty($d->id) ? $d->id : ''}}">
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="descricao" value="{{ !empty($d->descricao) ? $d->descricao : ''}}" required>
                    </div>

                    <div class="form-group">
                        <label for="curso">Curso</label>
                        <select name="curso_id" id="curso_id" class="form-control" required>
                            @foreach ($cursos as $c)
                                <option value="{{$c->id}}" {{ (!empty($d->curso_id) && $d->curso_id == $c->id) ? 'selected' : ''}}>{{$c->nome}}</option>
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

