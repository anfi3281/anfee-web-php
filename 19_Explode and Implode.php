<?php
$kalimat = "belajar pemrograman di malas ngoding";

// memisahkan string menjadi array
$data = explode(" ", $kalimat);

// String menjadi array
print_r($data);

echo "<br/><br/>";

$x = 0;
while ($x <= 4) {
    $y = $x + 1;
    echo " Data " . $y . " = " . $data[$x] . "<br/>";
    $x++;
}

// menggabungkan string kembali dengan fungsi implode
echo "<br/>".implode(" ", $data);
