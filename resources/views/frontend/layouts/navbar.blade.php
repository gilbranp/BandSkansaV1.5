<nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
      <li><a class="nav-link scrollto" href="#about">Profil Band</a></li>
      <li><a class="nav-link scrollto" href="#services">Jadwal Latihan</a></li>
      <li><a class="nav-link scrollto " href="#work">Galeri</a></li>
      <li><a class="nav-link scrollto " href="#blog">Blog</a></li>
      <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
      {{-- <li class="nav-item login-menu" style="padding-left: 15rem">
        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
      </li> --}}

      {{-- @auth
      <li class="nav-item dropdown" style="padding-left: 15rem">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Selamat datang, {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu" style="margin-right: 15rem">
          <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
          <li><hr class="dropdown-divider"></li>
          <li>
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i>Keluar</button>
            </form>
            
          </li>
        </ul>
      </li>
      @else
      <li class="nav-item login-menu" style="padding-left: 15rem">
        <a href="/login" class="nav-link"><i class="bi bi-box-arrow-in-right"></i>Login</a>
      </li>
      @endauth --}}
     

    </ul>

    <i class="bi bi-list mobile-nav-toggle"></i>

  </nav>