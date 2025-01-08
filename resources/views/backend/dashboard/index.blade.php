@extends('backend.layout.master')

@section('content')
<section class="hero-section d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="custom-block bg-white shadow-lg p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">Daftar Buku yang Dipinjam</h4>
                        <div>
                            <button class="btn btn-outline-primary btn-sm">
                                <i class="bi bi-download me-1"></i> Unduh Laporan
                            </button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="custom-block bg-primary bg-gradient text-white mb-4 p-4 rounded-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2 text-white-50">Total Buku</p>
                                        <h4 class="mb-0 fw-bold">2,456</h4>
                                        <small class="text-white-50"><i class="bi bi-arrow-up"></i> +12% bulan ini</small>
                                    </div>
                                    <div class="avatar">
                                        <span class="avatar-title bg-white bg-opacity-25 rounded-circle">
                                            <i class="bi bi-book fs-3"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="custom-block bg-success bg-gradient text-white mb-4 p-4 rounded-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2 text-white-50">Buku Dipinjam</p>
                                        <h4 class="mb-0 fw-bold">1,235</h4>
                                        <small class="text-white-50"><i class="bi bi-arrow-up"></i> +5% bulan ini</small>
                                    </div>
                                    <div class="avatar">
                                        <span class="avatar-title bg-white bg-opacity-25 rounded-circle">
                                            <i class="bi bi-journal-text fs-3"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="custom-block bg-warning bg-gradient text-white mb-4 p-4 rounded-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2 text-white-50">Buku Tersedia</p>
                                        <h4 class="mb-0 fw-bold">4,145</h4>
                                        <small class="text-white-50"><i class="bi bi-arrow-up"></i> +8% bulan ini</small>
                                    </div>
                                    <div class="avatar">
                                        <span class="avatar-title bg-white bg-opacity-25 rounded-circle">
                                            <i class="bi bi-bookshelf fs-3"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="custom-block bg-danger bg-gradient text-white mb-4 p-4 rounded-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <p class="mb-2 text-white-50">Total Peminjam</p>
                                        <h4 class="mb-0 fw-bold">12,456</h4>
                                        <small class="text-white-50"><i class="bi bi-arrow-up"></i> +15% bulan ini</small>
                                    </div>
                                    <div class="avatar">
                                        <span class="avatar-title bg-white bg-opacity-25 rounded-circle">
                                            <i class="bi bi-people fs-3"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-8">
                            <div class="custom-block bg-white shadow-sm border rounded-3 mb-4 p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="mb-0">Statistik Peminjaman</h5>
                                    <div class="btn-group">
                                        <button class="btn btn-outline-secondary btn-sm active">Mingguan</button>
                                        <button class="btn btn-outline-secondary btn-sm">Bulanan</button>
                                    </div>
                                </div>
                                <canvas id="visitorChart" height="300"></canvas>
                            </div>
                        </div>
                        
                        <div class="col-xl-4">
                            <div class="custom-block bg-white shadow-sm border rounded-3 mb-4 p-4">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h5 class="mb-0">Aktivitas Peminjaman</h5>
                                    <a href="#" class="text-decoration-none">Lihat Semua</a>
                                </div>
                                <div class="activity-stream">
                                    <div class="activity-item d-flex align-items-center mb-3 pb-3 border-bottom">
                                        <div class="activity-icon me-3">
                                            <span class="avatar-sm bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-plus-lg"></i>
                                            </span>
                                        </div>
                                        <div class="activity-content">
                                            <p class="mb-0 fw-medium">John Doe meminjam buku "Harry Potter"</p>
                                            <small class="text-muted">2 menit yang lalu</small>
                                        </div>
                                    </div>
                                    <div class="activity-item d-flex align-items-center mb-3 pb-3 border-bottom">
                                        <div class="activity-icon me-3">
                                            <span class="avatar-sm bg-success bg-opacity-10 text-success rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-check-lg"></i>
                                            </span>
                                        </div>
                                        <div class="activity-content">
                                            <p class="mb-0 fw-medium">Jane Smith mengembalikan buku "Lord of The Rings"</p>
                                            <small class="text-muted">5 menit yang lalu</small>
                                        </div>
                                    </div>
                                    <div class="activity-item d-flex align-items-center">
                                        <div class="activity-icon me-3">
                                            <span class="avatar-sm bg-warning bg-opacity-10 text-warning rounded-circle d-flex align-items-center justify-content-center">
                                                <i class="bi bi-exclamation-lg"></i>
                                            </span>
                                        </div>
                                        <div class="activity-content">
                                            <p class="mb-0 fw-medium">Buku "The Hobbit" melewati batas waktu peminjaman</p>
                                            <small class="text-muted">10 menit yang lalu</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Inisialisasi grafik peminjaman
    var ctx = document.getElementById('visitorChart').getContext('2d');
    var visitorChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun'],
            datasets: [{
                label: 'Peminjaman',
                data: [1500, 2000, 1800, 2500, 2200, 2800],
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1,
                fill: true,
                backgroundColor: 'rgba(75, 192, 192, 0.1)'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        borderDash: [2, 2]
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
</script>
@endpush
