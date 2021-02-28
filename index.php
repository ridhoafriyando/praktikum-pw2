<?php
    require_once("Mahasiswa.php");
    require_once("MahasiswaBaru.php");


    $ridho = new Mahasiswa("H1101191066", "Ridho Arjumal Afriyando", "1999-09-24", "laki-laki");
    $azril = new MahasiswaBaru("H1101011065", "M. Azril Saktia", "2002-01-21", "laki-laki", "111065");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    <?php echo "<p>Hello World</p>"; ?>
    
    <?php
        $madha->tampilkanAngkatan();
        echo "<br>";
        $rama->tampilkanAngkatan();
        echo "<br>";
        echo "<br>";
        $madha->tampilkanUmur();
        echo "<br>";
        $rama->tampilkanUmur();
    ?>
</body>
</html>