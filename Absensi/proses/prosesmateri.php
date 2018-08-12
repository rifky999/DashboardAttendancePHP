<?php
include 'koneksi.php';
//Get Id Pengajar
$idpngjr = $_POST['idpngjr'];
$judul = $_POST['judul'];
// Baca lokasi file sementar dan nama file dari form (fupload)
$lokasi_file = $_FILES['materi']['tmp_name'];
$nama_file   = $_FILES['materi']['name'];
$fileSize = $_FILES['materi']['size'];
// Mengambil Type File
$ext = pathinfo($nama_file, PATHINFO_EXTENSION);
// Tentukan folder untuk menyimpan file
$folder = "../images/$nama_file";
// tanggal sekarang
$tgl_upload = date("Ymd");
// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_file</b> sukses di upload";

  // Masukkan informasi file ke database

  $sql = "INSERT INTO materi
            VALUES('', '$idpngjr','$judul','$nama_file', '$tgl_upload','$ext','$fileSize')";

            $pdo->exec($sql);
            echo "<script>alert('Berhasil upload $nama_file')</script>";
            echo "<meta http-equiv='refresh' content='0; URL=../materi.php'>";
}
else{
  echo "File gagal di upload";
    echo "<meta http-equiv='refresh' content='0; URL=../materi.php'>";
}
?>
