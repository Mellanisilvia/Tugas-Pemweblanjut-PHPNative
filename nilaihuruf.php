<?php
class NilaiHuruf
{
    var string $nilaiAkhir;
    //construct function : fungsi yang otomatis dijalankan ketika class ini digunakan / dipanggil
    public function __construct($nilai)
    {
        $this->nilaiAkhir = $nilai;
    }

    public function konversi()
    {

        if ($this->nilaiAkhir >= 85 && $this->nilaiAkhir <= 100) {
            $nilaiHuruf = 'A';
        } elseif ($this->nilaiAkhir >= 80 && $this->nilaiAkhir < 85) {
            $nilaiHuruf = 'A-';
        } elseif ($this->nilaiAkhir >= 75 && $this->nilaiAkhir < 80) {
            $nilaiHuruf = 'B+';
        } elseif ($this->nilaiAkhir >= 70 && $this->nilaiAkhir < 75) {
            $nilaiHuruf = 'B';
        } elseif ($this->nilaiAkhir >= 65 && $this->nilaiAkhir < 70) {
            $nilaiHuruf = 'B-';
        } elseif ($this->nilaiAkhir >= 60 && $this->nilaiAkhir < 65) {
            $nilaiHuruf = 'C+';
        } elseif ($this->nilaiAkhir >= 55 && $this->nilaiAkhir < 60) {
            $nilaiHuruf = 'C';
        } elseif ($this->nilaiAkhir >= 40 && $this->nilaiAkhir < 55) {
            $nilaiHuruf = 'D';
        } else {
            $nilaiHuruf = 'E';
        }

        return $nilaiHuruf;
    }
}