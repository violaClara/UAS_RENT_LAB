@extends('admin.admin_template_navbar')

@section('hello')
    <div class="card mb-3">
        <div class="bg-holder d-none d-lg-block bg-card" style="background-image:url(../../assets/img/icons/spot-illustrations/corner-4.png);"></div>
        <div class="card-body position-relative">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Selamat datang, Admin!</h3>
                    <p class="mt-2">Pastikan untuk selalu melakukan cross-check di setiap peminjaman ataupun pengembalian!</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-xxl-6 px-xxl-2">
        <div class="card h-100">
            <div class="card-header bg-light py-2">
                <div class="row flex-between-center">
                    <div class="col-auto">
                        <h6 class="mb-0" id="rekap_peminjaman">Statistik Peminjaman</h6>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <canvas id="borrowStatsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Prepare data for Chart.js
        const data = @json($data);

        // Create Bar Chart
        const ctx = document.getElementById('borrowStatsChart').getContext('2d');
        const borrowStatsChart = new Chart(ctx, {
            type: 'bar', // Bar chart
            data: {
                labels: data.labels, // X-axis labels (month-year)
                datasets: data.datasets // Datasets for each borrower type
            },
            options: {
                responsive: true,
                plugins: {
                    title: {
                        display: true,
                        text: 'Statistik Peminjaman Berdasarkan Tipe Peminjam'
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    }
                },
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Bulan-Tahun'
                        },
                        grid: {
                            display: false
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'Jumlah Peminjaman'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
