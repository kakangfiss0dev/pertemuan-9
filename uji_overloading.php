<?php
// Eksperimen overloading dinamis (__call): tampil() bisa 0 atau 1 argumen 'lengkap'.
require 'Mahasiswa.php';
$m = new MahasiswaReguler('003', 'Budi', 'TI');
echo $m->tampil() . '<br>';
echo $m->tampil('lengkap') . '<br>';
try {
    echo $m->tampil('x');
} catch (BadMethodCallException $e) {
    echo 'Error: ' . $e->getMessage() . '<br>';
}
