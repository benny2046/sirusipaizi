<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pasien</title>
    <!-- Gaya CSS atau eksternal stylesheet -->
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        h1, h2 {
            text-align: center;
        }
        .info {
            margin-bottom: 20px;
        }
    </style>
</head>
<>

    <h1>Laporan Rumah Singgah Pasien</h1>

    <div class="info">
        <h2>Informasi Umum</h2>
        <p><strong>Nama Rumah Singgah:</strong> Rumah Singgah IZI Padang</p>
        <p><strong>Alamat:</strong> Jl. Jati IV No.14, RT.03/RW.3, Jati Baru, Kec. Padang Tim., Kota Padang, Sumatera Barat</p>
        <p><strong>Periode Laporan:</strong> {{ $awal }} - {{ $akhir }}</p>
        <p><strong>Total Pasien:</strong> {{ $totalPasien }}</p>
        <p><strong>Total Lama Menginap (hari):</strong> {{ $totalHari }}</p>
        <p><strong>Rata-Rata Lama Menginap (hari):</strong> {{ $rataMenginap }}</p>
        <p><strong>Lama Menginap Minimum (hari):</strong> {{ $minLamaMenginap }}</p>
        <p><strong>Lama Menginap Maksimum (hari):</strong> {{ $maxLamaMenginap }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Asal Daerah</th>
                <th>Jenis Kelamin</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Jenis Penyakit</th>
                <th>Kategori Penyakit</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Checkout</th>
                <th>Lama Menginap (hari)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $pasien)
                <tr>
                    <td>{{ $pasien['nama'] }}</td>
                    <td>{{ $pasien['alamat'] }}</td>
                    <td>{{ $pasien['kelurahan'] }}</td>
                    <td>{{ $pasien['jeniskelamin'] }}</td>
                    <td>{{ $pasien['pendidikan'] }}</td>
                    <td>{{ $pasien['pekerjaan'] }}</td>
                    <td>{{ $pasien['jenis_penyakit'] }}</td>
                    <td>{{ $pasien['kategori_penyakit'] }}</td>
                    <td>{{ $pasien['tanggal_masuk'] }}</td>
                    <td>{{ $pasien['deleted_at'] }}</td>
                    <td>{{ $pasien['lama_menginap'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

<script>
     window.print()
</script>
</body>
</html>
