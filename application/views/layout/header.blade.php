<nav class="navbar navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema Acadêmico</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ base_url('cursos')}}">Cursos</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ base_url('disciplinas')}}">Disciplinas</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ base_url('professores')}}">Professores</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ base_url('turmas')}}">Turmas</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ base_url('alunos')}}">Alunos</span></a>
                </li>
            </ul>
        </div>
    </div>
  </nav>