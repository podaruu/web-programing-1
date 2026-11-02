<html>
<head>
    <title>Penggunaan Foreach</title>
</head>
<body>
Menggunakan Foreach
<br>
<?php
$nama = [
    "Adriyan Sahpitran NIM: 17250049 Kelas : 17.3A.03",
    "Widya Putri Rahayu NIM: 17250072 Kelas : 17.3A.03",
    "Ridho Firmansyah NIM: 17250199 Kelas : 17.3A.03",
    "Rangga Aji Pramudya NIM: 17250206 Kelas : 17.3A.03",
    "Fernando Hasudungan Siregar NIM: 17250232 Kelas : 17.3A.03",
    "Duta Arrasyid NIM: 17250278 Kelas : 17.3A.03",
    "Glen Justin Maringan Simarmata NIM: 17250323 Kelas : 17.3A.03",
    "Renal Ali Syahid NIM: 17250313 Kelas : 17.3A.03",
    "Arla Maulana Eza Nugraha NIM: 17250371 Kelas : 17.3A.03",
    "Kevin Nabil Noor Rahman NIM: 17250374 Kelas : 17.3A.03",
        ];
foreach($nama as $nilai)
    echo "$nilai <br>";
?>
</body>
</html>