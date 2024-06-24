@extends('dashboard.layouts.main')

@section('container')

{{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Kontak & Pendaftaran</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="/admin-kontakpendaftaran"><button type="button" class="btn btn-dark">Kelola Pesan</button></a>
    </div>
</div>

<div class="container">
    <h2>Pesan Masuk</h2>
    <!-- Isi tabel dengan data -->
    <div class="container mt-5">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
                <thead class="table-primary">
                    <tr>
                        <th>ID</th>
                        <th>Nama Lengkap</th>
                        <th>No Wa</th>
                        <th>Posisi</th>
                        <th>Pengalaman</th>
                        <th>Date</th>
                        <th data-export="false">Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    @foreach ($calonanggota as $calonanggotas)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $calonanggotas->namalengkap }}</td>
                        <td>{{ $calonanggotas->email }}</td>
                        <td>{{ $calonanggotas->posisi }}</td>
                        <td>{{ $calonanggotas->pengalaman }}</td>
                        <td>{{ $calonanggotas->created_at }}</td>
                        <td>
                            <form action="{{ route('admin-calonanggota.destroy', $calonanggotas->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <!-- Tombol Previous, Next, dan Export Excel -->
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <button id="exportBtn" class="btn btn-success">Export to Excel</button>
                <button id="prevBtn" class="btn btn-primary mr-2" disabled>Previous</button>
                <button id="nextBtn" class="btn btn-primary">Next</button>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        const table = document.querySelector(".table");
        const rows = Array.from(table.querySelectorAll("tr"));
        const itemsPerPage = 11;
        let currentPage = 0;

        function showPage(page) {
            const start = page * itemsPerPage;
            const end = start + itemsPerPage;
            rows.forEach((row, index) => {
                if (index >= start && index < end) {
                    row.style.display = "table-row";
                } else {
                    row.style.display = "none";
                }
            });
        }

        function navigatePage(direction) {
            if (direction === "prev") {
                currentPage = Math.max(0, currentPage - 1);
            } else if (direction === "next") {
                currentPage = Math.min(currentPage + 1, Math.ceil(rows.length / itemsPerPage) - 1);
            }
            showPage(currentPage);
            updateButtons();
        }

        function updateButtons() {
            const prevBtn = document.getElementById("prevBtn");
            const nextBtn = document.getElementById("nextBtn");

            prevBtn.disabled = currentPage === 0;
            nextBtn.disabled = currentPage === Math.ceil(rows.length / itemsPerPage) - 1;
        }

        document.getElementById("prevBtn").addEventListener("click", () => navigatePage("prev"));
        document.getElementById("nextBtn").addEventListener("click", () => navigatePage("next"));
        document.getElementById("exportBtn").addEventListener("click", () => {
            const data = rows.map(row => Array.from(row.querySelectorAll("td:not(:last-child):not([data-export='false']), th:not(:last-child):not([data-export='false'])")).map(cell => cell.innerText));
            const worksheet = XLSX.utils.aoa_to_sheet(data);
            const workbook = XLSX.utils.book_new();
            XLSX.utils.book_append_sheet(workbook, worksheet, 'Sheet1');
            XLSX.writeFile(workbook, 'data-calon-anggota-band.xlsx');
        });

        showPage(currentPage);
        updateButtons();
    });
</script>
@endsection
