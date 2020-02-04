<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass()
    {
        $a = 'Aku Cinta Bandung';
        return view('latihan', compact('a'));
    }

    public function pass1()
    {
        $data = [
            ['nama' => 'ucup', 'kelas' => 'xi rpl2'],
            ['nama' => 'icip', 'kelas' => 'xi rpl1'],
            ['nama' => 'ocop', 'kelas' => 'xi rpl3'],

        ];
        return view('latihan1', ['siswa' => $data]);
    }
    public function pass2()
    {
        $data = [
            [
                'nama' => 'asep', 'Nip' => '12345', 'agama' => 'islam', 'jk' => 'laki-laki',
                'jabatan' => 'manager', 'jam_kerja' => '250'
            ],
            [
                'nama' => 'doyok', 'Nip' => '12345556', 'agama' => 'islam', 'jk' => 'laki-laki',
                'jabatan' => 'sekertaris', 'jam_kerja' => '201'
            ],
            [
                'nama' => 'ucok', 'Nip' => '1112345', 'agama' => 'islam', 'jk' => 'laki-laki',
                'jabatan' => 'staff', 'jam_kerja' => '80'
            ],
        ];
        return view('latsol', ['gaji' => $data]);
    }
}
