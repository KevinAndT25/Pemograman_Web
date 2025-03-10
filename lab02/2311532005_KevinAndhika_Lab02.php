<?php
    $data = [ 
        "name" => "Kevin Andhika", 
        "nim" => "2311532005", 
        "major" => "Informatika", 
        "semester" => 4, 
        "subjects" => [ 
            [ 
                "code" => "IF2101", 
                "name" => "Pemrograman Web", 
                "sks" => 3, 
                "grades" => [ 
                    "assignment" => 85, 
                    "uts" => 78, 
                    "uas" => 88 
                ] 
            ], 
            [ 
                "code" => "IF2102", 
                "name" => "Algoritma dan Struktur Data", 
                "sks" => 4, 
                "grades" => [ 
                    "assignment" => 90, 
                    "uts" => 85, 
                    "uas" => 82 
                ] 
            ], 
            [ 
                "code" => "IF2103", 
                "name" => "Basis Data", 
                "sks" => 3, 
                "grades" => [ 
                    "assignment" => 78, 
                    "uts" => 75, 
                    "uas" => 80 
                ] 
            ], 
            [ 
                "code" => "IF2104", 
                "name" => "Jaringan Komputer", 
                "sks" => 3, 
                "grades" => [ 
                    "assignment" => 88, 
                    "uts" => 70, 
                    "uas" => 75 
                ] 
            ], 
            [ 
                "code" => "IF2105", 
                "name" => "Sistem Operasi", 
                "sks" => 3, 
                "grades" => [ 
                    "assignment" => 95, 
                    "uts" => 90, 
                    "uas" => 92 
                ] 
            ], 
            [ 
                "code" => "IF2106", 
                "name" => "Matematika Diskrit", 
                "sks" => 2, 
                "grades" => [ 
                    "assignment" => 75, 
                    "uts" => 68, 
                    "uas" => 70 
                ] 
            ] 
        ] 
    ]; 
    
    // Hitung nilai akhir
    function hitungNilaiAkhir($grades) {
        return ($grades["assignment"]*0.2) + ($grades["uts"]*0.4) + ($grades["uas"]*0.4);
    } 

    //total sks
    function totalSks($sks){
        return ()
    }
?>

<!DOCTYPE html> 
<html lang="id"> 
<head> 
<meta charset="UTF-8"> 
<meta name="viewport" content="width=device-width, 
initial-scale=1.0"> 
    <title>Data Mahasiswa</title> 
    <style> 
        table { 
            border-collapse: collapse; 
            width: 100%; 
        } 
        th, td { 
            border: 1px solid #ddd; 
            padding: 8px; 
            text-align: left; 
        } 
        th { 
            background-color: #f2f2f2; 
        } 
        tr:nth-child(even) { 
            background-color: #f9f9f9; 
        } 
        
        .green{ background-color: lightgreen;}
        .yellow{ background-color: yellow;}
    </style>
</head> 
<body> 
    <h2 align="center">Kartu Hasil Studi</h2> 
    <p><strong>Nama: </strong><?= $data["name"] ?></p>
    <p><strong>NIM: </strong><?= $data["nim"] ?></p>
    <p class="pading"><strong>Program Studi: </strong><?= $data["major"] ?></p>
    <p><strong>Semester: </strong><?= $data["semester"] ?></p>
    <table> 
        <tr> 
            <th>Kode</th> 
            <th>Mata Kuliah</th> 
            <th>SKS</th> 
            <th>Tugas (20%)</th> 
            <th>UTS (40%)</th> 
            <th>UAS (40%)</th> 
            <th>Nilai Akhir</th> 
            <th>Grade</th> 
        </tr> 
        <?php foreach ($data["subjects"] as $subject): ?> 
            <?php  
                $nilaiakhir = hitungNilaiAkhir($subject["grades"]); 
                 
                //Tentukan grade berdasarkan nilai akhir
                if ($nilaiakhir >= 85) { 
                    $grade = "A"; 
                } elseif ($nilaiakhir >= 80) { 
                    $grade = "A-"; 
                } elseif ($nilaiakhir >= 75) { 
                    $grade = "B+"; 
                } elseif ($nilaiakhir >= 70) { 
                    $grade = "B"; 
                } elseif ($nilaiakhir >= 65) { 
                    $grade = "B-"; 
                } elseif ($nilaiakhir >= 60) { 
                    $grade = "C+"; 
                } elseif ($nilaiakhir >= 55) { 
                    $grade = "C"; 
                } elseif ($nilaiakhir >= 45) { 
                    $grade = "D"; 
                } else {
                    $grade = "E"; 
                }
                
                $gradecolor = ($grade == "A" || $grade == "A-")? "green" : "yellow";
            ?> 
            <tr> 
                <td><?= $subject["code"] ?></td> 
                <td><?= $subject["name"] ?></td> 
                <td><?= $subject["sks"] ?></td> 
                <td><?= $subject["grades"]["assignment"] ?></td> 
                <td><?= $subject["grades"]["uts"] ?></td> 
                <td><?= $subject["grades"]["uas"] ?></td> 
                <td><?= number_format($nilaiakhir, 2) ?></td> 
                <td class="<? $gradecolor ?>"><?= $grade ?></td> 
            </tr> 
        <?php endforeach; ?> 
    </table> 
    <p><strong><?= $data["sks"] ?></strong></p>
</body> 
</html>