<?php
$kalimat = "Belajar pemrograman di malasngoding";
echo str_word_count($kalimat);
echo "<br/>";
echo strlen($kalimat);
echo "<br/>";
echo strrev($kalimat);
echo "<br/>";
echo str_replace("yang ingin di ganti", "pengganti", "isi pengganti");
echo "<br/>";
echo str_replace("Belajar", "Tutorial", $kalimat);