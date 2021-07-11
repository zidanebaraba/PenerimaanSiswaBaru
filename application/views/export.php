<!DOCTYPE html>
<html>

<head>
    <title>Export Data</title>
</head>

<body>
    <style type="text/css">
        body {
            font-family: sans-serif;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        table th,
        table td {
            border: 1px solid #3c3c3c;
            padding: 3px 8px;

        }

        a {
            background: blue;
            color: #fff;
            padding: 8px 10px;
            text-decoration: none;
            border-radius: 2px;
        }
    </style>

    <?php
    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data Pendaftaran Siswa.xls");
    ?>

    <center>
        <h1>Export Data</h1>
    </center>

    <table border="1">
        <tr>
            <th>NIK</th>
            <th>Nama Siswa</th>
            <th>Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Username</th>
            <th>Password</th>
            <th>Status</th>
        </tr>
        <?php
        // koneksi database
        $koneksi = mysqli_connect("localhost", "root", "", "db_psb");

        // menampilkan data pegawai
        $data = mysqli_query($koneksi, "select * from tb_siswa");
        $no = 1;
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $d['nik']; ?></td>
                <td><?php echo $d['nama_lengkap']; ?></td>
                <td><?php echo $d['tgl_lahir']; ?></td>
                <td><?php echo $d['gender']; ?></td>
                <td><?php echo $d['username']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><?php echo $d['status']; ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>