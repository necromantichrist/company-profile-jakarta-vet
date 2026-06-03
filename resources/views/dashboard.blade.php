@extends('layouts.admin')

@section('content')

<!-- Memanggil aset CSS kustom khusus dashboard via Vite -->
@vite('resources/css/admin-dashboard.css')

<main class="dashboard-wrapper">
    
    <!-- HEADER DASHBOARD -->
    <header class="dashboard-header">
        <h1 class="dashboard-title">Dashboard Overview</h1>
        <div class="dashboard-subtitle">Selamat datang kembali di panel admin Jakarta Top Dogs.</div>
    </header>

    <!-- STATISTIK CARDS GRID -->
    <section class="row">

        <!-- Card: Total News -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card shadow stat-card">
                <div class="card-body">
                    <div class="stat-icon-box">
                        📰
                    </div>
                    <div class="stat-content">
                        <span class="stat-number">{{ \App\Models\News::count() }}</span>
                        <h2 class="stat-label">Total News</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tambahkan card lain di masa depan di sini jika diperlukan -->

    </section>

</main>

@endsection