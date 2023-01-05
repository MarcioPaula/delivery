<?php

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
            <p class="profile-name">Willian Santana</p>
            <div class="dropdown" data-display="static">
              <a href="#" class="nav-link d-flex user-switch-dropdown-toggler" id="UsersettingsDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <small class="designation text-muted">Gesthor</small>
                <span class="status-indicator online"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </li>
    <li class="nav-item {{ active_class(['/conectar/conectar']) }}">
      <a class="nav-link" href="{{ url('/menu/conectar') }}">
        <i class="menu-icon mdi mdi-cellphone-iphone"></i>
        <span class="menu-title">Conectar</span>
      </a>
    </li>
    <li class="nav-item {{ active_class(['/pedidos/pedidos']) }}">
        <a class="nav-link" href="{{ url('/menu/pedidos') }}">
          <i class="menu-icon mdi mdi-cart"></i>
          <span class="menu-title">Pedidos</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/dashboard/dashboard']) }}">
        <a class="nav-link" href="{{ url('/menu/dashboard') }}">
          <i class="menu-icon mdi mdi mdi-chart-bar"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/usuarios/usuarios']) }}">
        <a class="nav-link" href="{{ url('/menu/usuarios') }}">
          <i class="menu-icon mdi mdi-account-key"></i>
          <span class="menu-title">Usuários</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/produtos/produtos']) }}">
        <a class="nav-link" href="{{ url('/menu/produtos') }}">
          <i class="menu-icon mdi mdi-food"></i>
          <span class="menu-title">Produtos</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/categoria/categorias']) }}">
        <a class="nav-link" href="{{ url('/menu/categorias') }}">
          <i class="menu-icon mdi mdi-buffer"></i>
          <span class="menu-title">Categorias</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/promocoes/promocoes']) }}">
        <a class="nav-link" href="{{ url('/menu/promocoes') }}">
          <i class="menu-icon mdi mdi-bullhorn"></i>
          <span class="menu-title">Promoções</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/pagamentos/pagamentos']) }}">
        <a class="nav-link" href="{{ url('/menu/pagamentos') }}">
          <i class="menu-icon mdi mdi-square-inc-cash"></i>
          <span class="menu-title">Pagamentos</span>
        </a>
      </li>
      <li class="nav-item {{ active_class(['/fretes/fretes']) }}">
        <a class="nav-link" href="{{ url('/menu/fretes') }}">
          <i class="menu-icon mdi mdi-taxi"></i>
          <span class="menu-title">Fretes</span>
        </a>
      </li>
  </ul>
</nav>
