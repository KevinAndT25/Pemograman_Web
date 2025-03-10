<!DOCTYPE html>
<html>
    <head>
        <title>Praktikum Web Programming</title>
    </head>
    <body>
        <h1>Hello World!</h1>
        <?php
            echo "<p>Ini adalah script PHP pertama saya</p>"; //kode echo berguna untuk memberikan output
            $name = "Kevin Andhika"; //tanda $ sebagai penanda variabel
            $nim = "2311532005";
            
            echo "<p>Nama saya: $name </p>"; //variabel bisa ditampilkan di dalam string dengan syarat string dengan tanda kutip dua ("")
            echo "<p>NIM: " . $nim . "</p>"; //atau juga bisa ditampilkan di luar string dengan menggunakan concat (.)
            echo "<p>Hari ini: " . date("d-m-Y") . "</p>"; //untuk menampilkan tanggal dengan format (tanggal-bulan-tahun)
        ?>
    </body>
 </html>