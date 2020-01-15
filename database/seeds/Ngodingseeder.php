<?php

use Illuminate\Database\Seeder;
use App\Ngoding;
use Illuminate\Support\Str;



class Ngodingseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $no = 10;
        for ($i = 0; $i < $no; $i++) {
            $ngoding = new Ngoding();
            $ngoding->judul = 'belajar memjadi top global ke -' . $i;
            $ngoding->slug = Str::slug($ngoding->judul, '-');
            $ngoding->deskripsi = "savage";
            $ngoding->sinopsis = Str::limit($ngoding->deskripsi, 50);
            $ngoding->save();
        }
    }
}
