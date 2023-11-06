<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            if (isset($_POST['submit'])) {
                $nama = $_POST['nama'];
                $npm =$_POST['npm'];
                echo "Nama : $nama <br>";
                echo "kelas: $npm";
            }
        ?>

</body>
</html>