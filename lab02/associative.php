<?php 
    // Cara 1 
    $student = array( 
        "nama" => "Kevin Andhika", 
        "nim" => "2311532005", 
        "jurusan" => " Informatika", 
        "ipk" => 3.9
    ); 

    // Cara 2 (sintaks pendek) 
    $student = [ 
        "nama" => "Kevin Andhika", 
        "nim" => "2311532005", 
        "jurusan" => "Informatika", 
        "ipk" => 3.9 
    ]; 

    // Mengakses elemen array asosiatif 
    echo $student["nama"];    
    echo "<br>"; 
    echo $student["jurusan"]; 
?>