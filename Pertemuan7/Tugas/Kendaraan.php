<?php 
class Motor{
    // Atribut / Properties pada class
    public $merk;
    public $bensin;
    public $topspeed;
    public $cc;

    //constructor akan dijalankan secara otomatis
    function __construct($merk, $bensin, $topspeed, $cc)
    {
        $this->merk = $merk;
        $this->bensin = $bensin;
        $this->topspeed = $topspeed;
        $this->cc = $cc;
    }

    //Method untuk menampilkan informasi kendaraan
    public function jalan($jarak) {
    {
        $bensin_dibutuhkan = $jarak / 30;
    }

    $this->bensin -= $bensin_dibutuhkan;

    echo "Motor {$this->merk} telah menempuh jarak $jarak km dengan menggunakan $bensin_dibutuhkan liter bensin. Bensin tersisa: $this->bensin liter.";

    }
}

$motor1 = new Motor("Kawasaki Ninja 250", 5, 200, 250);
$motor1->bensin = 10; 
$motor1->jalan(90);