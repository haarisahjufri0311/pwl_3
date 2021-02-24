<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Program extends Controller
{
    public function karir(){
        echo 'Ini adalah halaman program karir';
    }
    public function magang(){
        echo 'Ini adalah halaman program magang';
    }
    public function kunjunganIndustri(){
        echo 'Ini adalah halaman program kunjungan industri';
    }
}
