<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Kode Gejala</th>
        <th>Nama Gejala</th>
    </tr>
    </thead>
    <tbody>
    @foreach($gejala as $index => $g)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $g->kd_gejala}}</td>
            <td>{{ $g->nama_gejala }}</td>
        </tr>
    @endforeach
    </tbody>
</table>