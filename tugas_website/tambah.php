<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script>
        function validateForm() {
            var first_name = document.getElementById("first_name").value;
            var email = document.getElementById("email").value;
            var phone = document.getElementById("phone").value;
            var address = document.getElementById("address").value;

            if (first_name.trim() === '' || email.trim() === '' || phone.trim() === '' || address.trim() === '') {
                alert("Harap isi semua kolom!");
                return false;
            } else {
                alert("Data Berhasil Ditambahkan");
                return true;
            }
        }
    </script>
    <style>
        body {
            padding: 50px;
            background-color: lightblue;
        }

        h1 {
            margin-bottom: 40px;
            font-size: 40px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h1><strong>TAMBAH CUSTOMER</strong></h1><br>
                <a class="btn btn-warning" style="margin-bottom:5px" href="index.php"> Kembali </a>
                <h4><strong>Isi formulir di bawah dengan benar!</strong></h4>
                <?php
                include 'koneksi.php';
                ?>
                <form action="proses_tambah.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm();">
                    <div class="form-group">
                        <label for="first_name">Nama:</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="phone">Telepon:</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat:</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>