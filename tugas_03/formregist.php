<html>
<head>
    <title>Form Registrasi</title>
</head>
<body bgcolor="white">
<form action="tampilanformregist.php" method="post">
<b>Form Registrasi</b>
<br>
<p>Isi Data Dibawah ini :</p>
<p>Nama <input type="text" name="nama" size="25" maxlength="50">
<p>Alamat  <textarea rows="5" cols="25" name="alamat"> </textarea>
<p>Tempat Lahir <input type="text" name="tempat lahir" size="25" maxlength="50">
<p>Tanggal Lahir <input type="text" name="tanggal lahir" size="25" maxlength="50">
<p>Jenis Kelamin 
<input type="radio" name="jeniskel" value="Laki-Laki"> Laki - Laki
<input type="radio" name="jeniskel" value="Perempuan"> Perempuan
<p>Pendidikan :
    <select id="jurusan" name="prodi" required>
        <option value="">-- Pilih Pendidikan --</option>
        <option value="S1">S1</option>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
    </select><br><br>
<p><input type="submit" value="kirim"><input type="reset" value="Batal">
</form>
</body>
</html>