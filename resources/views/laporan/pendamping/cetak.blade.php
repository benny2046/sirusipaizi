<!DOCTYPE html>
<html>
<head>
    <title>Laporan Pasien</title>
    <!-- Gaya CSS atau eksternal stylesheet -->
    <style>
        /* Gaya untuk tabel */
table {
    width: 100%;
    border-collapse: collapse;
}

/* Gaya untuk header kolom */
table th {
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

/* Gaya untuk sel data */
table td {
    border: 1px solid #ddd;
    padding: 8px;
}

/* Gaya alternatif untuk baris */
table tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* Gaya untuk hover */
table tr:hover {
    background-color: #f5f5f5;
}
    </style>
</head>
<body>
    <h1>Laporan Pasien</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nama RSP</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
                <th>Jenis Kelamin</th>
                <th>Umur</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Jenis Penyakit</th>
                <th>Kategori Penyakit</th>
                <th>Nama Pendamping</th>
                <th>Status Rawat</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Check In</th>
                <th>Tanggal Check Out</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $laporanpasien as $data )
            <tr>
                <td>{{ $data->nama_rsp }}</td>
                <td>{{ $data->nama_pasien }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->kelurahan }}</td>
                <td>{{ $data->kecamatan }}</td>
                <td>{{ $data->kabupaten }}</td>
                <td>{{ $data->provinsi }}</td>
                <td>{{ $data->jenis_kelamin }}</td>
                <td>{{ $data->umur }}</td>
                <td>{{ $data->pendidikan }}</td>
                <td>{{ $data->pekerjaan }}</td>
                <td>{{ $data->jenis_penyakit }}</td>
                <td>{{ $data->kategori_penyakit }}</td>
                <td>{{ $data->nama_pendamping }}</td>
                <td>{{ $data->status_rawat }}</td>
                <td>{{ $data->tanggal_masuk }}</td>
                <td>{{ $data->created_at }}</td>
                <td>{{ $data->tanggal_checkout }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<script>
     window.print()
</script>
</body>
</html>
