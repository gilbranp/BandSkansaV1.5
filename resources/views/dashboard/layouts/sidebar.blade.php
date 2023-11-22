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
              <svg class="bi"><use xlink:href="#cart"/></svg>
              Jadwal Latihan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-pengelolaankonten">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Pengelolaan Konten
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-kontakpendaftaran">
              <svg class="bi"><use xlink:href="#graph-up"/></svg>
               Kontak & Pendaftaran
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-laporan">
              <svg class="bi"><use xlink:href="#puzzle"/></svg>
              Laporan & Analis
            </a>
          </li>
        </ul>

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/admin-pengaturan">
              <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
              Pengaturan
            </a>
          </li>

          <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link d-flex align-items-center gap-2"><i class="bi bi-box-arrow-right">
              </i>Keluar
              </button>
          </form>

        </ul>
      </div>
    </div>
  </div>