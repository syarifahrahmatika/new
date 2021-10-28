<?php

namespace App\Controllers;

class Siswa extends BaseController
{
    public function index()
    {
        echo 'Halo ini adalah controller siswa';
    }
    public function nama($nama, $usia)
    {
        echo 'Nama Saya adalah ' . $nama . ', usia ' . $usia;
    }
    public function profil()
    {
        echo 'Ini adalah method profil di controller Siswa';
    }   
    
}