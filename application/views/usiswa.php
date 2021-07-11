<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                Update Data Siswa
            </div>

            <!-- START - FORM UPDATE NAMA SISWA YANG SUDAH DAFTAR -->
            <div class="card-body">
                <form action="<?php echo base_url('beranda/subah'); ?>" method="POST">
                    <?php
                    foreach ($cari as $data) :
                    ?>

                        <div class="mb-3">
                            <label class="form-label">NIK</label>
                            <input type="number" class="form-control" name="nik" value="<?php echo $data->nik; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama_lengkap" value="<?php echo $data->nama_lengkap; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" value="<?php echo $data->tgl_lahir; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Jenis Kelamin</label>
                            <select name="gender" class="form-select">
                                <option value="<?php echo $data->gender; ?>"><?php echo $data->gender; ?></option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" value="<?php echo $data->username; ?>">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="text" class="form-control" name="password" value="<?php echo $data->password; ?>">
                        </div>
                        <div class="mb-3">
                            <label>Status</label>
                            <br>
                            <select name="status" class="form-select">
                                <option value="<?php echo $data->status; ?>"><?php echo $data->status; ?></option>
                                <option value="Diterima">Diterima</option>
                                <option value="Cadangan">Cadangan</option>
                                <option value="Tidak Diterima">Tidak Diterima</option>
                            </select>
                        </div>
                    <?php
                    endforeach;
                    ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a class="btn btn-primary" href="<?php echo base_url('beranda') ?>">Batalkan</a>
                </form>
            </div>
            <!-- START - FORM UPDATE NAMA SISWA YANG SUDAH DAFTAR -->

        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>