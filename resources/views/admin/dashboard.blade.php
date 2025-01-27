@extends('layouts.admin')

@section('maincontent')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-3">
                    <!-- Card Penghuni -->
                    <div class="card shadow text-center mb-4">
                        <div class="card-body">
                            <i class="ph-users-three fs-1 text-primary mb-2"></i>
                            <h4 class="card-title">Penghuni</h4>
                            <h3 class="fw-bold"><span class="counter-value" data-target="0">0</span></h3>
                            <p class="text-muted">Total Penghuni</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- Card Semua Kamar -->
                    <div class="card shadow text-center mb-4">
                        <div class="card-body">
                            <i class="ph-house fs-1 text-primary mb-2"></i>
                            <h4 class="card-title">Semua Kamar</h4>
                            <h3 class="fw-bold"><span class="counter-value" data-target="0">0</span></h3>
                            <p class="text-muted">Total Kamar</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- Card Fasilitas -->
                    <div class="card shadow text-center mb-4">
                        <div class="card-body">
                            <i class="ph-building fs-1 text-primary mb-2"></i>
                            <h4 class="card-title">Fasilitas</h4>
                            <h3 class="fw-bold"><span class="counter-value" data-target="8">8</span></h3>
                            <p class="text-muted">Total Fasilitas</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <!-- Card Kamar Tersedia -->
                    <div class="card shadow text-center mb-4">
                        <div class="card-body">
                            <i class="ph-check-square fs-1 text-primary mb-2"></i>
                            <h4 class="card-title">Kamar Tersedia</h4>
                            <h3 class="fw-bold"><span class="counter-value" data-target="5">5</span></h3>
                            <p class="text-muted">Kamar Tersedia</p>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->

            <div class="row mt-4">
                <div class="col-md-12">
                    <!-- Chart Pembayaran -->
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Chart Pembayaran Kos dan Lain-Lain Tahun 2024</h4>
                        </div>
                        <div class="card-body">
                            <div id="payment-chart" style="height: 350px;"></div>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->

        </div><!-- end container-fluid -->
    </div><!-- end page-content -->
</div><!-- end main-content -->

@push('scripts')
<script>
    // Script untuk menginisialisasi grafik menggunakan ApexCharts
    var options = {
        series: [{
            name: 'Pembayaran',
            data: [30, 40, 35, 50, 49, 60, 70, 91, 125]
        }],
        chart: {
            type: 'line',
            height: 350
        },
        xaxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep']
        }
    };

    var chart = new ApexCharts(document.querySelector("#payment-chart"), options);
    chart.render();
</script>
@endpush

<!-- Footer -->
<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Steex.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Team 1
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection