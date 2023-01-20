<?php
    $buah = array('semangka', 'jeruk', 'melon');
    echo $buah[2];

    for($x=0;$x<=2;$x++){
        echo "<br/>".$buah[$x];
    }

    $buah['Semangka'] = "Warnanya merah";
    $buah['jeruk'] = "Warnanya orange";
    $buah['pisang'] = "Warnanya kuning";
    $buah['melon'] = "Warnanya hijau";
    echo "<br/>".$buah['jeruk'];

    $buah = array(
        'semangka' => "Enak",
        'jeruk' => "manis",
        'pisang' => "yummy",
        'semangka' => "segar"
    );
    echo "<br/>".$buah['semangka'];

    