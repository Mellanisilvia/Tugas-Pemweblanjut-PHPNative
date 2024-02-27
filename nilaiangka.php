<?php
class NilaiAngka
{

    var int $partisipasi;
    var int $tugas;
    var int $uts;
    var int $uas;

    public function hitung()
    {
        return ((2 * intval($this->partisipasi)) + (3 * intval($this->tugas)) + (2 * intval($this->uts)) + (3 * intval($this->uas))) / 10;
    }
}