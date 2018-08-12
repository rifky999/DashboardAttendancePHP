<div style="color:white;">
<?php
include 'koneksi.php';
$id = $_POST['id'];
$Id = $_GET['id'];
$Nama = $_POST['nama'];
$Username = $_POST['user'];
$Password = $_POST['pass'];
$Alamat = $_POST['alamat'];
$Pangkat = $_POST['pangkat'];
$Kesatuan = $_POST['kesatuan'];
$Email = $_POST['email'];
$Pengajar = $_POST['pengajar'];
$action = $_GET['action'];

if ($action == 'insert') {

    $sql = "INSERT INTO siswa values ('','$Nama','$Username','$Password','$Alamat','$Pangkat','$Kesatuan','$Email','$Pengajar','','','')";

    if($pdo->exec($sql)){
      echo "<script>alert('Tambah Berhasil')</script>";
        echo "<meta http-equiv='refresh' content='0; URL=../datasiswa.php'>";
    }

}
elseif ($action == 'edit') {
  $sql = "UPDATE siswa SET Nama_ssw='$Nama',username='$Username',password='$Password',Alamat_ssw='$Alamat',Pangkat_ssw='$Pangkat'
          ,Kesatuan_ssw='$Kesatuan',email_ssw='$Email',Pengajar_ssw='$Pengajar'
          WHERE id_siswa='$id'";
    //  $sql = "UPDATE user SET confirm='1' WHERE username='$user'";
      $stmt= $pdo->prepare($sql);

      if ($stmt->execute()){
        echo "<script>alert('Edit Berhasil')</script>";
          echo "<meta http-equiv='refresh' content='0; URL=../datasiswa.php'>";
      }
}
elseif ($action == 'del'){
  $sql = "DELETE FROM siswa WHERE id_siswa=$Id";

if ($pdo->exec($sql)) {echo "<meta http-equiv='refresh' content='0; URL=../datasiswa.php'>";};
}

 ?>
 </div>
