<?php

// Array Index
$animals = ['Macan', 'Kucing', 'Ular', 'Ayam'];

// Menambahkan data ke Array
array_push($animals, "Kambing");

// Mengakses Array Index
var_dump $animals[2];

// Array Asosiatif
$animal = [
    'nama' => $animals[1],
    'jenis' => 'Karnivora',
    'usia' => "4 bulan"
];

// Mengakses Array Assosiatif
echo $animal['jenis'];