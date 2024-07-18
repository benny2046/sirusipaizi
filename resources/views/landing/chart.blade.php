@extends('layouts.main')

@section('content')
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-6 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px">
            <h1>Laporan Pengunjung</h1>
            <h1>Rumah Singgah Pasien IZI Sumbar</h1>
        </div>
        <div class="text-center mx-auto wow fadeInUp">
            <div class="row g-12">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h4 class="mb-3">Jenis Kelamin</h4>
                        <form id="filterForm1" method="GET" action="{{ route('landing.chart') }}">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="start_date1">Start Date:</label>
                                    <input type="date" id="start_date1" name="start_date1" value="{{ $startDate1 }}">
                                </div>
                                <div class="col">
                                    <label for="end_date1">End Date:</label>
                                    <input type="date" id="end_date1" name="end_date1" value="{{ $endDate1 }}">
                                </div>
                                <div class="col-auto align-self-end">
                                    <button type="button" onclick="filterData(1)">Filter</button>
                               
                                    <button type="button" onclick="resetFilter(1)">Reset</button>
                                </div>
                            </div>
                        </form>
                        <canvas id="jenisKelaminChart" width="50" height="50"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h4 class="mb3">Daerah Asal</h4>
                        <form id="filterForm2" method="GET" action="{{ route('landing.chart') }}">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="start_date2">Start Date:</label>
                                    <input type="date" id="start_date2" name="start_date2" value="{{ $startDate2 }}">
                                </div>
                                <div class="col">
                                    <label for="end_date2">End Date:</label>
                                    <input type="date" id="end_date2" name="end_date2" value="{{ $endDate2 }}">
                                </div>
                                <div class="col-auto align-self-end">
                                    <button type="button" onclick="filterData(2)">Filter</button>
                            
                                    <button type="button" onclick="resetFilter(2)">Reset</button>
                                </div>
                            </div>
                        </form>
                        <canvas id="daerahPasienChart" width="50" height="50"></canvas>
                    </div>
                </div>
            </div>
            <br>
            <div class="row g-12">
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h4 class="mb-3">Jumlah Sahabat yang Menerima Manfaat</h4>
                        <form id="filterForm3" method="GET" action="{{ route('landing.chart') }}">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="start_date3">Start Date:</label>
                                    <input type="date" id="start_date3" name="start_date3" value="{{ $startDate3 }}">
                                </div>
                                <div class="col">
                                    <label for="end_date3">End Date:</label>
                                    <input type="date" id="end_date3" name="end_date3" value="{{ $endDate3 }}">
                                </div>
                                <div class="col-auto align-self-end">
                                    <button type="button" onclick="filterData(3)">Filter</button>
                                
                                    <button type="button" onclick="resetFilter(3)">Reset</button>
                                </div>
                            </div>
                        </form>
                        <canvas id="rumahSinggahPasienChart" width="50" height="30"></canvas>
                    </div>
                </div>
                <div class="col-lg-6 col-md-7 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-light rounded h-100 p-5">
                        <h4 class="mb-3">Penyakit</h4>
                        <form id="filterForm4" method="GET" action="{{ route('landing.chart') }}">
                            <div class="row mb-3">
                                <div class="col">
                                    <label for="start_date4">Start Date:</label>
                                    <input type="date" id="start_date4" name="start_date4" value="{{ $startDate4 }}">
                                </div>
                                <div class="col">
                                    <label for="end_date4">End Date:</label>
                                    <input type="date" id="end_date4" name="end_date4" value="{{ $endDate4 }}">
                                </div>
                                <div class="col-auto align-self-end">
                                    <button type="button" onclick="filterData(4)">Filter</button>
                                
                                    <button type="button" onclick="resetFilter(4)">Reset</button>
                                </div>
                            </div>
                        </form>
                        <canvas id="kategoriPenyakitBulananChart" width="50" height="50"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var filters = {
        start_date1: "{{ $startDate1 }}",
        end_date1: "{{ $endDate1 }}",
        start_date2: "{{ $startDate2 }}",
        end_date2: "{{ $endDate2 }}",
        start_date3: "{{ $startDate3 }}",
        end_date3: "{{ $endDate3 }}",
        start_date4: "{{ $startDate4 }}",
        end_date4: "{{ $endDate4 }}",
    };

    function filterData(filterNumber) {
        var formId = '#filterForm' + filterNumber;
        var formData = $(formId).serializeArray();

        formData.forEach(function(item) {
            filters[item.name] = item.value;
        });

        $.ajax({
            url: '{{ route("landing.chart") }}',
            method: 'GET',
            data: filters,
            success: function(response) {
                updateCharts(response);
            },
            error: function() {
                alert('Failed to fetch data.');
            }
        });
    }

    function resetFilter(filterNumber) {
        var formId = '#filterForm' + filterNumber;
        $(formId)[0].reset();

        $(formId).serializeArray().forEach(function(item) {
            filters[item.name] = '';
        });

        $.ajax({
            url: '{{ route("landing.chart") }}',
            method: 'GET',
            data: filters,
            success: function(response) {
                updateCharts(response);
            },
            error: function() {
                alert('Failed to fetch data.');
            }
        });
    }

    function updateCharts(data) {
        jenisKelaminChart.data.datasets[0].data = data.jenisKelamin;
        jenisKelaminChart.data.labels = data.jenisKelamink;
        jenisKelaminChart.update();

        daerahPasienChart.data.datasets[0].data = Object.values(data.jkabupaten);
        daerahPasienChart.data.labels = Object.keys(data.jkabupaten);
        daerahPasienChart.update();

        rumahSinggahPasienChart.data.datasets[0].data = data.jPenerima;
        rumahSinggahPasienChart.data.labels = data.jPenerimak;
        rumahSinggahPasienChart.update();

        kategoriPenyakitBulananChart.data.datasets[0].data = Object.values(data.jPenyakit);
        kategoriPenyakitBulananChart.data.labels = data.jPenyakitk;
        kategoriPenyakitBulananChart.update();
    }

    var ctx1 = document.getElementById("jenisKelaminChart").getContext("2d");
    var jenisKelaminChart = new Chart(ctx1, {
        type: "pie",
        data: {
            labels: @json($jenisKelamink),
            datasets: [{
                label: "Jenis Kelamin",
                data: @json($jenisKelamin),
                backgroundColor: [
                     'rgba(220,48,48)',
                        'rgba(61,133,198)'
                ],
            }],
        },
        options: {
            title: {
                display: true,
                text: "Distribusi Jenis Kelamin",
            },
        },
    });

    var ctx2 = document.getElementById('daerahPasienChart').getContext('2d');
    var daerahPasienChart = new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: @json($jkabupaten->keys()),
            datasets: [{
                label: 'Jumlah Pasien',
                data: @json($jkabupaten->values()),
                backgroundColor: [
                        'rgba(204,0,0)',
                        'rgba(230,145,56)',
                        'rgba((241,194,50)',
                        'rgba(106,168,79)',
                        'rgba(69,129,142)',
                        'rgba(61,133,198)',
                        'rgba(103,78,167)',
                        'rgba(166,77,121)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(68,233,74)',
                        'rgba(169,239,138)',
                        'rgba(169,239,138)',
                    ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            title: {
                display: true,
                text: 'Distribusi Pasien Berdasarkan Daerah'
            }
        }
    });

    var ctx3 = document.getElementById('rumahSinggahPasienChart').getContext('2d');
    var rumahSinggahPasienChart = new Chart(ctx3, {
        type: 'line',
        data: {
            labels: @json($jPenerimak),
            datasets: [{
                label: 'Jumlah Pasien',
                data: @json($jPenerima),
                fill: false,
                borderColor: 'rgba(68,233,74)',
                tension: 0.1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            title: {
                display: true,
                text: 'Jumlah Pasien di Rumah Singgah Pasien per Bulan'
            }
        }
    });

    var ctx4 = document.getElementById('kategoriPenyakitBulananChart').getContext('2d');
    var kategoriPenyakitBulananChart = new Chart(ctx4, {
        type: 'bar',
        data: {
            labels: @json($jPenyakitk),
            datasets: [{
                label: 'Jumlah Penyakit',
                data: @json($jPenyakit),
                backgroundColor: [
                        'rgba(204,0,0)',
                        'rgba(230,145,56)',
                        'rgba((241,194,50)',
                        'rgba(106,168,79)',
                        'rgba(69,129,142)',
                        'rgba(61,133,198)',
                        'rgba(103,78,167)',
                        'rgba(166,77,121)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(68,233,74)',
                        'rgba(169,239,138)',
                        'rgba(169,239,138)',
                    ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            title: {
                display: true,
                text: 'Jumlah Penyakit'
            }
        }
    });
</script>
@endsection
