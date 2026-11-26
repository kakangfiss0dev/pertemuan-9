<?php
// Eksperimen encapsulation: akses property private dari luar class.
require 'Mahasiswa.php';

$m = new Mahasiswa('003', 'Budi', 'TI');          // objek class induk (pemilik property private)
echo $m->nama;                                    // Fatal error: Cannot access private property
