<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum Web Programming</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <?php
            echo "<p>Ini adalah script PHP pertama saya</p>";
            $name = "Kevin Andhika";
            $nim = "2311532005";
            
            echo "<p>Nama saya: $name </p>";
            echo "<p>NIM: " . $nim . "</p>";
            echo "<p>Hari ini: " . date("d-m-Y") . "</p>";

            //membuat variabel a dan b untuk dihitung nanti
            $a = 8;
            $b = 4;

            echo ("<br>");
            //aritmatika +, -, *, /, %, ^
            echo "<p>$a + $b = " . $a + $b . "  (A + B) </p>";
            echo "<p>$a - $b = " . $a - $b . "  (A - B) </p>";
            echo "<p>$a * $b = " . $a * $b . "  (A x B) </p>";
            echo "<p>$a / $b = " . $a / $b . "  (A / B) </p>";
            echo "<p>$a % $b = " . $a % $b . "  (A % B) </p>";
            echo "<p>$a ** $b = " . $a ** $b . "    (A ^ B) </p>";
        ?>
    </body>
 </html>