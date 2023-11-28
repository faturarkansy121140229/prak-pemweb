<?php
// Fatur Arkan Syawalva
// 121140229
// Praktikum Pemweb Mg07
// Kelas Dasar (Profession)
class Profession
{
    protected $name; // Properti untuk menyimpan nama profesi

    // Konstruktor untuk menginisialisasi nama profesi
    public function __construct($name)
    {
        $this->name = $name;
        echo "Creating a {$this->name}...\n";
    }

    // Metode untuk memperkenalkan diri
    public function introduce()
    {
        echo "I am a {$this->name}.\n";
    }
}

// Kelas Turunan (Doctor) yang mewarisi dari Kelas Dasar (Profession)
class Doctor extends Profession
{
    private $specialization; // Properti tambahan untuk menyimpan spesialisasi

    // Konstruktor untuk menginisialisasi spesialisasi dan memanggil konstruktor kelas dasar
    public function __construct($specialization)
    {
        parent::__construct("Doctor"); // Memanggil konstruktor kelas dasar dengan nama "Doctor"
        $this->specialization = $specialization;
    }

    // Override metode introduce untuk menambahkan informasi spesialisasi
    public function introduce()
    {
        parent::introduce(); // Memanggil metode introduce dari kelas dasar
        echo "My specialization is {$this->specialization}.\n";
    }
}

// Kelas Turunan (Engineer) yang mewarisi dari Kelas Dasar (Profession)
class Engineer extends Profession
{
    private $engineeringField; // Properti tambahan untuk menyimpan bidang rekayasa

    // Konstruktor untuk menginisialisasi bidang rekayasa dan memanggil konstruktor kelas dasar
    public function __construct($engineeringField)
    {
        parent::__construct("Engineer"); // Memanggil konstruktor kelas dasar dengan nama "Engineer"
        $this->engineeringField = $engineeringField;
    }

    // Override metode introduce untuk menambahkan informasi bidang rekayasa
    public function introduce()
    {
        parent::introduce(); // Memanggil metode introduce dari kelas dasar
        echo "I work in the field of {$this->engineeringField}.\n";
    }
}

// Contoh penggunaan

// Membuat objek Doctor
$doctor = new Doctor("Cardiology");
$doctor->introduce();

// Membuat objek Engineer
$engineer = new Engineer("Software Development");
$engineer->introduce();
