<?php

use Illuminate\Database\Seeder;

class Penggajian extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'nama' => 'refana', 'jabatan' => 'Bos',
                'jk' => 'laki-laki', 'alamat' => 'cicahem',
                'agama' => 'islam', 'total_gaji' => '9999999999999999999'
            ],
            [
                'nama' => 'bagas', 'jabatan' => 'Boss',
                'jk' => 'laki-laki', 'alamat' => 'cicahem',
                'agama' => 'islam', 'total_gaji' => '9999999999999999999'
            ],
            [
                'nama' => 'agus', 'jabatan' => 'Boss',
                'jk' => 'laki-laki', 'alamat' => 'cicahem',
                'agama' => 'islam', 'total_gaji' => '9999999999999999999'
            ]



        ];
        DB::table('penggajian')->insert($posts);
    }
}
