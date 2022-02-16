<header>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a id="logo" class="navbar-brand" href="{{ route('home') }}"> <img src="/images/frontend/logo.png" alt="" class="logo_header" style="width: 50%  !important;"> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php 
            $categoria1=1;
            $categoria2=2;
            $categoria3=3;
            $categoria4=4;
            $categoria5=5;
            $categoria6=6;
            ?>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
           
                    @if(empty(Auth::user()->id))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Ingresá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Creá tu cuenta</a>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="far fa-user-circle"></i> {{Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('profile') }}"> <i class="fas fa-user-circle"></i> Ver Perfil</a>
                        <a class="dropdown-item" href="{{ route('publish') }}"> <i class="fas fa-upload"></i> Publicar</a>
                        <a class="dropdown-item" href="{{ route('edit_profile') }}"><i class="fas fa-edit"></i> Editar perfil</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog"></i> Configuración</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('logout') }}"> <i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                        </div>
                    </li>
                    @endif
               

                </ul>
            </div>
        </div>
    </nav>
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('category',$categoria1) }}">Inmuebles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category',$categoria6) }}">Vehículos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category',$categoria2) }}">Maquinarias</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category',$categoria3) }}">Electrónica</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category',$categoria4) }}">Antiguedades</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('category',$categoria5) }}">Monedas</a>
        </li>
    </ul>
</header>



<style>
    #navbarDropdown{
        font-size:20px;
        /* font-weight: bold; */
    }
    #logo{
        font-size:20px;
    }
    .logo_header{
        position: inherit!important;
    }
</style>