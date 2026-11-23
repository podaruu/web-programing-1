<?php 
include('koneksi.php');
// Ambil data dari form (dengan filter dasar)  
$nama       = $_POST['nama']; 
$email      = $_POST['email']; 
$password   = md5($_POST['password']); 
$alamat     = $_POST['alamat']; 

// Simpan ke database 
$sql = "INSERT INTO users (nama, alamat, email, password) 
        VALUES (?, ?, ?, ?)"; 
 
$stmt = $conn->prepare($sql); 
$stmt->bind_param("ssss", $nama, $alamat, $email, $password); 
 
if ($stmt->execute()) { 
    echo "<script>alert('Registrasi berhasil!'); 
window.location='../index.php';</script>"; 
} else { 
    echo "Gagal menyimpan data: " . $stmt->error; 
} 
 
$stmt->close(); 
$conn->close(); 
?>