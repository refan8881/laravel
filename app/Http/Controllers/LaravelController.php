<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelController extends Controller
{
    public function hallo()
    {
        return "hallo dunia";
    }
    public function hallo1()
    {
        return "hallo kiamat";
    }
    public function hallo2()
    {
        return "hallo aherat";
    }
    public function hallo3()
    {
        return "hallo neraka";
    }
    public function hallo4()
    {
        return "hallo surga";
    }
    public function hallo5()
    {
        return "hallo mashar";
    }
    public function hallo6()
    {
        return "hallo barzah";
    }
    public function hallo7()
    {
        return "hallo alailiyin";
    }
    public function hallo8()
    {
        return "hallo izroil";
    }
    public function hallo9()
    {
        return "hallo ridwan";
    }
    public function jeniskucing($warna = "null")
    {
        return "warna kucing kmu : " . $warna;
    }
    public function tuang($cemilan = null)
    {
        if ($cemilan == null) {
            return " anda belum memilih: ";
        } else {
            return "anda  memilih " . $cemilan;
        }
    }
    public function mesen($makan = null, $harga = null)
    {
        if ($makan) {
            echo "Anda  Membeli " . $makan;
        }
        if ($harga >= 15000) {
            echo " Dengan Ukuran Jumbo ";
        }
        if ($harga < 15000 && $harga >= 7500) {
            echo " Dengan Ukuran Medium ";
        }
        if (!$harga < 7500) {
            echo " Dengan Ukuran Small ";
        }
        if (!$makan) {
            echo "silakan memesan terlebih dahulu";
        }
    }
}
