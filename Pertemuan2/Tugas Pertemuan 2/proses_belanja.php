<?php
if(isset($_GET['submit'])) {
    $customer = $_GET['customer'];
    $product = $_GET['product'];
    $jumlah = $_GET['jumlah'];
    $submit = $_GET['submit'];
   
    if ($product == "TV") {
        $total = $jumlah * 4200000;
        echo "Nama Customers Adalah : $customer <br>";
        echo "Produk Pilihan : $product <br>"; 
        echo "Jumlah Beli : $jumlah <br>";
        echo "Total Belanja : Rp." . number_format ($total).",-";
    }elseif ($product == "KULKAS") {
        $total = $jumlah * 3100000;
        echo "Nama Customers Adalah : $customer <br>";
        echo "Produk Pilihan : $product <br>"; 
        echo "Jumlah Beli : $jumlah <br>";
        echo "Total Belanja : Rp." . number_format ($total).",-";
    }elseif ($product == "MESIN CUCI") {
        $total = $jumlah * 3800000;
        echo "Nama Customers Adalah : $customer <br>";
        echo "Produk Pilihan : $product <br>"; 
        echo "Jumlah Beli : $jumlah <br>";
        echo "Total Belanja : Rp." . number_format ($total).",-";

} 
 }
