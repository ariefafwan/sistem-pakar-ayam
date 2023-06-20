<table>
    <thead>
    <tr>
        <th>No.</th>
        <th>Kode Penyakit</th>
        <th>Nama Penyakit</th>
        <th>Detail Penyakit</th>
        <th>Solusi Penyakit</th>
    </tr>
    </thead>
    <tbody>
    @foreach($penyakit as $index => $p)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $p->kd_penyakit}}</td>
            <td>{{ $p->nama_penyakit }}</td>
            <td>{{ $p->det_penyakit }}</td>
            <td>{{ $p->solusi_penyakit }}</td>
        </tr>
    @endforeach
    </tbody>
</table>