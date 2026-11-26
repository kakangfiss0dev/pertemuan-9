<?php
// Latihan slide 09 (Polimorfisme): gabungan kode slide 9-13 + class Ayam (latihan no. 2-3)
class Hewan {
    public function suara(): string {
        return "Suara hewan";
    }
}

class Kucing extends Hewan {
    public function suara(): string {
        return "Meong!";
    }
}

class Anjing extends Hewan {
    public function suara(): string {
        return "Guk guk!";
    }
}

class Ayam extends Hewan {
    public function suara(): string {
        return "Kukuruyuk!";
    }
}

function dengarkan(Hewan $h): void {
    echo $h->suara() . "<br>";
}

// Slide 11: array berisi objek berbeda, foreach tidak berubah saat Ayam ditambahkan
$daftar = [new Kucing(), new Anjing(), new Ayam()];
foreach ($daftar as $hewan) {
    echo $hewan->suara() . "<br>";
}

// Slide 13: parameter bertipe induk
dengarkan(new Kucing());
dengarkan(new Anjing());
dengarkan(new Ayam());
