<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1>Login Get</h1>
        <form action="" method="get">
            <label for="nama">Nama</label><br>
            <input type="text" name="nama">
            <br>
            <label for="npm">NPM</label><br>
            <input type="text" id="npm" name="npm">
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
        <?php
            if (isset($_GET['submit'])) {
                $nama = $_GET['nama'];
                $npm =$_GET['npm'];
                echo "Nama : $nama <br>";
                echo "kelas: $npm";
            }
        ?>

        <h1>Login Post</h1>
        <form action="belajar4post.php" method="post">
            <label for="nama">Nama</label><br>
            <input type="text" name="nama">
            <br>
            <label for="npm">NPM</label><br>
            <input type="text" id="npm" name="npm">
            <br>
            <button type="submit" name="submit">Submit</button>
        </form>
</body>
</html>