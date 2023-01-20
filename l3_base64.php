<?php
$data = "Halo, nama saya Randi";
$data2 = base64_encode($data);
echo $data2."<br/>";
echo base64_decode($data2);  