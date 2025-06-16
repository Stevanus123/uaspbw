<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5 d-flex flex-column justify-content-center align-items-center">
        <div class="search mb-5">
            <form action="/search" method="get" class="d-flex">
                <input type="text" class="form-control" name="q">
                <input type="submit" value="Cari">
            </form>
        </div>
        <h3 class="mb-2">Data Gaji Karyawan</h3>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>NIK</th>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Jenis Kontrak</th>
                    <th>Gaji Pokok</th>
                    <th>Tunjangan Makan</th>
                    <th>Potongan BPJS</th>
                    <th>Gaji Bersih</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kar as $k)
                    <tr>
                        <td>{{ $k->nik }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->gender }}</td>
                        <td>{{ $k->email }}</td>
                        <td>{{ $k->jenis }}</td>
                        <td>{{ $k->gaji_pokok }}</td>
                        <td>{{ $k->tunjangan_makan }}</td>
                        <td>{{ $k->potongan_bpjs }}</td>
                        <td>{{ $k->gaji_bersih }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>