<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Penyakit Diketahui</th>
        <th>Tanggal Diagnosa</th>
    </tr>
    </thead>
    <tbody>
    @foreach($hasil as $index => $row)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $row->penyakit->nama_penyakit }}</td>
            <td>{{ $row->created_at->format('d-m-Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>