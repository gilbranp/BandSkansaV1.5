<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">Band Skansa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/admin-dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-anggota">
              <svg class="bi"><use xlink:href="#people"/></svg>
               Management Anggota
            </a>
          </li> 
          
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-jadwal">
              <svg class="bi"><use xlink:href="#calendar3"/></svg>
              Jadwal Latihan
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-prestasi">
                <i style="color: black" class="fas fa-trophy"></i>
                Prestasi
            </a>
        </li>
        

          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-pengelolaankonten">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Pengelolaan Konten
            </a>
          </li>

          {{-- @can('superadmin') --}}
            
         
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-kontakpendaftaran">
              <svg class="bi"><use xlink:href="#plus-circle"/></svg>
               Kontak & Pendaftaran
            </a>
          </li>

           {{-- @endcan --}}

           @can('superadmin')
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-laporan">
              <svg class="bi"><use xlink:href="#graph-up"/></svg>
              Laporan & Analis
            </a>
          </li>
          @endcan
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/presensi">
              <i class="bi bi-card-checklist text-dark"></i>
               Presensi
            </a>
          </li>
        </ul>
          
        <hr class="my-3">

        <ul class="nav flex-column mb-auto">

          @can('superadmin')
          
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-pengaturan">
              <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
              Pengaturan
            </a>
          </li>

          @endcan

          <a class="link-underline link-underline-opacity-0" href="/logout">
              <button type="submit" class="nav-link d-flex align-items-center gap-2"><i class="bi bi-box-arrow-right">
              </i>Keluar
              </button>
          </a>
        </ul>
      </div>
    </div>
  </div>