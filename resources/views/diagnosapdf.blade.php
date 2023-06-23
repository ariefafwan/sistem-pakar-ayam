<!DOCTYPE html>
<html>
<head>
	<title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
	<!-- Scripts -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<center>
		<h5>Laporan Hasil Diagnosa</h4>
	</center>
 
	<div class="col-lg-12">
        <table class="table table-bordered table-hover">
          @foreach ($hasil as $alt => $row)
          <tr>
            <td colspan="3" align="center">
              <img src="{{ asset('storage/penyakit/'.$row['gambar']) }}" style="widht: 600px; height: 300px" class="img-fluid">
            </td>
          </tr>
          <tr>
            <td style="width: 20%">Nama Penyakit</td>
            <td style="width: 2%">:</td>
            <td>{{ $row['nama_penyakit'] }}</td>
          </tr>
          <tr>
            <td>Penyebab</td>
            <td>:</td>
            <td>{{ $row['det_penyakit'] }}</td>
          </tr>
          <tr>
            <td>Solusi</td>
            <td>:</td>
            <td>{{ $row['solusi_penyakit'] }}</td>
          </tr>
          @endforeach
        </table>
      </div>
 
</body>
</html>