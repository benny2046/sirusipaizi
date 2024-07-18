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
                <th>No</th>
                <th>Nama RSP</th>
                <th>Nama Pasien</th>
                <th>Alamat</th>
                <th>Kelurahan</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
                <th>Jenis Kelamin</th>
                <th>Usia</th>
                <th>Pendidikan</th>
                <th>Pekerjaan</th>
                <th>Jenis Penyakit</th>
                <th>Kategori Penyakit</th>
                <th>Status Rawat</th>
                <th>Tanggal Masuk</th>
                <th>Tanggal Check In</th>
                <th>Tanggal Check Out</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $data as $dataa )
            <tr>
                <td>{{ $dataa->id }}</td>
                <td>{{ $dataa->nama_rsp }}</td>
                <td>{{ $dataa->nama }}</td>
                <td>{{ $dataa->alamat }}</td>
                <td>{{ $dataa->kelurahan }}</td>
                <td>{{ $dataa->kecamatan }}</td>
                <td>{{ $dataa->kabupaten }}</td>
                <td>{{ $dataa->provinsi }}</td>
                <td>{{ $dataa->jeniskelamin }}</td>
                <td>{{ $dataa->umur }}</td>
                <td>{{ $dataa->pendidikan }}</td>
                <td>{{ $dataa->pekerjaan }}</td>
                <td>{{ $dataa->jenis_penyakit }}</td>
                <td>{{ $dataa->kategori_penyakit }}</td>
                <td>{{ $dataa->status_rawat }}</td>
                <td>{{ $dataa->tanggal_masuk }}</td>
                <td>{{ $dataa->created_at->format('Y-m-d') }}</td>
                <td>{{ $dataa->deleted_at ? $dataa->deleted_at->format('Y-m-d') : '' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

<script>
     window.print()
</script>
</body>
</html>
