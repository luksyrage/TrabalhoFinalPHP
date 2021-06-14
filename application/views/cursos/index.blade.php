@extends('app')

@section('content')
    <div class="container">
        @if($alerta)
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>{{ $alerta->flashdata('sucesso') }}
            </div>
        @endif
        
        <div class="row">
            <div class="col-md-12 mb-1">
                <a href="{{ base_url('cursos/form') }}" class="btn btn-primary btn-sm">Novo curso</a>
            </div>
        </div>
        <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th scope="col">Nome</th>
                <th scope="col">Periodicidade</th>
                <th scope="col">Descrição</th>
                <th scope="col">Disciplina</th>
                <th scope="col" width="150px" class="text-center" valign="middle">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($cursos as $curso)
                    <tr>
                        <td>{{ $curso->nome}}</td>
                        <td>{{ $curso->periodicidade}}</td>
                        <td>{{ $curso->descricao}}</td>
                        <td>{{ $curso->disciplina}}</td>
                        <td class="text-center">
                            <a href="{{ base_url('cursos/form/'.$curso->id) }}">Editar</a> | 
                            <a href="{{ base_url('cursos/excluir/'.$curso->id) }}">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

