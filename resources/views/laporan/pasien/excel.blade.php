<table>
    <thead>
        <tr>
            <th colspan="5">{{$tanggal}}</th>
        </tr>
        <tr style="font-weight: bolder;text-align: center">
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
        @foreach ($data as $dataa)
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
                <td>{{ $dataa->created_at }}</td>
                <td>{{ $dataa->deleted_at }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
