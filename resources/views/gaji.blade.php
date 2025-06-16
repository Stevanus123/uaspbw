<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Bayaran Karyawan</title>
</head>

<body>
    <div class="container py-5 d-flex justify-content-center align-items-center">
        <div class="card shadow" style="width: 50%">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Insert Data Buku</h3>
            </div>
            <div class="card-body">
                <form action="/cekgaji" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK</label>
                        <input type="text" class="form-control" name="nik" id="nik" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Karyawan</label>
                        <input type="text" class="form-control" name="nama" id="nama" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Gender</label>
                        <input type="radio" name="gender" value="Pria" id="gender" checked> Pria
                        <input type="radio" name="gender" value="Wanita" id="gender"> Wanita
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis" class="form-label">Jenis Gaji</label>
                        <input type="radio" name="jenis" value="Tetap" id="jenis" checked> Tetap
                        <input type="radio" name="jenis" value="Tidak Tetap" id="jenis"> Tidak Tetap
                    </div>
                    <input type="submit" value="Kirim" class="btn btn-primary w-100">
                </form>
            </div>
        </div>
    </div>
</body>

</html>