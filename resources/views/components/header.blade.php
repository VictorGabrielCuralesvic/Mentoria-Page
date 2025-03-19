<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Mentoria</h1>
      </a>
  
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ url('/') }}" class="active">Inicio</a></li>
          <li><a href="{{ url('/about') }}">Sobre</a></li>
          <li><a href="{{ url('/courses') }}">Cursos</a></li>
          <li><a href="{{ url('/trainers') }}">Professores</a></li>
          <li><a href="{{ url('/events') }}">Eventos</a></li>
          <li><a href="{{ url('/pricing') }}">Preços</a></li>
          <li class="dropdown">
            <a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown">
                <a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="{{ url('/contact') }}">Contato</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
  
      <a class="btn-getstarted" href="{{ url('/courses') }}">Comece Aqui</a>
    </div>
  </header>