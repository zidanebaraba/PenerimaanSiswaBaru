<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Selamat Datang </title>
</head>

<body>
    <div class="container">

        <!-- START - TABEL INFORMASI STATUS PENERIMAAN -->
        <div class="card">
            <div class="card-header text-center">
                SELAMAT DATANG, CALON SISWA BARU!
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <div class="col">
                                    <div class="card text-center">
                                        <div class="card-header ">
                                            STATUS PENDAFTAR
                                        </div>
                                        <div class="card-body">
                                            <h3>Status kamu adalah</h3>

                                            <?php
                                            foreach ($cari as $data) :
                                            ?>
                                                <tr>

                                                    <td><?= $data->status; ?></td>

                                                </tr>
                                            <?php
                                            endforeach;
                                            ?>

                                        </div>
                                        <div class="card-footer text-muted">
                                            <a href="<?php echo base_url('masuk/logout') ?>" class="btn btn-primary">logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END - TABEL INFORMASI STATUS PENERIMAAN -->

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