<?php
  $namahari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu");
  $namabulan = array("","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"); 
  date_default_timezone_set('Asia/Jakarta');
  echo $namahari[date("w")].", ".date("j")." ".$namabulan[date("n")]." ".date("Y")." - ".date("H:i:s e");
?>