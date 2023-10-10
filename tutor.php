<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>First PHP page</h1>

    <?php
    #echo = untuk menampilkan teks || sensitive case = besar kecil huruf
    echo "Hello World<br>";
    ECHO "Hello World<br>";
    EcHo "Hello World<br>";

    #$color = untuk fungsi warna || $ peka tidak peka terhadap sentitive case, maka output variable tidak akan ditampilkan jika case tidak sama persis
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    ?>
</body>
</html>