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

            $a = 8;
            $b = 4;

            echo ("<br>");
            echo '<p>$a = ' . $a . '</p>'; //menampilkan nilai variabel a dan b sebelumnya
            echo '<p>$b = ' . $b . '</p>';

            $a += $b; //mengubah variabel a menjadi a + b
            echo '<p>$a = ' . $a . '</p>';
            $a -= $b; //mengubah variabel a menjadi a - b
            echo '<p>$a = ' . $a . '</p>';
            $a *= $b; //mengubah variabel a menjadi a x b
            echo '<p>$a = ' . $a . '</p>';
            $a /= $b; //mengubah variabel a menjadi a / b
            echo '<p>$a = ' . $a . '</p>';
            $a **= $b; //mengubah variabel a menjadi a ^ b
            echo '<p>$a = ' . $a . '</p>';
            $a %= $b; //mengubah variabel a menjadi a % b
            echo '<p>$a = ' . $a . '</p>';
        ?>
    </body>
 </html>