<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
    <div class="container">        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>            
        </button>      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link" href="http://mocelinmoraes.com.br/mocelinAdv/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/quem-somos') }}">Quem Somos</a>
                </li> 
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/areas-de-atuacao') }}">Áreas de atuação</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/equipe') }}">Equipe</a>
                </li>            
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="publicacoes" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Publicações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/publicacoes/artigos') }}">Artigos</a>
                        <a class="dropdown-item" href="{{ url('/publicacoes/noticias') }}">Notícias</a>
                    </div>
                </li>
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">                            
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                    </form>     
                <!--<li class="nav-item">
                    <a class="nav-link" href="contato">Contato</a>
                </li>-->  
            </ul>          
        </div>
    <div>
</nav>



