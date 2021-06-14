@extends('app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-1">
                <a href="{{ base_url('turmas/form') }}" class="btn btn-primary btn-sm">Nova turma</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Descriçao</th>
                <th scope="col">Curso</th>
                <th scope="col" width="150px" class="text-center" valign="middle">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($turmas as $d)
                    <tr>
                        <td>{{ $d->descricao}}</td>
                        <td>{{ $d->nome_curso}}</td>
                        <td class="text-center">
                            <a href="{{ base_url('turmas/form/'.$d->id) }}">Editar</a> | 
                            <a href="{{ base_url('turmas/excluir/'.$d->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

