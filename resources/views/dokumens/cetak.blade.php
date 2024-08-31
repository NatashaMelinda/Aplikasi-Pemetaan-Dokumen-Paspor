<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="icon" href="assets/img/imigrasi_logo.png" type="image/x-icon"/>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Cetak Data Dokumen Paspor</title>
</head>
<body>
    <div class="form-group">
<p align="center"><b>Laporan Dokumen Paspor</b></p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nomor Permohonan</th>
            <th>Nomor Paspor</th>
            <th>Nomor KTP</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Penyimpanan</th>
            <th>Retensi Arsip</th>
            <th>Tanggal Input</th>
        </tr>
    </thead>
    <tbody>
        @php $no = 1; @endphp
        @foreach ($dokumens as $dokumen)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $dokumen->nomor_permohonan }}</td>
                <td>{{ $dokumen->nomor_paspor }}</td>
                <td>{{ $dokumen->nomor_ktp }}</td>
                <td>{{ $dokumen->nama }}</td>
                <td>{{ $dokumen->tempat_lahir }}</td>
                <td>{{ $dokumen->tanggal_lahir }}</td>
                <td>{{ $dokumen->penyimpanan }}</td>
                <td>
                    {{ $dokumen->retensi_arsip == 'aktif' ? 'Dokumen Aktif' : 'Dokumen Inaktif' }}
                </td>
                <td>{{ $dokumen->tanggal_input }}</td>
            </tr>
            @endforeach
        </tbody>
</table>
    </div>
</body>
</html>