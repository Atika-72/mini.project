<?php
// classes/User.php

abstract class User {
    // Encapsulation: menggunakan protected agar bisa diakses oleh class turunan
    protected $nama;
    protected $id;

    public function __construct($nama, $id) {
        $this->nama = $nama;
        $this->id = $id;
    }

    // Abstract Method: Setiap turunan WAJIB mengimplementasikan method ini
    abstract public function getRole();

    // Getter untuk nama dan ID
    public function getNama() {
        return $this->nama;
    }

    public function getId() {
        return $this->id;
    }
}