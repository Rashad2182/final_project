@extends('back.layouts.master')

@section('title')
    Əsas Panel
@endsection

@section('css')
    <style>
        body{
            background-color: #000000;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-12 col-md-3 mb-8">
            <div class="card shadow-lg border-0 rounded-4 h-100"
                 style="backdrop-filter: blur(10px); background-color: white; color: black;">
            <div class="card-body">
                <h6 class="fw-bold">Sayt Ziyarətləri</h6>
                <h3 class="fw-bold mt-2">{{ number_format($totalVisitors ?? 0) }}</h3>

                <div class="d-flex justify-content-between mt-2">
                <div>
                    <small style="font-size: 0.75rem;">Bu gün</small>
                    <h6 class="mb-0">{{ number_format($todayVisitors ?? 0) }}</h6>
                </div>
                    <div>
                        <small style="font-size: 0.75rem;">Dünən</small>
                        <h6 class="mb-0">{{ number_format($yesterdayVisitors ?? 0) }}</h6>
                    </div>
                    <div>
                        <small style="font-size: 0.75rem;">Artım</small>
                        <h6 class="{{ ($growthPercentage ?? 0) >= 0 ? 'text-success' : 'text-danger' }} fw-bold mb-0">{{ ($growthPercentage ?? 0) >= 0 ? '+' : '' }}{{ number_format($growthPercentage ?? 0, 1) }}
                            %</h6>
                    </div>
                </div>

                <div class="progress mt-2" style="height: 5px;">
                <div class="progress-bar bg-info"
                         style="width: {{ min(100, max(0, $progressPercentage ?? 0)) }}%"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-md-5 mb-8">
    <div class="card shadow-lg border-0 rounded-4 h-100 bg-gradient"
             style="background-color: white; color: black">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h3 class="card-title mb-0">
                        <i class="bi bi-graph-up-arrow me-2"></i> Traffic Summary
                    </h3>
                    <span class="badge bg-light text-dark px-3 py-2 rounded-pill">{{ date('Y') }}</span>
                </div>

                <div style="position: relative; height: 250px; width: 100%;">
                    <canvas id="chart-mentions" class="chart-lg"></canvas>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>

        const ctx = document.getElementById('chart-mentions').getContext('2d');

        const gradient = ctx.createLinearGradient(0, 0, 0, 300);
        gradient.addColorStop(0, 'rgba(13, 110, 253, 0.3)');
        gradient.addColorStop(1, 'rgba(13, 110, 253, 0.0)');

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
                datasets: [{
                    label: 'Ziyarətçilər',
                    data: [
                        {{ $monthlyVisitors[0] ?? 0 }},
                        {{ $monthlyVisitors[1] ?? 0 }},
                        {{ $monthlyVisitors[2] ?? 0 }},
                        {{ $monthlyVisitors[3] ?? 0 }},
                        {{ $monthlyVisitors[4] ?? 0 }},
                        {{ $monthlyVisitors[5] ?? 0 }},
                        {{ $monthlyVisitors[6] ?? 0 }},
                        {{ $monthlyVisitors[7] ?? 0 }},
                        {{ $monthlyVisitors[8] ?? 0 }},
                        {{ $monthlyVisitors[9] ?? 0 }},
                        {{ $monthlyVisitors[10] ?? 0 }},
                        {{ $monthlyVisitors[11] ?? 0 }}
                    ],
                    borderColor: 'rgb(13, 110, 253)',
                    backgroundColor: gradient,
                    borderWidth: 3,
                    fill: true,
                    tension: 0.4,
                    pointRadius: 5,
                    pointBackgroundColor: 'rgb(13, 110, 253)',
                    pointBorderColor: '#fff',
                    pointBorderWidth: 2,
                    pointHoverRadius: 7,
                    pointHoverBackgroundColor: 'rgb(13, 110, 253)',
                    pointHoverBorderColor: '#fff',
                    pointHoverBorderWidth: 3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(0, 0, 0, 0.8)',
                        padding: 12,
                        cornerRadius: 8,
                        titleColor: '#fff',
                        bodyColor: '#fff',
                        displayColors: false,
                        callbacks: {
                            label: function (context) {
                                return context.parsed.y.toLocaleString() + ' ziyarətçi';
                            }
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: {
                            color: 'rgba(0, 0, 0, 0.05)',
                            drawBorder: false
                        },
                        ticks: {
                            color: '#6c757d',
                            font: {
                                size: 12
                            },
                            callback: function (value) {
                                return value.toLocaleString();
                            }
                        }
                    },
                    x: {
                        grid: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            color: '#6c757d',
                            font: {
                                size: 12
                            }
                        }
                    }
                },
                interaction: {
                    intersect: false,
                    mode: 'index'
                }
            }
        });
    </script>
    </div>
@endsection



