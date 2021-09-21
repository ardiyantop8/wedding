<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrix</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Masukan Jumlah Baris</label>
        <input type="text" name="bintang">
        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>
<?php
if (isset($_POST['submit'])) {
    $bin = $_POST['bintang'];
    echo "<center>";
    for ($a = 1; $a <= $bin; $a++) {
        // for ($bin >= $a; $bin--;) {
        //     echo "<center>";
        // }
        for ($b = 1; $b <= $a; $b++) {
            echo $b;
        }
        echo "<br>";
    }
}
?>