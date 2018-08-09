<?php
session_start();
session_destroy();
echo "<script type='text/javascript'>alert('Logout Berhasil');</script>";
echo "<meta http-equiv='refresh' content='0;URL=../pendaftaran.php'>";
 ?>
