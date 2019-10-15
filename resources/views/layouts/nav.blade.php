<nav id="nav-principal" class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  
    <a class="navbar-brand" href="#">
      <img src="{{ asset('images/logo_blanco.png') }}" height="30" alt="">
    </a>
    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse collapse" id="navbarsExample09">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <img src="{{ asset('images/perfil.png') }}" alt="" height="32"> 
            <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a id="link-events" class="nav-link" href="#">Más eventos</a>            
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="dropdown-languages" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('images/idioma_esp.png') }}" alt="" height="14"> Esp
            <img src="{{ asset('images/abrir_panel.png') }}" alt="" height="7">
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdown-languages">
            <a class="dropdown-item active" href="#">
              <img src="{{ asset('images/idioma_esp.png') }}" alt="" height="14"> Esp
            </a>
            <a class="dropdown-item" href="#">
              <img src="{{ asset('images/idioma_ing.png') }}" alt="" height="14"> Ing
            </a>
            <a class="dropdown-item" href="#">
              <img src="{{ asset('images/idioma_cat.png') }}" alt="" height="14"> Cat
            </a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="dropdown-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset('images/menu.png') }}" alt="" height="14">
          </a>
          <div class="dropdown-menu" aria-labelledby="dropdown-menu">
            <a class="dropdown-item active" href="#">¿Porqué Lofinn?</a>
            <a class="dropdown-item" href="#pag-2">Testimonios</a>
            <a class="dropdown-item" href="#pag-3">¿Dejarás pasar esta oportunidad?</a>
          </div>
        </li>
      </ul>        
    </div>

  </div>
</nav>
