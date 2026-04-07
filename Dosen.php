<?php
// classes/Dosen.php
require_once 'User.php';

class Dosen extends User {
    private $nidn;

    public function __construct($nama, $id, $nidn) {
        parent::__construct($nama, $id);
        $this->nidn = $nidn;
    }

    public function getRole() {
        return "Dosen Pengajar";
    }

    public function getNidn() {
        return $this->nidn;
    }
}