<?php

session_start();

// For add'active' class for activated route nav-item
function active_class($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

// For checking activated route
function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

// For add 'show' class for activated route collapse
function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}?>


<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
        <div class="user-wrapper">
          <div class="profile-image">
            <img src="{{ url('assets/images/faces/face9.jpg') }}" alt="profile image">
          </div>
          <div class="text-wrapper">
            <p class="profile-name">{{Session::all()['nome_usuario']}}</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">{{Session::all()['nome_empresa']}}</small>
                <span class="status-indicator online"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/conectar']) }}">
      <a class="nav-link" href="{{ url('/conectar') }}">
        <i class="menu-icon mdi mdi-cellphone-iphone"></i>
        <span class="menu-title">Conectar</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['/pedidos']) }}">
        <a class="nav-link" href="{{ url('/pedidos') }}">
          <i class="menu-icon mdi mdi-cart"></i>
          <span class="menu-title">Pedidos</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/dashboard']) }}">
        <a class="nav-link" href="{{ url('/dashboard') }}">
          <i class="menu-icon mdi mdi mdi-chart-bar"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/usuarios']) }}">
        <a class="nav-link" href="{{ url('/usuarios') }}">
          <i class="menu-icon mdi mdi-account-key"></i>
          <span class="menu-title">Usuários</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/produtos']) }}">
        <a class="nav-link" href="{{ url('/produtos') }}">
          <i class="menu-icon mdi mdi-food"></i>
          <span class="menu-title">Produtos</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/categorias']) }}">
        <a class="nav-link" href="{{ url('/categorias') }}">
          <i class="menu-icon mdi mdi-buffer"></i>
          <span class="menu-title">Categorias</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/promocoes']) }}">
        <a class="nav-link" href="{{ url('/promocoes') }}">
          <i class="menu-icon mdi mdi-bullhorn"></i>
          <span class="menu-title">Promoções</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/pagamentos']) }}">
        <a class="nav-link" href="{{ url('/pagamentos') }}">
          <i class="menu-icon mdi mdi-square-inc-cash"></i>
          <span class="menu-title">Pagamentos</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/fretes']) }}">
        <a class="nav-link" href="{{ url('/fretes') }}">
          <i class="menu-icon mdi mdi-taxi"></i>
          <span class="menu-title">Fretes</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/suporte']) }}">
        <a class="nav-link" href="{{ url('/suporte') }}">
          <i class="menu-icon mdi mdi-wrench"></i>
          <span class="menu-title">Suporte</span>
        </a>
      </li>
  </ul>
</nav>
