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

    #$color = untuk fungsi warna || $ peka terhadap sentitive case, maka output variable tidak akan ditampilkan jika case tidak sama persis
    $color = "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";

    #Deklarasi Variable
    $txt = "Hello World";
    $x = 5;
    $y= 10.5;

    echo "$txt, My Name Artiko <br>";
    echo $txt . ", My Name Artiko <br>";
    echo "$x + $y <br>";

    #Global & Local Scope
    $o = 5; //ini adalah variable global
    function myTest(){
        $p = 7; //ini adalah variable lokal.
        echo "<p> Variable o didalam fungsi adalah: $o</p>"; //undefined dan null
        echo "<p> Variable p didalam fungsi adalah: $p</p>";
    }
    myTest();

    echo "<p> Variable o didalam fungsi adalah: $o</p>";
    echo "<p> Variable p didalam fungsi adalah: $p</p>"; //undefined dan null

    #PHP global keyword
    $xx = 5;
    $yy = 10;

    function myTest1(){
        global $xx, $yy;
        $yy = $xx + $yy;
    }
    
    myTest1();
    echo $yy . "<br>"; //output 15
    
    #global variable dengan array
    function myTest2(){
        $GLOBALS['yy'] = $GLOBALS['xx'] = $GLOBALS['yy'];
    }

    myTest2();
    echo $yy . "<br>";

    #PHP keyword static
    function myTest3(){
        static $a = 0;
        echo $a . "<br>";
        $a++;
    }

    myTest3();
    myTest3();
    myTest3();

    #echo statement
    echo "<h2> PHP is Fun</h2>";
    echo "Hello World <br>";
    echo "Learn PHP <br>";
    echo "String", "ini", "dibuat", "dengan", "multi parameters.";
    
    #Display Variable
    $tx1 = "Learn PHP";
    $tx2 = "My Book";
    $aa = 5;
    $bb = 3;

    echo "<h2>" . $tx1 . "</h2>";
    echo "Belajar PHP di " . $tx2 . "<br>";
    echo $aa + $bb;
    
    #PHP print statement = print hanya pernyataan sedangkan echo adalah fungsi, memiliki kebutuhan yang berbeda meskipun sama-sama untuk menampilkan output
    print "<h2>Belajar PHP</h2>";
    print "Belajar PHP di " . $tx2 . "<br>";
    print $aa + $bb;
    
    ########

    ?>
</body>
</html>