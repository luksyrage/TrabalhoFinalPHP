@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-1">
                <a href="{{ base_url('disciplinas/form') }}" class="btn btn-primary btn-sm">Nova disciplinas</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Carga Horária</th>
                <th scope="col">Ementa</th>
                <th scope="col" width="150px" class="text-center" valign="middle">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($disciplinas as $d)
                    <tr>
                        <td>{{ $d->nome}}</td>
                        <td>{{ $d->carga_horaria}}</td>
                        <td>{{ $d->ementa}}</td>
                        <td class="text-center">
                            <a href="{{ base_url('disciplinas/form/'.$d->id) }}">Editar</a> | 
                            <a href="{{ base_url('disciplinas/excluir/'.$d->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

