<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#datatable').DataTable();
        });
    </script>
    <style>
        body {
            padding-top: 50px;
            background-color: lightblue;
        }

        z table {}

        h1 {
            font-size: 60px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include 'koneksi.php';
                $query = mysqli_query($conn, "SELECT c.id, c.first_name, c.email, c.phone, c.address, c.created_at from customer as c ORDER BY created_at ASC;");
                ?>
                <center>
                    <h1><strong>DATA CUSTOMER BOLU SUSU LEMBANG</strong></h1>
                </center><br><br><br>
                <center><img src="image/bolsu1.jpg" alt="" style="margin-bottom: 20px; width: 500PX"></center><br><br>
                <a class="btn btn-info" style="margin-bottom:5px" href="tambah.php"> Tambah Customer </a><br><br>
                <table id="datatable" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>
                                Nama
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Telepon
                            </th>
                            <th>
                                Alamat
                            </th>
                            <th>
                                Dibuat Pada
                            </th>
                            <th>
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (mysqli_num_rows($query) > 0) {
                            while ($data = mysqli_fetch_array($query)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $data["id"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["first_name"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["email"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["phone"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["address"] ?>
                                    </td>
                                    <td>
                                        <?php echo $data["created_at"] ?>
                                    </td>
                                    <td> <a href="hapus.php?id=<?php echo $data["id"] ?>" class="label label-danger"> Delete
                                        </a> &nbsp; <a href="edit.php?id=<?php echo $data["id"] ?>" class="label label-warning">
                                            Ubah </a></td>
                                </tr>
                            <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>