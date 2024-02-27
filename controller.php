<?php

include 'nilaiAngka.php';
include 'nilaiHuruf.php';

function hitung()
{
    $partisipasi = $_POST['partisipasi'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    if ($partisipasi === '' || $tugas === '' || $uts === '' || $uas === '') {
        $response = [
            "status" => 422,
            "data" => "Nilai tida boleh kosong!"
        ];
        return json_encode($response);
    } else if (intval($partisipasi) > 100 || intval($tugas) > 100 || intval($uts) > 100 || intval($uas) > 100) {
        $response = [
            "status" => 422,
            "data" => "Nilai tidak boleh lebih dari 100"
        ];
        return json_encode($response);
    }


    $angka = new nilaiAngka();
    $angka->partisipasi = $partisipasi;
    $angka->tugas = $tugas;
    $angka->uts = $uts;
    $angka->uas = $uas;
    $nilai = $angka->hitung();

    $huruf = new nilaiHuruf($nilai);
    $response = [
        "status" => 200,
        "data" => [
            "huruf" => $huruf->konversi(),
            "angka" => $nilai
        ]
    ];
    return json_encode($response);;
}