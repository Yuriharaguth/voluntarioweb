<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ url('/') }}">Voluntarios</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ url('/') }}">Home</a></li>
        <li><a href="{{ route('sobre') }}">Sobre</a></li>
        <li><a href="{{ route('contato') }}">Contato</a></li>
        <li><a href="{{ route('volunteer.index') }}">Voluntários</a></li>
        <li><a href="{{ route('cause.index') }}">Causas</a></li>
        <li><a href="{{ route('institution.index') }}">Instituições</a></li>
      </ul>
      <ul>
        <li>
            @if(Auth::check())
              <p class="navbar-text">Bem vindo {{Auth::user()->name}}-<a href="{{url('/auth/logout')}}">Logoff</a></p>
            @else
              <p><a href="{{url('/auth/login')}}">Efetuar Login</a></p>
            @endif
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>